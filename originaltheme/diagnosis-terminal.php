
<?php
/*
Template Name: ターミナル
Template Post Type: diagnosis
*/
?>


<?php
//初期データ取得
$ID = $post->ID; // ページID
switch ($ID) {
  case 330: //二重埋没法
    $name = "バスト";
    break;
  case 315: //二重埋没法幅決めページ
    $name = "ヒアルロン酸";
    break;
  case 312: //二重切開法
    $name =  "ボトックス注射";
    break;
  case 311:  //眼瞼下垂治療
    $name =  "二重まぶた・目元";
    break;
  case 325:  //目頭切開
    $name =  "脂肪吸引";
    break;
  case 333:  //涙袋のヒアルロン酸注入
    $name =  "鼻";
    break;
  default: //目の一覧
    $name = "";
}
//global変数宣言
//マークアップ用の変数
global $faq_question;
global $faq_answer;
global $faq_slug;
?>


<?php get_header(); ?>
<main>
<?php
echo do_shortcode('ショートコード');
?>





<?php get_template_part('template-parts/_access'); ?>
	<!-- /.l-access -->
</main>
<?php get_footer(); ?>