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
