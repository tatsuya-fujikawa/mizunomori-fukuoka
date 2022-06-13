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
 <section class="l-jumbotron c-jumbotron">
		<div class="c-jumbotron__mv">
			<picture>
				<source srcset="<?php the_field('diagnosis_mv_pc'); ?>" media="(min-width:768px)" />
				<img src="<?php the_field('diagnosis_mv_sp'); ?>" alt="">
			</picture>
		</div><!-- /c-jumbotron__mv -->
		<div class="l-container c-jumbotron__inner">
			<h1 class="c-jumbotron__title">
				<span><?php the_field('diagnosis_mv_title'); ?></span>
			</h1><!-- /c-jumbotron__title -->
		</div><!-- /l-container -->
	</section><!-- /c-jumbotron -->
	<div class="l-breadcrumb p-breadcrumb">
		<div class="l-container__narrow">
      <?php if( !(is_home() || is_front_page() )): ?>
        <nav>
          <ol class="p-breadcrumb__list">
          <?php
            if ( function_exists( 'bcn_display' ) ) {
            bcn_display();
            }
          ?>
          </ol>
        </nav>
        <?php endif; ?>
		</div><!-- /l-container -->
	</div><!-- /p-breadcrumb -->

<?php the_content(); ?>


<div class="u-bgGrayColor">
		<section class="l-supervisor p-supervisor">
			<div class="l-container__narrow">
				<div class="l-spacer__headingDiagnosis c-heading">
					<h2 class="c-heading__diagnosis" data-entitle="supervisor">このページの監修医師情報</h2>
				</div><!-- /.c-heading -->
				<div class="l-supervisor__profile p-supervisor__profile">

					<div class="p-supervisor__profileTop c-flexSP c-flex__alignCenter">
						<div class="p-supervisor__profileTopLeft c-flex__half">
							<img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/liposuction/doc_kaneko.jpg" alt="金子貴則院長">
						</div><!-- /.p-supervisor__profileLeft -->
						<div class="p-supervisor__profileTopRight c-flex__half">
							<p class="c-sentence">水の森美容外科<br>福岡院院長</p>
							<h3 class="p-supervisor__profileName">金子貴則<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram_white.svg" alt="" width="20px"></a></h3>
						</div><!-- /.p-supervisor__profileRight -->
					</div><!-- /.c-flexSP -->

					<div class="p-supervisor__profileBottom">
							<p class="c-DrProfile__conference"><span>経歴</span></p>
							<ul class="c-DrProfile__list -lowerstyle">
									<li class="c-DrProfile__list-item -lowerstyle"><span>平成30年</span>大阪医科大学医学部　卒業</li>
									<li class="c-DrProfile__list-item -lowerstyle"><span>平成30年</span>市立ひらかた病院</li>
									<li class="c-DrProfile__list-item -lowerstyle"><span>令和2年</span>水の森美容外科　入職</li>
									<li class="c-DrProfile__list-item -lowerstyle"><span>令和4年</span>水の森美容外科福岡院 院長就任</li>
							</ul><!-- /.c-DrProfile__list -->
							<p class="c-DrProfile__conference"><span>所属学会・取得学位</span></p>
							<ul class="c-DrProfile__list -lowerstyle">
									<li class="c-DrProfile__list-item -lowerstyle">BOTOX VISTA 認定医</li>
									<li class="c-DrProfile__list-item -lowerstyle">ジュビダームビスタ認定医</li>
									<li class="c-DrProfile__list-item -lowerstyle">日本救急医学会 ICLS 修了</li>
									<li class="c-DrProfile__list-item -lowerstyle">日本美容外科学会（Jsas）正会員</li>
									<li class="c-DrProfile__list-item -lowerstyle">日本美容外科医師会　会員</li>
							</ul><!-- /.c-DrProfile__list -->
              <?php if( get_field('diagnosis_doctor_comment') ) { ?>
							<p class="c-DrProfile__conference"><span>ドクターコメント</span></p>
							<div class="c-DrProfile__list -lowerstyle">
	              <p><?php the_field('diagnosis_doctor_comment'); ?></p>
							</div><!-- /.c-DrProfile__list -->
              <?php } ?>
					</div><!-- /.p-supervisor__profileBottom -->

				</div><!-- /.p-supervisor__profile -->

				<div class="p-CTA p-CTA__thick l-CTA">
					<h2 class="p-CTA__heading">無料カウンセリング予約<br class="u-pcNone">お問い合わせ　</h2>
					<div class="c-buttonCTAWrap c-flex c-flex__center">
							<div class="c-buttonCTA c-buttonCTA__phone">
									<a href="tel:0120-510-830">お電話</a>
							</div>
							<div class="c-buttonCTA c-buttonCTA__mail">
									<a href="https://www.mizunomori.com/counsel/" target="_blank" rel="noopener">WEB予約</a>
							</div>
					</div><!-- /c-buttonCTAWrap -->
				</div><!-- /.p-CTA -->



			</div><!-- /.l-container__narrow -->

		</section><!-- /.l-supervisor -->
	</div>

<?php get_template_part('template-parts/_access'); ?>
	<!-- /.l-access -->
</main>
<?php get_footer(); ?>