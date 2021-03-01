<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * sumigoya
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header id="masthead" class="site-header">
    <img src="/assets/images/sumigoya_logp.png" alt="" class="header__logo">
    <div class="header__nav pc">
      <ul class="nav">
        <li class="nav__item">お品書き</li>
        <li class="nav__item">ご予約</li>
        <li class="nav__item">こだわり</li>
        <li class="nav__item">店舗情報</li>
      </ul>
    </div>
    <div class="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <nav class="globalMenuSp pc_none">
      <ul>
        <li class="globalMenuLi"><a href="#section1">お品書き</a></li>
        <li class="globalMenuLi"><a href="#section2">こだわり</a></li>
        <li class="globalMenuLi"><a href="#section4">店舗情報</a></li>
      </ul>
    </nav>
  </header><!-- #masthead -->
