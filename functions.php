<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}


function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => 'サイドバー', //ウィジェットの名前を入力
        'id' => 'sidebar', //ウィジェットに付けるid名を入力
    ) );
}
add_action( 'widgets_init', 'theme_slug_widgets_init' );

/* カスタム投稿タイプを設定 */
function my_custom_post_topics()
{
    register_post_type(
        'topics',
        array(
            'labels'             => array(
                'name'               => 'トピックス',
                'singular_name'      => 'トピックス',
                'all_topics'          => 'トピックス一覧',
                'add_new'            => 'トピックス追加',
                'add_new_item'       => 'トピックスの追加',
                'edit_item'          => 'トピックスの編集',
                'new_item'           => 'トピックス追加',
                'view_item'          => 'トピックスを表示',
                'search_topics'       => 'トピックスを検索',
                'not_found'          => 'トピックスが見つかりません',
                'not_found_in_trash' => 'ゴミ箱内にトピックスが見つかりませんでした。',
                'parent_item_colon'  => ''
            ),
            'public'             => true,
            'has_archive'        => true,
            'show_ui'            => true, // 2/6追加!
            'show_in_rest'       => true,
            'publicly_queryable' => true, // 2/6追加!
            //'query_var'          => true,
            //'hierarchical'       => false,

            'supports'           => array('title', 'editor', 'author', 'thumbnail', 'revisions', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'page-attributes'),
            'menu_position'      => 6, // 2/6  5→6
            'rewrite'            => array(
                'with_front'       => false,
            ),

        )
    );

    /* タクソノミー カテゴリ追加 */
    register_taxonomy(
        'topics_cat',
        'topics',
        array(
            'labels'       => array(
                'name'              => 'カテゴリ',
                'singular_name'     => 'カテゴリ',
                'search_topics'     => 'カテゴリを検索',
                'all_topics'        => 'すべてのカテゴリ',
                'parent_item'       => '親分類',
                'parent_item_colon' => '親分類：',
                'edit_item'         => '編集',
                'update_item'       => '更新',
                'add_new_item'      => 'カテゴリを追加',
                'new_item_name'     => '名前',
            ),
            'show_in_rest'          => true, // 2/6追加!!
            'show_ui'               => true,
            'show_in_nav_menus'     => true, // 2/6追加!!
            'show_admin_column'     => true, // 2/6追加!!
            'query_var'             => true,
            'public'                => true, // 2/6追加!!
            'hierarchical'          => true, //階層化したURLを使用可能にする
            'rewrite'               => array(
                'with_front'          => false, //通常投稿のパーマリンク構造を引き継ぐかどうか (true/false)
            )
        )
    );
}
add_action('init', 'my_custom_post_topics');

/*-----------------------------------------------------	
カスタム投稿のパーマリンク設定
-----------------------------------------------------*/

// リライトルールを追加
function custom_rewrite_rule()
{
    // ニュースのタクソノミー追加
    add_rewrite_rule('topics/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$', 'index.php?topics_cat=$matches[1]&feed=$matches[2]', 'top');
    add_rewrite_rule('topics/(.+?)/(feed|rdf|rss|rss2|atom)/?$', 'index.php?topics_cat=$matches[1]&feed=$matches[2]', 'top');
    // 年別
    add_rewrite_rule('topics/(.+?)/date/([0-9]{4})/?$', 'index.php?topics_cat=$matches[1]&year=$matches[2]', 'top');
    // 年別（ページング）
    add_rewrite_rule('topics/(.+?)/date/([0-9]{4})/page/?([0-9]{1,})/?$', 'index.php?topics_cat=$matches[1]&year=$matches[2]&paged=$matches[3]', 'top');
    // 月別
    add_rewrite_rule('topics/(.+?)/date/([0-9]{4})/([0-9]{1,2})/?$', 'index.php?topics_cat=$matches[1]&year=$matches[2]&monthnum=$matches[3]', 'top');
    // 月別（ページング）
    add_rewrite_rule('topics/(.+?)/date/([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$', 'index.php?topics_cat=$matches[1]&year=$matches[2]&monthnum=$matches[3]&paged=$matches[4]', 'top');
    // 日別
    add_rewrite_rule('topics/(.+?)/date/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$', 'index.php?topics_cat=$matches[1]&year=$matches[2]&monthnum=$matches[3]&day=$matches[4]', 'top');
    // 日別（ページング）
    add_rewrite_rule('topics/(.+?)/date/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$', 'index.php?topics_cat=$matches[1]&year=$matches[2]&monthnum=$matches[3]&day=$matches[4]&paged=$matches[5]', 'top');
    // 一覧
    add_rewrite_rule('topics/([^/]+)/?$', 'index.php?topics_cat=$matches[1]', 'top');
    // 一覧（ページング）
    add_rewrite_rule('topics/([^/]+)/page/([0-9]+)/?$', 'index.php?topics_cat=$matches[1]&paged=$matches[2]', 'top');
}
add_action('init', 'custom_rewrite_rule');


