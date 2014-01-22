<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta name="renderer" content="webkit"/>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title>米粒谷粒-纯净的chrome插件专业工作室</title>
    <meta name="description" content="米粒谷粒工作室专注于chrome插件设计，无广告、无木马、无后台程序" />
    <meta name="keywords" content="开发者工具，屏蔽广告插件，无广告插件、无后台木马插件、纯净插件、开发者插件、效率插件、移动开源项目、二维码插件、jsonView插件" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider-min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css">
</head>

<body>
<div class="topbar">
    <div class="container">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-1.png" class="logo"/>
    <ul class="mainNav right">
        <li class="current_nav"><a href="#">首页</a></li>
        <li><a href="#">功能介绍</a></li>
        <li><a href="#">帮助与反馈</a></li>
    </ul>
    </div>
    <div class="clear"></div>
</div>




