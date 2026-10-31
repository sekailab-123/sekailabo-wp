<?php
/**
 * Privacy-policy route and MW WP Form consent integration.
 *
 * This is deliberately limited to the public contact form (key 170). It does
 * not create, update, or depend on a WordPress page record.
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Return the stable public URL for the privacy policy.
 *
 * @return string
 */
function sekailabo_privacy_policy_url()
{
    return home_url('/privacy-policy/');
}

/**
 * Whether the request path is exactly the policy path below this site's home
 * path. Query strings are intentionally ignored, while similarly named URLs
 * are not accepted.
 *
 * @return bool
 */
function sekailabo_is_privacy_policy_request()
{
    $request_uri = isset($_SERVER['REQUEST_URI']) ? (string) $_SERVER['REQUEST_URI'] : '';
    $request_path = (string) parse_url($request_uri, PHP_URL_PATH);
    $home_path = (string) parse_url(home_url('/'), PHP_URL_PATH);

    $request_path = '/' . trim(rawurldecode($request_path), '/') . '/';
    $home_path = trim(rawurldecode($home_path), '/');
    $expected_path = '/' . ($home_path !== '' ? $home_path . '/' : '') . 'privacy-policy/';

    return $request_path === $expected_path;
}

/**
 * Covers the virtual route and a future, real WordPress privacy-policy page.
 *
 * @return bool
 */
function sekailabo_is_privacy_policy_page()
{
    return sekailabo_is_privacy_policy_request()
        || (function_exists('is_page') && is_page('privacy-policy'));
}

/**
 * Serve the local template only for the unresolved exact policy route. An
 * existing WordPress page always wins, and no rewrite flush is required.
 *
 * @param string $template Current WordPress template.
 * @return string
 */
function sekailabo_privacy_policy_template($template)
{
    if (!sekailabo_is_privacy_policy_request()) {
        return $template;
    }

    global $wp_query;
    if (!$wp_query || empty($wp_query->is_404)) {
        return $template;
    }

    $wp_query->is_404 = false;
    $wp_query->is_page = true;
    $wp_query->is_singular = true;
    status_header(200);

    return get_template_directory() . '/page-privacy-policy.php';
}
add_filter('template_include', 'sekailabo_privacy_policy_template', 99);

/** Prevent WordPress 404 URL guessing from redirecting the exact virtual route. */
function sekailabo_privacy_policy_redirect($redirect)
{
    return sekailabo_is_privacy_policy_request() ? false : $redirect;
}
add_filter('redirect_canonical', 'sekailabo_privacy_policy_redirect');

/**
 * Add an unchecked, plugin-native consent field to MW WP Form key 170.
 * Raw-content filtering is used because MW WP Form applies it for both input
 * and confirmation views before it parses the shortcodes.
 *
 * @param string $content Form post content.
 * @return string
 */
function sekailabo_add_privacy_consent_field($content)
{
    if (strpos($content, 'sekailabo_privacy_consent') !== false) {
        return $content;
    }

    $policy_url = esc_url(sekailabo_privacy_policy_url());
    $agreement = '<div class="sl-privacy-consent">'
        . '<p class="sl-privacy-consent__notice">送信前に<a href="' . $policy_url . '" target="_blank" rel="noopener noreferrer">プライバシーポリシー<span class="sl-new-window">（新しいタブで開きます）</span></a>をご確認のうえ、個人情報の取扱いに同意してください（必須）。</p>'
        . '<p class="sl-privacy-consent__choice">[mwform_checkbox name="sekailabo_privacy_consent" class="sl-privacy-consent__checkbox" children="同意する"]</p>'
        . '</div>';

    // Insert at the verified form-170 button wrapper boundary, not inside a
    // table, paragraph, or shortcode. This works for input and confirm views.
    $button_wrapper = '~<div\b[^>]*\bclass\s*=\s*([\'"])[^\'"]*\bp_inquirement__submit_back\b[^\'"]*\1[^>]*>~i';
    if (preg_match($button_wrapper, $content, $match, PREG_OFFSET_CAPTURE)) {
        $offset = $match[0][1];
        return substr($content, 0, $offset) . $agreement . "\n" . substr($content, $offset);
    }

    // If the administrator changes the form layout, keep consent available
    // rather than silently dropping a field that is required server-side.
    return $agreement . "\n" . $content;
}
add_filter('mwform_post_content_raw_mw-wp-form-170', 'sekailabo_add_privacy_consent_field', 10, 1);

/**
 * Require the exact checkbox value server-side for this form only. MW WP Form
 * handles error display and preserves the value when a visitor goes back from
 * confirmation; there is no client-side-only submission gate.
 *
 * @param MW_WP_Form_Validation $validation Validation instance.
 * @return MW_WP_Form_Validation
 */
function sekailabo_validate_privacy_consent($validation)
{
    $field = 'sekailabo_privacy_consent';
    $validation->set_rule($field, 'noempty', array(
        'message' => 'プライバシーポリシーへの同意が必要です。',
    ));
    $validation->set_rule($field, 'in', array(
        'options' => array('同意する'),
        'message' => 'プライバシーポリシーへの同意内容を確認してください。',
    ));

    return $validation;
}
add_filter('mwform_validation_mw-wp-form-170', 'sekailabo_validate_privacy_consent', 10, 1);
