<?php
/*
 * リンクツリーページ本体
 * template-linktree.php から読み込まれます。
 */

$template_dir = get_template_directory();
$template_uri = get_template_directory_uri();
$sekailabo_logo_relative_path = '/img/SEKAILABO.png';
$sekailabo_logo_candidates = array(
  '/img/SEKAILABO.png',
  '/img/sekailabo.png',
  "/img/SEKAILABO'.png",
);
$mogs_logo_relative_path = '/img/mogs.png';
$has_sekailabo_logo = false;

foreach ( $sekailabo_logo_candidates as $sekailabo_logo_candidate ) {
  if ( file_exists( $template_dir . $sekailabo_logo_candidate ) ) {
    $sekailabo_logo_relative_path = $sekailabo_logo_candidate;
    $has_sekailabo_logo = true;
    break;
  }
}

$has_mogs_logo = file_exists( $template_dir . $mogs_logo_relative_path );
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta name="format-detection" content="telephone=no" />
    <meta name="robots" content="noindex, nofollow" />
    <title>SEKAILABO. | LINKS</title>
    <link
      rel="icon"
      type="image/x-icon"
      href="<?php echo get_template_directory_uri(); ?>/img/logo_symbol.png"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Noto+Sans+JP:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      crossorigin="anonymous"
    />
    <?php wp_head(); ?>
    <style>
      *,
      *::before,
      *::after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }

      html,
      body {
        width: 100%;
        min-height: 100%;
      }

      body {
        background:
          radial-gradient(
            circle at top,
            rgba(221, 201, 173, 0.3),
            transparent 34%
          ),
          linear-gradient(180deg, #f7f3ed 0%, #efebe3 48%, #e8e4dc 100%);
        color: #1f1a17;
        font-family:
          "Noto Sans JP", YuGothic, "ヒラギノ角ゴ Pro W3", sans-serif;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        padding: 42px 20px 72px;
      }

      .links-wrapper {
        width: 100%;
        max-width: 520px;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 36px 28px 30px;
        border: 1px solid rgba(72, 56, 41, 0.08);
        border-radius: 32px;
        background: rgba(255, 255, 255, 0.84);
        box-shadow:
          0 24px 60px rgba(82, 62, 41, 0.12),
          inset 0 1px 0 rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(12px);
      }

      /* ロゴエリア */
      .links-header {
        width: 100%;
        margin-bottom: 30px;
        text-align: center;
      }

      .links-brand-stack {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
      }

      .links-brand-card {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
      }

      .links-header-label {
        font-family: "Montserrat", sans-serif;
        font-size: 10px;
        font-weight: 600;
        letter-spacing: 0.28em;
        color: #7a6b5d;
        text-transform: uppercase;
      }

      .links-logo {
        width: 132px;
        height: auto;
        display: block;
        margin: 0 auto;
      }

      .links-logo-fallback {
        min-width: 180px;
        padding: 12px 18px;
        border: 1px solid rgba(72, 56, 41, 0.12);
        border-radius: 999px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-family: "Montserrat", sans-serif;
        font-size: 18px;
        font-weight: 700;
        letter-spacing: 0.12em;
        color: #5d4a3c;
        background: linear-gradient(
          145deg,
          rgba(255, 255, 255, 0.95),
          rgba(239, 235, 227, 0.94)
        );
      }

      .links-sub-logo {
        width: 156px;
        height: auto;
        display: block;
        margin: 0 auto;
      }

      .links-sub-logo-fallback {
        width: 156px;
        height: 156px;
        border: 1px solid rgba(72, 56, 41, 0.14);
        border-radius: 28px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: "Montserrat", sans-serif;
        font-size: 30px;
        font-weight: 700;
        letter-spacing: 0.16em;
        color: #5d4a3c;
        background: linear-gradient(
          150deg,
          rgba(255, 255, 255, 0.98),
          rgba(233, 226, 214, 0.96)
        );
        padding-left: 0.18em;
        box-shadow: 0 14px 28px rgba(88, 67, 43, 0.08);
      }

      .links-tagline {
        font-family: "Montserrat", sans-serif;
        font-size: 10px;
        font-weight: 600;
        letter-spacing: 0.24em;
        color: #7d6f63;
        text-transform: uppercase;
      }

      .links-group-copy {
        font-size: 13px;
        line-height: 1.85;
        color: #6b5c4f;
        letter-spacing: 0.04em;
      }

      .links-title {
        font-family: "Montserrat", sans-serif;
        font-size: 26px;
        font-weight: 700;
        letter-spacing: 0.12em;
        color: #2f251d;
        text-transform: uppercase;
      }

      .links-subtitle {
        max-width: 320px;
        font-size: 13px;
        line-height: 1.85;
        color: #7a6b5d;
      }

      /* リンクボタン */
      .links-list {
        list-style: none;
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 12px;
      }

      .links-list li a {
        display: flex;
        align-items: center;
        width: 100%;
        padding: 16px 18px;
        border: 1px solid rgba(78, 60, 41, 0.1);
        border-radius: 20px;
        background: linear-gradient(
          180deg,
          rgba(255, 255, 255, 0.96),
          rgba(246, 242, 236, 0.92)
        );
        color: #231b15;
        text-decoration: none;
        font-family: "Noto Sans JP", sans-serif;
        font-size: 14px;
        font-weight: 500;
        letter-spacing: 0.03em;
        transition:
          background-color 0.2s ease,
          border-color 0.2s ease,
          transform 0.1s ease,
          box-shadow 0.2s ease;
        position: relative;
        box-shadow: 0 10px 24px rgba(88, 67, 43, 0.06);
      }

      .links-list li a:hover,
      .links-list li a:focus {
        background: linear-gradient(
          180deg,
          rgba(255, 255, 255, 1),
          rgba(246, 239, 229, 0.96)
        );
        border-color: rgba(109, 86, 61, 0.2);
        transform: translateY(-2px);
        box-shadow: 0 16px 32px rgba(88, 67, 43, 0.1);
        outline: none;
      }

      .links-list li a:active {
        transform: translateY(0);
      }

      .link-icon {
        width: 36px;
        height: 36px;
        border-radius: 12px;
        background-color: #f3eee7;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        margin-right: 16px;
        font-size: 15px;
      }

      .link-icon.icon-web {
        color: #b0c4de;
      }
      .link-icon.icon-mogpass {
        color: #f4a261;
      }
      .link-icon.icon-ig {
        color: #c13584;
      }
      .link-icon.icon-tiktok {
        color: #69c9d0;
      }
      .link-icon.icon-contact {
        color: #90ee90;
      }
      .link-label {
        flex: 1;
        font-size: 14px;
      }

      .link-label-sub {
        display: block;
        font-size: 11px;
        color: #8a7d72;
        margin-top: 2px;
        font-family: "Montserrat", sans-serif;
        letter-spacing: 0.08em;
      }

      .link-arrow {
        color: #9c8e82;
        font-size: 12px;
        flex-shrink: 0;
      }

      .links-company {
        width: 100%;
        margin-top: 28px;
        padding-top: 22px;
        border-top: 1px solid rgba(78, 60, 41, 0.1);
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
      }

      .links-company-copy {
        font-family: "Montserrat", sans-serif;
        font-size: 10px;
        font-weight: 600;
        letter-spacing: 0.24em;
        color: #7d6f63;
        text-transform: uppercase;
      }

      .links-company .links-logo {
        width: 96px;
      }

      .links-company .links-logo-fallback {
        min-width: 140px;
        font-size: 14px;
        padding: 10px 14px;
      }

      /* フッター */
      .links-footer {
        margin-top: 18px;
        font-family: "Montserrat", sans-serif;
        font-size: 11px;
        color: #8f8378;
        letter-spacing: 0.15em;
        text-align: center;
      }

      /* スマホ最適化 */
      @media (max-width: 480px) {
        body {
          padding: 24px 14px 42px;
        }
        .links-wrapper {
          padding: 28px 18px 24px;
          border-radius: 26px;
        }
        .links-logo {
          width: 114px;
        }
        .links-logo-fallback {
          min-width: 0;
          width: 100%;
          font-size: 16px;
          padding: 12px 14px;
        }
        .links-sub-logo,
        .links-sub-logo-fallback {
          width: 124px;
          height: 124px;
        }
        .links-sub-logo-fallback {
          font-size: 24px;
        }
        .links-company .links-logo {
          width: 82px;
        }
        .links-title {
          font-size: 22px;
        }
        .links-list li a {
          padding: 15px 16px;
        }
      }
    </style>
  </head>
  <body>
    <div class="links-wrapper">
      <header class="links-header">
        <div class="links-brand-stack">
          <div class="links-brand-card">
            <p class="links-header-label">MOGS LINK HUB</p>
            <?php if ( $has_mogs_logo ) : ?>
            <img
              src="<?php echo esc_url( $template_uri . $mogs_logo_relative_path ); ?>"
              alt="MOGS"
              class="links-sub-logo"
            />
            <?php else : ?>
            <div class="links-sub-logo-fallback">MOGS</div>
            <?php endif; ?>
            <h1 class="links-title">MOGS</h1>
            <p class="links-group-copy">
              Gourmet influencer group<br />
              Instagram &amp; TikTok
            </p>
            <p class="links-subtitle">
              グルメインフルエンサーとして発信している各種リンクをまとめています。
            </p>
          </div>
        </div>
      </header>

      <ul class="links-list">
        <li>
          <a
            href="<?php echo esc_url( home_url('/') ); ?>"
            target="_blank"
            rel="noopener noreferrer"
          >
            <span class="link-icon icon-web"><i class="fas fa-globe"></i></span>
            <span class="link-label">
              SEKAILABO. 公式サイト
              <span class="link-label-sub">sekailabo.com</span>
            </span>
            <i class="fas fa-chevron-right link-arrow"></i>
          </a>
        </li>

        <li>
          <a
            href="https://mogpass.up.railway.app/lp"
            target="_blank"
            rel="noopener noreferrer"
          >
            <span class="link-icon icon-mogpass"
              ><i class="fas fa-star"></i
            ></span>
            <span class="link-label">
              MOGPASS
              <span class="link-label-sub">サービス紹介ページ</span>
            </span>
            <i class="fas fa-chevron-right link-arrow"></i>
          </a>
        </li>

        <li>
          <a
            href="https://www.instagram.com/mogs_gourmet/reels/"
            target="_blank"
            rel="noopener noreferrer"
          >
            <span class="link-icon icon-ig"
              ><i class="fab fa-instagram"></i
            ></span>
            <span class="link-label">
              Instagram
              <span class="link-label-sub">@mogs_gourmet</span>
            </span>
            <i class="fas fa-chevron-right link-arrow"></i>
          </a>
        </li>

        <li>
          <a
            href="https://www.tiktok.com/@mogs_gourmet"
            target="_blank"
            rel="noopener noreferrer"
          >
            <span class="link-icon icon-tiktok"
              ><i class="fab fa-tiktok"></i
            ></span>
            <span class="link-label">
              TikTok
              <span class="link-label-sub">@mogs_gourmet</span>
            </span>
            <i class="fas fa-chevron-right link-arrow"></i>
          </a>
        </li>

        <li>
          <a
            href="<?php echo esc_url( home_url('/contact/') ); ?>"
            target="_blank"
            rel="noopener noreferrer"
          >
            <span class="link-icon icon-contact"
              ><i class="fas fa-envelope"></i
            ></span>
            <span class="link-label">
              お問い合わせ
              <span class="link-label-sub">Contact</span>
            </span>
            <i class="fas fa-chevron-right link-arrow"></i>
          </a>
        </li>
      </ul>

      <section class="links-company">
        <p class="links-company-copy">Produced by SEKAILABO.</p>
        <?php if ( $has_sekailabo_logo ) : ?>
        <img
          src="<?php echo esc_url( $template_uri . $sekailabo_logo_relative_path ); ?>"
          alt="SEKAILABO."
          class="links-logo"
        />
        <?php else : ?>
        <div class="links-logo-fallback">SEKAILABO.</div>
        <?php endif; ?>
        <p class="links-tagline">Web Production &amp; Consulting</p>
      </section>

      <footer class="links-footer">
        &copy; <?php echo esc_html( wp_date( 'Y' ) ); ?> SEKAILABO.
      </footer>
    </div>

    <?php wp_footer(); ?>
  </body>
</html>
