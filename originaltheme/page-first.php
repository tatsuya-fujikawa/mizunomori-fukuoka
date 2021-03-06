<?php if ( !defined( 'ABSPATH' ) ) exit; ?>
<?php get_header(); ?>
<main>
	<section class="l-jumbotron c-jumbotron">
		<div class="c-jumbotron__mv">
			<picture>
				<source srcset="<?php echo get_template_directory_uri(); ?>/img/first/mv_pc.webp" media="(min-width:768px)"/>
				<img src="<?php echo get_template_directory_uri(); ?>/img/first/mv_sp.webp" alt="">
			</picture>
		</div><!-- /c-jumbotron__mv -->
		<div class="l-container c-jumbotron__inner">
			<h1 class="c-jumbotron__title">
				<span>はじめての方へ</span>
			</h1><!-- /c-jumbotron__title -->
		</div><!-- /l-container -->
	</section><!-- /c-jumbotron -->

	<div class="l-breadcrumb p-breadcrumb">
		<div class="l-container__narrow">
			<nav>
				<ol class="p-breadcrumb__list">
					<li><a href="<?php echo esc_url(home_url('')); ?>">TOP</a></li>
					<li>はじめての方へ</li>
				</ol>
			</nav>
		</div><!-- /l-container -->
	</div><!-- /p-breadcrumb -->

	<div class="u-bgMainColor">
		<div class="l-container__narrow">
			<nav class="c-navigation l-navigation">
				<ul class="c-navigation__list c-flex c-flex__alignCenter c-flex__wrap">
					<li class="c-navigation__listItem"><a href="<?php echo esc_url(home_url('')); ?>/#flow">ご予約の流れ</a></li>
					<li class="c-navigation__listItem"><a href="<?php echo esc_url(home_url('')); ?>/#baggage">当日のお持ち物</a></li>
					<li class="c-navigation__listItem"><a href="<?php echo esc_url(home_url('')); ?>/#under20">未成年・<br class="u-pcNone">外国籍の方</a></li>
					<li class="c-navigation__listItem"><a href="<?php echo esc_url(home_url('')); ?>/#payment">お支払い方法</a></li>
					<li class="c-navigation__listItem"><a href="<?php echo esc_url(home_url('')); ?>/#doctor">福岡院医師</a></li>
					<li class="c-navigation__listItem"><a href="<?php echo esc_url(home_url('')); ?>/#access">アクセス情報</a></li>
				</ul><!-- /c-navigation__list -->
			</nav>
		</div><!-- /l-container -->
	</div><!-- /u-bgMainColor -->

	<section class="l-first p-first">
		<div class="l-container__narrow">
			<div class="p-first__point u-bgPinkColor">
				<h2 class="p-first__pointTitle"><span>福岡院３つの安心ポイント</span></h2>
				<ul class="p-first__pointList">
					<li class="p-first__pointListItem">カウンセリング・検診は何度でも無料</li>
					<li class="p-first__pointListItem">不要な治療やオプションは勧めない</li>
					<li class="p-first__pointListItem">医師がご相談を伺います</li>
				</ul><!-- /.p-first__pointList -->
			</div><!-- /.p-first__point -->
			<div class="p-first__lead">
				<p class="c-sentence c-sentence__wideSpacing">初めての美容整形の場合、<br class="u-pcNone">緊張されるのは当たり前のことです。</p>
				<p class="c-sentence c-sentence__wideSpacing">自分のコンプレックスを誰かに話すは<br class="u-pcNone">勇気のいることです。</p>
				<p class="c-sentence c-sentence__wideSpacing">しかし打ち明ける事で、<br class="u-pcNone">不安から少し開放されることもございます。</p>
				<p class="c-sentence c-sentence__wideSpacing">当院のカウンセリングは無料ですのでお悩みのことや、心配なことなど遠慮なくご相談下さい。</p>
				<p class="c-sentence c-sentence__wideSpacing">カウンセリングした結果、<br class="u-pcNone">整形しないと決めるのも良い選択です。</p>
			</div><!-- /.p-first__lead -->
		</div><!-- /.l-container -->
	</section><!-- /.p-first -->

	<div class="u-bgBeigeColor">
		<section id="flow" class="l-reservationFlow p-reservationFlow">
			<div class="l-container__narrow">
				<div class="p-reservationFlow__box">
					<h2 class="p-reservationFlow__title">ご予約の流れ</h2>

					<div class="p-reservationFlow__steps">
						<h3 class="p-reservationFlow__lead c-flex c-flex__alignCenter"><span>1</span>ご予約</h3>
						<div class="c-flexPC c-flex__alignCenter">
							<div class="p-reservationFlow__img c-flex__half">
								<img src="<?php echo get_template_directory_uri(); ?>/img/first/contact1.webp" alt="">
							</div>
							<div class="p-reservationFlow__body c-flex__half">
								<p class="c-sentence">当院は完全予約制となっております。</p>
								<p class="c-sentence">ご予約はWeb予約とお電話にて承っております。</p>
								<p class="c-sentence">お電話の際は以下お伝え下さい。</p>
								<ul>
									<li>・お悩みの内容やご希望の施術</li>
									<li>・カウンセリング希望日</li>
								</ul>
								<p class="c-sentence">必要事項はカウンセラーが丁寧にご説明致します。</p>
							</div>
						</div><!-- /.c-flexPC -->
					</div><!-- /.p-reservationFlow__steps -->

					<div class="p-reservationFlow__steps">
						<h3 class="p-reservationFlow__lead c-flex c-flex__alignCenter"><span>2</span>ご来院</h3>
						<div class="c-flexPC c-flex__alignCenter">
							<div class="p-reservationFlow__img c-flex__half">
								<img src="<?php echo get_template_directory_uri(); ?>/img/first/contact2.webp" alt="">
							</div>
							<div class="p-reservationFlow__body c-flex__half">
								<p class="c-sentence">受付後、問診表をご記入頂きます。</p>
								<p class="c-sentence">コロナウイルス感染防止のため受付前に、体温のご計測とアルコール消毒を行わせて頂きます。</p>
								<p class="c-sentence">万が一熱のある場合はお帰り頂く可能性もございますので、事前にご自宅にて測定頂くようお願いします。</p>
							</div>
						</div><!-- /.c-flexPC -->
					</div><!-- /.p-reservationFlow__steps -->

					<div class="p-reservationFlow__steps">
						<h3 class="p-reservationFlow__lead c-flex c-flex__alignCenter"><span>3</span>医師の診察</h3>
						<div class="c-flexPC c-flex__alignCenter">
							<div class="p-reservationFlow__img c-flex__half">
								<img src="<?php echo get_template_directory_uri(); ?>/img/first/contact3.webp" alt="">
							</div>
							<div class="p-reservationFlow__body c-flex__half">
								<p class="c-sentence">医師が、問診表を元に改めてご要望を伺った上でカウンセリングを行います。</p>
								<p class="c-sentence">あらかじめこういう風になりたいなどもし固まっていたら画像をご準備頂くこともおすすめです。</p>
								<p class="c-sentence">また他のクリニックでこう言われたけど実際どうなのなど施術に関する疑問点やご不安なことを何でもお聞きください。</p>
							</div>
						</div><!-- /.c-flexPC -->
					</div><!-- /.p-reservationFlow__steps -->

					<div class="p-reservationFlow__steps">
						<h3 class="p-reservationFlow__lead c-flex c-flex__alignCenter"><span>4</span>カウンセラーへのご相談</h3>
						<div class="c-flexPC c-flex__alignCenter">
							<div class="p-reservationFlow__img c-flex__half">
								<img src="<?php echo get_template_directory_uri(); ?>/img/first/contact4.webp" alt="">
							</div>
							<div class="p-reservationFlow__body c-flex__half">
								<p class="c-sentence">医師との診察後にカウンセラーがお話を伺います。</p>
								<p class="c-sentence">医師との会話では聞きそびれたことやダウンタイムの過ごし方などご不明なことを再度ご確認頂けます。</p>
								<p class="c-sentence">施術を検討される場合はお見積りもお出しするのでお申し付け下さい。</p>
							</div>
						</div><!-- /.c-flexPC -->
					</div><!-- /.p-reservationFlow__steps -->

					<div class="p-reservationFlow__steps">
						<h3 class="p-reservationFlow__lead c-flex c-flex__alignCenter"><span>5</span>ご帰宅</h3>
						<div class="c-flexPC c-flex__alignCenter">
							<div class="p-reservationFlow__img c-flex__half">
								<img src="<?php echo get_template_directory_uri(); ?>/img/first/contact5.webp" alt="">
							</div>
							<div class="p-reservationFlow__body c-flex__half">
								<p class="c-sentence">カウンセラーとのお話し後、終了となります。当日診察をしてから施術するか決めたい場合は事前にご相談下さい。</p>
								<p class="c-sentence">当院で施術頂けると嬉しいですが、<br>大事なお身体ですので、ぜひ他院のカウンセリングに足を運んで納得のいくクリニックや医師をお選び下さい。</p>
							</div>
						</div><!-- /.c-flexPC -->
					</div><!-- /.p-reservationFlow__steps -->

					<div class="p-reservationFlow__notes">
						<div class="p-reservationFlow__notesInner">
							<h3 class="p-reservationFlow__notesTitle">ご来院にあたり注意事項</h3>
							<ul class="p-reservationFlow__notesList">
								<li>通院・内服薬・妊娠中・授乳中の方は事前にご申告ください。</li>
								<li>予防接種は、施術前後2日間はお控えいただいております。</li>
								<li>ご遅刻をされますと、ご案内の順番が前後する場合や、ご案内ができかねる場合がございます。</li>
								<li>アクセサリー類を外し、ノーメイクか薄めのメイクにてご来院をお願いします。(指輪・ピアス・ネックレス)</li>
							</ul>
							<h3 class="p-reservationFlow__notesTitle">二重・目元のご診察の方へ</h3>
							<ul class="p-reservationFlow__notesList">
								<li>赤みやかぶれにより診察が難しくなる可能性があるため、<span class="u-strong">アイプチ/メザイク/アイテープ/つけまつ毛</span>などは診察の3日～7日前から中止し、当日は外した状態でご来院下さい。</li>
								<li><span class="u-strong">コンタクトレンズ（カラー・サークルレンズ含む）</span>は当院のパウダールームで外していただくことも可能です。<br>その際は、コンタクトケース・洗浄液をご持参下さい。<br>メイク道具をご持参頂き、カウンセリング終了後パウダールームにてメイク頂けます。</li>
							</ul>
						</div><!-- /.p-reservationFlow__notesInner -->
					</div><!-- /p-reservationFlow__notes -->
				</div><!-- /.p-reservationFlow__box -->

			</div><!-- /.l-container -->
		</section><!-- /.p-reservationFlow -->
	</div><!-- /.u-bgBeigeColor -->

	<section id="baggage" class="l-belongings p-belongings">
		<div class="l-container__narrow">
			<div class="l-spacer__headingTop c-heading">
				<h2 class="c-heading__Lower">当日のお持ちもの</h2>
			</div><!-- /.c-heading -->
			<div class="p-belongings__wrap">
				<h3 class="p-belongings__lead">必須のもの</h3>
				<p class="c-sentence p-belongings__sentence">身分証明書（健康保険証、免許証、パスポートなど）を必ずお持ちください。</p>
			</div><!-- /.p-belongings__wrap -->
			<div class="p-belongings__wrap">
				<h3 class="p-belongings__lead">未成年で必要な方</h3>
				<p class="c-sentence p-belongings__sentence">親権者同意書。<br>未成年の方でも必要な方、不要な方がいらっしゃいます。 詳しくは<a class="u-textLink" href="<?php echo esc_url(home_url('')); ?>/#under20">「未成年の方へ」</a>をご確認下さい。</p>
			</div><!-- /.p-belongings__wrap -->
			<div class="p-belongings__wrap">
				<h3 class="p-belongings__lead">あると良いもの</h3>
				<p class="c-sentence p-belongings__sentence">メイク道具、コンタクトケース、コンタクト液</p>
				<p class="c-sentence p-belongings__sentence"><span class="u-underline">当日施術をされる場合</span><br>メガネ、サングラス、マスク</p>
			</div><!-- /.p-belongings__wrap -->
		</div><!-- /.l-container__narrow -->
	</section><!-- /.p-belongings -->


	<div class="u-bgPinkColor">
		<section id="under20" class="p-under20 l-under20">
			<div class="l-container__narrow">
				<div class="p-under20__box">
					<div class="p-under20__inner">
						<div class="l-spacer__headingTop c-heading">
							<h2 class="c-heading__Lower">未成年・外国籍の方</h2>
						</div><!-- /.c-heading -->
						<div class="p-under20__top c-flexPC c-flex__alignCenter">
							<div class="c-flex__half">
								<p class="c-sentence">当院では16歳未満の方は施術を受けられません。<br>
									16歳～19歳の方は親権者様のご同伴が必要です。</p>
							</div><!-- /c-flex__half -->
							<div class="c-flex__half p-under20__topRight">
								<a href="https://www.mizunomori.com/under20/" target="_blank" rel="noopener">
									<img src="<?php echo get_template_directory_uri(); ?>/img/first/attention.webp" alt="未成年の患者様へ">
								</a>
							</div><!-- /c-flex__half -->
						</div><!-- /c-flexPC -->

						<div class="p-under20__body">
							<h3 class="p-under20__sectionTitle">外国籍の方へ</h3>
							<p class="p-under20__bodyLeading c-sentence">
								■外国籍の患者様にも施術内容をご理解・ご納得頂いた上で、安心して受けて頂きたいと考えております。 そのために、日本語を聞く・話す・書く(ローマ字可)ことができない患者様は、必ず通訳の方と一緒にご来院下さいませ。<br>
								■パスポートをご持参下さい。 
							</p>
							<p class="p-under20__bodyLeading c-sentence">
								【English】 If you do not speak Japanese, and would like to consult with a doctor, please come with your interpreter. We would like to all information including necessary medical matters through the interpreter. Reservation is required before coming. Please bring your passport.
							</p>
							<p class="p-under20__bodyLeading c-sentence">
								【中文】 为了让中国来的求美者也能理解手术内容,并且在本人同意的前提下安心地接受我们的服务,请不会日语的求美者一定要随同翻译人员一起来院。并且准备好您的护照。
							</p>

						</div><!-- /p-under20__body -->
					</div><!-- /p-under20__inner -->
				</div><!-- /p-under20__box -->
			</div><!-- /l-container__narrow -->
		</section><!-- /under20 -->
	</div><!-- /u-bgPinkColor -->

	<section id="payment" class="p-aboutPayment l-aboutPayment">
		<div class="l-container__narrow">
			<div class="l-spacer__headingTop c-heading">
				<h2 class="c-heading__Lower">お支払い方法</h2>
			</div><!-- /.c-heading -->
			<div class="p-aboutPayment__body">
				<div class="c-flexPC c-flex__reverse">
					<div class="c-flex__half p-aboutPayment__bodyLeft">
						<p class="c-sentence u-centerposition">4種類のお支払い方法より、お選びいただけます。</p>
						<div class="c-flex c-flex__wrap p-aboutPayment__select">
							<figure>
								<img src="<?php echo get_template_directory_uri(); ?>/img/first/f10-1.webp" alt="現金">
								<figcaption>現金</figcaption>
							</figure>
							<figure>
								<img src="<?php echo get_template_directory_uri(); ?>/img/first/f10-2.webp" alt="クレジットカード">
								<figcaption>クレジットカード</figcaption>
							</figure>
							<figure>
								<img src="<?php echo get_template_directory_uri(); ?>/img/first/f10-3.webp" alt="銀行振込">
								<figcaption>銀行振込</figcaption>
							</figure>
							<figure>
								<img src="<?php echo get_template_directory_uri(); ?>/img/first/f10-4.webp" alt="医療ローン">
								<figcaption>医療ローン</figcaption>
							</figure>
						</div><!-- /c-flex -->
					</div><!-- /c-flex__half -->

					<div class="c-flex__half">
						<div class="p-aboutPayment__bodyRight">
							<h3 class="p-aboutPayment__sectionTitle">医療ローンについて</h3>
							<p class="p-aboutPayment__bodyLeading c-sentence">
								医療ローンのお手続きはウェブにて審査を行っております。 審査にはお時間を要する場合がございますので、ローンをご検討されている方は以下をご確認の上、お時間には余裕を持ってご来院下さいませ。
							</p>
							<p class="p-aboutPayment__bodyLeading c-sentence">
								<span class="u-underline">ご条件</span><br>
								有職者の方(19歳になる年の未成年者も可)ご本人様名義でローンを組む事が可能です。<br>■未成年者の場合は連帯保証人が必要となるため、保護者様ご同伴でのご来院をお願い致します。
							</p>
							<p class="p-aboutPayment__bodyLeading c-sentence">
								<span class="u-underline">審査に必要なもの</span><br>
								カウンセリングの当日にご施術をご検討されている方は、 お手続き時に必要となりますので忘れずにご持参下さい。
							</p>
							<p class="p-aboutPayment__bodyLeading c-sentence">
								身分証明書(現住所の記載があるもの)<br>
								銀行印<br>
								銀行カード・通帳<br>
								ご勤務先のご住所・ご連絡先
							</p>
						</div><!-- /p-aboutPayment__bodyRight -->
					</div><!-- /c-flex__half -->

				</div><!-- /c-flexPC -->
			</div><!-- /p-aboutPayment__body -->
		</div><!-- /l-container__narrow -->
	</section><!-- /payment -->


	<section id="doctor" class="u-bgMainColor l-spacer__sectionBottom">
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
	</section><!-- /u-bgMainColor -->

	<section id="access" class="l-access p-access">
		<div class="l-container__narrow">
			<div class="l-spacer__headingTop c-heading">
				<h2 class="c-heading__Lower">アクセス情報</h2>
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
						<li id="c-tabMenu01" role="tab"><a class="u-fontGothic active" href="<?php echo esc_url(home_url('')); ?>" data-id="01">地下鉄天神駅から<br>お越しの場合（徒歩7分）</a></li>
						<li id="c-tabMenu02" role="tab"><a class="u-fontGothic" href="<?php echo esc_url(home_url('')); ?>" data-id="02">西鉄福岡(天神)駅から<br>お越しの場合（徒歩4分）</a></li>
						<li id="c-tabMenu03" role="tab"><a class="u-fontGothic" href="<?php echo esc_url(home_url('')); ?>" data-id="03">JR博多駅から<br>お越しの場合</a></li>
						<li id="c-tabMenu04" role="tab"><a class="u-fontGothic" href="<?php echo esc_url(home_url('')); ?>" data-id="04">JR熊本駅から<br>お越しの場合</a></li>
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
