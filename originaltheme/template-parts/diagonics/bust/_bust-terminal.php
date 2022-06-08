	<section class="l-jumbotron c-jumbotron">
		<div class="c-jumbotron__mv">
			<picture>
				<source srcset="<?php echo get_template_directory_uri(); ?>/img/diagnosis/bust/mv_pc.webp" media="(min-width:768px)" />
				<img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/bust/mv_sp.webp" alt="">
			</picture>
		</div><!-- /c-jumbotron__mv -->
		<div class="l-container c-jumbotron__inner">
			<h1 class="c-jumbotron__title" data-style="black">
				<span>豊胸・バスト</span>
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

	<section class="l-priceTable p-priceTable">
		<div class="l-container__narrow">
			<div class="l-spacer__headingDiagnosis c-heading u-pcNone">
				<h2 class="c-heading__diagnosis" data-entitle="menu">施術内容</h2>
			</div><!-- /.c-heading -->
			<div class="l-priceTable__wrap p-priceTable__wrap">
				<div class="p-priceTable__inner">
					<div class="c-heading p-attention__boxBody"><h3 class="c-heading__point"  data-type="priceTable">豊胸術</h3></div>
					<ul class="p-priceTable__list">
						<li class="p-priceTable__listItem">
							<a href="<?php echo esc_url(home_url('')); ?>/diagnosis/bust/bag/">
								<span class="p-priceTable__listLeft">シリコンバック豊胸</span>
								<span class="p-priceTable__listRight">¥658,900<small>(税込)</small></span>
							</a>
						</li>
						<li class="p-priceTable__listItem">
							<a href="<?php echo esc_url(home_url('')); ?>/diagnosis/bust/grease/">
								<span class="p-priceTable__listLeft">脂肪注入豊胸</span>
								<span class="p-priceTable__listRight">¥614,900<small>(税込)</small></span>
							</a>
						</li>
					</ul><!-- /.p-priceTable__list -->
				</div><!-- /.p-priceTable__inner -->

				<div class="p-priceTable__inner">
					<div class="c-heading"><h3 class="c-heading__point" data-type="priceTable">その他のバストのお悩み</h3></div>
					<ul class="p-priceTable__list">
						<li class="p-priceTable__listItem">
							<a href="https://www.mizunomori.com/diagnosis/bust/nyuto/" target="_blank" rel="noopener">
								<span class="p-priceTable__listLeft">乳頭縮小</span>
								<span class="p-priceTable__listRight">¥240,900<small>(税込)</small></span>
							</a>
						</li>
						<li class="p-priceTable__listItem">
							<a href="https://www.mizunomori.com/diagnosis/bust/nyurin/" target="_blank" rel="noopener">
								<span class="p-priceTable__listLeft">乳輪縮小</span>
								<span class="p-priceTable__listRight">¥350,900<small>(税込)</small></span>
							</a>
						</li>
						<li class="p-priceTable__listItem">
							<a href="https://www.mizunomori.com/diagnosis/bust/kanbotsu/" target="_blank" rel="noopener">
								<span class="p-priceTable__listLeft">陥没乳頭</span>
								<span class="p-priceTable__listRight">¥350,900<small>(税込)</small></span>
							</a>
						</li>
						<li class="p-priceTable__listItem">
							<a href="https://www.mizunomori.com/diagnosis/bust/syukusyo_lift/" target="_blank" rel="noopener">
								<span class="p-priceTable__listLeft" data-style="multipleLines"><small>乳房縮小術<br>乳房釣り上げ術</small></span>
								<span class="p-priceTable__listRight">¥1,155,000<small>(税込)</small></span>
							</a>
						</li>
					</ul><!-- /.p-priceTable__list -->
				</div><!-- /.p-priceTable__inner -->
			</div><!-- /.p-priceTable__wrap -->
		</div><!-- /.l-container__narroq -->
	</section><!-- /.p-priceTable -->

	<section class="l-recommend p-recommend">
		<div class="l-container__narrow">
			<h2 class="p-recommend__lead">こんな方におすすめ</h2>
			<div class="p-recommend__textWrap">
				<p class="p-recommend__sentence">
					"バストを大きくしたい"<br>
					"理想の形に整えたい"<br>
					水の森では、<br>
					女性にとって大切なバストのお悩みを<br>
					一緒に解消していきます。
				</p>
			</div><!-- /.p-recommend__textWrap -->

			<div class="p-CTA l-CTA">
				<h2 class="p-CTA__heading">無料カウンセリング予約<br class="u-pcNone">お問い合わせ　</h2>
				<div class="c-buttonCTAWrap c-flex c-flex__center">
                        <div class="c-buttonCTA c-buttonCTA__phone u-pcNone">
                            <a href="tel:0120-510-830">お電話</a>
                        </div>
                        <div class="c-buttonCTA c-buttonCTA__phone u-spNone">
                            <a href="<?php echo esc_url(home_url('')); ?>/first">お電話</a>
                        </div>
						<div class="c-buttonCTA c-buttonCTA__mail">
								<a href="https://www.mizunomori.com/counsel/" target="_blank" rel="noopener">WEB予約</a>
						</div>
				</div><!-- /c-buttonCTAWrap -->
			</div><!-- /.p-CTA -->

		</div><!-- /.l-container__narrow -->
	</section><!-- /.p-recommend -->




	<div class="u-bgNaviColor">
		<div class="l-container__narrow">
			<nav class="c-navigation l-navigation">
				<h2 class="u-visually-hidden">ページナビゲーション</h2>
				<ul class="c-navigation__list c-flex c-flex__alignCenter c-flex__wrap">
					<li class="c-navigation__listItem -diagnosis"><a href="#case">症例写真</a></li>
					<li class="c-navigation__listItem -diagnosis"><a href="#about">施術について</a></li>
					<li class="c-navigation__listItem -diagnosis"><a href="#point">水の森の特徴</a></li>
					<li class="c-navigation__listItem -diagnosis"><a href="#flow">施術の流れ</a></li>
					<li class="c-navigation__listItem -diagnosis"><a href="#faq">よくあるご質問</a></li>
					<li class="c-navigation__listItem -diagnosis"><a href="#price">施術料金</a></li>
				</ul><!-- /c-navigation__list -->
			</nav>
		</div><!-- /l-container -->
	</div><!-- /u-bgNaviColor -->


		
	<section id="case" class="l-case c-case"> 
		<div class="l-container__narrow">
			<div class="l-spacer__headingDiagnosis c-heading">
				<h2 class="c-heading__diagnosis" data-entitle="case">症例写真</h2>
			</div><!-- /.c-heading -->

			<div class="c-case__box">
				<h3 class="c-case__title">シリコンバック豊胸</h3>
				<div class="c-case__boxInner">
					<div class="c-flex c-flex__spaceBetween">
						<figure class="c-case__picture">
							<img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/bust/case1_1.webp" alt="" loading="lazy">
							<figcaption>Before</figcaption>
						</figure>
						<figure class="c-case__picture">
							<img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/bust/case1_2.webp" alt="" loading="lazy">
							<figcaption>After</figcaption>
						</figure>
					</div><!-- /.c-flex -->

					<div class="c-case__body">
						<p class="c-case__button js-accordion" role="button">施術詳細</p>
						<div class="c-case__hiddenTable js-content">
							<div class="c-case__table">
								<dl>
									<dt>施術費用</dt>
									<dd>658,900円（税込）</dd>
									<dt>リスク・<br>副作用</dt>
									<dd>【ドレーン装着】･･･翌日まで<br>
										【腫れ・痛み】･･･1ヶ月程度<br>
										【傷口の赤み】･･･3～6ヶ月程度<br>
										【しびれ】･･･3ヶ月程度<br>
									</dd>
								</dl>
							</div><!-- /.c-case__table -->
						</div><!-- /.c-case__hiddenTable -->
					</div><!-- /.c-case__body -->

					<div class="c-case__bottom">
						<p class="c-case__recommend">おすすめの方</p>
							<ul class="c-case__list">
								<li class="c-case__listItem">・2カップ以上バストアップしたい</li>
								<li class="c-case__listItem">・加齢や授乳で萎んだ胸を大きくしたい</li>
								<li class="c-case__listItem">・痩せ型だけどバストアップしたい</li>
							</ul><!-- /.c-case__list -->
						
						<div class="c-case__bottomButton">
							<a href="<?php echo esc_url(home_url('')); ?>/diagnosis/bust/bag/">施術ページへ</a>
						</div>
						
					</div><!-- /.c-case__bottom -->

				</div><!-- /.c-case__boxInner -->
			</div><!-- /.c-case__box -->

			<div class="c-case__box">
				<h3 class="c-case__title">シリコンバック豊胸</h3>
				<div class="c-case__boxInner">
					<div class="c-flex c-flex__spaceBetween">
						<figure class="c-case__picture">
							<img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/bust/case2_2.webp" alt="" loading="lazy">
							<figcaption>Before</figcaption>
						</figure>
						<figure class="c-case__picture">
							<img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/bust/case2_1.webp" alt="" loading="lazy">
							<figcaption>After</figcaption>
						</figure>
					</div><!-- /.c-flex -->

					<div class="c-case__body">
						<p class="c-case__button js-accordion" role="button">施術詳細</p>
						<div class="c-case__hiddenTable js-content">
							<div class="c-case__table">
								<dl>
									<dt>施術費用</dt>
									<dd>658,900円（税込）</dd>
									<dt>リスク・<br>副作用</dt>
									<dd>【ドレーン装着】･･･翌日まで<br>
										【腫れ・痛み】･･･1ヶ月程度<br>
										【傷口の赤み】･･･3～6ヶ月程度<br>
										【しびれ】･･･3ヶ月程度<br>
									</dd>
								</dl>
							</div><!-- /.c-case__table -->
						</div><!-- /.c-case__hiddenTable -->
					</div><!-- /.c-case__body -->

					<div class="c-case__bottom">
						<p class="c-case__recommend">おすすめの方</p>
						<ul class="c-case__list">
							<li class="c-case__listItem">・2カップ以上バストアップしたい</li>
							<li class="c-case__listItem">・加齢や授乳で萎んだ胸を大きくしたい</li>
							<li class="c-case__listItem">・痩せ型だけどバストアップしたい</li>
						</ul><!-- /.c-case__list -->
						
						<div class="c-case__bottomButton">
							<a href="<?php echo esc_url(home_url('')); ?>/diagnosis/bust/grease/">施術ページへ</a>
						</div>
						
					</div><!-- /.c-case__bottom -->

				</div><!-- /.c-case__boxInner -->
			</div><!-- /.c-case__box -->

			<div class="c-case__box">
				<h3 class="c-case__title">脂肪注入豊胸</h3>
				<div class="c-case__boxInner">
					<div class="c-flex c-flex__spaceBetween">
						<figure class="c-case__picture">
							<img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/bust/case3_1.webp" alt="" loading="lazy">
							<figcaption>Before</figcaption>
						</figure>
						<figure class="c-case__picture">
							<img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/bust/case3_2.webp" alt="" loading="lazy">
							<figcaption>After</figcaption>
						</figure>
					</div><!-- /.c-flex -->

					<div class="c-case__body">
						<p class="c-case__button js-accordion" role="button">施術詳細</p>
						<div class="c-case__hiddenTable js-content">
							<div class="c-case__table">
								<dl>
									<dt>施術費用</dt>
									<dd>218,900円（税込）+ 脂肪吸引代金</dd>
									<dt>リスク・<br>副作用</dt>
									<dd>【痛み・熱感】･･･1週間程度<br>【張り感・硬さ】･･･2週間程度</dd>
								</dl>
							</div><!-- /.c-case__table -->
						</div><!-- /.c-case__hiddenTable -->
					</div><!-- /.c-case__body -->

					<div class="c-case__bottom">
						<p class="c-case__recommend">おすすめの方</p>
						<ul class="c-case__list">
							<li class="c-case__listItem">・自然にバストアップしたい</li>
							<li class="c-case__listItem">・シリコンを入れるのは抵抗がある</li>
							<li class="c-case__listItem">・脂肪吸引も一緒にしたい</li>
						</ul><!-- /.c-case__list -->
						
						<div class="c-case__bottomButton">
							<a href="<?php echo esc_url(home_url('')); ?>/diagnosis/bust/grease/">施術ページへ</a>
						</div>
						
					</div><!-- /.c-case__bottom -->

				</div><!-- /.c-case__boxInner -->
			</div><!-- /.c-case__box -->

			<div class="c-case__box">
				<h3 class="c-case__title">脂肪注入豊胸</h3>
				<div class="c-case__boxInner">
					<div class="c-flex c-flex__spaceBetween">
						<figure class="c-case__picture">
							<img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/bust/case4_1.webp" alt="" loading="lazy">
							<figcaption>Before</figcaption>
						</figure>
						<figure class="c-case__picture">
							<img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/bust/case4_2.webp" alt="" loading="lazy">
							<figcaption>After</figcaption>
						</figure>
					</div><!-- /.c-flex -->

					<div class="c-case__body">
						<p class="c-case__button js-accordion" role="button">施術詳細</p>
						<div class="c-case__hiddenTable js-content">
							<div class="c-case__table">
								<dl>
									<dt>施術費用</dt>
									<dd>218,900円（税込）+ 脂肪吸引代金</dd>
									<dt>リスク・<br>副作用</dt>
									<dd>【痛み・熱感】･･･1週間程度<br>【張り感・硬さ】･･･2週間程度</dd>
								</dl>
							</div><!-- /.c-case__table -->
						</div><!-- /.c-case__hiddenTable -->
					</div><!-- /.c-case__body -->

					<div class="c-case__bottom">
						<p class="c-case__recommend">おすすめの方</p>
						<ul class="c-case__list">
							<li class="c-case__listItem">・自然にバストアップしたい</li>
							<li class="c-case__listItem">・シリコンを入れるのは抵抗がある</li>
							<li class="c-case__listItem">・脂肪吸引も一緒にしたい</li>
						</ul><!-- /.c-case__list -->
						
						<div class="c-case__bottomButton">
							<a href="<?php echo esc_url(home_url('')); ?>/diagnosis/bust/grease/">施術ページへ</a>
						</div>
						
					</div><!-- /.c-case__bottom -->

				</div><!-- /.c-case__boxInner -->
			</div><!-- /.c-case__box -->

			<div class="c-case__bottomButton c-case__archiveButton">
				<a href="https://www.mizunomori.com/case-rank/bust/" target="_blank" rel="noopener">豊胸・バストの症例一覧はこちら</a>
			</div><!-- /.c-case__archiveButton -->

		</div><!-- /.l-container__narrow -->
	</section><!-- /.l-case -->

	<div class="u-bgMainColor">
		<section id="about" class="c-about l-about">
			<div class="l-container__narrow">
				<div class="l-spacer__headingDiagnosis c-heading">
					<h2 class="c-heading__diagnosis" data-entitle="about">豊胸・バストの施術とは</h2>
				</div><!-- /.c-heading -->
				<div class="c-about__box" data-style="ordinaryStyle">

					<div class="c-tabMenu l-tabMenu" data-style="bust">
						<div class="c-tabMenu__tab">
							<ul class="c-tabMenu__tab-menu02" role="tab-list" data-style="bust">
								<li id="c-tabMenu05" role="tab"><a class="u-fontGothic active" href=""
										data-id="05">豊胸術</a></li>
								<li id="c-tabMenu06" role="tab"><a class="u-fontGothic" href="" data-id="06">その他のバストのお悩み</a>
								</li>
							</ul><!-- /.c-tabMenu__tab-menu -->
						</div><!-- /.c-tabMenu__tab -->
						
						<div class="c-tabMenu__content02 active" id="05" data-style="bust">
							<div class="p-bust__card">
								<h3 class="p-bust__cardTitle">シリコンバック豊胸</h3>
								<p class="p-bust__cardSentence">脇の下のシワに沿って切開し、シリコンバックと呼ばれる人工乳腺を挿入してバストを大きくします。<br>2カップ以上のサイズアップや、授乳後に萎んでしまった方、加齢で垂れ下がってしまった方にオススメの豊胸術です。</p>
							</div><!-- /.p-bust__card -->
							<div class="p-bust__card">
								<h3 class="p-bust__cardTitle">脂肪注入豊胸</h3>
								<p class="p-bust__cardSentence">脂肪吸引で取り出したご自身の脂肪を注入してバストを大きくします。<br>自然なバストアップをしたい方、シリコンバックに抵抗のある方、脂肪吸引も同時に検討している方にオススメの豊胸術です。</p>
							</div><!-- /.p-bust__card -->

						</div>
		
						<div class="c-tabMenu__content02" id="06" data-style="bust">
							<div class="p-bust__card">
								<h3 class="p-bust__cardTitle">乳頭縮小</h3>
								<p class="p-bust__cardSentence">生まれつき乳頭が大きい方、妊娠や授乳により肥大してしまった方の乳頭を小さくする施術です。<br>高さと外径を小さくする方法の2種類があり、高さは乳頭の付け根を切除し、外径はくさび状に切除と縫合を行い、綺麗な形に整えていきます。</p>
							</div><!-- /.p-bust__card -->
							<div class="p-bust__card">
								<h3 class="p-bust__cardTitle">乳輪縮小</h3>
								<p class="p-bust__cardSentence">生まれつき乳輪が大きい方、成長とともに肥大してしまった方の乳輪を小さくする施術です。そんな肥大化した乳輪を小さくするのが乳輪縮小の手術です。<br>乳輪の縁に沿ってドーナツ状に皮膚を切開、切除して縫合し、乳輪を小さくします。</p>
							</div><!-- /.p-bust__card -->
							<div class="p-bust__card">
								<h3 class="p-bust__cardTitle">陥没乳頭</h3>
								<p class="p-bust__cardSentence">凹んでしまった乳頭に切開と縫合を行い、正しく綺麗に突出させる施術です。<br>成長期の乳房の発育に乳管の発育が追いつかないことが主な原因となり、放っておくと汚れが溜まって炎症を引き起こしたり、授乳の妨げになることがあります。</p>
							</div><!-- /.p-bust__card -->
							<div class="p-bust__card">
								<h3 class="p-bust__cardTitle">乳房縮小術・乳房吊り上げ術</h3>
								<p class="p-bust__cardSentence">乳房縮小術は、元々バストが大きすぎることで垂れ下がってしまった乳房自体を小さくし、バストの形を整える施術です。<br>乳房吊り上げ術は、バストの大きさに関わらず、垂れ下がってしまったバストの形や大きさを整える施術です。<br>日本人の場合、大きすぎるバストは珍しく、乳房吊り上げ術が適応となる場合が多いです。</p>
							</div><!-- /.p-bust__card -->
						</div>
					</div><!-- /.c-about__boxInner -->
				</div><!-- /.c-about__box -->
			</div><!-- /.l-container__narrow -->
		</section><!-- /.c-about -->
	</div><!-- /.u-bgMainColor -->


	<section id="point" class="p-point l-point">
		<div class="l-container__narrow">
			<div class="l-spacer__headingDiagnosis c-heading">
				<h2 class="c-heading__diagnosis" data-entitle="point">水の森の特徴</h2>
			</div><!-- /.c-heading -->
			<p class="p-point__lead">全院で統一された技術と理論</p>

			<div class="p-point__box">
				<h3 class="p-point__title">＃1 最適な施術方法をご提案</h3>
				<div class="p-point__boxInner">
					<p class="p-point__boxLead">
						<span>“患者様一人ひとりに合わせた施術方法を”</span>
					</p>
					<p class="c-sentence">”バストアップ”という同じ目的でも、患者様によって施術方法が異なります。<br>例えば…</p>
					<div class="p-point__boxBody c-flex c-flex__alignCenter">
						<div class="p-point__point">
							<h4 class="p-point__pointTitle -long">痩せ型の方</h4>
							<p class="p-point__pointText">脂肪注入豊胸では、患者様ご自身の脂肪をバストに注入しますので、取れる脂肪が十分にない痩せ型の患者様の場合、シリコンバック豊胸の適応となります。</p>
							<h4 class="p-point__pointTitle -long">シリコンに抵抗がある方</h4>
							<p class="p-point__pointText">シリコンバックを入れるとこに抵抗がある場合、自然な見た目や柔らかさも兼ね備えた、ご自身の脂肪を注入する脂肪注入豊胸がおすすめです。</p>
						</div><!-- /.p-point__point -->

						<div class="p-point__pointImg">
							<img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/bust/point1.webp" alt="">
						</div><!-- /.p-point__pointImg -->
					</div><!-- /.p-point__boxBody -->

				</div><!-- /.p-point__boxInner -->
			</div><!-- /.p-point__box -->

			<div class="p-point__box">
				<h3 class="p-point__title" data-style="reverse">＃2 高い技術を適正価格でご提供</h3>
				<div class="p-point__boxInner" data-style="reverse">
					<p class="p-point__boxLead" data-style="reverse">
						「豊胸って高い…」というイメージで、諦めていませんか？
						<span>“豊胸は100万円もかかりません”</span>
					</p>
					<p class="p-point__boxSentence c-sentence" data-style="reverse">例えば脂肪注入豊胸では、遠心分離機を使用して濃縮させた「コンデンスリッチ豊胸」とういう方法をよく見かけます。この方法は「定着率が上がる」と宣伝され、100万円以上の高い金額が設定されていることがありますが、脂肪注入はどのような方法でも定着率に限界はあります。<br>そのため定着率を上げる工夫以上に、定着率を見越し適切な注入量を入れることが大切です。</p>
					<p class="p-point__boxSentence c-sentence" data-style="reverse">このように当院では、必要のない方法は一切行わず、適正な価格でしっかりと効果のある施術だけを行います。</p>

					<div class="p-point__boxBody c-flex c-flex__alignCenter c-flex__spaceBetween u-centerposition">
						<ul class="p-priceTable__list c-flex__center" data-style="long">
							<li class="p-priceTable__listItem" data-style="long">
								<a href="<?php echo esc_url(home_url('')); ?>/diagnosis/bust/bag/">
									<span class="p-priceTable__listLeft">シリコンバック豊胸</span>
									<span class="p-priceTable__listRight"><span class="u-priceColor">¥658,900<small>(税込)</small></span><br><small>麻酔代等全て込み</small></span>
								</a>
							</li>
							<li class="p-priceTable__listItem" data-style="long">
								<a href="<?php echo esc_url(home_url('')); ?>/diagnosis/bust/bag/">
									<span class="p-priceTable__listLeft">脂肪注入豊胸</span>
									<span class="p-priceTable__listRight"><span class="u-priceColor">¥614,900<small>(税込)</small></span><br><small>麻酔代等全て込み</small></span>
								</a>
							</li>
						</ul><!-- /p-priceTable__list -->
					</div><!-- /.p-point__boxBody -->
				</div><!-- /.p-point__boxInner -->
			</div><!-- /.p-point__box -->
			
			<div class="p-point__box">
				<h3 class="p-point__title">＃3 アフターフォローも万全</h3>
				<div class="p-point__boxInner">
					<p class="p-point__boxLead">
						<span>“術後の検診を終えて初めて完成する”</span>
					</p>
					<p class="c-sentence">豊胸術は「やって終わり」ではありません。<br>美しいバストに仕上げるには、術後の検診がとても重要です。</p>

					<div class="p-point__boxBody c-flex c-flex__alignCenter">
						<div class="p-point__point">
							<h4 class="p-point__pointTitle -long">マッサージ検診</h4>
							<p class="p-point__pointText">例えばシリコンバック豊胸なら、通常の検診に加え柔らかさを保つためのマッサージ検診があります。<br>術後のシリコンバックをそのままにしておくと、シリコンバックの周りの組織が硬くなってしまうカプセル拘縮を起こしてしまいます。</p>
							<p class="p-point__pointText">カプセル拘縮の前兆があった際も、早期対応が可能です。</p>
						</div><!-- /.p-point__point -->

						<div class="p-point__pointImg">
							<img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/bust/point2.webp" alt="">
						</div><!-- /.p-point__pointImg -->
					</div><!-- /.p-point__boxBody -->
				</div><!-- /.p-point__boxInner -->
			</div><!-- /.p-point__box -->

		</div><!-- /.l-container__narrow -->
	</section><!-- /.p-point -->
		
	<div class="u-bgBeigeColor">
		<section id="flow" class="p-reservationFlow l-reservationFlow__lower">
			<div class="l-container__narrow">
				<div class="l-spacer__headingDiagnosis c-heading">
					<h2 class="c-heading__diagnosis" data-entitle="flow">施術の流れ</h2>
				</div><!-- /.c-heading -->
				<p class="p-reservationFlow__centerText c-sentence">ご来院から施術までをご紹介いたします。</p>
				<div class="p-reservationFlow__box">
					<h3 class="p-reservationFlow__tag">
						<span>ご予約・検査</span>
					</h3>
					<div class="p-reservationFlow__steps">
						<h3 class="p-reservationFlow__lead c-flex c-flex__alignCenter"><span>1</span>ご予約</h3>
						<div class="c-flexPC c-flex__alignCenter">
							<div class="p-reservationFlow__img c-flex__half">
								<img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/bust/flow1.webp" alt="">
							</div>
							<div class="p-reservationFlow__body c-flex__half">
								<p class="c-sentence">当院の無料カウンセリングは完全予約制です。<br>ご希望のお日にちにて、メール・お電話からご予約ください。</p>
							</div>
						</div><!-- /.c-flexPC -->
					</div><!-- /.p-reservationFlow__steps -->

					<div class="p-reservationFlow__steps">
						<h3 class="p-reservationFlow__lead c-flex c-flex__alignCenter"><span>2</span>ご来院後</h3>
						<div class="c-flexPC c-flex__alignCenter">
							<div class="p-reservationFlow__img c-flex__half">
								<img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/bust/flow2.webp" alt="">
							</div>
							<div class="p-reservationFlow__body c-flex__half">
								<p class="c-sentence">受付後、医師とのカウンセリングに入ります。<br>どの施術が適応となるか、メリットやデメリットをお伝えし患者様のお悩みもしっかりとお伺いします。</p>
							</div>
						</div><!-- /.c-flexPC -->
					</div><!-- /.p-reservationFlow__steps -->

					<div class="p-reservationFlow__steps">
						<h3 class="p-reservationFlow__lead c-flex c-flex__alignCenter"><span>3</span>診察後</h3>
						<div class="c-flexPC c-flex__alignCenter">
							<div class="p-reservationFlow__img c-flex__half">
								<img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/bust/flow3.webp" alt="">
							</div>
							<div class="p-reservationFlow__body c-flex__half">
								<p class="c-sentence">医師とのカウンセリング後、聞きそびれた事やご不明な点をカウンセラーがお伺いします。<br>施術をご意向の場合は、そのままお手続きを行います。</p>
							</div>
						</div><!-- /.c-flexPC -->
					</div><!-- /.p-reservationFlow__steps -->

				</div><!-- /.p-reservationFlow__box -->

			</div><!-- /.l-container -->
		</section><!-- /.p-reservationFlow -->
	</div><!-- /.u-bgBeigeColor -->

	<div class="u-bgMainColor">
		<section class="p-reservationFlow l-reservationFlow__lower" data-style="onTheDay">
			<div class="l-container__narrow">
				<div class="p-reservationFlow__box">
					<h3 class="p-reservationFlow__tag" data-style="onTheDay">
						<span>施術当日</span>
					</h3>
					<div class="p-reservationFlow__steps">
						<h3 class="p-reservationFlow__lead c-flex c-flex__alignCenter" data-style="onTheDay"><span>4</span>施術</h3>
						<div class="c-flexPC c-flex__alignCenter">
							<div class="p-reservationFlow__img c-flex__half">
								<img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/bust/flow4.webp" alt="">
							</div>
							<div class="p-reservationFlow__body c-flex__half">
								<p class="c-sentence">事前に行なったカウンセリングを元に施術を行います。豊胸術では静脈麻酔を使用し、眠っている間に終わりますのでご安心ください。<br>その他の施術も麻酔を使用しますので痛みを感じることはありません。</p>
							</div>
						</div><!-- /.c-flexPC -->
					</div><!-- /.p-reservationFlow__steps -->

					<div class="p-reservationFlow__steps">
						<h3 class="p-reservationFlow__lead c-flex c-flex__alignCenter" data-style="onTheDay"><span>5</span>終了・ご帰宅</h3>
						<div class="c-flexPC c-flex__alignCenter">
							<div class="p-reservationFlow__img c-flex__half">
								<img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/bust/flow5.webp" alt="">
							</div>
							<div class="p-reservationFlow__body c-flex__half">
								<p class="c-sentence">シリコンバック豊胸をお受けの場合、術後ドレーンと呼ばれる管を通して包帯で圧迫固定を行い、そのままご帰宅いただきます。</p>
							</div>
						</div><!-- /.c-flexPC -->
					</div><!-- /.p-reservationFlow__steps -->

					<div class="p-reservationFlow__steps">
						<!-- <h3 class="p-reservationFlow__lead c-flex c-flex__alignCenter" data-style="onTheDay"><span>6</span>終了・ご帰宅</h3> -->
						<div class="c-flexPC c-flex__alignCenter">
							<div class="p-reservationFlow__img c-flex__half">
								<img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/bust/flow6.webp" alt="">
							</div>
							<div class="p-reservationFlow__body c-flex__half">
								<p class="c-sentence">脂肪注入豊胸をお受けの場合、術後棒状の綿をT字にして胸にあて包帯で固定します。脂肪吸引をした創部も包帯を巻き、レインコートとお洋服を着用いただき、リカバリールームでお休みいただけます。<br>体調を確認しながら、ご帰宅可能なタイミングでお帰りください。。</p>
							</div>
						</div><!-- /.c-flexPC -->
					</div><!-- /.p-reservationFlow__steps -->

				</div><!-- /.p-reservationFlow__box -->

			</div><!-- /.l-container -->
		</section><!-- /.p-reservationFlow -->
	</div><!-- /.u-bgKeyColor -->

		
	<section class="p-downtime l-downtime">
		<div class="l-container__narrow">
			<div class="l-spacer__headingDiagnosis c-heading">
				<h2 class="c-heading__diagnosis" data-entitle="downtime">ダウンタイムと経過</h2>
			</div><!-- /.c-heading -->

			<div class="u-spacer__m"></div>
			<p class="u-centerposition u-underline u-bold u-fontGothic">各部位のリスク・副作用</p>

			<div class="c-tabMenu l-tabMenu" data-style="bust" data-style01="yellow">
				<div class="c-tabMenu__tab">
					<ul class="c-tabMenu__tab-menu03" role="tab-list" data-style="bust" data-style01="yellow">
						<li id="c-tabMenu07" role="tab"><a class="u-fontGothic active" href=""
								data-id="07">豊胸術</a></li>
						<li id="c-tabMenu08" role="tab"><a class="u-fontGothic" href="" data-id="08">その他のバストのお悩み</a>
						</li>
					</ul><!-- /.c-tabMenu__tab-menu -->
				</div><!-- /.c-tabMenu__tab -->
				
				<div class="c-tabMenu__content03 active" id="07" data-style="bust" data-style01="yellow">
					<div class="p-bust__card" data-style01="yellow">
						<h3 class="p-bust__cardTitle">シリコンバック豊胸</h3>
						<p class="p-bust__cardSentence">【ドレーン装着】･･･翌日まで<br>
							【腫れ・痛み】･･･1ヶ月程度<br>
							【傷口の赤み】･･･3～6ヶ月程度<br>
							【しびれ】･･･3ヶ月程度</p>
					</div><!-- /.p-bust__card -->
					<div class="p-bust__card" data-style01="yellow">
						<h3 class="p-bust__cardTitle">脂肪注入豊胸</h3>
						<p class="p-bust__cardSentence">【痛み】･･･1週間程度<br>
							【張り感・硬さ】･･･2週間程度</p>
					</div><!-- /.p-bust__card -->

				</div>

				<div class="c-tabMenu__content03 js-tabMenu__content" id="08" data-style="bust" data-style01="yellow">
					<div class="p-bust__card" data-style01="yellow">
						<h3 class="p-bust__cardTitle">乳頭縮小</h3>
						<p class="p-bust__cardSentence">【痛み】･･･1週間程度<br>
							【内出血・張り感】･･･1.2週間</p>
					</div><!-- /.p-bust__card -->
					<div class="p-bust__card" data-style01="yellow">
						<h3 class="p-bust__cardTitle">乳輪縮小</h3>
						<p class="p-bust__cardSentence">【痛み】･･･1週間程度<br>
							【内出血・張り感】･･･1.2週間</p>
					</div><!-- /.p-bust__card -->
					<div class="p-bust__card" data-style01="yellow">
						<h3 class="p-bust__cardTitle">陥没乳頭</h3>
						<p class="p-bust__cardSentence">【タイオーバー装着】･･･1.2週間<br>
							【痛み】･･･1週間程度<br>
							【内出血・張り感】･･･1.2週間</p>
					</div><!-- /.p-bust__card -->
					<div class="p-bust__card" data-style01="yellow">
						<h3 class="p-bust__cardTitle">乳房縮小術・乳房吊り上げ術</h3>
						<p class="p-bust__cardSentence">【包帯圧迫】･･･7.9日<br>
							【痛み】･･･1週間程度<br>
							【内出血・張り感】･･･1.2週間</p>
					</div><!-- /.p-bust__card -->
				</div>
			</div><!-- /.c-about__boxInner -->

			
			<div class="p-CTA l-CTA">
				<h2 class="p-CTA__heading">無料カウンセリング予約<br class="u-pcNone">お問い合わせ　</h2>
				<div class="c-buttonCTAWrap c-flex c-flex__center">
                        <div class="c-buttonCTA c-buttonCTA__phone u-pcNone">
                            <a href="tel:0120-510-830">お電話</a>
                        </div>
                        <div class="c-buttonCTA c-buttonCTA__phone u-spNone">
                            <a href="<?php echo esc_url(home_url('')); ?>/first">お電話</a>
                        </div>
						<div class="c-buttonCTA c-buttonCTA__mail">
								<a href="https://www.mizunomori.com/counsel/" target="_blank" rel="noopener">WEB予約</a>
						</div>
				</div><!-- /c-buttonCTAWrap -->
		</div><!-- /.p-CTA -->

		</div><!-- /.l-container__narrow -->
	</section><!-- /.p-downtime -->


	<div class="u-bgGrayColor">
		<section id="faq" class="l-questions p-questions">
			<div class="l-container__narrow">
				<div class="l-spacer__headingDiagnosis c-heading">
					<h2 class="c-heading__diagnosis" data-entitle="questions">よくあるご質問</h2>
				</div><!-- /.c-heading -->
				<?php
				$cat_posts = get_posts(array(
					'post_type' => 'post',
					'category_name' => 'qa', 
					'tax_query' => array(
						array(
							'taxonomy' => 'qa',
							'field' => 'slug',
							'terms' => 'bust',
							'operator' => 'IN'
						),
					),
					// 'posts_per_page' => 6, 
					'orderby' => 'date',
					'order' => 'DESC'
				));
				global $post;
				if($cat_posts): foreach($cat_posts as $post): setup_postdata($post); ?>
				
				<dl class="c-accordion" data-type="questions">
					<dt class="c-accordion__tab js-accordion c-accordion__tabAccess"><?php the_title(); ?></dt>
					<dd class="c-accordion__contents js-content">
						<div class="c-accordion__contentsInner">
							<p class="c-sentence">A.&emsp;<?php the_content(); ?></p>
						</div><!-- /.c-accordion__contentsInner -->
					</dd>
				</dl><!-- /.c-accordion -->
				
				<?php endforeach; endif; wp_reset_postdata(); ?>

				<div class="p-questions__button">
					<a href="https://www.mizunomori.com/faq/bust/" target="_blank" rel="noopener">その他よくある質問はこちら</a>
				</div><!-- /.p-questions__button -->
			</div><!-- /.l-container__narrow -->
		</section><!-- /.l-questions -->
	</div><!-- /.u-bgGrayColor -->

	<section id="price" class="l-price p-price">
		<div class="l-container__narrow">
			<div class="l-spacer__headingDiagnosis c-heading">
				<h2 class="c-heading__diagnosis" data-entitle="price">施術料金</h2>
			</div><!-- /.c-heading -->
			<h3 class="p-price__lead">水の森は　”<span>クリアプライス</span>”</h3>
			<div class="p-price__textWrap">
				<p class="p-price__sentence">“あれもこれもと追加で結局高額に”<br>“今日だけこの金額でと強引な勧誘”<br>こんなご経験をされたことはありませんか？<br>そして、初めての方も<br class="u-pcNone">こんな経験をしてほしくない。</p>
			</div><!-- /.p-price__textWrap -->

			<div class="p-price__caption">
				<div class="p-price__captionInner">
					<p class="c-sentence">当院では<br>麻酔代、処方薬代、術後の検診費用など施術に必要なものは全て含んでおります。</p>
					<p class="c-sentence">この下の料金表以外の価格はございません。</p>
				</div><!-- /.p-price__captionInner -->
			</div><!-- /.p-price__caption -->

