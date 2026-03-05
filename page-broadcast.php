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
                            <img src="<?php echo get_template_directory_uri(); ?>/img/thema/broadcast.png" alt="">
                        </div>
                        <div class="iphone-wrapper">
                            <div class="iphone">
                                <div class="iphone__screenshot">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/thema/broadcast_sp.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="article-detail">
                        <div class="title">
                            <p class="textm">Broadcast <span class="demo_link"><a href="https://themes.shopify.com/themes/broadcast/styles/clean/preview?architecture%5B%5D=os2&surface_detail=broadcast&surface_inter_position=1&surface_intra_position=1&surface_type=search">デモサイトを見る</a>
                                </span></p>
                            <p class="price">$280</p>
                        </div>
                        <p class="category">カテゴリー</p>
                        <ul>
                            <li>・衣服とアクセサリー</li>
                            <li>・健康と美容</li>
                            <li>・アートとエンターテインメント</li>
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
                                <li>・ページトップに動的な広告バナーを掲載したり、ページ途中に小さなバナーを掲載することができる</li>
                                <li>・「5,000円以上購入で送料無料」や「セール開催中」など、複数の重要な情報をユーザーに伝えることが可能</li>
                                <li>・ブログページではサイドメニューに関連記事や人気記事などを掲載することができます。</li>
                                <li>・商品販売だけではなく、ブログ機能を活用するマーチャントにとてもオススメのテーマ</li>
                                <li>・大量店舗（特定の期間に多数のトランザクションを処理するストア向けに設計されています</li>
                                <li>・実店舗（対面販売を行う店舗向けに設計）</li>
                                <li>・クイックセットアップ（テーマの設定手順は最小限で、すばやく起動できます）</li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab_content" id="function_content">
                        <div class="tab_content_description">
                            <p>機能</p>
                            <ul class="function-list">
                                <li>・カートノート</li>
                                <li>・クイック購入</li>
                                <li>・スライド式カート</li>
                                <li>・スティッキーカート</li>
                                <li>・クロスセリング</li>
                                <li>・カスタマイズ可能なお問い合わせフォーム</li>
                                <li>・FAQページ</li>
                                <li>・製品バッジ</li>
                                <li>・製品レビュー</li>
                                <li>・プロモーションバナー</li>
                                <li>・プロモーションポップアップ</li>
                                <li>・最近見た機能</li>
                                <li>・おすすめ商品</li>
                                <li>・アニメーション</li>
                                <li>・色見本</li>
                                <li>・画像ギャラリー</li>
                                <li>・画像ホットスポット</li>
                                <li>・画像ズーム</li>
                                <li>・製品タブ</li>
                                <li>・配送/配送情報</li>
                                <li>・サイズチャート</li>
                                <li>・スライドショー</li>
                                <li>・トップに戻るボタン</li>
                                <li>・パン粉</li>
                                <li>・コレクションページのナビゲーション</li>
                                <li>・メガメニュー</li>
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