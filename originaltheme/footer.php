<?php if ( !defined( 'ABSPATH' ) ) exit; ?>
	<footer class="l-footer p-footer">
        <div class="p-footer__body">
            <div class="l-containerPc">
                <div class="p-footer__flex"> <!-- pcでのレイアウト対応 -->
                    <div class="p-footer__bnr">
                        <a href="https://www.mizunomori.com/correct/" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/bnr_correct.webp" alt="失敗サイトへの誘導バナー"></a>
                    </div><!-- /.p-footer__bnr -->
                    <nav class="p-footer__icons">
                        <h2 class="u-visually-hidden">snsナビゲーション</h2>
                        <ul>
                            <li>
                                <a href="https://twitter.com/_mizunomori_" target="_blank" rel="noopener">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt="twitter" class="p-footer__icons-icon" width="53px" height="53px">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/mizunomori_clinic/" target="_blank" rel="noopener">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="instagram" class="p-footer__icons-icon" width="53px" height="53px">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/user/mizunomoribiyougeka" target="_blank" rel="noopener">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/youtube.png" alt="youtube" class="p-footer__icons-icon" width="53px" height="53px">
                                </a>
                            </li>
                            <li>
                                <a href="" class="p-footer__icons-icon" target="_blank" rel="noopener">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/line.png" alt="line" class="p-footer__icons-icon" width="53px" height="53px">
                                </a>
                            </li>
                        </ul>
                    </nav><!-- /.p-footer__icons -->
                    <div class="p-footer__flexItem">
                        <div class="c-buttonCTAWrap -forPC c-flex c-flex__spaceBetween">
                            <div class="c-buttonCTA c-buttonCTA__footer c-buttonCTA__phone u-pcNone">
                                <a href="tel:0120-510-830">お電話</a>
                            </div>
                            <div class="c-buttonCTA c-buttonCTA__footer c-buttonCTA__phone u-spNone">
                                <a href="<?php echo esc_url(home_url('')); ?>/first">お電話</a>
                            </div>
                            <div class="c-buttonCTA c-buttonCTA__footer c-buttonCTA__mail">
                                <a href="https://www.mizunomori.com/counsel/" target="_blank" rel="noopener">WEB予約</a>
                            </div>
                        </div><!-- /c-buttonCtaWrap -->
                        <div class="p-footer__button">
                            <a href="https://www.mizunomori.com/" target="_blank" rel="noopener" class="u-fontGothic">水の森美容外科総合サイト</a>
                        </div><!-- /.p-footer__button -->
                    </div>
                </div><!-- /p-footer__flex -->
            </div><!-- /.l-containerPc -->
        </div><!-- /.p-footer__body -->
        <div class="p-footer__bottom">
            <div class="l-containerPc">
                <ul class="p-footer__list">
                    <li class="p-footer__list-item"><a href="<?php echo esc_url(home_url('')); ?>/first">・<span>はじめての方へ</span></a></li>
                    <li class="p-footer__list-item"><a href="<?php echo esc_url(home_url('')); ?>/access">・<span>アクセス</span></a></li>
                    <li class="p-footer__list-item"><a href="https://www.mizunomori.com/price/">・<span>料金一覧</span></a></li>
                    <li class="p-footer__list-item"><a href="https://www.mizunomori.com/case-rank/">・<span>症例写真</span></a></li>
                    <li class="p-footer__list-item"><a href="https://www.mizunomori.com/policy/">・<span>プライバシーポリシー</span></a></li>
                    <li class="p-footer__list-item"><a href="https://www.mizunomori.com/concept/">・<span>コンセプト</span></a></li>
                    <li class="p-footer__list-item"><a href="<?php echo esc_url(home_url('')); ?>//diagnosis">・<span>診療項目</span></a></li>
                    <li class="p-footer__list-item"><a href="<?php echo esc_url(home_url('')); ?>//doctor">・<span>ドクター紹介</span></a></li>
                    <li class="p-footer__list-item"><a href="https://www.mizunomori.com/faq/">・<span>よくあるご質問</span></a></li>
                    <li class="p-footer__list-item"><a href="<?php echo esc_url(home_url('')); ?>//sitemap">・<span>サイトマップ</span></a></li>
                    <li class="p-footer__list-item"><a href="https://mizunomori-recruit.com/?_ebx=jfdiwlqj.1618535530.7k3u5pk">・<span>採用情報</span></a></li>
                    <li class="p-footer__list-item"><a href="https://www.mizunomori.com/safety/">・<span>安心・安全への取り組み</span></a></li>
                </ul><!-- /.p-footer__list -->
            </div><!-- /.l-containerPc -->
        </div><!-- /.p-footer__bottom -->
        <p class="p-footer__copyright u-centerposition">&copy; 2022 mizunomori-biyougeka. All rights reserved.</p>
    </footer>

		<?php wp_footer(); ?>

	</body>
</html>
