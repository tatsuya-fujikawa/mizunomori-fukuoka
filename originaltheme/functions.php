<?php
/**
 * <title>タグを出力する
 */
add_theme_support( 'title-tag' );


/**
 * タイトルタグの区切り文字をエン・ダッシュから縦線に変更する
 */
add_filter('document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator){
    $separator = '|';
    return $separator;
}

/**
* アイキャッチ画像を使用可能にする
*/
add_theme_support( 'post-thumbnails' );

/**
* カスタムメニュー機能を使用可能にする
*/
add_theme_support( 'menus' );

/**
 * コメントの項目を変更する
 */
add_filter('comment_form_default_fields', 'my_comment_form_default_fields');
function my_comment_form_default_fields( $args ) {
    $args['author'] = ''; // 「名前」を削除
    $args['email'] = ''; // 「メールアドレス」を削除
    $args['url'] = ''; // 「サイト」を削除
    return $args;
}
/**
 * 特定のページでは自動整形機能を停止する
 */
//  add_action( 'wp', 'my_wpautop' );
//  function my_wpautop() {
//      if ( is_page('contact') ) {
//          remove_filter('the_content', 'wpautop');
//      }
//  }

 /*すべての投稿の自動整形機能を無効化*/
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');



 //サイトマップにnoindex設定を反映させる
add_filter('wp_sitemaps_posts_query_args', 'wp_sitemaps_posts_query_args_noindex_custom');
if ( !function_exists( 'wp_sitemaps_posts_query_args_noindex_custom' ) ):
function wp_sitemaps_posts_query_args_noindex_custom($args){
  $args['post__not_in'] = get_noindex_post_ids();
  return $args;
}
endif;

//サイトマップにカテゴリー・タグのnoindex設定を反映させる
add_filter('wp_sitemaps_taxonomies_query_args', 'wp_sitemaps_taxonomies_query_args_noindex_custom');
if ( !function_exists( 'wp_sitemaps_taxonomies_query_args_noindex_custom' ) ):
function wp_sitemaps_taxonomies_query_args_noindex_custom($args){
  //カテゴリーの除外
  $category_ids = get_noindex_category_ids();
  if (($args['taxonomy'] == 'category') && $category_ids) {
    $args['exclude'] = $category_ids;
  }

  //タグの除外
  $tag_ids = get_noindex_tag_ids();
  if (($args['taxonomy'] == 'post_tag') && $tag_ids) {
    $args['exclude'] = $tag_ids;
  }
  return $args;
}
endif;

//サイトマップにカテゴリー・タグのnoindex設定を反映させる
add_filter('wp_sitemaps_taxonomies', 'wp_sitemaps_taxonomies_custum');
if ( !function_exists( 'wp_sitemaps_taxonomies_custum' ) ):
function wp_sitemaps_taxonomies_custum( $taxonomies ) {
  //サイトマップにカテゴリーを出力しない
  if (is_category_page_noindex()) {
    unset( $taxonomies['category'] );
  }

  //サイトマップにタグを出力しない
  if (is_tag_page_noindex()) {
    unset( $taxonomies['post_tag'] );
  }

  return $taxonomies;
}
endif;

//サイトマップにその他のアーカイブのnoindex設定を反映する
// add_filter('wp_sitemaps_add_provider', 'wp_sitemaps_add_provider_custom', 10, 2);
// if ( !function_exists( 'wp_sitemaps_add_provider_custom' ) ):
// function wp_sitemaps_add_provider_custom( $provider, $name ) {
//   if ( is_other_archive_page_noindex() && 'users' === $name ) {
//       return false;
//   }

//   return $provider;
// }
// endif;


function add_stylesheet() {
    wp_enqueue_style(
        'reset',
        get_template_directory_uri().'/css/reset.css',
        array(), // これより先に読むCSSはないので空の配列
        '1.0',
        false // headタグ内に出力
    );
    wp_enqueue_style(
        'main',
        get_template_directory_uri().'/css/style.css',
        array('slick'),
        '1.0',
        false
    );
    wp_enqueue_style(
        'slick',
        'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
        array('reset'),
        '1.0',
        false
    );
    wp_enqueue_style(
        'main',
        get_template_directory_uri().'/css/style.css',
        array('modal'),
        '1.0',
        false
    );
    wp_enqueue_style(
        'modal',
        'https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/css/modaal.min.css',
        array('reset'),
        '1.0',
        false
    );
  }
  add_action('wp_enqueue_scripts', 'add_stylesheet');


  function add_script(){
    wp_enqueue_script(
        'slick-min',
        'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
        array(),
        '1.0',
        true
    );
    wp_enqueue_script(
        'slider',
        get_template_directory_uri().'/js/slick.js',
        array('slick-min'),
        '1.0',
        true
    );
    wp_enqueue_script(
        'navigation',
        get_template_directory_uri().'/js/navigation.js',
        array(),
        '1.0',
        true
    );
    wp_enqueue_script(
        'modaal-min',
        'https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/js/modaal.min.js',
        array(),
        '1.0',
        true
    );
    wp_enqueue_script(
        'modal',
        get_template_directory_uri().'/js/modal.js',
        array('modaal-min'),
        '1.0',
        true
    );
  }
  add_action('wp_enqueue_scripts','add_script');

  
