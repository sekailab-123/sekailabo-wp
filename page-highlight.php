<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/thema.css">
    <title>shopify詳細</title>
</head>

<body>
    <div class="wrap">
        <header class="header">
            <h1 class="header-title">shopifyテーマ紹介</h1>
            <div class="back-link">
                <a href="<?php echo home_url(); ?>/thema">Back</a>
            </div>
        </header>
        <section class="single-section">
            <article class="single-entry">
                <div class="entry">
                    <div class="image-list">
                        <div class="single-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/thema/hightlight.png" alt="">
                        </div>
                        <div class="iphone-wrapper">
                            <div class="iphone">
                                <div class="iphone__screenshot">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/thema/hightlight_sp.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="article-detail">
                        <div class="title">
                            <p class="textm">Highlight <span class="demo_link"><a href="https://themes.shopify.com/themes/highlight/styles/modern/preview?architecture%5B%5D=os2&surface_detail=highlight&surface_inter_position=1&surface_intra_position=1&surface_type=search">デモサイトを見る</a>
                                </span></p>
                            <p class="price">$250</p>
                        </div>
                        <p class="category">カテゴリー</p>
                        <ul>
                            <li>・アートとエンターテイメント</li>
                            <li>・衣服とアクセサリー</li>
                            <li>・健康と美容</li>
                        </ul>
                    </div>
                </div>
                <div class="article-content">
                    <input id="feature" type="radio" name="tab_item" checked>
                    <label class="tab_item" for="feature">特徴</label>
                    <input id="function" type="radio" name="tab_item">
                    <label class="tab_item" for="function">機能</label>
                    <input id="case_study" type="radio" name="tab_item">
                    <label class="tab_item" for="case_study">事例</label>
                    <div class="tab_content" id="feature_content">
                        <div class="tab_content_description">
                            <p>特徴</p>
                            <ul>
                                <li>・合わせやすい企画　（アート、エンターテインメント、ファッション、アクセサリー、健康、美容）</li>
                                <li>・非対称レイアウトにより、雑誌ページのような自由な配置になっている</li>
                                <li>・画面スクロールやマウスオーバーに反応するアニメーションと、動画を組み合わせたクリエイティブな表現が可能</li>
                                <li>・商品や注目のコレクションを、スライドショーやアイコン付きのリストで訪問者にアピールできる</li>
                                <li>・デザイン性の高さだけでなく、サイズチャートやストックカウンターなどの機能も充実</li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab_content" id="function_content">
                        <div class="tab_content_description">
                            <p>機能</p>
                            <ul class="function-list">
                                <li>・カートノート</li>
                                <li>・店内ピックアップ</li>
                                <li>・スライド式カート</li>
                                <li>・スティッキーカート</li>
                                <li>・カスタマイズ可能なお問い合わせフォーム</li>
                                <li>・FAQぺージ</li>
                                <li>・製品バッジ</li>
                                <li>・製品レビュー</li>
                                <li>・プロモーションバナー</li>
                                <li>・プロモーションタイル</li>
                                <li>・おすすめ商品</li>
                                <li>・ストックカウンター</li>
                                <li>・トラストバッジ</li>
                                <li>・アニメーション</li>
                                <li>・色見本</li>
                                <li>・高解像度画像</li>
                                <li>・画像ギャラリー</li>
                                <li>・画像のロールオーバー</li>
                                <li>・画像ズーム</li>
                                <li>・ルックブック</li>
                                <li>・製品オプション</li>
                                <li>・製品タブ・製品ビデオ</li>
                                <li>・配送/配送情報</li>
                                <li>・サイズチャート</li>
                                <li>・使用情報</li>
                                <li>・パン粉</li>
                                <li>・強化された検索</li>
                                <li>・製品のフィルタリングと並べ替え</li>
                                <li>・スティッキーヘッダー</li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab_content" id="case_study_content">
                        <div class="tab_content_description">
                            <p>事例</p>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>

</html>