<?php if ( !defined( 'ABSPATH' ) ) exit; ?>
<?php get_header(); ?>
<main>
    <div class="l-mv p-mv">
            <div class="l-containerPc">
                <picture class="p-mv__mv">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/mv_pc.webp" media="(min-width:768px)" />
                    <img src="<?php echo get_template_directory_uri(); ?>/img/mv_sp.webp" alt="メインビュー">
                </picture><!-- /p-mv__mv -->
            </div><!-- /l-containerPC -->
        </div><!-- /l-mv -->

        <div class="l-readingSection c-readingSection">
            <div class="c-readingSection__title">
                <p>はじめまして、<br class="u-pcNone">水の森美容外科です。</p>
            </div><!-- /.c-readingSection__title -->
            <div class="c-readingSection__Container">
                <p class="c-readingSection__sentence u-fontGothic">当院は皆様に支えられ、<br class="u-pcNone">開業から16年目を迎えました。</p>
                <p class="c-readingSection__sentence u-fontGothic">全国で5院と決して大きくはないですが、<br>だからこそできる<br class="u-pcNone">「技術レベル」「サービス」で<br class="u-pcNone">5院目となる福岡・九州の皆様に<br>美しくなる幸せをお届けします。</p>
            </div><!-- /.c-readingSection__sentence -->
            <div class="u-spacer__m"></div><!-- /u-spacer__m -->
        </div><!-- /.l-readingSection -->
        <div class="l-container">
            <div class="p-CTA u-pcNone">
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
        </div><!-- /l-container -->

        <nav class="p-spnav l-spnav u-pcNone">
            <ul class="p-spnav__list">
                <li class="p-spnav__list-item"><a href="#diagnosisMenu">施術を探す</a></li>
                <li class="p-spnav__list-item"><a href="https://www.mizunomori.com/price/">料金一覧</a></li>
                <li class="p-spnav__list-item"><a href="#p-picture">症例写真</a></li>
                <li class="p-spnav__list-item"><a href="#l-doctor">ドクター紹介</a></li>
                <li class="p-spnav__list-item"><a href="#p-access">アクセス</a></li>
                <li class="p-spnav__list-item"><a href="https://www.mizunomori.com/faq/">よくあるご質問</a></li>
            </ul><!-- /.p-spnav__list -->
        </nav><!-- /.p-spnav -->

        <section id="diagnosisMenu" class="l-diagnosisMenu p-diagnosisMenu">
            <div class="l-container">
                <div class="l-spacer__headingTop c-heading">
                    <span class="c-heading__en u-uppercase" lang="en">menu</span>
                    <h2 class="c-heading__jp">施術内容</h2>
                </div><!-- /.c-heading -->
                <div class="u-bgMainColor">
                    <div class="p-diagnosisMenu__wrap l-diagnosisMenu__wrap">
                        <div class="u-spacer__s"></div><!-- /u-spacer__s -->
                        <p class="u-centerposition u-fontGothic p-diagnosisMenu__title">施術の種類から探す</p>
                        <nav class="p-diagnosisMenu__cards">
                            <a href="diagnosis/eye/" class="p-diagnosisMenu__card">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/menu1.webp" alt="二重まぶた・目元" class="u-spNone">
                                <p class="p-diagnosisMenu__lead">二重まぶた・目元</p>
                            </a><!-- /p-diagnosisMenu__card -->
                            <a href="/diagnosis/liposuction/" class="p-diagnosisMenu__card">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/menu2.webp" alt="脂肪吸引・痩身" class="u-spNone">
                                <p class="p-diagnosisMenu__lead">脂肪吸引・痩身</p>
                            </a><!-- /p-diagnosisMenu__card -->
                            <a href="/diagnosis/hyaluronan/" class="p-diagnosisMenu__card">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/menu3.webp" alt="ヒアルロン酸注入" class="u-spNone">
                                <p class="p-diagnosisMenu__lead">ヒアルロン酸注入</p>
                            </a><!-- /p-diagnosisMenu__card -->
                            <a href="/diagnosis/bust/" class="p-diagnosisMenu__card">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/menu4.webp" alt="豊胸・バスト" class="u-spNone">
                                <p class="p-diagnosisMenu__lead">豊胸・バスト</p>
                            </a><!-- /p-diagnosisMenu__card -->
                            <a href="/diagnosis/face/" class="p-diagnosisMenu__card">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/menu5.webp" alt="フェイスライン" class="u-spNone">
                                <p class="p-diagnosisMenu__lead">フェイスライン</p>
                            </a><!-- /p-diagnosisMenu__card -->
                            <a href="/diagnosis/nose/" class="p-diagnosisMenu__card">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/menu6.webp" alt="鼻" class="u-spNone">
                                <p class="p-diagnosisMenu__lead">鼻</p>
                            </a><!-- /p-diagnosisMenu__card -->
                            <a href="/diagnosis/botox/" class="p-diagnosisMenu__card">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/menu7.webp" alt="ボトックス注射" class="u-spNone">
                                <p class="p-diagnosisMenu__lead">ボトックス注射</p>
                            </a><!-- /p-diagnosisMenu__card -->
                            <a href="/diagnosis/skin/" class="p-diagnosisMenu__card">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/menu8.webp" alt="美容点滴・内服" class="u-spNone">
                                <p class="p-diagnosisMenu__lead">美容点滴・内服</p>
                            </a><!-- /p-diagnosisMenu__card -->
                        </nav><!-- /p-diagnosisMenu__cards -->
                    </div><!-- /p-diagnosisMenu__wrap -->
                </div><!-- /u-bgMainColor -->
            </div><!-- /l-container -->
        </section><!-- /l-diagnosisMenu -->

        <section class="l-searchMenu p-searchMenu">
            <div class="l-container">
                <h2 class="p-searchMenu__title u-centerposition">部位ごとに探す</h2>
                <div class="p-searchMenu__box c-flexPC">
                    <div class="p-searchMenu__img c-flex__half">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/menu_face.webp" alt="Face">
                    </div><!-- /.p-searchMenu__img -->
                    <nav class="c-flex__half">
                        <h3 class="u-visually-hidden">部位ごとのナビゲーションリンク</h3>
                        <ul class="p-searchMenu__buttons">
                            <li><button type="button" data-micromodal-trigger="p-modal-1">二重・目元</button></li>
                            <li><button type="button" data-micromodal-trigger="p-modal-2">鼻</button></li>
                            <li><button type="button" data-micromodal-trigger="p-modal-3">小顔</button></li>
                            <li><button type="button" data-micromodal-trigger="p-modal-4">フェイスライン</button></li>
                            <li><button type="button" data-micromodal-trigger="p-modal-5">しわ・たるみ</button></li>
                            <li><button type="button" data-micromodal-trigger="p-modal-6">口元</button></li>
                        </ul>
                    </nav><!-- /.p-searchMenu__buttons -->
                </div><!-- /.p-searchMenu__box -->
                <div class="p-searchMenu__box c-flexPC p-searchMenu__box-reverse">
                    <div class="p-searchMenu__img c-flex__half p-searchMenu__img-reverse">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/menu_body.webp" alt="Body">
                    </div><!-- /.p-searchMenu__img -->
                    <nav class="c-flex__half">
                        <h3 class="u-visually-hidden">部位ごとのナビゲーションリンク</h3>
                        <ul class="p-searchMenu__buttons">
                            <li><button type="button" data-micromodal-trigger="p-modal-7">二の腕・お腹</button></li>
                            <li><button type="button" data-micromodal-trigger="p-modal-8">豊胸・バスト</button></li>
                            <li><button type="button" data-micromodal-trigger="p-modal-9">太もも・お尻</button></li>
                            <li><button type="button" data-micromodal-trigger="p-modal-10">肩・ふくらはぎ</button></li>
                            <li><button type="button" data-micromodal-trigger="p-modal-11">その他</button></li>
                        </ul>
                    </nav><!-- /.p-searchMenu__buttons -->
                </div><!-- /.p-searchMenu__box -->
            </div><!-- /.l-container -->
        </section><!-- /.l-search -->

        <!-- modal01 -->
        <div id="p-modal-1" class="p-modal__wrap" aria-hidden="true">
            <div class="p-modal__overlay" tabindex="-1" data-micromodal-close>

            </div>
            <div class="p-modal__container" role="dialog" aria-modal="true">
                <div class="p-modal__close">
                    <button class="p-modal__closeButton" type="button" aria-label="Close modal" data-micromodal-close>✕</button>
                </div><!-- /.p-modal__close -->
                <div id="p-modal-1-content">
                    <div class="p-modal__flex">
                        <div class="p-modal__block">
                            <p class="p-modal__lead">二重整形</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="/diagnosis/eye/maibotsu/">二重埋没法</a></li>
                                <li class="p-modal__category-item"><a href="/diagnosis/eye/sekkai/">二重切開法</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->
                        <div class="p-modal__block">
                            <p class="p-modal__lead">目力をアップ</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="/diagnosis/diagnosis/eye/gankenkasui/">眼瞼下垂</a></li>
                                <li class="p-modal__category-item"><a href="/diagnosis/diagnosis/eye/tarumi_mayushita/">眉下切開</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->
                        <div class="p-modal__block">
                            <p class="p-modal__lead">目を横に大きく</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="/diagnosis/eye/megashira/">目頭切開</a></li>
                                <li class="p-modal__category-item"><a href="/diagnosis/eye/mejiri-sekkai/">目尻切開</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->
                        <div class="p-modal__block">
                            <p class="p-modal__lead">クマ改善</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="/diagnosis/eye/ageng-eye/">目の下のたるみ取り</a></li>
                                <li class="p-modal__category-item"><a href="https://www.mizunomori.com/diagnosis/eye/darkcircles/">目の下のヒアルロン酸</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->
                        <div class="p-modal__block">
                            <p class="p-modal__lead">よりかわいらしく</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="/diagnosis/eye/hyaluronan/">涙袋のヒアルロン酸</a></li>
                                <li class="p-modal__category-item"><a href="https://www.mizunomori.com/diagnosis/eye/botox/">たれ目のボトックス</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->
                    </div><!-- /.p-modal__flex -->
                </div>
            </div>
        </div>
        <!-- modal01 -->

        <!-- modal02 -->
        <div id="p-modal-2" class="p-modal__wrap" aria-hidden="true">
            <div class="p-modal__overlay" tabindex="-1" data-micromodal-close>
            </div>
            <div class="p-modal__container" role="dialog" aria-modal="true">
                <div class="p-modal__close">
                    <button class="p-modal__closeButton" type="button" aria-label="Close modal" data-micromodal-close>✕</button>
                </div><!-- /.p-modal__close -->
                <div id="p-modal-2-content">
                    <div class="p-modal__flex">
                        <div class="p-modal__block">
                            <p class="p-modal__lead">鼻を高く</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="/diagnosis/nose/ryubi/">鼻プロテーゼ</a></li>
                                <li class="p-modal__category-item"><a href="/diagnosis/nose/hyaluronan/">鼻のヒアルロン酸</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->
                        <div class="p-modal__block">
                            <p class="p-modal__lead">鼻先を整える</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="/diagnosis/nose/bisenzikai/">鼻尖耳介</a></li>
                                <li class="p-modal__category-item"><a href="https://www.mizunomori.com/diagnosis/nose/bichukaku/">鼻中隔延長術</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->
                        <div class="p-modal__block">
                            <p class="p-modal__lead">鼻筋を整える</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="https://www.mizunomori.com/diagnosis/nose/hump/">わし鼻修正</a></li>
                                <li class="p-modal__category-item"><a href="https://www.mizunomori.com/diagnosis/nose/honekiri/">鼻骨骨切り</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->
                        <div class="p-modal__block">
                            <p class="p-modal__lead">横幅をスリムに</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="/diagnosis/nose/biyoku/">小鼻縮小</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->

                    </div><!-- /.p-modal__flex -->
                </div>
            </div>
        </div>
        <!-- modal02 -->

        <!-- modal03 -->
        <div id="p-modal-3" class="p-modal__wrap" aria-hidden="true">
            <div class="p-modal__overlay" tabindex="-1" data-micromodal-close>
            </div>
            <div class="p-modal__container" role="dialog" aria-modal="true">
                <div class="p-modal__close">
                    <button class="p-modal__closeButton" type="button" aria-label="Close modal" data-micromodal-close>✕</button>
                </div><!-- /.p-modal__close -->
                <div id="p-modal-3-content">
                    <div class="p-modal__flex">
                        <div class="p-modal__block">
                            <p class="p-modal__lead">お顔を小さく</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="/diagnosis/liposuction/face/">お顔の脂肪吸引</a></li>
                                <li class="p-modal__category-item"><a href="/diagnosis/mouth/botox/">エラのボトックス</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->
                        <div class="p-modal__block">
                            <p class="p-modal__lead">リフトアップ</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="/diagnosis/mouth/faceline/">水の森式ヒアルロン酸リフト</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->

                    </div><!-- /.p-modal__flex -->
                </div>
            </div>
        </div>
        <!-- modal03 -->

        <!-- modal04 -->
        <div id="p-modal-4" class="p-modal__wrap" aria-hidden="true">
            <div class="p-modal__overlay" tabindex="-1" data-micromodal-close>
            </div>
            <div class="p-modal__container" role="dialog" aria-modal="true">
                <div class="p-modal__close">
                    <button class="p-modal__closeButton" type="button" aria-label="Close modal" data-micromodal-close>✕</button>
                </div><!-- /.p-modal__close -->
                <div id="p-modal-4-content">
                    <div class="p-modal__flex">
                        <div class="p-modal__block">
                            <p class="p-modal__lead">あごのライン形成</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="https://www.mizunomori.com/diagnosis/mouth/kagaku/">顎プロテーゼ</a></li>
                                <li class="p-modal__category-item"><a href="/diagnosis/mouth/chin_hyaluronan/">顎のヒアルロン酸</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->
                        <div class="p-modal__block">
                            <p class="p-modal__lead">シュッとした輪郭</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="/diagnosis/liposuction/face/">お顔の脂肪吸引</a></li>
                                <li class="p-modal__category-item"><a href="/diagnosis/mouth/botox/">エラのボトックス</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->
                        <div class="p-modal__block">
                            <p class="p-modal__lead">おでこを丸く</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="/diagnosis/hyaluronan/amount/">おでこのヒアルロン酸</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->
                        <div class="p-modal__block">
                            <p class="p-modal__lead">リフトアップ</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="/diagnosis/mouth/faceline/">水の森式ヒアルロン酸リフト</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->

                    </div><!-- /.p-modal__flex -->
                </div>
            </div>
        </div>
        <!-- modal04 -->

        <!-- modal05 -->
        <div id="p-modal-5" class="p-modal__wrap" aria-hidden="true">
            <div class="p-modal__overlay" tabindex="-1" data-micromodal-close>
            </div>
            <div class="p-modal__container" role="dialog" aria-modal="true">
                <div class="p-modal__close">
                    <button class="p-modal__closeButton" type="button" aria-label="Close modal" data-micromodal-close>✕</button>
                </div><!-- /.p-modal__close -->
                <div id="p-modal-5-content">
                    <div class="p-modal__flex">
                        <div class="p-modal__block">
                            <p class="p-modal__lead">しわを薄く</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="/diagnosis/petit/nasolabialfold/">ほうれい線へのヒアルロン酸</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->
                        <div class="p-modal__block">
                            <p class="p-modal__lead">クマ改善</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="/diagnosis/eye/ageng-eye/">目の下のたるみ取り</a></li>
                                <li class="p-modal__category-item"><a href="https://www.mizunomori.com/diagnosis/eye/darkcircles/">目の下のヒアルロン酸</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->
                        <div class="p-modal__block">
                            <p class="p-modal__lead">表情でできるしわへ</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="/diagnosis/petit/botox/">しわのボトックス注射</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->
                        <div class="p-modal__block">
                            <p class="p-modal__lead">お顔全体のたるみに</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="/diagnosis/mouth/faceline/">水の森式ヒアルロン酸リフト</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->

                    </div><!-- /.p-modal__flex -->
                </div>
            </div>
        </div>
        <!-- modal05 -->

        <!-- modal06 -->
        <div id="p-modal-6" class="p-modal__wrap" aria-hidden="true">
            <div class="p-modal__overlay" tabindex="-1" data-micromodal-close>
            </div>
            <div class="p-modal__container" role="dialog" aria-modal="true">
                <div class="p-modal__close">
                    <button class="p-modal__closeButton" type="button" aria-label="Close modal" data-micromodal-close>✕</button>
                </div><!-- /.p-modal__close -->
                <div id="p-modal-6-content">
                    <div class="p-modal__flex">
                        <div class="p-modal__block">
                            <p class="p-modal__lead">魅力的な唇に</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="/diagnosis/mouth/lips_hyaluronan/">唇のヒアルロン酸</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->
                        <div class="p-modal__block">
                            <p class="p-modal__lead">しわをうっすらと</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="/diagnosis/petit/nasolabialfold/">ほうれい線のヒアルロン酸</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->
                        <div class="p-modal__block">
                            <p class="p-modal__lead">笑顔を美しく</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="https://www.mizunomori.com/diagnosis/mouth/koukaku/">口角のボトックス</a></li>
                                <li class="p-modal__category-item"><a href="https://www.mizunomori.com/diagnosis/mouth/smile/">ガミースマイルのボトックス</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->

                    </div><!-- /.p-modal__flex -->
                </div>
            </div>
        </div>
        <!-- modal06 -->

        <!-- modal07 -->
        <div id="p-modal-7" class="p-modal__wrap" aria-hidden="true">
            <div class="p-modal__overlay" tabindex="-1" data-micromodal-close>
            </div>
            <div class="p-modal__container" role="dialog" aria-modal="true">
                <div class="p-modal__close">
                    <button class="p-modal__closeButton" type="button" aria-label="Close modal" data-micromodal-close>✕</button>
                </div><!-- /.p-modal__close -->
                <div id="p-modal-7-content">
                    <div class="p-modal__flex">
                        <div class="p-modal__block">
                            <p class="p-modal__lead">ノースリーブが似合うように</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="/diagnosis/liposuction/arm/">二の腕の脂肪吸引</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->
                        <div class="p-modal__block">
                            <p class="p-modal__lead">タイトな服も着こなせる</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="/diagnosis/liposuction/waist/">お腹の脂肪吸引</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->
                    </div><!-- /.p-modal__flex -->
                </div>
            </div>
        </div>
        <!-- modal07 -->

        <!-- modal08 -->
        <div id="p-modal-8" class="p-modal__wrap" aria-hidden="true">
            <div class="p-modal__overlay" tabindex="-1" data-micromodal-close>
            </div>
            <div class="p-modal__container" role="dialog" aria-modal="true">
                <div class="p-modal__close">
                    <button class="p-modal__closeButton" type="button" aria-label="Close modal" data-micromodal-close>✕</button>
                </div><!-- /.p-modal__close -->
                <div id="p-modal-8-content">
                    <div class="p-modal__flex">
                        <div class="p-modal__block">
                            <p class="p-modal__lead">胸を大きく</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="diagnosis/bust/bag/">シリコンバック豊胸</a></li>
                                <li class="p-modal__category-item"><a href="diagnosis/bust/grease/">脂肪注入豊胸</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->
                        <div class="p-modal__block">
                            <p class="p-modal__lead">乳頭を整える</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="https://www.mizunomori.com/diagnosis/bust/nyuto/">乳頭縮小</a></li>
                                <li class="p-modal__category-item"><a href="https://www.mizunomori.com/diagnosis/bust/nyurin/">乳輪縮小</a></li>
                                <li class="p-modal__category-item"><a href="https://www.mizunomori.com/diagnosis/bust/kanbotsu/">陥没乳頭</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->
                        <div class="p-modal__block">
                            <p class="p-modal__lead">胸を小さく・垂れ下がった胸を整える</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="https://www.mizunomori.com/diagnosis/bust/syukusyo_lift/">乳房縮小/吊り上げ術</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->

                    </div><!-- /.p-modal__flex -->
                </div>
            </div>
        </div>
        <!-- modal08 -->

        <!-- modal09 -->
        <div id="p-modal-9" class="p-modal__wrap" aria-hidden="true">
            <div class="p-modal__overlay" tabindex="-1" data-micromodal-close>
            </div>
            <div class="p-modal__container" role="dialog" aria-modal="true">
                <div class="p-modal__close">
                    <button class="p-modal__closeButton" type="button" aria-label="Close modal" data-micromodal-close>✕</button>
                </div><!-- /.p-modal__close -->
                <div id="p-modal-9-content">
                    <div class="p-modal__flex">
                        <div class="p-modal__block">
                            <p class="p-modal__lead">スラっとした美脚に</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="/diagnosis/liposuction/hip/">太もも・お尻の脂肪吸引</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->
                    </div><!-- /.p-modal__flex -->
                </div>
            </div>
        </div>
        <!-- modal09 -->

        <!-- modal10 -->
        <div id="p-modal-10" class="p-modal__wrap" aria-hidden="true">
            <div class="p-modal__overlay" tabindex="-1" data-micromodal-close>
            </div>
            <div class="p-modal__container" role="dialog" aria-modal="true">
                <div class="p-modal__close">
                    <button class="p-modal__closeButton" type="button" aria-label="Close modal" data-micromodal-close>✕</button>
                </div><!-- /.p-modal__close -->
                <div id="p-modal-10-content">
                    <div class="p-modal__flex">
                        <div class="p-modal__block">
                            <p class="p-modal__lead">肩こり解消・肩周りをスッキリと</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="/diagnosis/botox/shoulder/">肩のボトックス</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->
                        <div class="p-modal__block">
                            <p class="p-modal__lead">スラっとした華奢な脚に</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="https://www.mizunomori.com/diagnosis/diet/botox/">ふくらはぎのボトックス</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->
                    </div><!-- /.p-modal__flex -->
                </div>
            </div>
        </div>
        <!-- modal10 -->

        <!-- modal11 -->
        <div id="p-modal-11" class="p-modal__wrap" aria-hidden="true">
            <div class="p-modal__overlay" tabindex="-1" data-micromodal-close>
            </div>
            <div class="p-modal__container" role="dialog" aria-modal="true">
                <div class="p-modal__close">
                    <button class="p-modal__closeButton" type="button" aria-label="Close modal" data-micromodal-close>✕</button>
                </div><!-- /.p-modal__close -->
                <div id="p-modal-11-content">
                    <div class="p-modal__flex">
                        <div class="p-modal__block">
                            <p class="p-modal__lead">しみやくすみに</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="https://www.mizunomori.com/diagnosis/skin/vitamin/">高濃度ビタミンC点滴</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->
                        <div class="p-modal__block">
                            <p class="p-modal__lead">美白へ</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="/diagnosis/skin/shiratama/">白玉点滴</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->
                        <div class="p-modal__block">
                            <p class="p-modal__lead">点滴で痩せる</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="https://www.mizunomori.com/diagnosis/skin/diet/">ダイエット点滴</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->
                        <div class="p-modal__block">
                            <p class="p-modal__lead">汗を抑える</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="https://www.mizunomori.com/diagnosis/underarm/botox/">汗止めのボトックス</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->
                        <div class="p-modal__block">
                            <p class="p-modal__lead">手を若々しく</p>
                            <ul class="p-modal__category">
                                <li class="p-modal__category-item"><a href="https://www.mizunomori.com/diagnosis/hyaluronan/hand/">手の甲のヒアルロン酸</a></li>
                            </ul><!-- /.p-modal__category -->
                        </div><!-- /.p-modal__block -->
                    </div><!-- /.p-modal__flex -->
                </div>
            </div>
        </div>
        <!-- modal11 -->


        <div class="u-CircleOuter u-pcNone">
            <div class="u-bgCircle u-bgAccentColor"></div><!-- /u-bgCircle -->
        </div><!-- /u-CircleOuter -->

        <div class="u-bgAccentColor">
            <section class="l-reasons p-reasons">
                <div class="l-containerPc">
                    <div class="c-heading__reasons">
                        <span class="c-heading__reasonsEn u-uppercase" lang="en">reasons</span>
                        <h2 class="c-heading__reasonsJp">選ばれる理由</h2>
                    </div><!-- /.c-heading -->

                    <div class="p-reasons__wrap">
                        <div class="p-reasons__card">
                            <h3 class="p-reasons__cardTitle">
                                <span>1</span>
                                自信のある施術法のみ
                            </h3><!-- /p-reasons__cardTitle -->
                            <p class="p-reasons__cardSentence">
                                積み重ねてきた技術で自信のある施術方法のみを行います。<br>そのため、各施術メニューは1種類のみ。<br>スーパー●●法やハイブリッド●●術など、同じ施術で名前や料金の異なる種類はございません。<br>例えば二重埋没法なら、あるのはトコトン追及した「二重埋没法」一種類のみです。
                            </p><!-- /p-reasons__cardSentence -->
                        </div><!-- /p-reasons__card -->
                        <div class="p-reasons__card">
                            <h3 class="p-reasons__cardTitle">
                                <span>2</span>
                                分かりやすい金額表示
                            </h3><!-- /p-reasons__cardTitle -->
                            <p class="p-reasons__cardSentence">
                                当院では施術費に全て必要な費用を含みます。<br>HPや広告では安く見せ、カウンセリングで高額なプランを勧めるようなことは一切ございません。そのため、施術によっては一見高額に見えるかも知れませんが、実際に他のクリニック様の見積を比べた結果、当院のほうがお手頃な価格に収まるケースもございます。
                            </p><!-- /p-reasons__cardSentence -->
                        </div><!-- /p-reasons__card -->
                        <div class="p-reasons__card">
                            <h3 class="p-reasons__cardTitle">
                                <span>3</span>
                                施術理解を深めるために
                            </h3><!-- /p-reasons__cardTitle -->
                            <p class="p-reasons__cardSentence">
                                例えば二重整形では、カウンセリング前に二重まぶたの仕組みを解説するオリジナル動画をご覧いただいております。<br>ご視聴後、知識を深めた状態で医師とのカウンセリングがございますので、より納得度の高いカウンセリングをお受けいただけます。
                            </p><!-- /p-reasons__cardSentence -->
                        </div><!-- /p-reasons__card -->
                    </div><!-- /p-reasons__wrap -->
                </div><!-- /l-containerPC -->
            </section><!-- /l-reasons -->
        </div><!-- /u-bgAccentColor -->

        <div class="u-CircleOuter u-pcNone">
            <div class="u-bgCircle u-bgCircleBottom u-bgAccentColor"></div><!-- /u-bgCircle -->
        </div><!-- /u-CircleOuter -->

        <div class="u-CircleOuter u-pcNone">
            <div class="u-bgCircle u-bgCreamColor u-bgCircleReverse"></div><!-- /u-bgCircle -->
        </div><!-- /u-CircleOuter -->

        <div class="u-bgCreamColor">
            <section class="p-rumor l-rumor">
                <div class="l-containerPc">
                    <div class="c-heading__rumor">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/uwasa_ttl.webp" alt="水の森三つのウワサ">
                    </div><!-- /c-heading__rumor -->
                    <div class="p-rumor__accordionList u-pcNone">
                        <dl>
                            <dt class="p-rumor__accordion c-flex c-flex__alignCenter js-accordion">
                                <span class="p-rumor__accordionNumber">その1</span>
                                <h3 class="p-rumor__accordionTitle">医師が施術を勧めない？</h3>
                            </dt>
                            <dd class="p-rumor__accordionContent js-content">美容医療はお金がかかります。<br>そのためご希望の施術では効果がみられない、薄い場合はその理由をきちんとお伝えします。<br>その上で別の解決法をご提案することもあれば、時には治療自体をお勧めしない場合もございます。<br>「正直な診察」を患者様へお届けします。</dd>
                        </dl><!-- /.p-news__accordion -->
                        <dl>
                            <dt class="p-rumor__accordion c-flex c-flex__alignCenter js-accordion">
                                <span class="p-rumor__accordionNumber">その2</span>
                                <h3 class="p-rumor__accordionTitle">院長クラスでも再研修？</h3>
                            </dt>
                            <dd class="p-rumor__accordionContent js-content">当院の技術は16年間常に進化を続けています。<br>それは新しい治療法を何でも取り入れるのではなく、効果のある施術理論を更に向上させているという意味です。そのため各院の院長クラスでも埋没法を再度学び直すこともあります。<br>クリニック全体で医師による仕上がりの差が少ない「技術統一」も行っております。</dd>
                        </dl><!-- /.p-news__accordion -->
                        <dl>
                            <dt class="p-rumor__accordion c-flex c-flex__alignCenter js-accordion">
                                <span class="p-rumor__accordionNumber">その3</span>
                                <h3 class="p-rumor__accordionTitle">モニター価格がない？</h3>
                            </dt>
                            <dd class="p-rumor__accordionContent js-content">当院の技術は16年間常に進化を続けています。<br>それは新しい治療法を何でも取り入れるのではなく、効果のある施術理論を更に向上させているという意味です。そのため各院の院長クラスでも埋没法を再度学び直すこともあります。<br>クリニック全体で医師による仕上がりの差が少ない「技術統一」も行っております。</dd>
                        </dl><!-- /.p-news__accordion -->
                    </div><!-- /u-rumor__accordionList -->
                    <div class="p-rumor__wrap u-spNone">
                        <div class="p-rumor__card">
                            <h3 class="p-rumor__cardTitle">
                                <span>その1</span>
                                医師が施術を勧めない？
                            </h3><!-- /p-rumor__cardTitle -->
                            <p class="p-rumor__cardSentence">
                                美容医療はお金がかかります。<br>そのためご希望の施術では効果がみられない、薄い場合はその理由をきちんとお伝えします。<br>その上で別の解決法をご提案することもあれば、時には治療自体をお勧めしない場合もございます。
                            </p><!-- /p-rumor__cardSentence -->
                            <p class="p-rumor__cardSentence">
                                「正直な診察」を患者様へお届けします。
                            </p>
                        </div><!-- /p-rumor__card -->
                        <div class="p-rumor__card">
                            <h3 class="p-rumor__cardTitle">
                                <span>その2</span>
                                院長クラスでも再研修？
                            </h3><!-- /p-rumor__cardTitle -->
                            <p class="p-rumor__cardSentence">
                                当院の技術は16年間常に進化を続けています。<br>それは新しい治療法を何でも取り入れるのではなく、効果のある施術理論を更に向上させているという意味です。そのため各院の院長クラスでも埋没法を再度学び直すこともあります。
                            </p><!-- /p-rumor__cardSentence -->
                            <p class="p-rumor__cardSentence">
                                クリニック全体で医師による仕上がりの差が少ない「技術統一」も行っております。
                            </p><!-- /p-rumor__cardSentence -->
                        </div><!-- /p-rumor__card -->
                        <div class="p-rumor__card">
                            <h3 class="p-rumor__cardTitle">
                                <span>その3</span>
                                モニター価格がない？
                            </h3><!-- /p-rumor__cardTitle -->
                            <p class="p-rumor__cardSentence">
                                今では数多くのクリニック様でモニター制度がございますが、モニター制度とは本来、症例写真のご提供・医師の技術向上のために患者様にご協力頂く制度です。<br>
                                しかし最近では売上のためにモニター価格を設定するクリニック様が多くみられます。<br>
                                しかし、それでは患者様にとっての不利益が多すぎると当院は考えます。
                                当院では、モニター様は完全無料で指導医立ち合いのもと行い、一般の患者様には総院長より合格のでた、解剖学の知見と技術が伴った医師のみが施術を行います。
                            </p><!-- /p-rumor__cardSentence -->
                        </div><!-- /p-rumor__card -->
                    </div><!-- /p-rumor__wrap -->
                </div><!-- /l-containerPc -->
            </section><!-- /p-rumor -->
        </div><!-- /u-bgCreamColor -->

        <div class="u-CircleOuter u-pcNone">
            <div class="u-bgCircle u-bgCircleBottom u-bgCreamColor"></div><!-- /u-bgCircle -->
        </div><!-- /u-CircleOuter -->

        <section class="p-news l-news">
            <div class="l-container">
                <div class="l-spacer__headingTop c-heading">
                    <span class="c-heading__en u-uppercase" lang="en">news</span>
                    <h2 class="c-heading__jp">最新情報</h2>
                </div><!-- /.c-heading -->
                <div class="p-news__accordionWrap">
                    <dl>
                        <dt class="p-news__accordion js-accordion">
                            <span class="p-news__accordionDate c-sentence">2022.07.01</span>
                            <h3 class="p-news__accordionTitle">福岡院開院</h3>
                        </dt>
                        <dd class="p-news__accordionContent js-content">福岡院開院。福岡院開院。</dd>
                    </dl><!-- /.p-news__accordion -->
                    <dl>
                        <dt class="p-news__accordion js-accordion">
                            <span class="p-news__accordionDate c-sentence">2022.07.01</span>
                            <h3 class="p-news__accordionTitle">福岡院開院</h3>
                        </dt>
                        <dd class="p-news__accordionContent js-content">福岡院開院。福岡院開院。</dd>
                    </dl><!-- /.p-news__accordion -->
                </div><!-- /.p-news__accordionWrap -->
                <div class="p-news__bnrWrap c-flexPC c-flex__wrap">
                    <div class="p-news__bnr c-flex__half">
                        <a href=""><img src="https://placehold.jp/440x180.png" alt=""></a>
                    </div><!-- /.p-news__bnr -->
                    <div class="p-news__bnr c-flex__half">
                        <a href=""><img src="https://placehold.jp/440x180.png" alt=""></a>
                    </div><!-- /.p-news__bnr -->
                    <div class="p-news__bnr c-flex__half">
                        <a href=""><img src="https://placehold.jp/440x180.png" alt=""></a>
                    </div><!-- /.p-news__bnr -->
                    <div class="p-news__bnr c-flex__half">
                        <a href=""><img src="https://placehold.jp/440x180.png" alt=""></a>
                    </div><!-- /.p-news__bnr -->
                </div><!-- /.p-news__bnrWrap -->
                <nav class="p-news__icons">
                    <h2 class="u-centerposition u-fontGothic">公式SNS</h2>
                    <div class="u-spacer__s"></div><!-- /.u-spacer__s -->
                    <ul class="c-flex c-flex__center p-news__iconsList">
                        <li>
                            <a href="https://twitter.com/_mizunomori_" target="_blank" rel="noopener">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt="twitter" class="p-news__icons-icon" width="53px"
                                    height="53px">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/mizunomori_clinic/" target="_blank" rel="noopener">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="instagram" class="p-news__icons-icon"
                                    width="53px" height="53px">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/user/mizunomoribiyougeka" target="_blank"
                                rel="noopener">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/youtube.png" alt="youtube" class="p-news__icons-icon" width="53px"
                                    height="53px">
                            </a>
                        </li>
                        <li>
                            <a href="" class="p-news__icons-icon" target="_blank" rel="noopener">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/line.png" alt="line" class="p-news__icons-icon" width="53px"
                                    height="53px">
                            </a>
                        </li>
                    </ul>
                    <div class="u-spacer__m"></div><!-- /.u-spacer__m -->
                </nav><!-- /.p-news__icons -->

                <div class="u-spacer__l"></div><!-- /.u-spacer__l -->
            </div><!-- /.l-container -->
        </section><!-- /.p-news -->
        <div class="u-bgMainColor">
            <section id="p-picture" class="l-picture p-picture">
                <div class="l-container">
                    <div class="l-spacer__headingTop c-heading">
                        <span class="c-heading__en u-uppercase" lang="en">CASE</span>
                        <h2 class="c-heading__jp">症例写真</h2>
                    </div><!-- /.c-heading -->
                    <h3 class="p-picture__lead"><span class="u-blueCrayon">人気ランキング</span></h3>

                    <div class="p-picture__card">
                        <h4 class="p-picture__ranking">No.1&emsp;二重切開法</h4><!-- /.p-picture__ranking -->
                        <div class="c-beforeAfter">
                            <figure class="c-beforeAfter__before">
                                <img src="https://placehold.jp/162x162.png" alt="">
                                <figcaption>
                                    術前
                                </figcaption>
                            </figure>
                            <figure class="c-beforeAfter__after">
                                <img src="https://placehold.jp/162x162.png" alt="">
                                <figcaption>
                                    術後1か月
                                </figcaption>
                            </figure>
                        </div><!-- /.c-beforeAfter -->
                        <div class="p-picture__description">
                            <p class="p-picture__button js-accordion" role="button">施術詳細</p>
                            <div class="p-picture__hiddenTable js-content">
                                <dl>
                                    <dt>施術費用</dt>
                                    <dd>273,900円(税込)</dd>
                                    <dt>リスク・<br>副作用</dt>
                                    <dd>
                                        <span>【痛み・熱感】...1週間程度</span>
                                        <span>【腫れ・内出血】...ピークは1～2週間程度</span>
                                        <span>【傷口の赤み】...3が月</span>
                                    </dd>
                                </dl>
                            </div><!-- /.p-picture__hiddenTable -->
                        </div><!-- /.p-picture__discription -->

                    </div><!-- /.p-picture__card -->

                    <div class="c-flexPC">
                        <div class="p-picture__card">
                            <h4 class="p-picture__ranking p-picture__ranking-silver">No.2&emsp;二重切開法</h4><!-- /.p-picture__ranking -->
                            <div class="c-beforeAfter">
                                <figure class="c-beforeAfter__before">
                                    <img src="https://placehold.jp/162x162.png" alt="">
                                    <figcaption>
                                        術前
                                    </figcaption>
                                </figure>
                                <figure class="c-beforeAfter__after">
                                    <img src="https://placehold.jp/162x162.png" alt="">
                                    <figcaption>
                                        術後1か月
                                    </figcaption>
                                </figure>
                            </div><!-- /.c-beforeAfter -->
                            <div class="p-picture__description">
                                <p class="p-picture__button js-accordion" role="button">施術詳細</p>
                                <div class="p-picture__hiddenTable js-content">
                                    <dl>
                                        <dt>施術費用</dt>
                                        <dd>273,900円(税込)</dd>
                                        <dt>リスク・<br>副作用</dt>
                                        <dd>
                                            <span>【痛み・熱感】...1週間程度</span>
                                            <span>【腫れ・内出血】...ピークは1～2週間程度</span>
                                            <span>【傷口の赤み】...3が月</span>
                                        </dd>
                                    </dl>
                                </div><!-- /.p-picture__hiddenTable -->
                            </div><!-- /.p-picture__discription -->

                        </div><!-- /.p-picture__card -->

                        <div class="p-picture__card">
                            <h4 class="p-picture__ranking p-picture__ranking-blonze">No.3&emsp;二重切開法</h4>
                            <div class="c-beforeAfter">
                                <figure class="c-beforeAfter__before">
                                    <img src="https://placehold.jp/162x162.png" alt="">
                                    <figcaption>
                                        術前
                                    </figcaption>
                                </figure>
                                <figure class="c-beforeAfter__after">
                                    <img src="https://placehold.jp/162x162.png" alt="">
                                    <figcaption>
                                        術後1か月
                                    </figcaption>
                                </figure>
                            </div><!-- /.c-beforeAfter -->
                            <div class="p-picture__description">
                                <p class="p-picture__button js-accordion" role="button">施術詳細</p>
                                <div class="p-picture__hiddenTable js-content">
                                    <dl>
                                        <dt>施術費用</dt>
                                        <dd>273,900円(税込)</dd>
                                        <dt>リスク・<br>副作用</dt>
                                        <dd>
                                            <span>【痛み・熱感】...1週間程度</span>
                                            <span>【腫れ・内出血】...ピークは1～2週間程度</span>
                                            <span>【傷口の赤み】...3が月</span>
                                        </dd>
                                    </dl>
                                </div><!-- /.p-picture__hiddenTable -->
                            </div><!-- /.p-picture__discription -->

                        </div><!-- /.p-picture__card -->
                    </div><!-- /.c-flex -->
                    <div class="u-spacer__l"></div>
                    <div class="c-buttonSquare u-centerposition">
                        <a href="https://www.mizunomori.com/case-rank/">症例写真一覧へ</a>
                    </div><!-- /.p-picture__button -->
                    <div class="u-spacer__l"></div>
                </div><!-- /.l-container -->
            </section><!-- /.l-picture -->
        </div>

        <div class="p-LowerLink">
            <div class="u-spacer__l"></div>
            <div class="l-container">
                <nav class="p-LowerLink__nav">
                    <h2 class="u-visually-hidden">下層ページへのナビゲーションリンク</h2>
                    <ul class="p-LowerLink__list">
                        <li><a href="<?php echo esc_url(home_url('')); ?>/first.html">初めての方へ</a></li>
                        <li><a href="https://www.mizunomori.com/under20/">未成年の方へ</a></li>
                        <li><a href="https://www.mizunomori.com/faq/">よくあるご質問</a></li>
                        <li><a href="https://www.mizunomori.com/monitor/">モニター募集</a></li>
                    </ul>
                </nav>
            </div><!-- /.l-container -->
        </div><!-- /.p-LowerLink -->

        <section class="l-clinic p-clinic">
            <div class="l-container">
                <div class="l-spacer__headingTop c-heading">
                    <span class="c-heading__en u-uppercase" lang="en">clinic</span>
                    <h2 class="c-heading__jp">当院のご紹介</h2>
                </div><!-- /.c-heading -->
                <div class="swiper-container u-pcNone">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/interior_01.webp" alt="福岡院の内装">
                            </div><!-- /. -->
                            <div class="swiper-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/interior_02.webp" alt="福岡院の内装">
                            </div><!-- /. -->
                            <div class="swiper-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/interior_03.webp" alt="福岡院の内装">
                            </div><!-- /.-->
                        </div><!-- /.p-clinic__photos -->


                    </div><!-- /.swiper -->
                    <div class="swiper-pagination"></div><!-- /.swiper-pagination -->
                </div><!-- /.spiwer-wrapper -->

                <div class="u-spNone">
                    <div class="p-clinic__photos">
                        <div class="p-clinic__photos-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/interior_01.webp" alt="福岡院の内装">
                        </div><!-- /.p-clinic__photos-slide -->
                        <div class="p-clinic__photos-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/interior_02.webp" alt="福岡院の内装">
                        </div><!-- /.p-clinic__photos-slide -->
                        <div class="p-clinic__photos-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/interior_03.webp" alt="福岡院の内装">
                        </div><!-- /.p-clinic__photos-slide -->
                    </div><!-- /.p-clinic__photos -->
                </div><!-- /.u-spNone -->

                <div class="l-readingSection c-readingSection">
                    <div class="c-readingSection__title">
                        <p>水の森美容外科について</p>
                    </div><!-- /.c-readingSection__title -->
                    <div class="c-readingSection__Container">
                        <p class="c-readingSection__sentence">水の森美容外科では、<br class="u-pcNone">福岡・新宿・銀座・大阪・名古屋と<br class="u-pcNone">全国5院を展開しております。</p>
                        <p class="c-readingSection__sentence">当院がこだわっているのは<br class="u-pcNone">「自然な変化」です。<br>美容整形でよくある失敗や後悔は<br class="u-pcNone">「不自然さ」が主な原因で、<br>この「不自然さ」を拭うため、<br class="u-pcNone">「患者様中心主義」を掲げております。
                        </p>
                        <p class="c-readingSection__sentence">自然な仕上がりかつしっかりと変化のある<br class="u-pcNone">美容整形を行います。</p>
                    </div><!-- /.c-readingSection__sentence -->
                </div><!-- /.l-readingSection -->
                <div class="p-CTA l-CTA">
                    <h2 class="p-CTA__heading">無料カウンセリング予約<br class="u-pcNone">お問い合わせ　</h2>
                    <div class="c-buttonCTAWrap c-flex c-flex__center">
                        <div class="c-buttonCTA c-buttonCTA__phone u-pcNone">
                            <a href="tel:0120-510-830">お電話</a>
                        </div>
                        <div class="c-buttonCTA c-buttonCTA__phone u-spNone">
                            <a href="<?php echo esc_url(home_url('')); ?>/first.html">お電話</a>
                        </div>
                        <div class="c-buttonCTA c-buttonCTA__mail">
                            <a href="https://www.mizunomori.com/counsel/" target="_blank" rel="noopener">WEB予約</a>
                        </div>
                    </div><!-- /c-buttonCTAWrap -->
                </div><!-- /.p-CTA -->
            </div><!-- /.l-container -->
        </section><!-- /.l-clinic -->
        
        <div class="u-bgMainColor">
            <section id="l-doctor" class="l-doctor p-doctor">
                    <div class="l-container">
                        <div class="l-spacer__headingTop c-heading">
                            <span class="c-heading__en u-uppercase" lang="en">doctors</span>
                            <h2 class="c-heading__jp">ドクター紹介</h2>
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
                                    <a href="#" target="_blank" rel="noopener" class="c-DrProfile__instagram u-spNone">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="instagram" class="" width="20px" height="20px">
                                        <span class="u-fontGothic">インスタグラム</span>
                                    </a><!-- /c-DrProfile__instagram -->
                                </div><!-- /c-DrProfile__right -->
                            </div><!-- /c-flex -->

                        </div><!-- /.c-DrProfile -->

                        <div class="c-DrProfile">
                            <div class="c-flex">
                                <div class="c-DrProfile__left"><!-- pcレイアウト -->
                                    <div class="c-DrProfile__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/doc_takee.jpg" alt="院長　竹江 渉">
                                    </div><!-- /.c-DrProfile__img -->
                                    <h3 class="c-DrProfile__name u-pcNone">
                                        水の森美容外科<br>総院長&emsp;<span>竹江&ensp;渉</span>
                                    </h3><!-- /.c-DrProfile__name -->
                                    <div class="c-DrProfile__body u-pcNone">
                                        <p class="c-sentence">水の森美容外科は、リピート率90％以上を誇るレベルの高い治療を皆様にお届けしております。<br>また、常に患者様を身内と思って接するカウンセリング姿勢には、皆様から多くの支持を受けております。</p>
                                        <div class="u-spacer__s"></div><!-- /.u-spacer__s -->
                                        <div class="c-buttonOrdinary">
                                            <a href="<?php echo esc_url(home_url('')); ?>/doctor.html#takee">総院長あいさつ</a>
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
                                    <a href="https://www.youtube.com/channel/UCo3qCN17xUuS-bTHxFhiEuA/videos" target="_blank" rel="noopener" class="c-DrProfile__bnr u-pcNone u-textCenter">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/doc_youtube.webp" alt="youtube" class="">
                                    </a><!-- /c-DrProfile__bnr -->
                                </div><!-- /c-DrProfile__left -->

                                <div class="c-DrProfile__right">
                                    <h3 class="c-DrProfile__name u-spNone">
                                        水の森美容外科&emsp;総院長&emsp;<span>竹江&ensp;渉</span>
                                    </h3><!-- /.c-DrProfile__name -->
                                    <div class="c-DrProfile__body u-spNone">
                                        <p class="c-sentence">水の森美容外科は、リピート率90％以上を誇るレベルの高い治療を皆様にお届けしております。<br>また、常に患者様を身内と思って接するカウンセリング姿勢には、皆様から多くの支持を受けております。</p>
                                        <div class="u-spacer__l"></div><!-- /.u-spacer__s -->
                                        <div class="c-buttonOrdinary">
                                            <a href="<?php echo esc_url(home_url('')); ?>/doctor.html#takee">総院長あいさつ</a>
                                        </div>
                                    </div><!-- /.c-DrProfile__body -->
                                    <div class="u-spacer__l"></div><!-- /.u-spacer__s -->
                                    <a href="https://www.youtube.com/channel/UCo3qCN17xUuS-bTHxFhiEuA" target="_blank" rel="noopener" class="c-DrProfile__bnr u-spNone u-textCenter">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/doc_youtube.webp" alt="youtube" class="">
                                    </a><!-- /c-DrProfile__bnr -->
                                </div><!-- /c-DrProfile__right -->
                            </div><!-- /c-flex -->

                        </div><!-- /.c-DrProfile -->
                    </div><!-- /.l-container -->
            </section>
        </div><!-- /.u-bgMainColor -->

        <section id="p-access" class="l-access p-access">
            <div class="l-container">
                <div class="l-spacer__headingTop c-heading">
                    <span class="c-heading__en u-uppercase" lang="en">access</span>
                    <h2 class="c-heading__jp">アクセス</h2>
                </div><!-- /.c-heading -->
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