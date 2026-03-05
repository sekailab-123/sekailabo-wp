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
                            <img src="<?php echo get_template_directory_uri(); ?>/img/thema/pacific.png" alt="">
                        </div>
                        <div class="iphone-wrapper">
                            <div class="iphone">
                                <div class="iphone__screenshot">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/thema/pacific_sp.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="article-detail">
                        <div class="title">
                            <p class="textm">Pacific <span class="demo_link"><a href="
                                    https://themes.shopify.com/themes/pacific/styles/bold/preview?architecture%5B%5D=os2&surface_detail=pacgfic&surface_inter_position=1&surface_intra_position=1&surface_type=search">デモサイトを見る</a>
                                </span></p>
                            <p class="price">$300</p>
                        </div>
                        <p class="category">カテゴリー</p>
                        <ul>
                            <li>・ハードウェアと自転車</li>
                            <li>・健康と美容</li>
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
                                <li>・Shopifyに少ないサイドバー機能が充実している</li>
                                <li>・豊富な商品数を誇るECサイトに対応したテーマ</li>
                                <li>・シンプルで落ち着いたデザイン</li>
                                <li>・商品数がある中からお客様がすぐに購入したい商品を見つけることができる</li>
                                <li>・お客様目線で使いやすいサイト</li>
                                <li>・FAQなども設定できるので、お客様からのメール問い合わせの数が減らせる効果も期待</li>
                                <li>・instagram自体をフィードに表示することも可能</li>
                                <li>・このテーマは4つのスタイルから選択可能</li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab_content" id="function_content">
                        <div class="tab_content_description">
                            <p>機能</p>
                            <ul class="function-list">
                                <li>・カートノート</li>
                                <li>・メニュー内プロモーション</li>
                                <li>・プロモーションバナー</li>
                                <li>・おすすめ商品</li>
                                <li>・高解像度画像</li>
                                <li>・画像ギャラリー</li>
                                <li>・画像のロールオーバー</li>
                                <li>・画像ズーム</li>
                                <li>・製品タブ</li>
                                <li>・スライドショー</li>
                                <li>・パン粉</li>
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
                                <li><a href="https://www.whitneyshelhamer.com/">
                                        https://www.whitneyshelhamer.com/</a></li>
                                <li><a href="https://thelittlewoodenpeg.com/">https://thelittlewoodenpeg.com/</a></li>
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