//アイキャッチ画像
// add_theme_support('post-thumbnails');

// add_image_size('square', 1800, auto, true);


/*-----------------------------------------------------
	タクソノミー未選択時に特定のタームを選択させる
----------------------------------------------------- */

function add_defaultcategory_automatically($post_ID)
{
    global $wpdb;
    //カスタムタクソノミーのタームを取得
    $curTerm = wp_get_object_terms($post_ID, 'topics_cat'); //★カスタムタクソノミー名
    //ターム指定数が未設定の時に特定のタームを指定
    if (0 == count($curTerm)) {
        $defaultTerm = array(9); //★選択させたいタームID
        wp_set_object_terms($post_ID, $defaultTerm, 'topics_cat'); //★カスタムタクソノミー名
    }
}
//カスタム投稿を作成する際に指定
add_action('publish_topics', 'add_defaultcategory_automatically'); //★publish_カスタム投稿タイプ名

/*-----------------------------------------------------
* 文字数制限
* $str 文字　,$int カット文字数,$end 語尾の文字
* @return str
-----------------------------------------------------*/

function na_trim_words($str, $int, $end = '…')
{
    $post_content = strip_tags($str);
    if (mb_strlen($post_content) > $int) {
        $post_content = mb_substr($post_content, 0, $int);
        $post_content = str_replace(array("\r", "\n"), '', $post_content) . $end;
    } else {
        $post_content = str_replace(array("\r", "\n"), '', $post_content);
    }
    return $post_content;
}

?>


<?php
/* カスタム投稿タイプを設定 */
function my_custom_post_shops()
{
    register_post_type(
        'shops',
        array(
            'labels' => array(
                'name' => 'ショップス',
                'singular_name' => 'ショップス',
                'all_shops' => 'ショップス一覧',
                'add_new' => 'ショップス追加',
                'add_new_item' => 'ショップスの追加',
                'edit_item' => 'ショップスの編集',
                'new_item' => 'ショップス追加',
                'view_item' => 'ショップスを表示',
                'search_shops' => 'ショップスを検索',
                'not_found' => 'ショップスが見つかりません',
                'not_found_in_trash' => 'ゴミ箱内にショップスが見つかりませんでした。',
                'parent_item_colon' => ''
            ),
            'public' => true,
            'has_archive' => true,
            'show_ui' => true, // 2/6追加!
            'show_in_rest' => true,
            'publicly_queryable' => true, // 2/6追加!
            //'query_var' => true,
            //'hierarchical' => false,
            'supports' => array('title', 'editor', 'author', 'thumbnail', 'revisions', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'page-attributes'),
            'menu_position' => 6, // 2/6 5→6
            'rewrite' => array(
                'with_front' => false,
            ),

        )
    );

    /* タクソノミー カテゴリ追加 */
    register_taxonomy(
        'shops_cat',
        'shops',
        array(
            'labels' => array(
                'name' => 'カテゴリ',
                'singular_name' => 'カテゴリ',
                'search_shops' => 'カテゴリを検索',
                'all_shops' => 'すべてのカテゴリ',
                'parent_item' => '親分類',
                'parent_item_colon' => '親分類：',
                'edit_item' => '編集',
                'update_item' => '更新',
                'add_new_item' => 'カテゴリを追加',
                'new_item_name' => '名前',
            ),
            'show_in_rest' => true, // 2/6追加!!
            'show_ui' => true,
            'show_in_nav_menus' => true, // 2/6追加!!
            'show_admin_column' => true, // 2/6追加!!
            'query_var' => true,
            'public' => true, // 2/6追加!!
            'hierarchical' => true, //階層化したURLを使用可能にする
            'rewrite' => array(
                'with_front' => false, //通常投稿のパーマリンク構造を引き継ぐかどうか (true/false)
            )
        )
    );
}
add_action('init', 'my_custom_post_shops');


