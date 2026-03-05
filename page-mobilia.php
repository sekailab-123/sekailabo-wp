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
                            <img src="<?php echo get_template_directory_uri(); ?>/img/thema/mobilia.png" alt="">
                        </div>
                        <div class="iphone-wrapper">
                            <div class="iphone">
                                <div class="iphone__screenshot">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/thema/mobilia_sp.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="article-detail">
                        <div class="title">
                            <p class="textm">Mobilia<span class="demo_link"><a href="https://themes.shopify.com/themes/mobilia/styles/milan/preview?surface_detail=mobilia&surface_inter_position=1&surface_intra_position=1&surface_type=search">デモサイトを見る</a>
                                </span></p>
                            <p class="price">$180</p>
                        </div>
                        <p class="category">カテゴリー</p>
                        <ul>
                            <li>・アートとエンターテイメント</li>
                            <li>・衣服とアクセサリー</li>
                            <li>・健康と美容</li>
                            <li>・食べ物と飲み物</li>
                            <li>・おもちゃやゲーム</li>
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
                                <li>・合わせやすい企画（ファッション、キッズ、食品、コスメ、サプリ、工芸品</li>
                                <li>・テキストよりも商品画像やイメージ画像を前面に打ち出したデザイン</li>
                                <li>・上部のメニューバーから、カテゴリー別のカタログや季節のルックブックへ移動できる</li>
                                <li>・有料テーマの中では低価格帯</li>
                                <li>・セール品や予約販売品といった注目の商品を、優先的に表示させる設定も可能</li>
                                <li>・また、個別の商品ページだけでなく、商品一覧にもレビュー評価を表示可能</li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab_content" id="function_content">
                        <div class="tab_content_description">
                            <p>機能</p>
                            <ul class="function-list">
                                <li>・クイック購入</li>
                                <li>・注目商品のカスタマイズ</li>
                                <li>・最近見た商品</li>
                                <li>・おすすめ商品</li>
                                <li>・関連商品</li>
                                <li>・レビュー機能</li>
                                <li>・ブログページ</li>
                                <li>・ルックブック</li>
                                <li>・ニュースレターの登録</li>
                                <li>・2022Bestshopifyテーマ</li>
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