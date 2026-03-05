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
?>