/*-----------------------------------------------------	
カスタム投稿のパーマリンク設定
-----------------------------------------------------*/

// リライトルールを追加
function custom_rewrite_rule2()
{
    // ニュースのタクソノミー追加
    add_rewrite_rule('shops/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$', 'index.php?shops_cat=$matches[1]&feed=$matches[2]', 'top');
    add_rewrite_rule('shops/(.+?)/(feed|rdf|rss|rss2|atom)/?$', 'index.php?shops_cat=$matches[1]&feed=$matches[2]', 'top');
    // 年別
    add_rewrite_rule('shops/(.+?)/date/([0-9]{4})/?$', 'index.php?shops_cat=$matches[1]&year=$matches[2]', 'top');
    // 年別（ページング）
    add_rewrite_rule('shops/(.+?)/date/([0-9]{4})/page/?([0-9]{1,})/?$', 'index.php?shops_cat=$matches[1]&year=$matches[2]&paged=$matches[3]', 'top');
    // 月別
    add_rewrite_rule('shops/(.+?)/date/([0-9]{4})/([0-9]{1,2})/?$', 'index.php?topics_cat=$matches[1]&year=$matches[2]&monthnum=$matches[3]', 'top');
    // 月別（ページング）
    add_rewrite_rule('shops/(.+?)/date/([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$', 'index.php?shops_cat=$matches[1]&year=$matches[2]&monthnum=$matches[3]&paged=$matches[4]', 'top');
    // 日別
    add_rewrite_rule('shops/(.+?)/date/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$', 'index.php?shops_cat=$matches[1]&year=$matches[2]&monthnum=$matches[3]&day=$matches[4]', 'top');
    // 日別（ページング）
    add_rewrite_rule('shops/(.+?)/date/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$', 'index.php?shops_cat=$matches[1]&year=$matches[2]&monthnum=$matches[3]&day=$matches[4]&paged=$matches[5]', 'top');
    // 一覧
    add_rewrite_rule('shops/([^/]+)/?$', 'index.php?shops_cat=$matches[1]', 'top');
    // 一覧（ページング）
    add_rewrite_rule('shops/([^/]+)/page/([0-9]+)/?$', 'index.php?topics_cat=$matches[1]&paged=$matches[2]', 'top');
}
add_action('init', 'custom_rewrite_rule2');


/*-----------------------------------------------------
	タクソノミー未選択時に特定のタームを選択させる
----------------------------------------------------- */

function add_defaultcategory_automatically2($post_ID)
{
    global $wpdb;
    //カスタムタクソノミーのタームを取得
    $curTerm = wp_get_object_terms($post_ID, 'shops_cat'); //★カスタムタクソノミー名
    //ターム指定数が未設定の時に特定のタームを指定
    if (0 == count($curTerm)) {
        $defaultTerm = array(9); //★選択させたいタームID
        wp_set_object_terms($post_ID, $defaultTerm, 'shops_cat'); //★カスタムタクソノミー名
    }
}
//カスタム投稿を作成する際に指定
add_action('publish_shops', 'add_defaultcategory_automatically2'); //★publish_カスタム投稿タイプ名



//アイキャッチ画像
add_theme_support('post-thumbnails');

/**
 * Send the Toraji Kyushu new-store hearing sheet to the WordPress site administrator.
 * The destination is configured in WordPress: Settings > General > Administration Email Address.
 */
