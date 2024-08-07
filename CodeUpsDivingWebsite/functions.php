<?php
// functions.phpのコード

// ファビコンの設定
add_action('wp_head', 'add_favicon');
function add_favicon() {
    echo '<link rel="icon" href="#" />';
}

// Googleフォントの設定
add_action('wp_enqueue_scripts', 'add_google_fonts');
function add_google_fonts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&amp;family=Noto+Sans+JP:wght@100..900&amp;display=swap');
    wp_enqueue_style('google-fonts-lato', 'https://fonts.googleapis.com/css2?family=Lato:wght@700&amp;display=swap');
}

// CSSファイルの読み込み
add_action('wp_enqueue_scripts', 'add_custom_css');
function add_custom_css() {
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_style('theme-style', get_theme_file_uri('/assets/css/style.css'));
}

// JavaScriptファイルの読み込み
add_action('wp_enqueue_scripts', 'add_custom_js');
function add_custom_js() {
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), false, true);
    wp_enqueue_script('jquery-inview', get_theme_file_uri('/assets/js/jquery.inview.min.js'), array(), false, true);
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), false, true);
    wp_enqueue_script('custom-script', get_theme_file_uri('/assets/js/script.js'), array(), false, true);
}

//アイキャッチ画像を表示させるための設定
function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );


//archive-campaignとarchive-voice(カスタム投稿)での記事表示件数を決める
function set_custom_post_type_posts_per_page($query) {
    if ($query->is_main_query() && !is_admin()) {
        // 'voice' はカスタム投稿タイプのスラッグ
        if (is_post_type_archive('voice')) {
            $query->set('posts_per_page', 6);
        }
        // 既存の 'campaign' カスタム投稿タイプの設定も保持する
        elseif (is_post_type_archive('campaign')) {
            $query->set('posts_per_page', 4);
        }
    }
}
add_action('pre_get_posts', 'set_custom_post_type_posts_per_page');


//WordPressの投稿の抜粋（excerpt）に表示される「続きを読む」リンクをカスタマイズするた
/*function twpp_change_excerpt_more( $more ) {
	$html = '<a href="' . esc_url( get_permalink() ) . '">[...続きを読む]</a>';
	return $html;
}
add_filter( 'excerpt_more', 'twpp_change_excerpt_more' );

function twpp_change_excerpt_length( $length ) {
    return 100; // 抜粋の文字数を100ワードに設定
}
add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );*/


//管理画面の投稿画面で本文入力部分を非表示にする
function remove_wysiwyg()
{
  remove_post_type_support('voice', 'editor');
  remove_post_type_support('campaign', 'editor');
}
add_action('init', 'remove_wysiwyg');



//固定ページ(page-aboutusの管理画面の本文入力部分を非表示にする)
function hide_editor_for_about_us_page() {
    global $pagenow;

    // 現在の画面が投稿編集画面 ('post.php') の場合
    if ($pagenow === 'post.php') {
        // 現在の投稿IDを取得
        $post_id = isset($_GET['post']) ? $_GET['post'] : (isset($_POST['post_ID']) ? $_POST['post_ID'] : null);
        
        // 投稿IDが存在する場合
        if ($post_id) {
            // 投稿オブジェクトを取得
            $post = get_post($post_id);
            
            // 投稿のスラッグが 'aboutus' または 'pricelist' かを確認
            if ($post->post_name == 'aboutus' || $post->post_name == 'price'|| $post->post_name == 'faq'|| $post->post_name == 'top') {
                // 'page' 投稿タイプから 'editor' サポートを削除
                remove_post_type_support('page', 'editor');
            }
        }
    }
}
// 'admin_init' アクションフックにフックする
add_action('admin_init', 'hide_editor_for_about_us_page');

/**
 * @param string $page_title ページのtitle属性値
 * @param string $menu_title 管理画面のメニューに表示するタイトル
 * @param string $capability メニューを操作できる権限（maange_options とか）
 * @param string $menu_slug オプションページのスラッグ。ユニークな値にすること。
 * @param string|null $icon_url メニューに表示するアイコンの URL
 * @param int $position メニューの位置
 */

/*SCF::add_options_page(
	'ギャラリー画像',
	'ギャラリー画像',
	'manage_options',
	'gallery-option',
	'dashicons-format-gallery',
	11
);*/
SCF::add_options_page(
	'よくある質問',
	'よくある質問',
	'manage_options',
	'faq-option',
	'dashicons-format-status',
	11
);
/*SCF::add_options_page(
	'MVスライダー',
	'MVスライダー',
	'manage_options',
	'mv-option',
	'dashicons-format-gallery',
	11
);*/

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
    return false;
}

 // サンクスページにリダイレクト
