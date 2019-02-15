<?php exit;?>001577603552c1db4ecb6b5361cc45926e0c12284ffds:2817:"a:2:{s:8:"template";s:2753:"<?php $__Template->display("themes/default/head"); ?>

<img src="/upload/2018-06-01/3.png" class="am-img-responsive am-center img-min-with" alt="<?php echo $categoryInfo["name"];?>" />

<section class="am-padding-vertical-xl team-box">
    <div class="am-container">

        <p class="am-margin-top-0 am-margin-bottom-sm"><a href="/">首页</a><?php foreach ($crumb as $vo) { ?> <span class="am-icon-angle-double-right"></span> <a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a><?php } ?></p>

        <h3 class="page-title"><?php echo $categoryInfo["name"];?> <span>zhenya lawyer team</span></h3>

        <article class="team-grey-container">

            <div class="am-padding-xl">

                <p class="l1"><?php echo $contentInfo["lsxm"];?> <span><?php echo $contentInfo["position"];?></span></p>

                <p class="l2"><?php echo $contentInfo["posTitle"];?></p>

                <hr>

                <p class="l3">擅长领域：<?php echo $contentInfo["gywm"];?></p>

                <p class="l4">Email：<?php echo $contentInfo["mail"];?></p>

            </div>


            <img src="<?php echo $contentInfo["image"];?>" class="am-img-responsive" alt="<?php echo $categoryInfo["title"];?>" />
        </article>


        <div class="person-intro am-padding-top-lg am-padding-horizontal-sm">
            <img src="/upload/2018-06-01/42.png" class="am-img-responsive" alt="<?php echo $categoryInfo["name"];?>" />

            <p class="am-margin-0 am-padding-left-sm am-text-sm">个人经历：<br/><?php echo $contentInfo["experience"];?></p>
        </div>

        <div class="person-intro am-padding-top-sm am-padding-horizontal-sm am-margin-top-xs">
            <img src="/upload/2018-06-01/43.png" class="am-img-responsive" alt="<?php echo $categoryInfo["name"];?>" />

            <p class="am-margin-0 am-padding-left-sm am-text-sm">社会职务：<br/><?php echo $contentInfo["social"];?></p>
        </div>

        <div class="person-intro am-padding-top-sm am-padding-horizontal-sm am-margin-top-xs">
            <img src="/upload/2018-06-01/44.png" class="am-img-responsive" alt="<?php echo $categoryInfo["name"];?>" />

            <p class="am-margin-0 am-padding-left-sm am-text-sm">主要作品：<br/><?php echo $contentInfo["products"];?></p>
        </div>

        <div class="person-intro am-padding-top-sm am-padding-horizontal-sm am-margin-top-xs">
            <img src="/upload/2018-06-01/45.png" class="am-img-responsive" alt="<?php echo $categoryInfo["name"];?>" />

            <p class="am-margin-0 am-padding-left-sm am-text-sm">职业格言：<br/><?php echo $contentInfo["zyly"];?></p>
        </div>
    </div>
</section>


<?php $__Template->display("themes/default/footer"); ?>";s:12:"compile_time";i:1546067552;}";