function sekailabo_handle_toraji_kyushu_hearing_submit()
{
    $redirect_url = wp_get_referer() ?: home_url('/');
    $redirect_url = remove_query_arg(array('toraji_sent', 'toraji_error'), $redirect_url);

    if (
        !isset($_POST['toraji_hearing_nonce'])
        || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['toraji_hearing_nonce'])), 'toraji_kyushu_hearing_submit')
        || !empty($_POST['website'])
    ) {
        wp_safe_redirect(add_query_arg('toraji_error', '1', $redirect_url) . '#toraji-hearing');
        exit;
    }

    $labels = array(
        'fact_opening' => '九州新店舗オープン予定',
        'fact_target' => 'サイトの主対象',
        'fact_release' => '10月公開意向',
        'fact_notes' => '相違点・補足',
        'store_location' => '店舗名・所在地（エリア）',
        'opening_date' => 'オープン予定日',
        'opening_confidence' => 'オープン予定日の確度',
        'opening_background' => '出店の背景',
        'site_deadline' => 'サイト公開希望日',
        'scope' => 'サイトの対象範囲',
        'site_relationship' => '既存店・公式リクルートサイトとの関係',
        'regional_difference' => '既存店舗と打ち出しを変えたい点',
        'positions' => '募集職種・予定人数',
        'priority_position' => '優先採用ポジション',
        'fulltime_needed' => '正社員・店長候補などの募集',
        'fulltime_details' => '正社員・店長候補などの人数・時期',
        'personas' => '採用したい人物像',
        'persona_notes' => '人物像の補足',
        'benefits' => '共通で出せる待遇・条件',
        'salary_range' => '給与水準の目安',
        'tenjin_assets' => '天神店の資産で活かせる点',
        'brand_message' => '新店舗で伝えたいトラジらしさ',
        'competitive_difference' => '競合と比べた違い',
        'photo_plan' => '撮影・写真利用の予定',
        'application_channel' => '応募窓口',
        'decisions' => '打ち合わせ終了時の決定事項',
    );

    $fields = array();
    foreach ($labels as $key => $label) {
        if (!isset($_POST[$key]) || $_POST[$key] === '') {
            continue;
        }

        $value = wp_unslash($_POST[$key]);
        if (is_array($value)) {
            if ($key === 'decisions') {
                $decision_labels = array(
                    'サイトのスコープ（A/B/C）',
                    'サイト制作の納期（公開希望日）',
                    'その納期の位置づけ（ティザー／先行エントリー／本番）',
                    '募集職種・人数・優先ポジション',
                    'オープンまでの逆算スケジュール（募集→採用→研修→OPEN）',
                    '撮影・素材の準備（天神店の代用可否含む）',
                    '予算・決裁ルート・次回打ち合わせ',
                );
                $rows = array();
                foreach ($value as $index => $decision) {
                    $content = isset($decision['content']) ? sanitize_text_field($decision['content']) : '';
                    $owner = isset($decision['owner']) ? sanitize_text_field($decision['owner']) : '';
                    $due = isset($decision['due']) ? sanitize_text_field($decision['due']) : '';
                    if ($content !== '' || $owner !== '' || $due !== '') {
                        $rows[] = ($decision_labels[$index] ?? '決定事項') . "\n決定内容: {$content}\n担当: {$owner}\n期限: {$due}";
                    }
                }
                $clean_value = implode("\n\n", $rows);
            } else {
                $clean_value = implode('、', array_map('sanitize_text_field', $value));
            }
        } else {
            $clean_value = sanitize_textarea_field($value);
        }

        if ($clean_value !== '') {
            $fields[] = "■ {$label}\n{$clean_value}";
        }
    }

    if (empty($fields)) {
        wp_safe_redirect(add_query_arg('toraji_error', '1', $redirect_url) . '#toraji-hearing');
        exit;
    }

    $subject = '【トラジ 九州新店舗】初回採用ヒアリングシート';
    $message = "トラジ 九州新店舗｜初回採用ヒアリングシートが送信されました。\n\n" . implode("\n\n", $fields);
    $sent = wp_mail(get_option('admin_email'), $subject, $message, array('Content-Type: text/plain; charset=UTF-8'));

    wp_safe_redirect(add_query_arg($sent ? 'toraji_sent' : 'toraji_error', '1', $redirect_url) . '#toraji-hearing');
    exit;
}
add_action('admin_post_toraji_kyushu_hearing_submit', 'sekailabo_handle_toraji_kyushu_hearing_submit');
add_action('admin_post_nopriv_toraji_kyushu_hearing_submit', 'sekailabo_handle_toraji_kyushu_hearing_submit');

