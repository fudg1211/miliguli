<style type="text/css">
    .mainbannerC{
        background:#292929 url(../images/mainbanner_bg.png) repeat 0 0;
    }

    .mainbanner {
        border-bottom:1px solid #c5c5c5;
        width: 1000px;
        height: 400px;
        overflow:hidden;
        margin: auto;
        position: relative;
        font-size: 0;
        padding: 1px 0;
    }

    .mainbanner .slides li{
        opacity: 0;
    }

    .mainbanner .flex-active{
        background: rgba(255,255,255,0.5) !important;
    }

    .mainbanner img{
        width: 1000px;
        height: 400px;
    }

    .mainbanner .flex-control-nav {
        width: 100%;
        position: absolute;
        bottom: 8px;
        text-align: center;
        z-index: 10;
    }
</style>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider-min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css">
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


