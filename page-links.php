<?php
/*
 * Template Name: リンクツリー
 * Description: 名刺QRコード用リンクツリーページ
 */
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
        background-color: #202020;
        color: #fff;
        font-family:
          "Noto Sans JP", YuGothic, "ヒラギノ角ゴ Pro W3", sans-serif;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        padding: 60px 20px 80px;
      }

      .links-wrapper {
        width: 100%;
        max-width: 480px;
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      /* ロゴエリア */
      .links-header {
        margin-bottom: 40px;
        text-align: center;
      }

      .links-logo {
        width: 160px;
        height: auto;
        display: block;
        margin: 0 auto 16px;
      }

      .links-tagline {
        font-family: "Montserrat", sans-serif;
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 0.25em;
        color: #888;
        text-transform: uppercase;
      }

      /* リンクボタン */
      .links-list {
        list-style: none;
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 14px;
      }

      .links-list li a {
        display: flex;
        align-items: center;
        width: 100%;
        padding: 16px 22px;
        border: 1px solid rgba(255, 255, 255, 0.15);
        border-radius: 8px;
        background-color: rgba(255, 255, 255, 0.04);
        color: #fff;
        text-decoration: none;
        font-family: "Noto Sans JP", sans-serif;
        font-size: 14px;
        font-weight: 500;
        letter-spacing: 0.05em;
        transition:
          background-color 0.2s ease,
          border-color 0.2s ease,
          transform 0.1s ease;
        position: relative;
      }

      .links-list li a:hover,
      .links-list li a:focus {
        background-color: rgba(255, 255, 255, 0.1);
        border-color: rgba(255, 255, 255, 0.4);
        transform: translateY(-1px);
        outline: none;
      }

      .links-list li a:active {
        transform: translateY(0);
      }

      .link-icon {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.08);
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
      .link-icon.icon-recruit {
        color: #ffd700;
      }

      .link-label {
        flex: 1;
        font-size: 14px;
      }

      .link-label-sub {
        display: block;
        font-size: 11px;
        color: #888;
        margin-top: 2px;
        font-family: "Montserrat", sans-serif;
        letter-spacing: 0.08em;
      }

      .link-arrow {
        color: #555;
        font-size: 12px;
        flex-shrink: 0;
      }

      /* フッター */
      .links-footer {
        margin-top: 48px;
        font-family: "Montserrat", sans-serif;
        font-size: 11px;
        color: #444;
        letter-spacing: 0.15em;
        text-align: center;
      }

      /* スマホ最適化 */
      @media (max-width: 480px) {
        body {
          padding: 48px 16px 64px;
        }
        .links-logo {
          width: 140px;
        }
      }
    </style>
  </head>
  <body>
    <div class="links-wrapper">
      <header class="links-header">
        <img
          src="<?php echo get_template_directory_uri(); ?>/img/logo.png"
          alt="SEKAILABO."
          class="links-logo"
        />
        <p class="links-tagline">Web Production &amp; Consulting</p>
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

        <li>
          <a
            href="<?php echo esc_url( home_url('/recruit') ); ?>"
            target="_blank"
            rel="noopener noreferrer"
          >
            <span class="link-icon icon-recruit"
              ><i class="fas fa-briefcase"></i
            ></span>
            <span class="link-label">
              採用情報
              <span class="link-label-sub">Recruit</span>
            </span>
            <i class="fas fa-chevron-right link-arrow"></i>
          </a>
        </li>
      </ul>

      <footer class="links-footer">
        &copy; <?php echo date('Y'); ?> SEKAILABO.
      </footer>
    </div>

    <?php wp_footer(); ?>
  </body>
</html>
