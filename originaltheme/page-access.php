<?php if ( !defined( 'ABSPATH' ) ) exit; ?>
<?php get_header(); ?>
<main>
	<section class="l-jumbotron c-jumbotron">
		<div class="c-jumbotron__mv">
			<picture>
				<source srcset="<?php echo get_template_directory_uri(); ?>/img/access/mv_pc.webp" media="(min-width:768px)"/>
				<img src="<?php echo get_template_directory_uri(); ?>/img/access/mv_sp.webp" alt="">
			</picture>
		</div><!-- /c-jumbotron__mv -->
		<div class="l-container c-jumbotron__inner">
			<h1 class="c-jumbotron__title">
				<span>アクセス情報</span>
			</h1><!-- /c-jumbotron__title -->
		</div><!-- /l-container -->
	</section><!-- /c-jumbotron -->

	<div class="l-breadcrumb p-breadcrumb">
		<div class="l-container__narrow">
			<nav>
				<ol class="p-breadcrumb__list">
					<li><a href="<?php echo esc_url(home_url('')); ?>">TOP</a></li>
					<li>アクセス情報</li>
				</ol>
			</nav>
		</div><!-- /l-container -->
	</div><!-- /p-breadcrumb -->

	<div class="u-bgMainColor">
		<div class="l-container">
			<nav class="c-navigation l-navigation">
				<h2 class="u-visually-hidden">ページナビゲーション</h2>
				<ul class="c-navigation__list c-flex c-flex__alignCenter c-flex__wrap">
					<li class="c-navigation__listItem"><a href="<?php echo esc_url(home_url('')); ?>/#tenjineki">地下鉄天神駅から</a></li>
					<li class="c-navigation__listItem"><a href="<?php echo esc_url(home_url('')); ?>/#nishitetsu">西鉄福岡駅から</a></li>
					<li class="c-navigation__listItem"><a href="<?php echo esc_url(home_url('')); ?>/#hakataeki">JR博多駅から</a></li>
					<li class="c-navigation__listItem"><a href="<?php echo esc_url(home_url('')); ?>/#kumamoto">熊本駅から</a></li>
				</ul><!-- /c-navigation__list --> 
			</nav>
		</div><!-- /l-container -->
	</div><!-- /u-bgMainColor -->

	<section class="p-access l-access l-access__lower">
		<div class="l-container__narrow">
			<h2 class="p-access__sectionTitle">交通機関からのアクセス時間</h2>
			<table class="p-access__table">
				<tr>
					<td rowspan="4" class="p-access__tableLeft">交通機関</td>
					<td class="c-flex c-flex__center c-flex__alignCenter">
						<span>地下鉄天神駅</span>
						<span>徒歩7分</span>
					</td>
				</tr>
				<tr>
					<td class="c-flex c-flex__center c-flex__alignCenter">
						<span>西鉄福岡駅</span>
						<span>徒歩5分</span>
					</td>
				</tr>
				<tr>
					<td class="c-flex c-flex__center c-flex__alignCenter">
						<span>JR博多駅</span>
						<span>電車で15分<br>バス20分</span>
					</td>
				</tr>
				<tr>
					<td class="c-flex c-flex__center c-flex__alignCenter">
						<span>熊本駅</span>
						<span>1時間10分</span>
					</td>
				</tr>
			</table><!-- /p-access__table -->
		</div><!-- /l-container -->
		<div class="l-access__map p-access__map">
			<div class="p-access__address">
					<p class="p-access__address-title u-fontGothic">水の森美容外科　福岡院</p>
					<p class="p-access__address-text">診察時間　10:00〜19:00 （年中無休）</p>
					<p class="p-access__address-text">〒810-0001<br>福岡県福岡市中央区天神2-3-20</p>
			</div><!-- /.p-access__address -->
			<div class="p-access__map-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.70739563629!2d130.39740849999998!3d33.5869457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35419185b1c7e21b%3A0x40c2b0edabfad053!2z44CSODEwLTAwMDEg56aP5bKh55yM56aP5bKh5biC5Lit5aSu5Yy65aSp56We77yS5LiB55uu77yT4oiS77yS77yQ!5e0!3m2!1sja!2sjp!4v1649390871152!5m2!1sja!2sjp" width="460" height="220" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div><!-- /.p-access__map-map -->
		</div><!-- /.p-access__map -->
	</section><!-- /p-access -->

	<div class="u-bgCreamColor">
		<section class="p-accessPoint l-accessPoint">
			<div class="l-container__narrow">
				<div class="p-accessPoint__box">
					<div class="p-accessPoint__inner">

						<div class="p-accessPoint__section">
							<h3 id="tenjineki" class="p-accessPoint__sectionTitle">地下鉄天神駅からのアクセス</h3>
								<p class="p-accessPoint__lead">地下鉄天神駅から徒歩7分です。</p>
									<div class="p-accessPoint__steps">
										<figure class="c-flexPC c-flex__alignCenter">
											<img src="<?php echo get_template_directory_uri(); ?>/img/access/access_chika-tenjin1.webp" alt="">
											<figcaption class="c-sentence">地下鉄天神駅➅番出口から福岡駅通りを真っ直ぐ南へ進み、西鉄福岡（天神）駅の大きな入り口があり、その正面の天神21号線に入ります。</figcaption>
										</figure>
									</div><!-- /.p-accessPoint__steps -->
									
									<div class="p-accessPoint__steps">
										<figure class="c-flexPC c-flex__alignCenter">
											<img src="<?php echo get_template_directory_uri(); ?>/img/access/access_chika-tenjin2.webp" alt="">
											<figcaption class="c-sentence">中華料理店がある交差点を左折し、メルヘン通りを真っ直ぐ進むと、左手に警固神社の入り口が見えてきます。</figcaption>
										</figure>
									</div><!-- /.p-accessPoint__steps -->

									<div class="p-accessPoint__steps">
										<figure class="c-flexPC c-flex__alignCenter">
											<img src="<?php echo get_template_directory_uri(); ?>/img/access/access_chika-tenjin3.webp" alt="">
											<figcaption class="c-sentence">その正面の警固参道に入って真っ直ぐ進み、天神西通りと交差する角にあるビルです。</figcaption>
										</figure>
									</div><!-- /.p-accessPoint__steps -->

									<div class="p-accessPoint__steps">
										<figure class="c-flexPC c-flex__alignCenter">
											<img src="<?php echo get_template_directory_uri(); ?>/img/access/access_chika-tenjin4.webp" alt="">
											<figcaption class="c-sentence">1階が●●伸びるの〇階が当院でございます。<br>エレベーターがございますのでお使い下さい。</figcaption>
										</figure>
									</div><!-- /.p-accessPoint__steps -->

						</div><!-- /p-accessPoint__section -->

						<div class="p-accessPoint__section">
							<h3 id="nishitetsu" class="p-accessPoint__sectionTitle">西鉄福岡駅からのアクセス</h3>
							<p class="p-accessPoint__lead">西鉄福岡駅から徒歩５分です。</p>
							<p class="p-accessPoint__sentence c-sentence">西鉄福岡（天神）駅三越口西側から警固公園内を抜け、今泉公園通りに出ます。<br>今泉公園通りを南に進むと左手に警固神社の入り口が見えてきます。<br>その正面の警固参道に入って真っ直ぐ進み、天神西通りと交差する角にあるビルです。<br>当院までは徒歩約5分でお越しいただけます。</p>
						</div><!-- /p-accessPoint__section -->

						<div class="p-accessPoint__section">
							<h3 id="hakataeki" class="p-accessPoint__sectionTitle">JR博多駅からのアクセス</h3>
							<p class="p-accessPoint__lead">JR博多駅から電車で15分、<br class="u-pcNone">バスで20分です。</p>
							<div class="p-accessPoint__sentence">
								<p class="c-sentence">【電車】<br>博多駅より空港線にて姪浜行に乗車。天神駅にて下車し上記のルートよりお越し頂けます。</p>
							</div>
							<div class="p-accessPoint__sentence">
								<p class="c-sentence">【バス】<br>駅ビル1 階のバスターミナルへ。<br>西鉄バスにて【博多バスターミナル】で乗車し【今泉一丁目】で下車。モバイルショップが入ったビルを目印に天神西通りを北へ進み、警固参道と交差する角にあるビルです。<br>当院までは徒歩約2分でお越しいただけます。</p>
							</div>
						</div><!-- /p-accessPoint__section -->

						<div class="p-accessPoint__section">
							<h3 id="kumamoto" class="p-accessPoint__sectionTitle">JR熊本駅からのアクセス</h3>
							<p class="p-accessPoint__lead">熊本駅から新幹線・バスを利用すると<br>1時間10分です。</p>
							<p class="p-accessPoint__sentence c-sentence">【新幹線】<br>新幹線にて　【JR 熊本駅】で乗車し→【JR 博多駅】で下車。<br>西鉄バスにて【博多バスターミナル】で乗車し【今泉一丁目】で下車。<br>モバイルショップが入ったビルを目印に天神西通りを北へ進み、警固参道と交差する角にあるビルです。<br>当院までは徒歩2 分でお越しいただけます。</p>
						</div><!-- /p-accessPoint__section -->

						<div class="c-flexPC c-flex__reverse p-accessPoint__bottom">
							<div class="c-flex__half">
								<img src="<?php echo get_template_directory_uri(); ?>/img/access/access_image.webp" alt="">
							</div><!-- /.c-flex__half -->
							<div class="c-flex__half">
								<p class="p-accessPoint__ctaText">道に迷われた時は<br>当院までお気軽にお電話下さい。</p>
								<div class="p-CTA p-CTA__narrow">
									<h2 class="p-CTA__heading">無料カウンセリング予約<br>お問い合わせ　</h2>
									<div class="c-buttonCTAWrap c-flex c-flex__center">
										<div class="c-buttonCTA c-buttonCTA__phone c-buttonCTA__narrow">
											<a href="tel:0120-510-830">お電話</a>
										</div>
										<div class="c-buttonCTA c-buttonCTA__mail c-buttonCTA__narrow">
											<a href="https://www.mizunomori.com/counsel/" target="_blank" rel="noopener">WEB予約</a>
										</div>
									</div><!-- /c-buttonCTAWrap -->
								</div><!-- /.p-CTA -->
							</div><!-- /.c-flex__half -->
						</div><!-- /.c-flexPC -->

					</div><!-- /p-accessPoint__inner -->
				</div><!-- /p-accessPoint__box --> 
			</div><!-- /l-container__narrow -->
		</section><!-- /p-accessPoint -->
	</div><!-- /u-bgCreamColor -->

	<section id="doctor" class="l-spacer__sectionBottom">
		<div class="l-container__narrow">
			<div class="l-spacer__headingTop c-heading">
				<h2 class="c-heading__Lower">福岡院医師</h2>
			</div><!-- /.c-heading -->
			<div class="c-DrProfile">
				<div class="c-flex">
					<div class="c-DrProfile__left"><!-- pcレイアウト -->
						<div class="c-DrProfile__img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/doc_kaneko.jpg" alt="院長　金子貴則">
						</div><!-- /.c-DrProfile__img -->
						<h3 class="c-DrProfile__name u-pcNone">
							水の森美容外科&emsp;福岡院<br>院長&emsp;<span>金子&ensp;貴則</span>
						</h3><!-- /.c-DrProfile__name -->
						<div class="c-DrProfile__body u-pcNone">
							<p class="c-sentence">医療においては信頼関係が大事であると私は思っております。患者様のために知識、技術の研鑽を積み重ね、信頼される医師になるため精進して参ります。<br>皆様のお役に立てることができれば非常に嬉しいです。<br>ご来院お待ちしております。</p>
							<div class="u-spacer__s"></div><!-- /.u-spacer__s -->
							<div class="c-buttonOrdinary">
								<a href="<?php echo esc_url(home_url('')); ?>/doctor.html#kaneko">院長あいさつ</a>
							</div>
						</div><!-- /.c-DrProfile__body -->
						<div class="c-DrProfile__career">
							<p class="c-DrProfile__conference"><span>所属学会・取得学位</span></p>
							<ul class="c-DrProfile__list">
								<li class="c-DrProfile__list-item">BOTOX VISTA 認定医</li>
								<li class="c-DrProfile__list-item">ジュビダームビスタ認定医</li>
								<li class="c-DrProfile__list-item">日本救急医学会 ICLS 修了</li>
								<li class="c-DrProfile__list-item">日本美容外科学会（Jsas）正会員</li>
								<li class="c-DrProfile__list-item">日本美容外科医師会　会員</li>
							</ul><!-- /.c-DrProfile__list -->
						</div><!-- /.c-DrProfile__career -->
						<a href="https://www.instagram.com/kaneko_takanori/" target="_blank" rel="noopener" class="c-DrProfile__instagram u-pcNone">
							<img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="instagram" class="" width="20px" height="20px">
							<span class="u-fontGothic">インスタグラム</span>
						</a><!-- /c-DrProfile__instagram -->
					</div><!-- /c-DrProfile__left -->

					<div class="c-DrProfile__right">
						<h3 class="c-DrProfile__name u-spNone">
							水の森美容外科&emsp;福岡院<br>院長&emsp;<span>金子&ensp;貴則</span>
						</h3><!-- /.c-DrProfile__name -->
						<div class="c-DrProfile__body u-spNone">
							<p class="c-sentence">医療においては信頼関係が大事であると私は思っております。患者様のために知識、技術の研鑽を積み重ね、信頼される医師になるため精進して参ります。<br>皆様のお役に立てることができれば非常に嬉しいです。<br>ご来院お待ちしております。</p>
							<div class="u-spacer__l"></div><!-- /.u-spacer__s -->
							<div class="c-buttonOrdinary">
								<a href="<?php echo esc_url(home_url('')); ?>/doctor.html#kaneko">院長あいさつ</a>
							</div>
						</div><!-- /.c-DrProfile__body -->
						<div class="u-spacer__l"></div><!-- /.u-spacer__s -->
						<a href="<?php echo esc_url(home_url('')); ?>" target="_blank" rel="noopener" class="c-DrProfile__instagram u-spNone">
							<img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="instagram" class="" width="20px" height="20px">
							<span class="u-fontGothic">インスタグラム</span>
						</a><!-- /c-DrProfile__instagram -->
					</div><!-- /c-DrProfile__right -->
				</div><!-- /c-flex -->
			</div><!-- /.c-DrProfile -->
		</div><!-- /l-container -->
	</section><!-- /#doctor -->
	<div class="u-spacer__m"></div>
</main>
<?php get_footer(); ?>