/**
 * Keep in-progress hearing sheets in WordPress so the site owner can confirm
 * progress before the respondent presses the final send button.
 */
function sekailabo_register_toraji_hearing_drafts()
{
    register_post_type('toraji_hearing_draft', array(
        'labels' => array(
            'name' => 'トラジヒアリング下書き',
            'singular_name' => 'トラジヒアリング下書き',
            'menu_name' => 'トラジ下書き',
        ),
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'supports' => array('title', 'editor'),
        'capability_type' => 'post',
        'map_meta_cap' => true,
    ));
}
add_action('init', 'sekailabo_register_toraji_hearing_drafts');

function sekailabo_handle_toraji_hearing_autosave()
{
    $nonce = isset($_POST['nonce']) ? sanitize_text_field(wp_unslash($_POST['nonce'])) : '';
    $session_id = isset($_POST['session_id']) ? sanitize_text_field(wp_unslash($_POST['session_id'])) : '';
    $raw_data = isset($_POST['data']) ? wp_unslash($_POST['data']) : '';

    if (!wp_verify_nonce($nonce, 'toraji_hearing_autosave') || !preg_match('/^[a-zA-Z0-9-]{20,80}$/', $session_id)) {
        wp_send_json_error(array('message' => 'Invalid request.'), 400);
    }

    $data = json_decode($raw_data, true);
    if (!is_array($data)) {
        wp_send_json_error(array('message' => 'Invalid data.'), 400);
    }

    $data = map_deep($data, 'sanitize_textarea_field');
    $content = wp_json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    if ($content === false || strlen($content) > 100000) {
        wp_send_json_error(array('message' => 'Data is too large.'), 400);
    }

    $post_id = isset($_POST['draft_id']) ? absint($_POST['draft_id']) : 0;
    $post = $post_id ? get_post($post_id) : null;
    $post_args = array(
        'post_type' => 'toraji_hearing_draft',
        'post_status' => 'draft',
        'post_title' => '自動保存 ' . current_time('Y-m-d H:i:s'),
        'post_content' => $content,
    );

    if ($post && $post->post_type === 'toraji_hearing_draft' && hash_equals((string) get_post_meta($post_id, '_toraji_session_id', true), $session_id)) {
        $post_args['ID'] = $post_id;
        $result = wp_update_post($post_args, true);
    } else {
        $result = wp_insert_post($post_args, true);
        if (!is_wp_error($result)) {
            update_post_meta($result, '_toraji_session_id', $session_id);
        }
    }

    if (is_wp_error($result)) {
        wp_send_json_error(array('message' => 'Could not save draft.'), 500);
    }

    wp_send_json_success(array(
        'draft_id' => (string) $result,
        'saved_at' => current_time('H:i'),
    ));
}
add_action('wp_ajax_toraji_hearing_autosave', 'sekailabo_handle_toraji_hearing_autosave');
add_action('wp_ajax_nopriv_toraji_hearing_autosave', 'sekailabo_handle_toraji_hearing_autosave');

/**
 * Serve the hearing sheet at a stable URL without requiring a WordPress page
 * to be created in the production database.
 */
function sekailabo_toraji_kyushu_hearing_template($template)
{
    $request_path = trim((string) parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH), '/');

    if ($request_path !== 'toraji-kyushu-hearing') {
        return $template;
    }

    global $wp_query;
    if ($wp_query) {
        $wp_query->is_404 = false;
    }
    status_header(200);

    return get_template_directory() . '/page-toraji-kyushu-hearing.php';
}
add_filter('template_include', 'sekailabo_toraji_kyushu_hearing_template');
?>