<!-- 
			<nav class="l-price__nav p-price__nav">
				<h3 class="c-heading__point" data-type="price">各施術の料金</h3>
				<ul class="p-price__navList">
					<li><a href="#priceSilicone">シリコンバック豊胸</a></li>
					<li><a href="#priceFat">脂肪注入豊胸</a></li>
					<li><a href="#priceNipple">乳頭縮小</a></li>
					<li><a href="#priceAreola">乳輪縮小</a></li>
					<li><a href="#priceDepression">陥没乳頭</a></li>
					<li><a href="#priceLifting">乳房縮小術乳房吊り上げ術</a></li>
				</ul>
			</nav> -->

			<div id="priceSilicone" class="p-price__tableWrap">
				<h3 class="c-heading__point" data-type="price_line">シリコンバック豊胸</h3>

				<dl class="p-price__table">
					<dt>乳腺下法<br>大胸筋下法</dt>
					<div class="p-price__tableRight">
						<dd>
							<span>シリコンバック豊胸</span>
							<span>¥658,900 (税込)</span>
						</dd>
					</div><!-- /.p-price__tableRight -->
				</dl>

				<dl class="p-price__table" data-type="table_pink">
					<dt>バック<br>(抜去・入替)</dt>
					<div class="p-price__tableRight">
						<dd>
							<span>バック抜去（当院）<br>バック抜去（他院）</span>
							<span>¥220,000(税込)</span>
						</dd>
						<dd>
							<span>バック入替（当院）<br>バック入替（他院）</span>
							<span>¥550,000(税込)<br>¥770,000(税込)</span>
						</dd>
					</div><!-- /.p-price__tableRight -->
				</dl>

				<p class="p-price__link"><a href="<?php echo esc_url(home_url('')); ?>/diagnosis/bust/bag/">シリコンバック豊胸の詳細へ</a></p>
			</div><!-- /.p-price__tableWrap -->

			<div id="priceFat" class="p-price__tableWrap">
				<h3 class="c-heading__point" data-type="price_line">脂肪注入豊胸</h3>

				<dl class="p-price__table">
					<dt>脂肪注入</dt>
					<div class="p-price__tableRight">
						<dd>
							<span>太もも2箇所の脂肪吸引<br>(前面・前面内側)</span>
							<span>¥614,900 (税込)</span>
						</dd>
						<dd>
							<span>太もも2箇所の脂肪吸引<br>(後面・後面外側)</span>
							<span>¥614,900 (税込)</span>
						</dd>
						<dd>
							<span>太もも全体の脂肪吸引<br>(お尻の一部含む)</span>
							<span>¥790,900 (税込)</span>
						</dd>
						<dd>
							<span>腹部の脂肪吸引</span>
							<span>¥614,900 (税込)</span>
						</dd>
						<dd>
							<span>パーフェクト脂肪吸引<br>(太もも全面・お尻の一部)</span>
							<span>¥877,800 (税込)</span>
						</dd>
						<dd>
							<span>パーフェクト脂肪吸引<br>(上下腹部・ウエスト・腰)</span>
							<span>¥767,800 (税込)</span>
						</dd>
					</div><!-- /.p-price__tableRight -->
				</dl>

				<p class="p-price__link"><a href="<?php echo esc_url(home_url('')); ?>/diagnosis/bust/grease/">脂肪注入豊胸の詳細へ</a></p>
			</div><!-- /.p-price__tableWrap -->

			<div id="priceNipple" class="p-price__tableWrap">
				<h3 class="c-heading__point" data-type="price_line">乳頭縮小</h3>

				<dl class="p-price__table">
					<dt>乳頭縮小</dt>
					<div class="p-price__tableRight">
						<dd>
							<span>高さのみ</span>
							<span>¥130,900 (税込)</span>
						</dd>
						<dd>
							<span>大きさのみ</span>
							<span>¥240,900 (税込)</span>
						</dd>
					</div><!-- /.p-price__tableRight -->
				</dl>

				<p class="p-price__link"><a href="https://www.mizunomori.com/diagnosis/bust/nyuto/" target="_blank" rel="noopener">乳頭縮小の詳細へ</a></p>
			</div><!-- /.p-price__tableWrap -->

			<div id="priceAreola" class="p-price__tableWrap">
				<h3 class="c-heading__point" data-type="price_line">乳輪縮小</h3>

				<dl class="p-price__table">
					<dt>乳輪縮小</dt>
					<div class="p-price__tableRight">
						<dd>
							<span>乳輪縮小</span>
							<span>¥350,900 (税込)</span>
						</dd>
					</div><!-- /.p-price__tableRight -->
				</dl>

				<p class="p-price__link"><a href="https://www.mizunomori.com/diagnosis/bust/nyurin/" target="_blank" rel="noopener">乳輪縮小の詳細へ</a></p>
			</div><!-- /.p-price__tableWrap -->

			<div id="priceDepression" class="p-price__tableWrap">
				<h3 class="c-heading__point" data-type="price_line">陥没乳頭</h3>

				<dl class="p-price__table">
					<dt>陥没乳頭</dt>
					<div class="p-price__tableRight">
						<dd>
							<span>陥没乳頭</span>
							<span>¥350,900 (税込)</span>
						</dd>
					</div><!-- /.p-price__tableRight -->
				</dl>

				<p class="p-price__link"><a href="https://www.mizunomori.com/diagnosis/bust/kanbotsu/" target="_blank" rel="noopener">陥没乳頭の詳細へ</a></p>
			</div><!-- /.p-price__tableWrap -->

			<div id="priceLifting" class="p-price__tableWrap">
				<h3 class="c-heading__point" data-type="price_line">乳房縮小術・乳房吊り上げ術</h3>

				<dl class="p-price__table">
					<dt>乳房縮小術<br>乳房吊り上げ術</dt>
					<div class="p-price__tableRight">
						<dd>
							<span></span>
							<span>¥1,155,000 (税込)</span>
						</dd>
					</div><!-- /.p-price__tableRight -->
				</dl>

				<p class="p-price__link"><a href="https://www.mizunomori.com/diagnosis/bust/syukusyo_lift/" target="_blank" rel="noopener">乳房縮小術・乳房吊り上げ術の詳細へ</a></p>
			</div><!-- /.p-price__tableWrap -->

		</div><!-- /.l-container__narrow -->

	</section><!-- /.p-price -->

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
							<p class="c-DrProfile__conference"><span>ドクターコメント</span></p>
							<div class="c-DrProfile__list -lowerstyle">
									<p class="c-DrProfile__listText">女性の胸の悩みといっても様々で、胸を大きくする手術から小さくする手術、乳頭や乳輪の手術など、お悩みによって様々な手術があります。<br>水の森美容外科では、様々なお胸に関する手術を、豊富なバリエーションで取り揃えておりますので、どのようなお悩みでもお気軽にご相談下さい。</p>
									<p class="c-DrProfile__listText">
										当院のホームページは「医療広告ガイドライン」を遵守し、医師監修の元、作成・掲載しております。当院における医療広告ガイドラインの運用や方針については<a href="https://mizunomori-campaign.com/guideline/" class="u-textLink" target="_blank" rel="noopener">こちら</a>を御覧ください。
									</p>
							</div><!-- /.c-DrProfile__list -->

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
	</div><!-- /.u-bgGrayColor -->