function custom_cf7_redirect() {
    ?>
    <script type="text/javascript">
        document.addEventListener('wpcf7mailsent', function(event) {
            // デフォルトの送信完了メッセージを非表示にする
            var form = event.target;
            var responseOutput = form.querySelector('.wpcf7-response-output');
            if (responseOutput) {
                responseOutput.style.display = 'none';
            }
            // サンクスページにリダイレクト
            window.location.href = 'http://codeupsdivingwordpresstheme.local/thanks/';
        }, false);
    </script>
    <?php
}
add_action('wp_footer', 'custom_cf7_redirect');

//footer.phpの中にあるContactセクションのmargin-topの余白を消すためのコード
function add_custom_body_class($classes) {
    if (is_404()) {
        $classes[] = 'is-404';
    }
    return $classes;
}
add_filter('body_class', 'add_custom_body_class');


// 閲覧数をセットする関数
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

// カラムにビュー数を追加
function add_views_column($columns) {
    $columns['post_views'] = 'Views';
    return $columns;
}
add_filter('manage_post_posts_columns', 'add_views_column');

// ビュー数を表示
function show_views_column($column_name, $postID) {
    if ($column_name === 'post_views') {
        $views = get_post_meta($postID, 'post_views_count', true);
        echo $views ? $views : '0';
    }
}
add_action('manage_posts_custom_column', 'show_views_column', 10, 2);

// ビュー数のカラムをソート可能にする
function column_views_sortable($columns) {
    $columns['post_views'] = 'post_views_count';
    return $columns;
}
add_filter('manage_edit-post_sortable_columns', 'column_views_sortable');

// ソートクエリを処理
function sort_views_column($query) {
    if (!is_admin()) {
        return;
    }
    $orderby = $query->get('orderby');
    if ($orderby == 'post_views_count') {
        $query->set('meta_key', 'post_views_count');
        $query->set('orderby', 'meta_value_num');
    }
}
add_action('pre_get_posts', 'sort_views_column');

function custom_archive_title($title) {
    // コロンとそれ以前の部分を取り除く
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_year()) {
        $title = get_the_date(_x('Y', 'yearly archives date format'));
    } elseif (is_month()) {
        $title = get_the_date(_x('F Y', 'monthly archives date format'));
    } elseif (is_day()) {
        $title = get_the_date(_x('F j, Y', 'daily archives date format'));
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    } elseif (is_tax()) {
        $title = single_term_title('', false);
    }
    return $title;
}
add_filter('get_the_archive_title', 'custom_archive_title');

function Change_menulabel() {
    global $menu;
    global $submenu;
    $name = 'ブログ';
    $menu[5][0] = $name;
    $submenu['edit.php'][5][0] = $name.'一覧';
    $submenu['edit.php'][10][0] = '新しい'.$name;
    }
    function Change_objectlabel() {
    global $wp_post_types;
    $name = 'ブログ';
    $labels = &$wp_post_types['post']->labels;
    $labels->name = $name;
    $labels->singular_name = $name;
    $labels->add_new = _x('追加', $name);
    $labels->add_new_item = $name.'の新規追加';
    $labels->edit_item = $name.'の編集';
    $labels->new_item = '新規'.$name;
    $labels->view_item = $name.'を表示';
    $labels->search_items = $name.'を検索';
    $labels->not_found = $name.'が見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
    }
    add_action( 'init', 'Change_objectlabel' );
    add_action( 'admin_menu', 'Change_menulabel' );




    // add_filter( 'show_admin_bar', '__return_false' );

    function custom_cf7_form_tag($tag) {
        if ($tag['name'] != 'campaign-select') {
            return $tag;
        }
    
        $args = array(
            'post_type'      => 'campaign',
            'posts_per_page' => -1,
            'orderby'        => 'date',
            'order'          => 'DESC'
        );
    
        $query = new WP_Query($args);
        $options = array();
    
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                $options[] = array('value' => get_the_title(), 'label' => get_the_title());
            }
            wp_reset_postdata();
        }
    
        // Create dropdown options
        $tag['raw_values'] = array_map(function($option) {
            return $option['value'];
        }, $options);
    
        $tag['values'] = $tag['raw_values'];
        $tag['labels'] = $tag['values'];
    
        return $tag;
    }
    add_filter('wpcf7_form_tag', 'custom_cf7_form_tag', 10, 2);

