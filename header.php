<?php
  $title= '';
  $description='';
  $url='';
  $image='';
  $css='';
  $js='';
  if (is_front_page()) {
      $title = '紫翠チャーガ｜ロシア産最高級チャーガ';
      $description = '抗酸化力、免疫力向上に。ロシア産最高級チャーガ（カバノアナタケ）の紫翠チャーガをみなさまの健康にお役立てください。';
      $url = get_template_directory_uri() . '/';
      $image = '/img/ogp/ogp.png';
      $css = '<link rel="stylesheet" href="' . get_template_directory_uri() . '/css/top.min.css">';
      $js = '<script src="' . get_template_directory_uri() . '/js/top.min.js" defer></script>';
    }
    else if(is_page(22)){
      $title = '紫翠チャーガ | チャーガについて';
      $description = '森のダイヤモンドと呼ばるチャーガ（カバノアナタケ）は白樺の幹にに寄生するキノコの一種です。チャーガには強い抗酸化作用を持つフラボノイドやβグルカン（多糖類）をはじめとする栄養素が豊富に含まれ、体の酸化と糖化を防ぎ免疫力の向上に役立てられす。';
      $url = '/chaga';
      $image = '/img/ogp/ogp.png';
      $css = '<link rel="stylesheet" href="' . get_template_directory_uri() . '/css/chaga.min.css">';
      $js = '<script src="' . get_template_directory_uri() . '/js/chaga.min.js" defer></script>';
    }
    else if(is_page(2121)){
      $title = '紫翠チャーガ | よくある質問';
      $description = '紫翠チャーガの「よくあるご質問（FAQ）」のページです。お客さまからよくいただくご質問をまとめました。';
      $url = '/faq';
      $image = '/img/ogp/ogp.png';
      $css = '<link rel="stylesheet" href="' . get_template_directory_uri() . '/css/faq.min.css">';
      $js = '<script src="' . get_template_directory_uri() . '/js/faq.min.js" defer></script>';
    }
    else if(is_page(38)){
      $title = '紫翠チャーガ | お知らせ';
      $description = '抗酸化力、免疫力向上に。ロシア産最高級チャーガ（カバノアナタケ）の紫翠チャーガをみなさまの健康にお役立てください。';
      $url = '/info';
      $image = '/img/ogp/ogp.png';
      $css = '<link rel="stylesheet" href="' . get_template_directory_uri() . '/css/info.min.css">';
    }
    // else if(is_page(38)){
    //   $title = '紫翠チャーガ | 代理店募集';
    //   $description = '紫翠チャーガでは代理店販売（OEM）を募集しています。お気軽にお問い合わせください。';
    //   $url = '/oem';
    //   $image = '/img/ogp/ogp.png';
    //   $css = '<link rel="stylesheet" href="' . get_template_directory_uri() . '/css/oem.min.css">';
    // }
    else if(is_page(2123)){
      $title = '紫翠チャーガ | 会社概要';
      $description = '抗酸化力、免疫力向上に。ロシア産最高級チャーガ（カバノアナタケ）の紫翠チャーガをみなさまの健康にお役立てください。';
      $url = '/company';
      $image = '/img/ogp/ogp.png';
      $css = '<link rel="stylesheet" href="' . get_template_directory_uri() . '/css/company.min.css">';
    }
    else if(is_page(6)){
      $title = '紫翠チャーガ | お問い合わせ';
      $description = '抗酸化力、免疫力向上に。ロシア産最高級チャーガ（カバノアナタケ）の紫翠チャーガをみなさまの健康にお役立てください。';
      $url = '/contact';
      $image = '/img/ogp/ogp.png';
      $css = '<link rel="stylesheet" href="' . get_template_directory_uri() . '/css/contact.min.css">';
      $js = '<script src="' . get_template_directory_uri() . '/js/contact.min.js" defer></script>';
    }
    else if(is_page(3)){
      $title = '紫翠チャーガ | プライバシーポリシー';
      $description = '抗酸化力、免疫力向上に。ロシア産最高級チャーガ（カバノアナタケ）の紫翠チャーガをみなさまの健康にお役立てください。';
      $url = '/pp';
      $image = '/img/ogp/ogp.png';
      $css = '<link rel="stylesheet" href="' . get_template_directory_uri() . '/css/privacy-policy.min.css">';
    }
    else if(is_single()){
      $siteDescription = get_the_title();
      $title = '紫翠チャーガ | ' . $siteDescription;
      $description = '抗酸化力、免疫力向上に。ロシア産最高級チャーガ（カバノアナタケ）の紫翠チャーガをみなさまの健康にお役立てください。';
      $url = nowUrl();
      $image = '/img/ogp/ogp.png';
      $css = '<link rel="stylesheet" href="' . get_template_directory_uri() . '/css/article.min.css">';
    }
    else if(is_404()){
      $siteDescription = get_the_title();
      $title = '紫翠チャーガ｜ページが見つかりません';
      $css = '<link rel="stylesheet" href="' . get_template_directory_uri() . '/css/404.min.css">';
    }

