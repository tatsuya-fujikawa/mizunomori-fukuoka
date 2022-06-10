
<?php
/*
Template Name: qalist
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
<div class="u-bgGrayColor">
		<section id="faq" class="l-questions p-questions">
			<div class="l-container__narrow">
				<div class="l-spacer__headingDiagnosis c-heading">
					<h2 class="c-heading__diagnosis" data-entitle="questions">よくあるご質問</h2>
				</div><!-- /.c-heading -->
        <?php
  echo do_shortcode('[qa_list terms="hyaluronan"]');
?>
<br>
        <?php
  echo do_shortcode('[qa_list terms="hyaluronan-nasolabialfold"]');
?>

<br>
<?php
  echo do_shortcode('[qa_list terms="hyaluronan-lips"]');
?>
<br>
<?php
  echo do_shortcode('[qa_list terms="hyaluronan-eye"]');
?>
<br>
<?php
  echo do_shortcode('[qa_list terms="hyaluronan-amount"]');
?>
<br>
<?php
  echo do_shortcode('[qa_list terms="hyaluronan-chin"]');
?>
<br>
<?php
  echo do_shortcode('[qa_list terms="hyaluronan-nose"]');
?>
<br>
<?php
  echo do_shortcode('[qa_list terms="face"]');
?>
<br>
<?php
  echo do_shortcode('[qa_list terms="botox"]');
?>
<br>
<?php
  echo do_shortcode('[qa_list terms="botox-mouth"]');
?>
<br>
<?php
  echo do_shortcode('[qa_list terms="botox-petit"]');
?>
<br>
<?php
  echo do_shortcode('[qa_list terms="botox-shoulder"]');
?>
<br>
<?php
  echo do_shortcode('[qa_list terms="eye"]');
?>
<br>
<?php
  echo do_shortcode('[qa_list terms="eye-sekkai"]');
?>
<br>
<?php
  echo do_shortcode('[qa_list terms="eye-ageng"]');
?>
<br>
<?php
  echo do_shortcode('[qa_list terms="eye-mejiri"]');
?>
<br>
<?php
  echo do_shortcode('[qa_list terms="eye-megashira"]');
?>
<br>
<?php
  echo do_shortcode('[qa_list terms="eye-mayusita"]');
?>
<br>
<?php
  echo do_shortcode('[qa_list terms="eye-gankenkasui"]');
?>
<br>
<?php
  echo do_shortcode('[qa_list terms="skin"]');
?>
<br>
<?php
  echo do_shortcode('[qa_list terms="liposuction"]');
?>
<br>
<?php
  echo do_shortcode('[qa_list terms="liposuction-arm"]');
?>
<br>
<?php
  echo do_shortcode('[qa_list terms="liposuction-hip"]');
?>
				<div class="p-questions__button">
					<a href="https://www.mizunomori.com/faq/botox/" target="_blank" rel="noopener">その他よくある質問はこちら</a>
				</div><!-- /.p-questions__button -->
			</div><!-- /.l-container__narrow -->
		</section><!-- /.l-questions -->
	</div>


<?php get_template_part('template-parts/_access'); ?>
	<!-- /.l-access -->
</main>
<?php get_footer(); ?>