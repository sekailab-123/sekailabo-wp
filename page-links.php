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
    <title>SEKAILABO' | LINKS</title>
    <link
      rel="icon"
      type="image/x-icon"
      href="<?php echo get_template_directory_uri(); ?>/img/logo_symbol.png"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=Montserrat:wght@400;600;700&family=Noto+Sans+JP:wght@400;500;700&display=swap"
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
        background: #000;
      }
      a {
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <div id="links-root"></div>
    <noscript>
      <div
        style="
          color: white;
          text-align: center;
          padding: 60px 20px;
          font-family: sans-serif;
        "
      >
        JavaScriptを有効にしてご覧ください。
      </div>
    </noscript>

    <!-- ES Module importmap: React 18 + Framer Motion 11 + htm (Babel 不要) -->
    <script type="importmap">
      {
        "imports": {
          "react": "https://esm.sh/react@18.3.1",
          "react/jsx-runtime": "https://esm.sh/react@18.3.1/jsx-runtime",
          "react-dom/client": "https://esm.sh/react-dom@18.3.1/client",
          "framer-motion": "https://esm.sh/framer-motion@11.3.31",
          "htm": "https://esm.sh/htm@3.1.1"
        }
      }
    </script>

    <!-- PHP データ橋渡し -->
    <script>
      window.LINKS_DATA = {
        templateUri:       "<?php echo esc_js( $template_uri ); ?>",
        hasMogsLogo:       <?php echo $has_mogs_logo ? 'true' : 'false'; ?>,
        mogsLogoPath:      "<?php echo esc_js( $mogs_logo_relative_path ); ?>",
        hasSekailaboLogo:  <?php echo $has_sekailabo_logo ? 'true' : 'false'; ?>,
        sekailaboLogoPath: "<?php echo esc_js( $sekailabo_logo_relative_path ); ?>",
        homeUrl:           "<?php echo esc_js( home_url( '/' ) ); ?>",
        contactUrl:        "<?php echo esc_js( home_url( '/contact/' ) ); ?>",
        year:              "<?php echo esc_js( wp_date( 'Y' ) ); ?>"
      };
    </script>

    <script type="module">
      import React from "react";
      import { createRoot } from "react-dom/client";
      import { motion } from "framer-motion";
      import htm from "htm";

      /* htm を React.createElement にバインド（Babel 不要、JSX ライクな記法） */
      const html = htm.bind(React.createElement);

      /* PHP から受け取ったデータ */
      const D = window.LINKS_DATA;

      /* ─── アニメーション定義 ─────────────────────────── */
      /* Hero: ぼかし＋フェードアップで浮かび上がる */
      const fadeUp = (delay = 0) => ({
        initial: { opacity: 0, y: 28, filter: "blur(10px)" },
        animate: { opacity: 1, y: 0, filter: "blur(0px)" },
        transition: { duration: 0.8, delay, ease: [0.22, 1, 0.36, 1] },
      });

      /* ─── リンク定義（元コンテンツを完全維持） ─────────── */
      const LINKS = [
        {
          href: D.homeUrl,
          icon: "fas fa-globe",
          color: "#7ec8e3",
          label: "SEKAILABO\u2019 \u516C\u5F0F\u30B5\u30A4\u30C8",
          sub: "sekailabo.com",
          cta: false,
        },
        {
          href: "https://mogpass.up.railway.app/lp",
          icon: "fas fa-star",
          color: "#f4a261",
          label: "MOGPASS",
          sub: "\u30B5\u30FC\u30D3\u30B9\u7D39\u4ECB\u30DA\u30FC\u30B8",
          cta: true,
        },
        {
          href: "https://www.instagram.com/mogs_gourmet/reels/",
          icon: "fab fa-instagram",
          color: "#e1306c",
          label: "Instagram",
          sub: "@mogs_gourmet",
          cta: false,
        },
        {
          href: "https://www.tiktok.com/@mogs_gourmet",
          icon: "fab fa-tiktok",
          color: "#69c9d0",
          label: "TikTok",
          sub: "@mogs_gourmet",
          cta: false,
        },
        {
          href: D.contactUrl,
          icon: "fas fa-envelope",
          color: "#90ee90",
          label: "\u304A\u554F\u3044\u5408\u308F\u305B",
          sub: "Contact",
          cta: false,
        },
      ];

      /* ─── MOGS ロゴ ───────────────────────────────────── */
      function MogsLogo() {
        if (D.hasMogsLogo) {
          return html`
            <img
              src=${D.templateUri + D.mogsLogoPath}
              alt="MOGS"
              style=${{
                width: "128px",
                height: "auto",
                display: "block",
                margin: "0 auto",
              }}
            />
          `;
        }
        /* 画像なしのフォールバック: ガラスカード */
        return html`
          <div
            style=${{
              width: "120px",
              height: "120px",
              margin: "0 auto",
              borderRadius: "24px",
              display: "flex",
              alignItems: "center",
              justifyContent: "center",
              fontFamily: '"Playfair Display", Georgia, serif',
              fontSize: "26px",
              fontWeight: "700",
              letterSpacing: "0.12em",
              color: "rgba(255,255,255,0.92)",
              background: "rgba(255,255,255,0.07)",
              border: "1px solid rgba(255,255,255,0.15)",
              backdropFilter: "blur(16px)",
              WebkitBackdropFilter: "blur(16px)",
            }}
          >
            MOGS
          </div>
        `;
      }

      /* ─── SEKAILABO ロゴ ───────────────────────────────── */
      function SekailaboLogo() {
        if (D.hasSekailaboLogo) {
          return html`
            <img
              src=${D.templateUri + D.sekailaboLogoPath}
              alt="SEKAILABO'"
              style=${{ width: "80px", height: "auto", opacity: 0.65 }}
            />
          `;
        }
        return html`
          <span
            style=${{
              fontFamily: '"Montserrat", sans-serif',
              fontSize: "13px",
              fontWeight: "700",
              letterSpacing: "0.15em",
              color: "rgba(255,255,255,0.50)",
            }}
            >SEKAILABO'</span
          >
        `;
      }

      /* ─── リンクカード ───────────────────────────────────
       *  cta: true  → 光沢感のある丸いボタン（MOGPASS）
       *  cta: false → ガラスモフィズムカード（その他リンク）
       * ─────────────────────────────────────────────────── */
      function LinkCard({ link, delay }) {
        const { initial, animate, transition } = fadeUp(delay);

        if (link.cta) {
          /* ── CTA: glossy pill ───────────────────────── */
          return html`
            <${motion.a}
              href=${link.href}
              target="_blank"
              rel="noopener noreferrer"
              initial=${initial}
              animate=${animate}
              transition=${transition}
              whileHover=${{ scale: 1.04, y: -4 }}
              whileTap=${{ scale: 0.97 }}
              style=${{
                display: "flex",
                alignItems: "center",
                width: "100%",
                padding: "17px 22px",
                borderRadius: "999px",
                background:
                  "linear-gradient(135deg, rgba(255,255,255,0.22) 0%, rgba(255,255,255,0.06) 100%)",
                border: "1px solid rgba(255,255,255,0.34)",
                backdropFilter: "blur(24px)",
                WebkitBackdropFilter: "blur(24px)",
                boxShadow:
                  "0 0 40px rgba(255,210,130,0.06), inset 0 1px 0 rgba(255,255,255,0.24)",
                color: "white",
                textDecoration: "none",
                cursor: "pointer",
              }}
            >
              <span
                style=${{
                  width: "38px",
                  height: "38px",
                  borderRadius: "50%",
                  flexShrink: 0,
                  background: "rgba(255,255,255,0.18)",
                  marginRight: "16px",
                  display: "flex",
                  alignItems: "center",
                  justifyContent: "center",
                  color: link.color,
                  fontSize: "15px",
                }}
              >
                <i className=${link.icon}></i>
              </span>
              <span style=${{ flex: 1 }}>
                <span
                  style=${{
                    display: "block",
                    fontSize: "14px",
                    fontWeight: "600",
                    fontFamily: '"Montserrat", sans-serif',
                    letterSpacing: "0.07em",
                    color: "white",
                  }}
                  >${link.label}</span
                >
                <span
                  style=${{
                    display: "block",
                    fontSize: "11px",
                    marginTop: "3px",
                    fontFamily: '"Montserrat", sans-serif',
                    letterSpacing: "0.10em",
                    color: "rgba(255,255,255,0.55)",
                  }}
                  >${link.sub}</span
                >
              </span>
              <i
                className="fas fa-chevron-right"
                style=${{ color: "rgba(255,255,255,0.60)", fontSize: "11px" }}
              ></i>
            <//>
          `;
        }

        /* ── 標準ガラスカード ────────────────────────────── */
        return html`
          <${motion.a}
            href=${link.href}
            target="_blank"
            rel="noopener noreferrer"
            initial=${initial}
            animate=${animate}
            transition=${transition}
            whileHover=${{ y: -3, background: "rgba(255,255,255,0.09)" }}
            whileTap=${{ scale: 0.98 }}
            style=${{
              display: "flex",
              alignItems: "center",
              width: "100%",
              padding: "16px 20px",
              borderRadius: "20px",
              background: "rgba(255,255,255,0.05)",
              border: "1px solid rgba(255,255,255,0.10)",
              backdropFilter: "blur(16px)",
              WebkitBackdropFilter: "blur(16px)",
              color: "white",
              textDecoration: "none",
            }}
          >
            <span
              style=${{
                width: "38px",
                height: "38px",
                borderRadius: "12px",
                flexShrink: 0,
                background: "rgba(255,255,255,0.08)",
                marginRight: "16px",
                display: "flex",
                alignItems: "center",
                justifyContent: "center",
                color: link.color,
                fontSize: "15px",
              }}
            >
              <i className=${link.icon}></i>
            </span>
            <span style=${{ flex: 1 }}>
              <span
                style=${{
                  display: "block",
                  fontSize: "14px",
                  fontWeight: "500",
                  fontFamily: '"Noto Sans JP", sans-serif',
                  letterSpacing: "0.04em",
                  color: "white",
                }}
                >${link.label}</span
              >
              <span
                style=${{
                  display: "block",
                  fontSize: "11px",
                  marginTop: "3px",
                  fontFamily: '"Montserrat", sans-serif',
                  letterSpacing: "0.10em",
                  color: "rgba(255,255,255,0.42)",
                }}
                >${link.sub}</span
              >
            </span>
            <i
              className="fas fa-chevron-right"
              style=${{ color: "rgba(255,255,255,0.30)", fontSize: "11px" }}
            ></i>
          <//>
        `;
      }

      /* ─── App ルート ─────────────────────────────────── */
      function App() {
        return html`
          <div
            style=${{
              minHeight: "100vh",
              background: "#000",
              display: "flex",
              flexDirection: "column",
              alignItems: "center",
              justifyContent: "flex-start",
              padding: "60px 20px 80px",
              position: "relative",
              overflow: "hidden",
            }}
          >
            <!-- 背景グラデーションオーブ -->
            <div
              aria-hidden=${true}
              style=${{
                position: "fixed",
                inset: 0,
                pointerEvents: "none",
                overflow: "hidden",
              }}
            >
              <div
                style=${{
                  position: "absolute",
                  top: "-180px",
                  left: "50%",
                  transform: "translateX(-50%)",
                  width: "560px",
                  height: "560px",
                  borderRadius: "50%",
                  background:
                    "radial-gradient(circle, rgba(70,32,110,0.30) 0%, transparent 68%)",
                }}
              ></div>
              <div
                style=${{
                  position: "absolute",
                  bottom: "-100px",
                  right: "-70px",
                  width: "440px",
                  height: "440px",
                  borderRadius: "50%",
                  background:
                    "radial-gradient(circle, rgba(110,24,52,0.22) 0%, transparent 68%)",
                }}
              ></div>
              <div
                style=${{
                  position: "absolute",
                  top: "45%",
                  left: "-100px",
                  width: "300px",
                  height: "300px",
                  borderRadius: "50%",
                  background:
                    "radial-gradient(circle, rgba(24,42,96,0.16) 0%, transparent 68%)",
                }}
              ></div>
            </div>

            <!-- メインガラスカード -->
            <div
              style=${{
                position: "relative",
                zIndex: 1,
                width: "100%",
                maxWidth: "440px",
                borderRadius: "40px",
                padding: "44px 32px 40px",
                background: "rgba(255,255,255,0.03)",
                border: "1px solid rgba(255,255,255,0.08)",
                backdropFilter: "blur(32px)",
                WebkitBackdropFilter: "blur(32px)",
                boxShadow:
                  "0 40px 100px rgba(0,0,0,0.80), inset 0 1px 0 rgba(255,255,255,0.07)",
              }}
            >
              <!-- Hero: ぼかしから浮かび上がるアニメーション -->
              <${motion.header}
                style=${{ textAlign: "center", marginBottom: "32px" }}
                initial=${{ opacity: 0, y: 36, filter: "blur(14px)" }}
                animate=${{ opacity: 1, y: 0, filter: "blur(0px)" }}
                transition=${{ duration: 0.9, ease: [0.22, 1, 0.36, 1] }}
              >
                <p
                  style=${{
                    fontFamily: '"Montserrat", sans-serif',
                    fontSize: "10px",
                    fontWeight: "600",
                    letterSpacing: "0.34em",
                    textTransform: "uppercase",
                    color: "rgba(255,255,255,0.34)",
                    marginBottom: "22px",
                  }}
                >
                  MOGS LINK HUB
                </p>

                <div style=${{ marginBottom: "22px" }}>
                  <${MogsLogo} />
                </div>

                <!-- Playfair Display セリフ体見出し -->
                <h1
                  style=${{
                    fontFamily: '"Playfair Display", Georgia, serif',
                    fontSize: "42px",
                    fontWeight: "700",
                    letterSpacing: "0.16em",
                    textTransform: "uppercase",
                    color: "white",
                    marginBottom: "14px",
                    lineHeight: 1.05,
                  }}
                >
                  MOGS
                </h1>

                <p
                  style=${{
                    fontFamily: '"Noto Sans JP", sans-serif',
                    fontSize: "13px",
                    lineHeight: "1.90",
                    color: "rgba(255,255,255,0.46)",
                    marginBottom: "6px",
                  }}
                >
                  Gourmet influencer group<br />
                  Instagram & TikTok
                </p>

                <p
                  style=${{
                    fontFamily: '"Noto Sans JP", sans-serif',
                    fontSize: "12px",
                    letterSpacing: "0.04em",
                    color: "rgba(255,255,255,0.30)",
                  }}
                >
                  各種リンクをまとめています。
                </p>
              <//>

              <!-- 区切り線 -->
              <div
                style=${{
                  height: "1px",
                  background: "rgba(255,255,255,0.07)",
                  margin: "0 0 24px",
                }}
              ></div>

              <!-- リンクリスト（stagger アニメーション） -->
              <nav>
                <ul
                  style=${{
                    listStyle: "none",
                    padding: 0,
                    margin: 0,
                    display: "flex",
                    flexDirection: "column",
                    gap: "12px",
                  }}
                >
                  ${LINKS.map(
                    (link, i) => html`
                      <li key=${i}>
                        <${LinkCard} link=${link} delay=${0.12 + i * 0.09} />
                      </li>
                    `,
                  )}
                </ul>
              </nav>

              <!-- Produced by SEKAILABO' セクション -->
              <${motion.section}
                style=${{
                  marginTop: "32px",
                  paddingTop: "26px",
                  borderTop: "1px solid rgba(255,255,255,0.07)",
                  display: "flex",
                  flexDirection: "column",
                  alignItems: "center",
                  gap: "10px",
                }}
                initial=${{ opacity: 0 }}
                animate=${{ opacity: 1 }}
                transition=${{ duration: 0.8, delay: 0.95 }}
              >
                <p
                  style=${{
                    fontFamily: '"Montserrat", sans-serif',
                    fontSize: "9px",
                    fontWeight: "600",
                    letterSpacing: "0.30em",
                    textTransform: "uppercase",
                    color: "rgba(255,255,255,0.26)",
                  }}
                >
                  Produced by SEKAILABO'
                </p>

                <${SekailaboLogo} />

                <p
                  style=${{
                    fontFamily: '"Montserrat", sans-serif',
                    fontSize: "9px",
                    letterSpacing: "0.20em",
                    textTransform: "uppercase",
                    color: "rgba(255,255,255,0.20)",
                  }}
                >
                  Web Production & Consulting
                </p>
              <//>

              <!-- コピーライト -->
              <${motion.footer}
                style=${{ marginTop: "20px", textAlign: "center" }}
                initial=${{ opacity: 0 }}
                animate=${{ opacity: 1 }}
                transition=${{ duration: 0.8, delay: 1.15 }}
              >
                <p
                  style=${{
                    fontFamily: '"Montserrat", sans-serif',
                    fontSize: "11px",
                    letterSpacing: "0.16em",
                    color: "rgba(255,255,255,0.16)",
                  }}
                >
                  © ${D.year} SEKAILABO'
                </p>
              <//>
            </div>
          </div>
        `;
      }

      /* React マウント */
      createRoot(document.getElementById("links-root")).render(
        html`<${App} />`,
      );
    </script>

    <?php wp_footer(); ?>
  </body>
</html>
