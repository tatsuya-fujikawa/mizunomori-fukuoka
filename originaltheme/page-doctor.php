<?php get_header(); ?>
<main>
	<section class="l-jumbotron c-jumbotron">
		<div class="c-jumbotron__mv">
			<picture>
				<!-- <source srcset="./img/first/mv_pc.webp" media="(min-width:768px)"/> -->
				<source srcset="<?php echo get_template_directory_uri(); ?>/img/doctor/mv_pc.webp" media="(min-width:768px)" />
				<!-- <img src="./img/first/mv_sp.webp" alt=""> -->
				<img src="<?php echo get_template_directory_uri(); ?>/img/doctor/mv_sp.webp" alt="">
			</picture>
		</div><!-- /c-jumbotron__mv -->
		<div class="l-container c-jumbotron__inner">
			<h1 class="c-jumbotron__title">
				<span>福岡院ドクター紹介</span>
			</h1><!-- /c-jumbotron__title -->
		</div><!-- /l-container -->
	</section><!-- /c-jumbotron -->

	<div class="l-breadcrumb p-breadcrumb">
		<div class="l-container l-container__narrow">
			<nav>
				<ol class="p-breadcrumb__list">
					<li><a href="index.html">TOP</a></li>
					<li>ドクター紹介</li>
				</ol>
			</nav>
		</div><!-- /l-container -->
	</div><!-- /p-breadcrumb -->

	<section class="p-doctor l-doctor">
		<div class="l-container l-container__narrow">
			<div class="l-doctor__top">
				<h2 class="u-centerposition c-sentence">福岡院ドクターをご紹介いたします</h2>
			</div><!-- /l-spacer -->

			<div id="kaneko" class="p-doctor__box">
				<div class="c-flexPC c-flex__alignCenter">
					<div class="p-doctor__img c-flex__half">
						<img src="<?php echo get_template_directory_uri(); ?>/img/doctor/doc_kaneko1.webp" alt="金子院長">
					</div><!-- /p-doctor__img -->
					<div class="p-doctor__textWrap c-flex__half">
						<p class="p-doctor__en" lang="en">Takanori Kaneko</p>
						<h3>
							<p class="p-doctor__small">福岡院院長</p>
							<p class="p-doctor__name">
								<span class="u-blueCrayon">金子 貴則</span>
								<a class="p-doctor__instagram" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="" width="20px" height="20px"></a>
							</p>
						</h3>
					</div><!-- /p-doctor__textWrap -->
				</div><!-- /c-flexPC -->
				<div class="c-flexPC c-flex__spaceBetween l-doctor__body p-doctor__flex">
					<div class="p-doctor__flexItem">
						<h3 class="c-heading__point">院長挨拶</h3>
						<p class="c-sentence">患者様のお悩みが解消され、外見がより良くなることによって患者様が笑顔になれるよう、確かな知識と医療技術、思いやりの心をもって、しっかりカウンセリングさせていただきます。</p>
					</div>
					<div class="p-doctor__flexItem">
						<h3 class="c-heading__point">金子院長 紹介動画</h3>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/doctor/doc_kaneko_youtube.webp" alt=""></a>
					</div>
				</div><!-- /.c-flexPC -->

				<div class="p-doctor__button">
					<a class="p-doctor__buttonText" href="https://www.mizunomori.com/case-kaneko/" target="_blank" rel="noopener">症例写真</a>
				</div><!-- /.p-doctor__button -->

				<div class="p-doctor__button js-accordion">
					<span class="p-doctor__buttonText">詳しい経歴</span>
				</div><!-- /.p-doctor__button -->

				<div class="p-doctor__content js-content">
					<div class="p-doctor__career c-flexPC c-flex__spaceBetween">

						<div class="p-doctor__careerLeft p-doctor__flexItem">
							<img src="<?php echo get_template_directory_uri(); ?>/img/doctor/doc_kaneko2.webp" alt="金子医師">
						</div><!-- /.p-doctor__careerLeft -->

						<div class="p-doctor__careerRight p-doctor__flexItem">
							<h3 class="c-heading__point">経歴</h3>
							<ul class="p-doctor__careerList">
								<li><span>平成30年</span>大阪医科大学医学部　卒業</li>
								<li><span>平成30年</span>市立ひらかた病院</li>
								<li><span>令和2年</span>水の森美容外科　入職</li>
								<li><span>令和4年</span>水の森美容外科福岡院院長就任</li>
							</ul><!-- /.p-doctor__careerList -->
							<h3 class="c-heading__point">特記事項</h3>
							<ul class="p-doctor__careerList">
								<li><a href="">BOTOX VISTA認定医</a></li>
								<li><a href="">ジュビダームビスタ認定医</a></li>
								<li>日本美容外科学会（Jsas）正会員</li>
								<li>日本美容外科医師会　会員</li>
							</ul><!-- /.p-doctor__careerList -->
						</div><!-- /.p-doctor__careerRight -->

					</div><!-- /.p-doctor__career -->
					<div class="p-doctor__comment">
						<h3 class="c-heading__point">コメント</h3>
						<p class="c-sentence__sm c-paragraph">学生時代、家庭教師のアルバイトをしていました。<br>担当していたのは自分の見た目に自信が無く、そのせいで人との関わり合いも少なくなってしまっていた中学生の男の子でした。							</p>
						<p class="c-sentence__sm c-paragraph">研修医時代、久しぶりに大学生になった彼に会いとても驚きました。<br>彼は美容外科、皮膚科に通い、自分の見た目を理想に近付け、非常に逞しくなっていました。外見もさることながら、内面が大きく変わっていたことが印象に残っています。</p>
						<p class="c-sentence__sm c-paragraph">あまり人に心を開かず人と関わるのを避けていた彼が、積極的にコミュニケーションを取り、 明るく楽しそうにしている姿はとても輝いて見えました。</p>
						<p class="c-sentence__sm c-paragraph">この時から私は美容外科医に魅力を感じ、志すようになりました。<br>しかし、美容医療は利益中心主義であるというイメージがあり、個人的に良い印象は持っていませんでした。<br>そんな時、水の森美容外科と出会いました。<br>							利益を追い求めるわけではなく、患者様の満足の為に施術を提案する「患者様中心主義」。							これが私の求めていた美容医療のあるべき姿でした。</p>
						<p class="c-sentence__sm c-paragraph">医療においては信頼関係が大事であると私は思っております。<br>患者様のために知識、技術の研鑽を積み重ね、							信頼される医師になるため精進して参ります。<br>ご来院お待ちしております。お気軽にお越しください。</p>
					</div><!-- /.p-doctor__comment -->

					<div class="p-doctor__closeButton js-closeaccordion">
						<span>閉じる</span>
					</div><!-- /.p-doctor__closeButton -->
				</div><!-- /.p-doctor__content -->
			</div><!-- /p-doctor__box -->


			<div id="takee" class="p-doctor__box">
				<div class="c-flexPC c-flex__alignCenter">
					<div class="p-doctor__img c-flex__half">
						<img src="<?php echo get_template_directory_uri(); ?>/img/doctor/doc_takee1.webp" alt="竹江総院長">
					</div><!-- /p-doctor__img -->
					<div class="p-doctor__textWrap c-flex__half">
						<p class="p-doctor__en" lang="en">Wataru Takee</p>
						<h3>
							<p class="p-doctor__small">水の森美容外科 総院長</p>
							<p class="p-doctor__name">
								<span class="u-blueCrayon">竹江 渉</span>
							</p>
						</h3>
					</div><!-- /p-doctor__textWrap -->
				</div><!-- /c-flexPC -->
				<div class="c-flexPC c-flex__spaceBetween l-doctor__body p-doctor__flex">
					<div class="p-doctor__flexItem">
						<h3 class="c-heading__point">総院長挨拶</h3>
						<p class="c-sentence">常に患者様を身内と思って接するカウンセリング姿勢には多くの患者様から支持されており、また外科手術はオールラウンドにわたり絶対的な自信をもつ。</p>
					</div>
					<div class="p-doctor__flexItem">
						<h3 class="c-heading__point">総院長 竹江渉より患者様へ</h3>
						<a href="https://www.youtube.com/watch?v=06KYInBAGPw" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/doctor/doc_takee_youtube1.webp" alt=""></a>
						<h3 class="c-heading__point">竹江渉Youtubeチャンネル</h3>
						<a href="https://www.youtube.com/channel/UCo3qCN17xUuS-bTHxFhiEuA" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/doctor/doc_takee_youtube2.webp" alt=""></a>

					</div>
				</div><!-- /.c-flexPC -->

				<div class="p-doctor__button">
					<a class="p-doctor__buttonText" href="https://www.mizunomori.com/case-takee/" target="_blank" rel="noopener">症例写真</a>
				</div><!-- /.p-doctor__button -->

				<div class="p-doctor__button js-accordion">
					<span class="p-doctor__buttonText">詳しい経歴</span>
				</div><!-- /.p-doctor__button -->

				<div class="p-doctor__content js-content">
					<div class="p-doctor__career c-flexPC c-flex__spaceBetween">

						<div class="p-doctor__careerLeft p-doctor__flexItem">
							<img src="<?php echo get_template_directory_uri(); ?>/img/doctor/doc_takee2.webp" alt="竹江医師">
						</div><!-- /.p-doctor__careerLeft -->

						<div class="p-doctor__careerRight p-doctor__flexItem">
							<h3 class="c-heading__point">経歴</h3>
							<ul class="p-doctor__careerList">
								<li><span>平成10年</span>東京医科大学医学部　卒業</li>
								<li><span>平成11年</span>麻酔科　入職</li>
								<li><span>平成13年</span>麻酔科標榜医免許　取得</li>
								<li><span></span>大塚美容外科　入職</li>
								<li><span>平成16年</span>大手美容外科院長</li>
								<li><span>平成18年</span>水の森美容外科　開院</li>
							</ul><!-- /.p-doctor__careerList -->
							<h3 class="c-heading__point">特記事項</h3>
							<ul class="p-doctor__careerList">
								<li><a href="">BOTOX VISTA認定医</a></li>
								<li><a href="">ジュビダームビスタ認定医</a></li>
								<li>日本美容外科学会（Jsas）正会員</li>
								<li>日本美容外科医師会　会員</li>
							</ul><!-- /.p-doctor__careerList -->
						</div><!-- /.p-doctor__careerRight -->

					</div><!-- /.p-doctor__career -->
					<div class="p-doctor__comment">
						<h3 class="c-heading__point">コメント</h3>
						<p class="c-sentence__sm c-paragraph">はじめまして、水の森美容外科院長の竹江 渉です。<br>私が初めて入局した美容外科は業界の中でも高い医療技術を誇るすばらしい病院でした。<br>師事した医師は日本でもトップといわれる医師で、そこから学んだことは高い技術は勿論のこと、美容外科医として真摯な姿勢であり、常に患者様の目線で診察することの重要性でした。</p>
						<p class="c-sentence__sm c-paragraph">この経験は生涯の財産となり続けるでしょう。<br>その後、他院で院長に就任し、多くの患者様に出会い、患者様の希望と夢の実現のために尽力して参りました。<br>ここ名古屋でも、今までの経験と初心を忘れずに皆様に愛される病院として精一杯努力していきたいと思います。</p>
						<p class="c-sentence__sm c-paragraph">ここ数年の美容外科ブームを経て美容外科の認知度は一気に高まりました。</p>
						<p class="c-sentence__sm c-paragraph">しかし、今現在でも美容外科に興味はあるが行動には移せないという方は多いと思います。<br>それは金銭的な問題や手術や結果に対する不安などの理由が多いのではないでしょうか？</p>
						<p class="c-sentence__sm c-paragraph">そんな方々に伝えたいのが美容外科というのは確かな技術をもとに正しく応用されればすばらしい医療であるということです。</p>
						<p class="c-sentence__sm c-paragraph">それは外見的な美しさをつくるだけでなく、内面的な美しさまでも引き出し貴女の人生に夢や希望までももたらすことができると確信しております。</p>
						<p class="c-sentence__sm c-paragraph">又患者様を正しく導くにあたって最も重要なのがカウンセリングです。<br>患者様の悩みや希望をゆっくり聞かせて頂き正しい情報を伝える、そして双方の理解が一致し信頼関係が生まれた時初めて患者様の期待に応えられるのだと思います。</p>
						<p class="c-sentence__sm c-paragraph">今後美容外科が皆さんにとってもっと身近なものとなりたくさんの患者様にお会いできることを心より楽しみにしております。
							</p>
					</div><!-- /.p-doctor__comment -->

					<div class="p-doctor__closeButton js-closeaccordion">
						<span>閉じる</span>
					</div><!-- /.p-doctor__closeButton -->
				</div><!-- /.p-doctor__content -->
			</div><!-- /p-doctor__box -->

			<div class="p-doctor__bottom c-flexPC c-flex__spaceBetween c-flex__alignCenter">
				<div class="p-doctor__bottomButton">
					<a class="p-doctor__buttonText" href="<?php echo esc_url(home_url('')); ?>/access">アクセス</a>
				</div><!-- /.p-doctor__button -->
				<div class="p-doctor__bottomButton">
					<a class="p-doctor__buttonText" href="https://www.mizunomori.com/counsel/" target="_blank" rel="noopener">無料カウンセリング予約</a>
				</div><!-- /.p-doctor__button -->
			</div><!-- /.p-doctor__bottom -->

		</div><!-- /l-container -->
	</section><!-- /p-doctor -->
</main>
<?php get_footer(); ?>