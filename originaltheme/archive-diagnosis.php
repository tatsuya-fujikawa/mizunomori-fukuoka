<?php get_header(); ?>
<main>
	<section class="l-jumbotron c-jumbotron">
		<div class="c-jumbotron__mv">
			<picture>
				<!-- <source srcset="./img/first/mv_pc.webp" media="(min-width:768px)"/> -->
				<source srcset="<?php echo get_template_directory_uri(); ?>//img/diagnosis/pc-mv.webp" media="(min-width:768px)"/>
				<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/first/mv_sp.webp" alt=""> -->
				<img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/sp-mv.webp" alt="">
			</picture>
		</div><!-- /c-jumbotron__mv -->
		<div class="l-container c-jumbotron__inner">
			<h1 class="c-jumbotron__title">
				<span>診療項目一覧</span>
			</h1><!-- /c-jumbotron__title -->
		</div><!-- /l-container -->
	</section><!-- /c-jumbotron -->

	<div class="l-breadcrumb p-breadcrumb">
		<div class="l-container l-container__narrow">
			<nav>
				<ol class="p-breadcrumb__list">
					<li><a href="<?php echo esc_url(home_url('')); ?>index.html">TOP</a></li>
					<li>診療項目一覧</li>
				</ol>
			</nav>
		</div><!-- /l-container -->
	</div><!-- /p-breadcrumb -->

	<section>
		<div class="l-container">
			<div class="u-bgMainColor">
				<div class="p-diagnosisMenu__wrap l-diagnosisMenu__wrap">
					<div class="u-spacer__s"></div><!-- /u-spacer__s -->
					<h2 class="u-centerposition u-fontGothic p-diagnosisMenu__title">施術の種類から探す</h2>
					<nav class="p-diagnosisMenu__cards">
						<a href="<?php echo esc_url(home_url('')); ?>/diagnosis/eye/" class="p-diagnosisMenu__card">
							<img src="<?php echo get_template_directory_uri(); ?>/img/menu1.webp" alt="二重まぶた・目元" class="u-spNone">
							<p class="p-diagnosisMenu__lead">二重まぶた・目元</p>
						</a><!-- /p-diagnosisMenu__card -->
						<a href="<?php echo esc_url(home_url('')); ?>/diagnosis/liposuction/" class="p-diagnosisMenu__card">
							<img src="<?php echo get_template_directory_uri(); ?>/img/menu2.webp" alt="脂肪吸引・痩身" class="u-spNone">
							<p class="p-diagnosisMenu__lead">脂肪吸引・痩身</p>
						</a><!-- /p-diagnosisMenu__card -->
						<a href="<?php echo esc_url(home_url('')); ?>/diagnosis/hyaluronan/" class="p-diagnosisMenu__card">
							<img src="<?php echo get_template_directory_uri(); ?>/img/menu3.webp" alt="ヒアルロン酸注入" class="u-spNone">
							<p class="p-diagnosisMenu__lead">ヒアルロン酸注入</p>
						</a><!-- /p-diagnosisMenu__card -->
						<a href="<?php echo esc_url(home_url('')); ?>/diagnosis/bust/" class="p-diagnosisMenu__card">
							<img src="<?php echo get_template_directory_uri(); ?>/img/menu4.webp" alt="豊胸・バスト" class="u-spNone">
							<p class="p-diagnosisMenu__lead">豊胸・バスト</p>
						</a><!-- /p-diagnosisMenu__card -->
						<a href="<?php echo esc_url(home_url('')); ?>/diagnosis/face/" class="p-diagnosisMenu__card">
							<img src="<?php echo get_template_directory_uri(); ?>/img/menu5.webp" alt="フェイスライン" class="u-spNone">
							<p class="p-diagnosisMenu__lead">フェイスライン</p>
						</a><!-- /p-diagnosisMenu__card -->
						<a href="<?php echo esc_url(home_url('')); ?>/diagnosis/nose/" class="p-diagnosisMenu__card">
							<img src="<?php echo get_template_directory_uri(); ?>/img/menu6.webp" alt="鼻" class="u-spNone">
							<p class="p-diagnosisMenu__lead">鼻</p>
						</a><!-- /p-diagnosisMenu__card -->
						<a href="<?php echo esc_url(home_url('')); ?>/diagnosis/botox/" class="p-diagnosisMenu__card">
							<img src="<?php echo get_template_directory_uri(); ?>/img/menu7.webp" alt="ボトックス注射" class="u-spNone">
							<p class="p-diagnosisMenu__lead">ボトックス注射</p>
						</a><!-- /p-diagnosisMenu__card -->
						<a href="<?php echo esc_url(home_url('')); ?>/diagnosis/skin/" class="p-diagnosisMenu__card">
							<img src="<?php echo get_template_directory_uri(); ?>/img/menu8.webp" alt="美容点滴・内服" class="u-spNone">
							<p class="p-diagnosisMenu__lead">美容点滴・内服</p>
						</a><!-- /p-diagnosisMenu__card -->
					</nav><!-- /p-diagnosisMenu__cards -->
				</div><!-- /p-diagnosisMenu__wrap -->
			</div><!-- /u-bgMainColor -->
		</div><!-- /l-container -->
	</section>

	<section class="l-diagnosisListWrap p-diagnosisListWrap">
		<div class="l-container__narrow">
			<div class="p-diagnosisListWrap__flex">

				<div class="p-diagnosisListWrap__group">
					<h3 class="p-diagnosisListWrap__title">二重まぶた・目元</h3>
					<div class="c-flex">
						<div class="p-diagnosisListWrap__MV">
							<img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/menu2_1.webp" alt="二重まぶた・目元">
						</div><!-- /p-diagnosisListWrap__MV -->
						<div class="">
							<ul class="p-diagnosisListWrap__list">
								<li class="p-diagnosisListWrap__listItem"><a href="<?php echo esc_url(home_url('')); ?>/diagnosis/eye/maibotsu/">二重埋没法</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="<?php echo esc_url(home_url('')); ?>/diagnosis/eye/sekkai/">二重切開法</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="<?php echo esc_url(home_url('')); ?>/diagnosis/eye/megashira/">目頭切開</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="<?php echo esc_url(home_url('')); ?>/diagnosis/eye/mejiri-sekkai/">目尻切開</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="<?php echo esc_url(home_url('')); ?>/diagnosis/eye/gankenkasui/">眼瞼下垂</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="<?php echo esc_url(home_url('')); ?>/diagnosis/eye/tarumi_mayushita/">眉下切開</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="<?php echo esc_url(home_url('')); ?>/diagnosis/eye/eye-ageng-eye/">目の下のたるみ・ふくらみ取り</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="<?php echo esc_url(home_url('')); ?>/diagnosis/eye/hyaluronan-eye/">涙袋のヒアルロン酸</a></li>
							</ul><!-- /p-diagnosisListWrap__list -->
						</div>
					</div><!-- /c-flex__SP -->
				</div><!-- /p-diagnosisListWrap__group -->

				<div class="p-diagnosisListWrap__group">
					<h3 class="p-diagnosisListWrap__title">フェイスライン・輪郭</h3>
					<div class="c-flex">
						<div class="p-diagnosisListWrap__MV">
							<img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/menu2_5.webp" alt="フェイスライン・輪郭">
						</div><!-- /p-diagnosisListWrap__MV -->
						<div class="">
							<ul class="p-diagnosisListWrap__list">
								<li class="p-diagnosisListWrap__listItem"><a href="https://www.mizunomori.com/diagnosis/mouth/faceline/" target="_blank" rel="noopener" class="u-blank">ヒアルロン酸リフト</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="<?php echo esc_url(home_url('')); ?>/diagnosis/nose/ryubi/">鼻のプロテーゼ</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="https://www.mizunomori.com/diagnosis/mouth/diet/" target="_blank" rel="noopener" class="u-blank">頬・顎の脂肪吸引</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="https://www.mizunomori.com/diagnosis/nose/hyaluronan/" target="_blank" rel="noopener" class="u-blank">鼻のヒアルロン酸注入</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="<?php echo esc_url(home_url('')); ?>/diagnosis/botox/mouth/">エラのボトックス注射</a></li>
							</ul><!-- /p-diagnosisListWrap__list -->
						</div>
					</div><!-- /c-flex__SP -->
				</div><!-- /p-diagnosisListWrap__group -->

				<div class="p-diagnosisListWrap__group">
					<h3 class="p-diagnosisListWrap__title">鼻</h3>
					<div class="c-flex">
						<div class="p-diagnosisListWrap__MV">
							<img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/menu2_6.webp" alt="鼻">
						</div><!-- /p-diagnosisListWrap__MV -->
						<div class="">
							<ul class="p-diagnosisListWrap__list">
								<li class="p-diagnosisListWrap__listItem"><a href="<?php echo esc_url(home_url('')); ?>/diagnosis/nose/ryubi/">鼻のプロテーゼ</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="<?php echo esc_url(home_url('')); ?>/diagnosis/nose/bisenzikai/">鼻尖耳介</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="<?php echo esc_url(home_url('')); ?>/diagnosis/nose/biyoku/">小鼻縮小</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="https://www.mizunomori.com/diagnosis/nose/bichukaku/" target="_blank" rel="noopener" class="u-blank">鼻中隔延長</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="https://www.mizunomori.com/diagnosis/nose/hyaluronan/" target="_blank" rel="noopener" class="u-blank">鼻のヒアルロン酸注入</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="https://www.mizunomori.com/diagnosis/nose/hump/" target="_blank" rel="noopener" class="u-blank">わし鼻修正(ハンプ削り)</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="https://www.mizunomori.com/diagnosis/nose/honekiri/" target="_blank" rel="noopener" class="u-blank">鼻骨骨切</a></li>
							</ul><!-- /p-diagnosisListWrap__list -->
						</div>
					</div><!-- /c-flex__SP -->
				</div><!-- /p-diagnosisListWrap__group -->

				<div class="p-diagnosisListWrap__group">
					<h3 class="p-diagnosisListWrap__title">脂肪吸引</h3>
					<div class="c-flex">
						<div class="p-diagnosisListWrap__MV">
							<img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/menu2_2.webp" alt="脂肪吸引">
						</div><!-- /p-diagnosisListWrap__MV -->
						<div class="">
							<ul class="p-diagnosisListWrap__list">
								<li class="p-diagnosisListWrap__listItem"><a href="<?php echo esc_url(home_url('')); ?>/diagnosis/liposuction/hip">太もも・おしりの脂肪吸引</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="<?php echo esc_url(home_url('')); ?>/diagnosis/liposuction/waist">腹部・ウエスト・腰の脂肪吸引</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="<?php echo esc_url(home_url('')); ?>/diagnosis/liposuction/face">頬・顎の脂肪吸引</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="https://www.mizunomori.com/diagnosis/diet/bnls/" target="_blank" rel="noopener" class="u-blank">脂肪溶解注射<br>(小顔注射・BNLSアルティメット)</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="https://www.mizunomori.com/diagnosis/diet/sanorex_xenical/" target="_blank" rel="noopener" class="u-blank">痩せる薬<br>(サノレックス・ゼニカル)</a></li>
							</ul><!-- /p-diagnosisListWrap__list -->
						</div>
					</div><!-- /c-flex__SP -->
				</div><!-- /p-diagnosisListWrap__group -->

				<div class="p-diagnosisListWrap__group">
					<h3 class="p-diagnosisListWrap__title">ヒアルロン酸注入</h3>
					<div class="c-flex">
						<div class="p-diagnosisListWrap__MV">
							<img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/menu2_3.webp" alt="ヒアルロン酸注入">
						</div><!-- /p-diagnosisListWrap__MV -->
						<div class="">
							<ul class="p-diagnosisListWrap__list">
								<li class="p-diagnosisListWrap__listItem"><a href="<?php echo esc_url(home_url('')); ?>/diagnosis/hyaluronan/nose">鼻のヒアルロン酸注入</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="<?php echo esc_url(home_url('')); ?>/diagnosis/hyaluronan/eye">涙袋へのヒアルロン酸注入</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="<?php echo esc_url(home_url('')); ?>/diagnosis/hyaluronan/lips">唇のヒアルロン酸注入</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="<?php echo esc_url(home_url('')); ?>/diagnosis/hyaluronan/chin">顎のヒアルロン酸注入</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="<?php echo esc_url(home_url('')); ?>/diagnosis/hyaluronan/amount">額のヒアルロン酸注入</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="<?php echo esc_url(home_url('')); ?>/diagnosis/hyaluronan/nasolabialfold">ほうれい線のヒアルロン酸注入</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="https://www.mizunomori.com/diagnosis/hyaluronan/hand/" target="_blank" rel="noopener" class="u-blank">手の甲のヒアルロン酸注入</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="https://www.mizunomori.com/diagnosis/mouth/faceline/" target="_blank" rel="noopener" class="u-blank">水の森ヒアルロン酸リフト</a></li>
							</ul><!-- /p-diagnosisListWrap__list -->
						</div>
					</div><!-- /c-flex__SP -->
				</div><!-- /p-diagnosisListWrap__group -->

				<div class="p-diagnosisListWrap__group">
					<h3 class="p-diagnosisListWrap__title">ボトックス注射</h3>
					<div class="c-flex">
						<div class="p-diagnosisListWrap__MV">
							<img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/menu2_7.webp" alt="ボトックス注射">
						</div><!-- /p-diagnosisListWrap__MV -->
						<div class="">
							<ul class="p-diagnosisListWrap__list">
								<li class="p-diagnosisListWrap__listItem"><a href="<?php echo esc_url(home_url('')); ?>/diagnosis/botox/petit">しわのボトックス</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="<?php echo esc_url(home_url('')); ?>/diagnosis/botox/mouth">エラのボトックス</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="<?php echo esc_url(home_url('')); ?>/diagnosis/botox/shoulder">肩のボトックス</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="https://www.mizunomori.com/diagnosis/diet/botox/" target="_blank" rel="noopener" class="u-blank">ふくらはぎのボトックス</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="https://www.mizunomori.com/diagnosis/mouth/koukaku/" target="_blank" rel="noopener" class="u-blank">口角のボトックス</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="https://www.mizunomori.com/diagnosis/eye/botox/" target="_blank" rel="noopener" class="u-blank">たれ目のボトックス</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="https://www.mizunomori.com/diagnosis/mouth/smile/" target="_blank" rel="noopener" class="u-blank">ガミースマイルのボトックス</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="https://www.mizunomori.com/diagnosis/underarm/botox/" target="_blank" rel="noopener" class="u-blank">汗止め(脇)のボトックス</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="https://www.mizunomori.com/diagnosis/underarm/botox/" target="_blank" rel="noopener" class="u-blank">汗止め(手のひら･足の裏のボトックス)</a></li>
							</ul><!-- /p-diagnosisListWrap__list -->
						</div>
					</div><!-- /c-flex__SP -->
				</div><!-- /p-diagnosisListWrap__group -->

				<div class="p-diagnosisListWrap__group">
					<h3 class="p-diagnosisListWrap__title">美容点滴・内服</h3>
					<div class="c-flex">
						<div class="p-diagnosisListWrap__MV">
							<img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/menu2_8.webp" alt="美容点滴・内服">
						</div><!-- /p-diagnosisListWrap__MV -->
						<div class="">
							<ul class="p-diagnosisListWrap__list">
								<li class="p-diagnosisListWrap__listItem"><a href="https://www.mizunomori.com/diagnosis/skin/shiratama/" target="_blank" rel="noopener" class="u-blank">白玉注射</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="https://www.mizunomori.com/diagnosis/skin/diet/" target="_blank" rel="noopener" class="u-blank">ダイエット点滴</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="https://www.mizunomori.com/diagnosis/skin/vitamin/" target="_blank" rel="noopener" class="u-blank">高濃度ビタミンC点滴</a></li>
							</ul><!-- /p-diagnosisListWrap__list -->
						</div>
					</div><!-- /c-flex__SP -->
				</div><!-- /p-diagnosisListWrap__group -->

				<div class="p-diagnosisListWrap__group">
					<h3 class="p-diagnosisListWrap__title">豊胸・バスト</h3>
					<div class="c-flex">
						<div class="p-diagnosisListWrap__MV">
							<img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/menu2_4.webp" alt="豊胸・バスト">
						</div><!-- /p-diagnosisListWrap__MV -->
						<div class="">
							<ul class="p-diagnosisListWrap__list">
								<li class="p-diagnosisListWrap__listItem"><a href="<?php echo esc_url(home_url('')); ?>/diagnosis/bust/bust-grease">豊胸術＜脂肪注入＞</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="<?php echo esc_url(home_url('')); ?>/diagnosis/bust/bust-bag">豊胸術＜シリコン挿入＞</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="https://www.mizunomori.com/diagnosis/bust/nyuto/" target="_blank" rel="noopener" class="u-blank">乳頭縮小</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="https://www.mizunomori.com/diagnosis/bust/nyurin/" target="_blank" rel="noopener" class="u-blank">乳輪縮小</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="https://www.mizunomori.com/diagnosis/bust/kanbotsu/" target="_blank" rel="noopener" class="u-blank">陥没乳首</a></li>
								<li class="p-diagnosisListWrap__listItem"><a href="https://www.mizunomori.com/diagnosis/bust/syukusyo_lift/" target="_blank" rel="noopener" class="u-blank">乳房縮小</a></li>
							</ul><!-- /p-diagnosisListWrap__list -->
						</div>
					</div><!-- /c-flex__SP -->
				</div><!-- /p-diagnosisListWrap__group -->


			</div><!-- /p-diagnosisListWrap__flex -->


		</div><!-- /l-container__narrow -->
	</section><!-- /l-diagnosis -->

	<section class="p-CTA l-CTA l-container">
		<h2 class="p-CTA__heading">無料カウンセリング予約<br class="u-pcNone">お問い合わせ　</h2>
		<div class="c-buttonCTAWrap c-flex c-flex__center">
			<div class="c-buttonCTA c-buttonCTA__phone">
				<a href="tel:0120-510-830">お電話</a>
			</div>
			<div class="c-buttonCTA c-buttonCTA__mail">
				<a href="https://www.mizunomori.com/counsel/" target="_blank" rel="noopener">WEB予約</a>
			</div>
		</div><!-- /c-buttonCTAWrap -->
	</section><!-- /.p-CTA -->

	<p class="u-centerposition c-sentence">脂肪吸引について総院長竹江渉が詳しく解説！</p>
	<div class="u-spacer__s"></div>
	<div class="u-centerposition l-container">
		<a href="https://www.youtube.com/channel/UCo3qCN17xUuS-bTHxFhiEuA" rel="noopener" target="_blank">
			<img src="<?php echo get_template_directory_uri(); ?>/img/doc_youtube.webp" alt="youtubeチャンネルへのバナー">
		</a>
	</div><!-- /u-centerposition -->

	<section id="p-access" class="l-access p-access">
		<div class="l-container">
			<div class="l-spacer__headingTop c-heading">
				<span class="c-heading__en u-uppercase" lang="en">access</span>
				<h2 class="c-heading__jp">アクセス</h2>
			</div><!-- /.c-heading -->
			<div class="p-access__map">
				<div class="p-access__address">
					<p class="p-access__address-title u-fontGothic">水の森美容外科　福岡院</p>
					<p class="p-access__address-text">診察時間　10:00〜19:00 （年中無休）</p>
					<p class="p-access__address-text">〒810-0001<br>福岡県福岡市中央区天神2-3-20</p>
				</div><!-- /.p-access__address -->
				<div class="p-access__map-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.70739563629!2d130.39740849999998!3d33.5869457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35419185b1c7e21b%3A0x40c2b0edabfad053!2z44CSODEwLTAwMDEg56aP5bKh55yM56aP5bKh5biC5Lit5aSu5Yy65aSp56We77yS5LiB55uu77yT4oiS77yS77yQ!5e0!3m2!1sja!2sjp!4v1649390871152!5m2!1sja!2sjp" width="460" height="220" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div><!-- /.p-access__map-map -->
			</div><!-- /.p-access__map -->
			<div class="c-tabMenu l-tabMenu u-spNone">
				<div class="c-tabMenu__tab">
					<ul class="c-tabMenu__tab-menu" role="tab-list">
						<li id="c-tabMenu01" role="tab"><a class="u-fontGothic active" href="" data-id="01">地下鉄天神駅から<br>お越しの場合（徒歩7分）</a></li>
						<li id="c-tabMenu02" role="tab"><a class="u-fontGothic" href="" data-id="02">西鉄福岡(天神)駅から<br>お越しの場合（徒歩4分）</a></li>
						<li id="c-tabMenu03" role="tab"><a class="u-fontGothic" href="" data-id="03">JR博多駅から<br>お越しの場合</a></li>
						<li id="c-tabMenu04" role="tab"><a class="u-fontGothic" href="" data-id="04">JR熊本駅から<br>お越しの場合</a></li>
					</ul><!-- /.c-tabMenu__tab-menu -->
				</div><!-- /.c-tabMenu__tab -->
				<div class="c-tabMenu__content active" id="01">
					<div class="p-access__card c-flexPC">
						<div class="p-access__card-img c-flex__half">
							<img src="<?php echo get_template_directory_uri(); ?>/img/access_chika-tenjin1.webp" alt="天神駅からのアクセス写真説明" loading="lazy" width="347px" height="279px">
						</div><!-- /.p-access__card-img -->
						<div class="p-access__card-body c-flex__half">
							<span>①</span>
							<p>地下鉄天神駅⑥番出口から福岡駅通りを真っ直ぐ南へ進み、西鉄福岡（天神）駅の大きな入り口があり、その正面の天神21号線に入ります。</p>
						</div><!-- /.p-access__card-body -->
					</div><!-- /.p-access__card -->
					<div class="p-access__card c-flexPC">
						<div class="p-access__card-img c-flex__half">
							<img src="<?php echo get_template_directory_uri(); ?>/img/access_chika-tenjin2.webp" alt="天神駅からのアクセス写真説明" loading="lazy" width="347px" height="279px">
						</div><!-- /.p-access__card-img -->
						<div class="p-access__card-body c-flex__half">
							<span>②</span>
							<p>中華料理店がある交差点を左折し、メルヘン通りを真っ直ぐ進むと、左手に警固神社の入り口が見えてきます。</p>
						</div><!-- /.p-access__card-body -->
					</div><!-- /.p-access__card -->
					<div class="p-access__card c-flexPC">
						<div class="p-access__card-img c-flex__half">
							<img src="<?php echo get_template_directory_uri(); ?>/img/access_chika-tenjin3.webp" alt="天神駅からのアクセス写真説明" loading="lazy" width="347px" height="279px">
						</div><!-- /.p-access__card-img -->
						<div class="p-access__card-body c-flex__half">
							<span>③</span>
							<p>その正面の警固参道に入って真っ直ぐ進み、天神西通りと交差する角にあるビルです。</p>
						</div><!-- /.p-access__card-body -->
					</div><!-- /.p-access__card -->
					<div class="p-access__card c-flexPC">
						<div class="p-access__card-img c-flex__half">
							<img src="<?php echo get_template_directory_uri(); ?>/img/access_chika-tenjin4.webp" alt="天神駅からのアクセス写真説明" loading="lazy" width="347px" height="279px">
						</div><!-- /.p-access__card-img -->
						<div class="p-access__card-body c-flex__half">
							<span>④</span>
							<p>当院までは徒歩約7分でお越しいただけます。</p>
						</div><!-- /.p-access__card-body -->
					</div><!-- /.p-access__card -->
				</div>

				<div class="c-tabMenu__content" id="02">
					<div class="p-access__card c-flexPC">
						<div class="p-access__card-img c-flex__half">
							<img src="<?php echo get_template_directory_uri(); ?>/img/access_chika-tenjin1.webp" alt="西鉄福岡天神駅からのアクセス写真説明" loading="lazy" width="347px" height="279px">
						</div><!-- /.p-access__card-img -->
						<div class="p-access__card-body c-flex__half">
							<span>①</span>
							<p>西鉄福岡(天神)駅三越口西側から警固公園内を抜け、今泉公園通りに出ます。</p>
						</div><!-- /.p-access__card-body -->
					</div><!-- /.p-access__card -->
					<div class="p-access__card c-flexPC">
						<div class="p-access__card-img c-flex__half">
							<img src="<?php echo get_template_directory_uri(); ?>/img/access_chika-tenjin2.webp" alt="西鉄福岡天神駅からのアクセス写真説明" loading="lazy" width="347px" height="279px">
						</div><!-- /.p-access__card-img -->
						<div class="p-access__card-body c-flex__half">
							<span>②</span>
							<p>今泉公園通りを南に進むと左手に警固神社の入り口が見えてきます。</p>
						</div><!-- /.p-access__card-body -->
					</div><!-- /.p-access__card -->
					<div class="p-access__card c-flexPC">
						<div class="p-access__card-img c-flex__half">
							<img src="<?php echo get_template_directory_uri(); ?>/img/access_chika-tenjin3.webp" alt="西鉄福岡天神駅からのアクセス写真説明" loading="lazy" width="347px" height="279px">
						</div><!-- /.p-access__card-img -->
						<div class="p-access__card-body c-flex__half">
							<span>③</span>
							<p>その正面の警固参道に入って真っ直ぐ進み、天神西通りと交差する角にあるビルです。</p>
						</div><!-- /.p-access__card-body -->
					</div><!-- /.p-access__card -->
					<div class="p-access__card c-flexPC">
						<div class="p-access__card-img c-flex__half">
							<img src="<?php echo get_template_directory_uri(); ?>/img/access_chika-tenjin4.webp" alt="西鉄福岡天神駅からのアクセス写真説明" loading="lazy" width="347px" height="279px">
						</div><!-- /.p-access__card-img -->
						<div class="p-access__card-body c-flex__half">
							<span>④</span>
							<p>当院までは徒歩約5分でお越しいただけます。</p>
						</div><!-- /.p-access__card-body -->
					</div><!-- /.p-access__card -->
				</div>

				<div class="c-tabMenu__content" id="03">
					<div class="p-access__card c-flexPC">
						<div class="p-access__card-img c-flex__half">
							<img src="<?php echo get_template_directory_uri(); ?>/img/access_chika-tenjin1.webp" alt="JR博多駅からのアクセス写真説明" loading="lazy" width="347px" height="279px">
						</div><!-- /.p-access__card-img -->
						<div class="p-access__card-body c-flex__half">
							<span>【電車】</span>
							<p>博多駅より空港線にて姪浜行に乗車。天神駅にて下車し左記のルートよりお越しいただけます。</p>
						</div><!-- /.p-access__card-body -->
					</div><!-- /.p-access__card -->
					<div class="p-access__card c-flexPC">
						<div class="p-access__card-img c-flex__half">
							<img src="<?php echo get_template_directory_uri(); ?>/img/access_chika-tenjin2.webp" alt="JR博多駅からのアクセス写真説明" loading="lazy" width="347px" height="279px">
						</div><!-- /.p-access__card-img -->
						<div class="p-access__card-body c-flex__half">
							<span>【バス】①</span>
							<p>駅ビル1階のバスターミナルへ。
							</p>
						</div><!-- /.p-access__card-body -->
					</div><!-- /.p-access__card -->
					<div class="p-access__card c-flexPC">
						<div class="p-access__card-img c-flex__half">
							<img src="<?php echo get_template_directory_uri(); ?>/img/access_chika-tenjin2.webp" alt="JR博多駅からのアクセス写真説明" loading="lazy"
								width="347px" height="279px">
						</div><!-- /.p-access__card-img -->
						<div class="p-access__card-body c-flex__half">
							<span>【バス】②</span>
							<p>西鉄バスにて【博多バスターミナル】で乗車し【今泉一丁目】で下車。
							</p>
						</div><!-- /.p-access__card-body -->
					</div><!-- /.p-access__card -->
					<div class="p-access__card c-flexPC">
						<div class="p-access__card-img c-flex__half">
							<img src="<?php echo get_template_directory_uri(); ?>/img/access_chika-tenjin3.webp" alt="JR博多駅からのアクセス写真説明" loading="lazy"
								width="347px" height="279px">
						</div><!-- /.p-access__card-img -->
						<div class="p-access__card-body c-flex__half">
							<span>【バス】③</span>
							<p>モバイルショップが入ったビルを目印に天神西通りを北に進み、警固参道と交差する角にあるビルです。
							</p>
						</div><!-- /.p-access__card-body -->
					</div><!-- /.p-access__card -->
					<div class="p-access__card c-flexPC">
						<div class="p-access__card-img c-flex__half">
							<img src="<?php echo get_template_directory_uri(); ?>/img/access_chika-tenjin4.webp" alt="JR博多駅からのアクセス写真説明" loading="lazy"
								width="347px" height="279px">
						</div><!-- /.p-access__card-img -->
						<div class="p-access__card-body c-flex__half">
							<span>【バス】④</span>
							<p>当院までは徒歩約2分でお越しいただけます。
							</p>
						</div><!-- /.p-access__card-body -->
					</div><!-- /.p-access__card -->
				</div>

				<div class="c-tabMenu__content" id="04">
					<div class="p-access__card c-flexPC">
						<div class="p-access__card-img c-flex__half">
							<img src="<?php echo get_template_directory_uri(); ?>/img/access_chika-tenjin1.webp" alt="JR熊本駅からのアクセス写真説明" loading="lazy" width="347px" height="279px">
						</div><!-- /.p-access__card-img -->
						<div class="p-access__card-body c-flex__half">
							<span>①</span>
							<p>【新幹線】<br>新幹線にて【JR熊本駅】で乗車し→【JR博多駅】で下車。</p>
						</div><!-- /.p-access__card-body -->
					</div><!-- /.p-access__card -->
					<div class="p-access__card c-flexPC">
						<div class="p-access__card-img c-flex__half">
							<img src="<?php echo get_template_directory_uri(); ?>/img/access_chika-tenjin2.webp" alt="JR熊本駅からのアクセス写真説明" loading="lazy" width="347px" height="279px">
						</div><!-- /.p-access__card-img -->
						<div class="p-access__card-body c-flex__half">
							<span>②</span>
							<p>【バス】<br>西鉄バスにて【博多バスターミナル】で乗車し【今泉一丁目】で下車。</p>
						</div><!-- /.p-access__card-body -->
					</div><!-- /.p-access__card -->
					<div class="p-access__card c-flexPC">
						<div class="p-access__card-img c-flex__half">
							<img src="<?php echo get_template_directory_uri(); ?>/img/access_chika-tenjin3.webp" alt="JR熊本駅からのアクセス写真説明" loading="lazy" width="347px" height="279px">
						</div><!-- /.p-access__card-img -->
						<div class="p-access__card-body c-flex__half">
							<span>③</span>
							<p>モバイルショップが入ったビルを目印に天神西通りを北に進み、警固参道と交差する角にあるビルです。</p>
						</div><!-- /.p-access__card-body -->
					</div><!-- /.p-access__card -->
					<div class="p-access__card c-flexPC">
						<div class="p-access__card-img c-flex__half">
							<img src="<?php echo get_template_directory_uri(); ?>/img/access_chika-tenjin4.webp" alt="JR熊本駅からのアクセス写真説明" loading="lazy" width="347px" height="279px">
						</div><!-- /.p-access__card-img -->
						<div class="p-access__card-body c-flex__half">
							<span>④</span>
							<p>当院までは徒歩約2分でお越しいただけます。</p>
						</div><!-- /.p-access__card-body -->
					</div><!-- /.p-access__card -->
				</div>
			</div><!-- /.c-tabMenu -->
			<div class="u-spacer__l"></div><!-- /.u-spacer__l -->
			<!-- /.spアコーディオンメニュー -->
			<div class="u-pcNone">
				<dl class="c-accordion">
					<dt class="c-accordion__tab js-accordion c-accordion__tabAccess">地下鉄天神駅からお越しの場合(徒歩７分)</dt>
					<dd class="c-accordion__contents js-content">
						<img src="<?php echo get_template_directory_uri(); ?>/img/access_chika-tenjin1.webp" alt="JR熊本駅からのアクセス写真説明" loading="lazy">
						<p class="c-sentence">地下鉄天神駅⑥番出口から福岡駅通りを真っ直ぐ南へ進み、西鉄福岡（天神）駅の大きな入り口があり、その正面の天神21号線に入ります。</p>
						<div class="u-spacer__m"></div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/access_chika-tenjin2.webp" alt="JR熊本駅からのアクセス写真説明" loading="lazy">
						<p class="c-sentence">中華料理店がある交差点を左折し、メルヘン通りを真っ直ぐ進むと、左手に警固神社の入り口が見えてきます。</p>
						<div class="u-spacer__m"></div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/access_chika-tenjin3.webp" alt="JR熊本駅からのアクセス写真説明" loading="lazy">
						<p class="c-sentence">その正面の警固参道に入って真っ直ぐ進み、天神西通りと交差する角にあるビルです。</p>
						<div class="u-spacer__m"></div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/access_chika-tenjin4.webp" alt="JR熊本駅からのアクセス写真説明" loading="lazy">
						<p class="c-sentence">当院までは徒歩約7分でお越しいただけます。</p>
						<div class="u-spacer__m"></div>
					</dd>
				</dl><!-- /.c-accordion -->

				<dl class="c-accordion">
					<dt class="c-accordion__tab js-accordion c-accordion__tabAccess">西鉄福岡(天神)駅からお越しの場合(徒歩４分)</dt>
					<dd class="c-accordion__contents js-content">
						<img src="<?php echo get_template_directory_uri(); ?>/img/access_chika-tenjin1.webp" alt="JR熊本駅からのアクセス写真説明" loading="lazy">
						<p class="c-sentence">西鉄福岡(天神)駅三越口西側から警固公園内を抜け、今泉公園通りに出ます。</p>
						<div class="u-spacer__m"></div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/access_chika-tenjin2.webp" alt="JR熊本駅からのアクセス写真説明" loading="lazy">
						<p class="c-sentence">今泉公園通りを南に進むと左手に警固神社の入り口が見えてきます。</p>
						<div class="u-spacer__m"></div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/access_chika-tenjin3.webp" alt="JR熊本駅からのアクセス写真説明" loading="lazy">
						<p class="c-sentence">その正面の警固参道に入って真っ直ぐ進み、天神西通りと交差する角にあるビルです。</p>
						<div class="u-spacer__m"></div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/access_chika-tenjin4.webp" alt="JR熊本駅からのアクセス写真説明" loading="lazy">
						<p class="c-sentence">当院までは徒歩約5分でお越しいただけます。</p>
						<div class="u-spacer__m"></div>
					</dd>
				</dl><!-- /.c-accordion -->

				<dl class="c-accordion">
					<dt class="c-accordion__tab js-accordion c-accordion__tabAccess">JR博多駅からお越しの場合</dt>
					<dd class="c-accordion__contents js-content">
						<img src="<?php echo get_template_directory_uri(); ?>/img/access_chika-tenjin1.webp" alt="JR熊本駅からのアクセス写真説明" loading="lazy">
						<p class="c-sentence">【電車】<br>博多駅より空港線にて姪浜行に乗車。天神駅にて下車し上記のルートよりお越しいただけます。</p>
						<div class="u-spacer__m"></div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/access_chika-tenjin2.webp" alt="JR熊本駅からのアクセス写真説明" loading="lazy">
						<p class="c-sentence">【バス】<br>駅ビル1階のバスターミナルへ。西鉄バスにて【博多バスターミナル】で乗車し【今泉一丁目】で下車。モバイルショップが入ったビルを目印に天神西通りを北に進み、警固参道と交差する角にあるビルです。当院までは徒歩約2分でお越しいただけます。</p>
					</dd>
				</dl><!-- /.c-accordion -->

				<dl class="c-accordion">
					<dt class="c-accordion__tab js-accordion c-accordion__tabAccess">JR熊本駅からお越しの場合</dt>
					<dd class="c-accordion__contents js-content">
						<img src="<?php echo get_template_directory_uri(); ?>/img/access_chika-tenjin1.webp" alt="JR熊本駅からのアクセス写真説明" loading="lazy">
						<p class="c-sentence">【新幹線】<br>新幹線にて【JR熊本駅】で乗車し→【JR博多駅】で下車。</p>
						<div class="u-spacer__m"></div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/access_chika-tenjin2.webp" alt="JR熊本駅からのアクセス写真説明" loading="lazy">
						<p class="c-sentence">
						【バス】<br>駅ビル1階のバスターミナルへ。西鉄バスにて【博多バスターミナル】で乗車し【今泉一丁目】で下車。
						<div class="u-spacer__m"></div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/access_chika-tenjin3.webp" alt="JR熊本駅からのアクセス写真説明" loading="lazy">
						<p class="c-sentence">モバイルショップが入ったビルを目印に天神西通りを北に進み、警固参道と交差する角にあるビルです。</p>
						<div class="u-spacer__m"></div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/access_chika-tenjin4.webp" alt="JR熊本駅からのアクセス写真説明" loading="lazy">
						<p class="c-sentence">当院までは徒歩約2分でお越しいただけます。</p>
						<div class="u-spacer__m"></div>
						</p>
					</dd>
				</dl><!-- /.c-accordion -->

			</div><!-- /.u-pcNone -->
			<!-- /.spアコーディオンメニュー -->

			<div class="u-pcNone">
				<section class="p-CTA l-CTA">
					<h2 class="p-CTA__heading">無料カウンセリング予約<br class="u-pcNone">お問い合わせ　</h2>
					<div class="c-buttonCTAWrap c-flex c-flex__center">
						<div class="c-buttonCTA c-buttonCTA__phone">
							<a href="tel:0120-510-830">お電話</a>
						</div>
						<div class="c-buttonCTA c-buttonCTA__mail">
							<a href="https://www.mizunomori.com/counsel/" target="_blank" rel="noopener">WEB予約</a>
						</div>
					</div><!-- /c-buttonCTAWrap -->
				</section><!-- /.p-CTA -->
			</div><!-- /.u-pcNone -->


		</div><!-- /.l-container -->
	</section><!-- /.l-access -->
</main>
<?php get_footer(); ?>