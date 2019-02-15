<?php exit;?>001577520402748ece46f2731a142935f433b5bbe1c7s:1980:"a:2:{s:8:"template";s:1916:"<?php $__Template->display("themes/mobile/header"); ?>

<img src="/upload/2018-06-01/75.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />

<section class="news-filter am-padding-sm">

    <p class="am-margin-top-0 am-margin-bottom-sm am-text-sm"><a href="/">首页</a><?php foreach ($crumb as $vo) { ?> <span class="am-icon-angle-double-right"></span> <a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a><?php } ?></p>

    <h3 class="page-title"><?php echo $categoryInfo["name"];?> <span>company news</span></h3>

    <div class="filter-box">
        <?php foreach ($condition as $vo) { ?>
        <article class="am-padding-top-xs am-margin-bottom-sm">
            <div class="select-all <?php if ($vo["value"]==="all"){ ?>  selected <?php } ?> "><a href="<?php echo $vo["url"];?>">全部</a></div><?php foreach ($vo["config"] as $v) { ?><div <?php if ($v["value"] == $v["i"]){ ?> class="selected" <?php } ?> ><a href="<?php echo $v["url"];?>"><?php echo $v["name"];?></a></div><?php } ?>
        </article>
        <?php } ?>
    </div>

    <article class="news-listing am-margin-top-sm">

        <?php foreach ($pageList as $vo) { ?>

        <a href="<?php echo $vo["aurl"];?>">
            <img src="<?php echo $vo["image"];?>" class="am-img-responsive am-center" alt="<?php echo $vo["lsxm"];?>律师" />

            <div class="">
                <p class="am-margin-vertical-0 am-text-sm am-text-truncate"><?php echo $vo["title"];?></p>
                <p class="am-margin-vertical-0 am-text-sm am-text-truncate"><?php echo $vo["description"];?></p>

                <span class="am-text-sm">阅读全文 <small class="am-icon-angle-double-right"></small></span>
            </div>
        </a>

        <?php } ?>

        <div class="pagination"><?php echo $page;?></div>

    </article>

</section>

<?php $__Template->display("themes/mobile/footer"); ?>";s:12:"compile_time";i:1545984402;}";