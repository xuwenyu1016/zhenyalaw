<?php exit;?>00157753983991181a0322b19735989285fc6f5c26b8s:2690:"a:2:{s:8:"template";s:2626:"<?php $__Template->display("themes/mobile/header"); ?>

<img src="/upload/2018-06-01/75.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />

<section class="team-box am-padding-sm">

    <p class="am-margin-top-0 am-margin-bottom-sm am-text-sm"><a href="/">首页</a><?php foreach ($crumb as $vo) { ?> <span class="am-icon-angle-double-right"></span> <a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a><?php } ?></p>

    <h3 class="page-title"><?php echo $categoryInfo["name"];?> <span>zhenya lawyer team</span></h3>

    <div class="team-grey-container">

        <article class="">

            <div>
                <p class="l1"><?php echo $contentInfo["lsxm"];?> <span><?php echo $contentInfo["position"];?></span></p>

                <p class="l2"><?php echo $contentInfo["posTitle"];?></p>

                <hr>
            </div>


            <img src="<?php echo $contentInfo["image"];?>" class="am-img-responsive" alt="<?php echo $categoryInfo["title"];?>" />

        </article>

        <p class="l3 am-text-sm">擅长领域：<?php echo $contentInfo["gywm"];?></p>

        <p class="l4 am-text-sm">Email：<?php echo $contentInfo["mail"];?></p>

    </div>

    <div class="person-intro am-padding-horizontal-sm">
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


</section>

<?php $__Template->display("themes/mobile/footer"); ?>";s:12:"compile_time";i:1546003839;}";