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
                            <img src="<?php echo get_template_directory_uri(); ?>/img/thema/parallax.png" alt="">
                        </div>
                        <div class="iphone-wrapper">
                            <div class="iphone">
                                <div class="iphone__screenshot">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/thema/parallax_sp.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" article-detail">
                        <div class="title">
                            <p class="textm">Parallax <span class="demo_link"><a href="https://themes.shopify.com/themes/pipeline/styles/bright/preview?architecture%5B%5D=os2&surface_detail=pipeline&surface_inter_position=1&surface_intra_position=1&surface_type=search">デモサイトを見る</a>
                                </span></p>
                            <p class="price">$300</p>
                        </div>
                        <p class="category">カテゴリー</p>
                        <ul>
                            <li>・おすすめ10選</li>
                            <li>・衣服とアクセサリー</li>
                            <li>・健康と美容</li>
                            <li>・ビジネス機器と事務用品</li>
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
                                <li>・視差効果を用いたデザイン(視差効果を用いることで立体感や奥行などを演出)</li>
                                <li>・そのようなショップデザインのおかげで、自然とお客様の購入意欲が高まるのがParallaxの魅力</li>
                                <li>・サポート面でも非常に評価が高いので、安心して使用できるテーマ</li>
                                <li>・将来的に越境ECを検討されている方にもおすすめ</li>
                                <li>・特定の期間に多数のトランザクションを処理するストア向けに設計されています</li>
                                <li>・対面販売を行う店舗向けに設計</li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab_content" id="function_content">
                        <div class="tab_content_description">
                            <p>機能</p>
                            <ul class="function-list">
                                <li>・クイック購入</li>
                                <li>・スライド式カート</li>
                                <li>・入荷待ちアラート</li>
                                <li>・製品バッジ</li>
                                <li>・製品レビュー</li>
                                <li>・プロモーションバナー</li>
                                <li>・プロモーションポップアップ</li>
                                <li>・クイックビュー</li>
                                <li>・おすすめ商品</li>
                                <li>・アニメーション</li>
                                <li>・色見本</li>
                                <li>・高解像度画像</li>
                                <li>・画像ギャラリー</li>
                                <li>・画像のロールオーバー</li>
                                <li>・画像ズーム</li>
                                <li>・製品タブ・製品ビデオ</li>
                                <li>・スライドショー</li>
                                <li>・パン粉</li>
                                <li>・コレクションページのナビゲーション</li>
                                <li>・強化された検索</li>
                                <li>・メガメニュー</li>
                                <li>・製品のフィルタリングと並べ替え</li>
                                <li>・スティッキーヘッダー</li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab_content" id="case_study_content">
                        <div class="tab_content_description">
                            <p>事例</p>
                            <ul>
                                <li><a href="https://willycalifornia.com/">https://willycalifornia.com/</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>

</html>