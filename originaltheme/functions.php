<?php
/**
 * <title>タグを出力する
 */
add_theme_support( 'title-tag' );

/**
* アイキャッチ画像を使用可能にする
*/
add_theme_support( 'post-thumbnails' );

/**
* カスタムメニュー機能を使用可能にする
*/
add_theme_support( 'menus' );

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
    'posts_per_page' => -1, 
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



function shortcode_terminal_qa_list($atts) { // 変数の定義
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
        'operator' => 'IN',
        'parent' => 0, //トップレベルのタームのみ
        'hierarchical' => 0 //子タームを含めない
      ),
    ),
    'posts_per_page' => 999, 
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
add_shortcode('terminal_qa_list', 'shortcode_terminal_qa_list');





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