<?php if ( !defined( 'ABSPATH' ) ) exit; ?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>トップページ｜水の森福岡院</title>
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
<link
  rel="stylesheet"
  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
/>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/micromodal/dist/micromodal.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/bundle.js" defer></script>
    <script>
        (function(d) {
          var config = {
            kitId: 'ifu2hrv',
            scriptTimeout: 3000,
            async: true
          },
          h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
      </script>

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
  <header class="l-header p-header">
        <div class="l-containerPc">
            <div class="p-header__top l-header__top c-flex c-flex__spaceBetween">
                <div class="p-header__logo">
                    <div class="p-header__logo-top u-min">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="水の森美容外科">
                        <span>福岡院</span>
                    </div><!-- /p-header__logo-top -->
                    <div class="p-header__logo-text u-min">
                        <p>福岡(天神・博多)の美容整形なら水の森美容外科福岡院</p>
                    </div><!-- /p-header__logo-text -->
                </div><!-- /p-header__logo -->
                <div class="p-header__buttons u-spNone">
                    <div class="c-buttonCTAWrap c-flex c-flex__center">
                        <div class="c-buttonCTA c-buttonCTA__header c-buttonCTA__phone">
                            <a href="">お電話</a>
                        </div>
                        <div class="c-buttonCTA c-buttonCTA__header c-buttonCTA__mail">
                            <a href="https://www.mizunomori.com/counsel/" target="_blank" rel="noopener">WEB予約</a>
                        </div>
                    </div><!-- /c-buttonCTAWrap -->
                </div><!-- /p-header__buttons -->
                <button class="p-header__humbergerButton u-pcNone js-humberger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button><!-- /p-header__humberger -->
            </div><!-- /p-header__top -->
        </div><!-- /l-container -->
		<?php get_template_part('template-parts/_header-nav'); ?>
  </header>