/*================================================================
    管理画面の投稿一覧にアイキャッチ画像を表示
================================================================ */
// アイキャッチ画像をサポート
function my_theme_setup() {
    add_theme_support('post-thumbnails'); // すべての投稿とページにアイキャッチ画像を追加
    add_post_type_support('post', 'thumbnail'); // 標準投稿タイプにアイキャッチ画像のサポートを追加
  }
  add_action('after_setup_theme', 'my_theme_setup');
  
  // 投稿リストにアイキャッチ画像のカラムを追加
  function add_thumbnail_column($columns) {
    $columns['thumbnail'] = 'Featured Image';
    return $columns;
  }
  add_filter('manage_post_posts_columns', 'add_thumbnail_column');
  

  // アイキャッチ画像をカラムに表示
  function display_thumbnail_column($column, $post_id) {
    if ($column == 'thumbnail') {
        $post_thumbnail_id = get_post_thumbnail_id($post_id);
        if ($post_thumbnail_id) {
            $post_thumbnail_img = wp_get_attachment_image_src($post_thumbnail_id, 'medium');
            echo '<img src="' . esc_url($post_thumbnail_img[0]) . '" width="120" height="110" />';
        } else {
            echo '—';
        }
    }
  }
  add_action('manage_post_posts_custom_column', 'display_thumbnail_column', 10, 2);
  
  // カスタム投稿タイプ 'campaign' にアイキャッチ画像のカラムを追加
  add_filter('manage_campaign_posts_columns', 'add_thumbnail_column');
  add_action('manage_campaign_posts_custom_column', 'display_thumbnail_column', 10, 2);
  
  // カスタム投稿タイプ 'voice' にアイキャッチ画像のカラムを追加
  add_filter('manage_voice_posts_columns', 'add_thumbnail_column');
  add_action('manage_voice_posts_custom_column', 'display_thumbnail_column', 10, 2);


/*================================================================
    ダッシュボードにウィジェットを追加する
================================================================ */
function custom_admin_enqueue(){
    wp_enqueue_style( 'custom_admin_enqueue', get_stylesheet_directory_uri(). '/assets/css/my-widgets.css' );
}
add_action( 'admin_enqueue_scripts', 'custom_admin_enqueue' );

// 投稿と編集ページに移動できるウィジェットを表示する関数
function add_custom_widget() {
    $html = ''; // 変数を初期化
    $html .= '<div class="admin_panel">';
    $html .= '<p>クリックすると投稿と編集ページに移動します</p>';
    $html .= '<div class="widget-icons">';
    $html .= '<a href="edit.php"><div class="widget-icon"><span class="dashicons dashicons-admin-post"></span><p>『ブログ』投稿</p></div></a>';
    $html .= '<a href="edit.php?post_type=campaign"><div class="widget-icon"><span class="dashicons dashicons-clock"></span><p>『キャンペーン』投稿</p></div></a>';
    $html .= '<a href="edit.php?post_type=voice"><div class="widget-icon"><span class="dashicons dashicons-smiley"></span><p>『お客様の声』投稿</p></div></a>';
    $html .= '<a href="post.php?page=faq-option"><div class="widget-icon"><span class="dashicons dashicons-editor-help"></span><p>『よくある質問』編集</p></div></a>';
    $html .= '</div>'; // divタグを閉じる
    $html .= '</div>'; // divタグを閉じる
    echo $html;
  }
  
  // 基本設定リンクを表示するウィジェットを追加する関数
  function add_basic_settings_widget() {
    $html = ''; // 変数を初期化
    $html .= '<div class="admin_panel basic_settings_widget">';
    $html .= '<p>クリックすると設定ページに移動します</p>';
    $html .= '<ul class="widget-links">';
    $html .= '<li><a href="post.php?post=19&action=edit"><div class="widget-icon"><span class="dashicons dashicons-admin-generic"></span><p>【プライバシーポリシー】設定へ</p></div></a></li>';
    $html .= '<li><a href="post.php?post=21&action=edit"><div class="widget-icon"><span class="dashicons dashicons-admin-generic"></span><p>【利用規約】設定へ</p></div></a></li>';
    $html .= '</ul>'; // ulタグを閉じる
    $html .= '</div>'; // divタグを閉じる
    echo $html;
  }
  
//②自作した情報をダッシュボードのウィジェットに登録する関数
function add_my_widget() {
	wp_add_dashboard_widget('custom_widget', '各種投稿', 'add_custom_widget');
    wp_add_dashboard_widget('basic_settings_widget', 'サイト設定', 'add_basic_settings_widget');
}
//③ダッシュボードのウィジェット設定読み込み時に②の処理を呼び出す
add_action('wp_dashboard_setup', 'add_my_widget');

// カスタムスタイルを追加する関数
function custom_dashboard_styles() {
    wp_enqueue_style('custom_dashboard_css', get_template_directory_uri() . '/custom-dashboard.css');
  }

  add_action('admin_enqueue_scripts', 'custom_dashboard_styles');

//ダッシュボードの不要なコンテンツを削除
function remove_dashboard_widget() {
	//ようこそ
	remove_action( 'welcome_panel','wp_welcome_panel' );
	//概要
 	remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
 	//アクティビティ
 	remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );
 	//クイックドラフト
 	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
 	//WordPressイベントとニュース
 	remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
} 
add_action('wp_dashboard_setup', 'remove_dashboard_widget' );