?>
<?php if(is_page(6)): ?>
<?php endif; ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>"<?php echo $title; ?>"</title>
  <meta name="description" content="<?php echo $description; ?>">
  <meta property="og:title" content="<?php echo $title; ?>">
  <meta property="og:description" content="<?php echo $description; ?>">
  <meta property="og:url" content="<?php echo $url; ?>">
  <meta property="og:image" content="<?php echo $image; ?>"><link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@300;400;700&display=swap" rel="stylesheet"><link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.min.css">
  <?php echo $css; ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.min.js" defer></script>
  <?php echo $js; ?>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body id="js-body" <?php body_class(); ?>>
  <?php if(is_front_page()): ?>
    <div class="fixed-mainvisual">
      <div><img class="u-hidden-o-md" src="<?php echo get_template_directory_uri(); ?>/img/top/img-fixed-mainvisual-1-sp.jpg" alt=""><img class="u-hidden-u-lg" src="<?php echo get_template_directory_uri(); ?>/img/top/img-fixed-mainvisual-1-pc.jpg" alt=""></div>
      <div><img class="u-hidden-o-md" src="<?php echo get_template_directory_uri(); ?>/img/top/img-fixed-mainvisual-2-sp.jpg" alt=""><img class="u-hidden-u-lg" src="<?php echo get_template_directory_uri(); ?>/img/top/img-fixed-mainvisual-2-pc.jpg" alt=""></div>
      <div><img class="u-hidden-o-md" src="<?php echo get_template_directory_uri(); ?>/img/top/img-fixed-mainvisual-3-sp.jpg" alt=""><img class="u-hidden-u-lg" src="<?php echo get_template_directory_uri(); ?>/img/top/img-fixed-mainvisual-3-pc.jpg" alt=""></div>
    </div>
  <?php endif; ?>

  <header class="site-header" id="js-header">
    <div class="site-header__wrapper">
      <div class="site-header__contents">
        <div class="js-btn-trigger" id="js-btn-trigger"><span></span><span></span><span></span></div><a class="site-header__brand" href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/common/logo.png" alt="紫翠チャーガのロゴ"></a>
        <nav class="header-nav">
          <ul class="header-nav__wrapper">
            <li class="header-nav__item"><a href="/chaga">チャーガについて</a></li>
            <li class="header-nav__item"><a href="https://shisui-chaga.myshopify.com/collections/all/" target="_blank">ご購入</a></li>
            <li class="header-nav__item"><a href="/faq">よくある質問</a></li>
            <li class="header-nav__item"><a href="/info">お知らせ</a></li>
            <li class="header-nav__item"><a href="/contact">お問い合わせ</a></li>
            <li class="header-nav__item"><a href="/oem">代理店募集</a></li>
            <li class="header-nav__item u-ml-30-lg"><a class="site-header__cart" href="https://shisui-chaga.myshopify.com/collections/all/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_shop.svg" alt="ショッピングバッグ"></a></li>
          </ul>
        </nav><a class="site-header__cart u-hidden-o-lg" href="https://shisui-chaga.myshopify.com/collections/all/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_shop.svg" alt=""></a>
        <!-- global nav-->
        <nav class="global-nav" id="js-global-nav">
          <div class="contents">
            <div class="global-nav__logo-box"><img src="<?php echo get_template_directory_uri(); ?>/img/common/logo-nav.png" alt="紫翠チャーガのロゴ"></div>
            <ul class="global-nav__wrapper">
              <li class="global-nav__item is-page is-top">トップ<a href="/"></a></li>
              <li class="global-nav__item">チャーガについて<a href="/chaga"></a></li>
              <li class="global-nav__item is-outside-link">ご購入<a href="https://shisui-chaga.myshopify.com/collections/all/" target="_blank"></a><img src="<?php echo get_template_directory_uri(); ?>/img/common/outside-link.svg" alt="ショッピングバッグのアイコン"></li>
              <li class="global-nav__item">よくある質問<a href="/faq"></a></li>
              <li class="global-nav__item">お知らせ<a href="info"></a></li>
              <li class="global-nav__item">代理店募集<a href="/oem"></a></li>
              <li class="global-nav__item">会社概要<a href="/company"></a></li>
              <li class="global-nav__item">お問い合わせ<a href="/contact"></a></li>
              <li class="global-nav__item is-instagram">Follow us<a href="https://www.instagram.com/shisuichaga/"></a><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon-logo-instagram.svg" alt="インスタグラムのアイコン"></li>
            </ul><a class="global-nav__instagram" href="https://www.instagram.com/shisuichaga/" target="_blank">Follow us<img src="<?php echo get_template_directory_uri(); ?>/img/common/icon-logo-instagram.svg" alt="インスタグラムのアイコン"></a>
          </div>
        </nav>
      </div>
    </div>
  </header>