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
                            <img src="<?php echo get_template_directory_uri(); ?>/img/thema/sunrise.png" alt="">
                        </div>
                        <div class="iphone-wrapper">
                            <div class="iphone">
                                <div class="iphone__screenshot">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/thema/sunrise_sp.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="article-detail">
                        <div class="title">
                            <p class="textm">Sunrise <span class="demo_link"><a href="https://themes.shopify.com/themes/sunrise/styles/spring/preview?architecture%5B%5D=os2&surface_detail=sunrise&surface_inter_position=1&surface_intra_position=1&surface_type=search">デモサイトを見る</a>
                                </span></p>
                            <p class="price">$300</p>
                        </div>
                        <p class="category">カテゴリー</p>
                        <ul>
                            <li>・おすすめ10選</li>
                            <li>・おもちゃやゲーム</li>
                            <li>・スポーツとレクリエーション</li>
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
                                <li>・たくさんの商品を扱うサイトにとってSunriseは最適なShopifyテーマ </li>
                                <li>・訪問者の回遊率や滞在時間を上げることができるので売上増加を期待</li>
                                <li>・取り扱う商品点数が多い方</li>
                                <li>・対面販売を行う店舗向けに設計</li>
                                <li>・ECサイトをキャッチーな印象に仕上げたい方</li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab_content" id="function_content">
                        <div class="tab_content_description">
                            <p>機能</p>
                            <ul class="function-list">
                                <li>・カートノート</li>
                                <li>・店内ピックアップ</li>
                                <li>・プロモーションバナー</li>
                                <li>・おすすめ商品</li>
                                <li>・ストックカウンター</li>
                                <li>・店舗検索機能</li>
                                <li>・画像ズーム</li>
                                <li>・製品タブ・製品ビデオ</li>
                                <li>・スライドショー</li>
                                <li>・トップに戻るボタン</li>
                                <li>・パン粉</li>
                                <li>・強化された検索</li>
                                <li>・製品のフィルタリングと並べ替え</li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab_content" id="case_study_content">
                        <div class="tab_content_description">
                            <p>事例</p>
                            <ul>
                                <li><a href="https://www.letoyvan.co.nz/">
                                        https://www.letoyvan.co.nz/</a></li>
                                <li><a href="https://realsticky.com/">https://realsticky.com/</a></li>
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