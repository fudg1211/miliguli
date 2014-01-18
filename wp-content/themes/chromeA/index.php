<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

    <div class="mainbannerC">
        <div class="mainbanner" id="mainbanner">
            <ul class="slides">
                <li><img src="http://cdc.tencent.com/wp-content/uploads/2013/06/guanjia.png"/></li>
                <li><img src="http://cdc.tencent.com/?attachment_id=7906"/></li>
                <li><img src="http://cdc.tencent.com/?attachment_id=7910"/></li>
            </ul>
        </div>
    </div>

    <script type="text/javascript">
        $(window).load(function() {
            $('#mainbanner').flexslider();
        });
    </script>


    <div class="container">

        <h2 class="cateName">更多应用</h2>
        <ul class="products">
            <li>
                <img src="http://www.foxmail.com/images/mac/zh/feature_ftn.png"/>
            </li>
            <li>
                <img src="http://www.foxmail.com/images/mac/zh/feature_ftn.png"/>
            </li>
            <li>
                <img src="http://www.foxmail.com/images/mac/zh/feature_ftn.png"/>
            </li>
        </ul>

        <div class="clear"></div>

        <h2 class="cateName">功能介绍</h2>
        <div class="whiteboard">
            <ol class="itemDesc">
                <li>
                    点击icon直接生成当前地址二维码，方便快捷。
                </li>
                <li>
                    点击下载按钮下载生成的二维码图片，下载的图片是高清的哦。
                </li>
                <li>
                    点击放大能将二维码放大一倍，不怕二维码太复杂手机不认识了，放大其实也是生成的高清二维码。
                </li>
                <li>
                    右键点击网页上的文字、图片、链接等等，可以在右键菜单中选中html5二维码来生成二维码。
                </li>
                <li>
                    ......
                </li>
            </ol>
        </div>

        <h2 class="cateName">最近更新</h2>

        <div class="whiteboard">
            <h3 class="changelog-title"><span class="float-left">Foxmail for Mac V1.2&nbsp;<span
                        class="red">(New)</span></span><span class="changelog-date">2013-09-26</span></h3>

            <div class="changelog-detail-outer">
                <ol class="changelog-detail">
                    <li>新增：发送超大附件；</li>
                    <li>新增：支持QQ邮箱群邮件；</li>
                    <li>新增：支持腾讯企业邮箱企业地址本；</li>
                    <li>新增：支持腾讯企业邮箱企业网盘；</li>
                    <li>新增：支持关闭邮件按主题聚合；</li>
                    <li>新增：邮件正文与附件分离下载；</li>
                    <li>新增：支持Gmail存档功能；</li>
                    <li>新增：支持Gmail移动操作；</li>
                    <li>新增：支持Gmail联系人自动拉取；</li>
                    <li>新增：支持Gmail快捷键；</li>
                    <li>新增：支持拉取系统通讯录群组和头像；</li>
                    <li>新增：未读邮件列表；</li>
                    <li>新增：支持粘贴并匹配样式；</li>
                    <li>新增：支持pst格式本地邮件导入；</li>
                    <li>优化：POP协议下导入邮件功能优化；</li>
                    <li>优化：POP协议下支持收取邮件后删除服务器邮件；</li>
                    <li>优化：联系人匹配逻辑优化；</li>
                    <li>优化：搜索框中高级搜索功能优化；</li>
                    <li>优化：取消垃圾邮件的新邮件提示；</li>
                    <li>修正：粘贴Excel表格样式丢失的问题。</li>
                </ol>
            </div>
        </div>

    </div>

<?php
get_footer();
