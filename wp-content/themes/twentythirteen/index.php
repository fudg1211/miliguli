<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<style type="text/css">
.pageHeader{
    display:none;
}
</style>

<div class="header">
    <div class="nav" style="display: none">
        <a href="/" title="首页">首页</a>
        <a href="liuyan.html" title="建议反馈">建议反馈</a>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="米粒谷粒logo" class="logo"/>
    <img src="<?php echo get_template_directory_uri(); ?>/images/diannao.png" alt="chrome效果图片" class="diannao"/>
</div>

<div class="wrapper">
    <div class="tjContainer">
        <span class="tj" style="margin-left: 0;">
            <a href="https://chrome.google.com/webstore/detail/user-agent-switcheruserag/ighgcligfbemmpnidpkhikmnmeohfafb" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/userAgent_a.png" alt="userAgent插件"/>
            </a>
            <h2 class="tjName">
               User Agent Switcher
            </h2>
            <div class="tjDesc">
                立即切换浏览器标示，模拟各种pc浏览器及手机浏览器，前端开发者必备。
            </div>
        </span>
        <span class="tj">
            <a href="https://chrome.google.com/webstore/detail/jsonview-jsonviewer-json/hdmbdioamgdkppmocchpkjhbpfmpjiei" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/jsonView_a.png" alt="jsonView插件" />
            </a>
            <h2 class="tjName">
                jsonView
            </h2>
            <div class="tjDesc">
                格式化、着色、美观、易读<br/>
                <span class="orange">独家解决</span> 输出带html不能格式化问题
            </div>
        </span>
        <span class="tj" style="margin-right: 0;">
            <a href="https://chrome.google.com/webstore/detail/html5%E9%AB%98%E6%B8%85%E4%BA%8C%E7%BB%B4%E7%A0%81%E7%94%9F%E6%88%90%E5%99%A8/oadofllcbigaobbjlabbgpddbchjdpki" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/erweima_a.png" alt="二维码插件"/>
            </a>
            <h2 class="tjName">
                HTML5高清二维码生成器
            </h2>
            <div class="tjDesc">
                一件生成高清二维码<br/>
                网名的大福利
            </div>
        </span>

        <span class="tj" style="margin-left: 0;">
            <a href="https://chrome.google.com/webstore/detail/clear-cache%EF%BC%8Cclean-cache-%E6%B8%85/egkcjgapmgioadbkhaciondahbjggnhj" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/clearCache_b.png" alt="clearCache插件"/>
            </a>
            <h2 class="tjName">
                clearCache
            </h2>
            <div class="tjDesc">
                一键清理浏览器缓存<br/>
                方便、快速
            </div>
        </span>
        <span class="tj">
            <a href="https://chrome.google.com/webstore/detail/%E7%B1%B3%E7%B2%92%E5%BF%AB%E9%80%92%E6%9F%A5%E8%AF%A2/ikdddpiengejmodnhdddpkpnemgndhdn" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/kuaidi.jpg" alt="快递查询插件" />
            </a>
            <h2 class="tjName">
                快递查询
            </h2>
            <div class="tjDesc">
                查询国内国际快递<br/>
                顺风、申通、中通、韵达、UPS、DHL... 实时跟踪
            </div>
        </span>
        <span class="tj" style="margin-right: 0;">
            <img src="<?php echo get_template_directory_uri(); ?>/images/index_01.png" alt="二维码插件"/>
            <h2 class="tjName">
                后续插件开发
            </h2>
            <div class="tjDesc">
                有需求、有建议、提bug<br/>
                请您给本站留言
            </div>
        </span>
    </div>

    <div class="aboutContainer">
        <div style="height: 1px;"></div>
        <div class="line"></div>
        <div class="aboutIco">
        </div>
        <h2 class="center aboutTitle" style="line-height: 50px;">我们的梦想</h2>
        <div class="aboutDesc">
            米粒谷粒是一家专注于chrome纯净插件的工作室，打造 <span class="orange">无木马、无后门、无广告、不收集用户信息</span> 的chrome纯净插件，先后设计出jsonView、userAgent等开发者插件和html5高清二维码生成器、快递查询等服务类插件。现诚邀有志同道合的设计师一枚，共同设计、开发最好用最安全的chrome浏览器插件。
        </div>
    </div>
</div>

<?php get_footer(); ?>