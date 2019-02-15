<?php exit;?>001577534679652700b9190a1a3ff146112f24d827d8s:2611:"a:2:{s:8:"template";s:2547:"<?php $__Template->display("themes/mobile/header"); ?>

<img src="/upload/2018-06-01/75.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />

<section class="lawyers-filter am-padding-sm">

    <p class="am-margin-top-0 am-margin-bottom-sm am-text-sm"><a href="/">首页</a><?php foreach ($crumb as $vo) { ?> <span class="am-icon-angle-double-right"></span> <a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a><?php } ?></p>

        <h3 class="page-title"><?php echo $categoryInfo["name"];?> <span>zhenya lawyer team</span></h3>

    <p class="am-margin-vertical-sm am-text-sm">震亚拥有一批既有丰富经验，又有深厚理论基础的律师。震亚的律师及助理律师在加入震亚前，均需接受严格的遴选，且均为遴选中的佼佼者。经过多年专业法律工作的磨练，震亚律师团队的每位成员均在其擅长领域取得骄人成就，更有多名律师著书立说，积极参加电视、网络等媒体栏目，将自己的法律成果和法律服务经验回馈于整个社会。</p>


    <div class="filter-box">
            <?php foreach ($condition as $vo) { ?>

            <div class="category-list-title"><?php echo $vo["name"];?>：</div>

            <article class="am-padding-top-xs am-margin-bottom-sm">
                <div class="select-all <?php if ($vo["value"]==="all"){ ?>  selected <?php } ?> "><a href="<?php echo $vo["url"];?>">全部</a></div><?php foreach ($vo["config"] as $v) { ?><div <?php if ($v["value"] == $v["i"]){ ?> class="selected" <?php } ?> ><a href="<?php echo $v["url"];?>"><?php echo $v["name"];?></a></div><?php } ?>
            </article>

            <?php } ?>
        </div>

    <article class="lawyer-listing am-margin-top-sm">

        <ul class="am-avg-sm-2 am-margin-vertical-sm lawyer-listing-box">
            <?php foreach ($pageList as $vo) { ?>
            <li>
                <div class="lawyer-list-info">
                    <a href="<?php echo $vo["aurl"];?>">
                        <img src="<?php echo $vo["circleImg"];?>" class="am-img-responsive am-center" alt="<?php echo $vo["lsxm"];?>律师" />
                        <p class="am-text-sm am-margin-vertical-sm am-text-center"><?php echo $vo["lsxm"];?> <?php echo $vo["position"];?></p>
                        <hr class="am-margin-vertical-sm">
                    </a>
                </div>
            </li>
            <?php } ?>
        </ul>
    </article>

</section>

<?php $__Template->display("themes/mobile/footer"); ?>";s:12:"compile_time";i:1545998679;}";