// functions.php
function the_pagination() {
  global $wp_query;
  if ( $wp_query->max_num_pages <= 1 )
  return;
  echo paginate_links( array(
  'format' => '?paged=%#%',
  'current' => max( 1, get_query_var('paged') ),
  'total' => $wp_query->max_num_pages,
  'prev_text'    => '&lt;',
  'next_text'    => '&gt;',
  'type' => 'list',
  'end_size' => 3,
  'mid_size' => 3
  ) );
}


  // index.php
  add_filter( 'parse_query', 'parse_query' );
  function parse_query( $query ) {
      if ( get_query_var( 'post_type' ) == 'news' ) {
          $query->set( 'posts_per_page', 12 );
      }
      if ( get_query_var( 'post_type' ) == 'ownersvoice' ) {
        $query->set( 'posts_per_page', 12 );
    }

  }

//タクソノミー選択画面で一つだけしか選択できないようにする。
// hoge_taxonomy の部分はタクソノミー名
add_action( 'admin_print_footer_scripts', 'select_to_radio_hoge_taxonomy' );
function select_to_radio_hoge_taxonomy() {
    ?>
    <script type="text/javascript">
    jQuery( function( $ ) {
        // 投稿画面
        $( '#taxonomy-voice_category input[type=checkbox]' ).each( function() {
            $( this ).replaceWith( $( this ).clone().attr( 'type', 'radio' ) );
        } );

        // 一覧画面
        var hoge_taxonomy_checklist = $( '.voice_category-checklist input[type=checkbox]' );
        hoge_taxonomy_checklist.click( function() {
            $( this ).parents( '.voice_category-checklist' ).find( ' input[type=checkbox]' ).attr( 'checked', false );
            $( this ).attr( 'checked', true );
        } );
    } );
    </script>
    <?php
}


//固定ページ・投稿記事で使用するショートコード
function getThemeURLFunc() {
  return get_template_directory_uri();
}
add_shortcode('getThemeURL', 'getThemeURLFunc');


function shortcode_homeURLFunc( $atts, $content = '' ) {
	return esc_url( home_url() ).$content;
}
add_shortcode( 'getHomeURL', 'shortcode_homeURLFunc' );

/*【出力カスタマイズ】ショートコードに値を指定して表示結果をコントロール */
function shortcode_qa_list($atts) { // 変数の定義
  extract(shortcode_atts(array( // 引数の値を取得
    'terms' => '' // 投稿タイプの値、引数の指定がなければ指定の値を格納
  ), $atts));
  global $post; // グローバル宣言
  $args = array( // クエリの準備
    'post_type' => 'post',
    'category_name' => 'qa', 
    'tax_query' => array(
      array(
        'taxonomy' => 'qa',
        'field' => 'slug',
        'terms' => $terms,
        'operator' => 'IN'
      ),
    ),
    // 'posts_per_page' => 6, 
    'orderby' => 'date',
    'order' => 'DESC'
  );
  $posts_array = get_posts($args); // クエリを基にした投稿情報を取得
  foreach($posts_array as $post): // ループの開始
    setup_postdata($post); // 投稿のセットアップ
    $html .= '<dl class="c-accordion" data-type="questions">';
    $html .= '<dt class="c-accordion__tab js-accordion c-accordion__tabAccess">'.get_the_title().'</dt>'; // リンク付きタイトルを表示
    $html .= '<dd class="c-accordion__contents js-content">';
    $html .= '<div class="c-accordion__contentsInner">';
    $html .= '<p class="c-sentence">'.'A.&emsp;'.get_the_content().'</p>'; // リンク付きタイトルを表示
    $html .= '</div>';
    $html .= '</dd>';
    $html .= '</dl>';
  endforeach; // ループの終了
  wp_reset_postdata(); // 投稿のリセット
  return $html;
}
add_shortcode('qa_list', 'shortcode_qa_list');



function getPostList($atts)
{
    $args = [
        'post_type' => 'post',
        'posts_per_page' => '-1',
        'orderby' => 'meta_value',
        'order' => 'DESC'
    ];

    if ($atts['tag']) {
        $args += ['tag__in' => explode(',', $atts['tag'])];
    }

    if ($atts['year']) {
        $args += ['year' => $atts['year']];
    }

    $wp_query = new WP_Query($args);

    if ($wp_query->have_posts()) {
        $comparison = null;
        echo '<dl>';
        while ($wp_query->have_posts()) {
            $wp_query->the_post();
            $year = get_the_time('Y');
            if ($comparison != $year) {
                $comparison = $year;
                echo '<dt>';
                echo $year;
                echo '</dt>';
            }
            echo '<dd>';
            echo the_time('m/d');
            echo ' - ';
            echo get_the_title('<a href="' . esc_url(get_permalink()) . '">', '</a>');
            echo '</dd>';
        }
        echo '</dl>';
    }

    wp_reset_postdata();
}
add_shortcode("PostList", "getPostList");