<?php exit;?>001581493640f82cb6b161a62ea17730ec66987c1406s:2224:"a:2:{s:8:"template";s:2160:"
<?php $__Template->display("themes/default/head"); ?>

<img src="/upload/2018-06-01/3.png" class="am-img-responsive am-center img-min-with" alt="<?php echo $categoryInfo["name"];?>" />

<section class="news-filter am-padding-vertical-xl">
    <div class="am-container">
        <p class="am-margin-top-0 am-margin-bottom-sm"><a href="/">首页</a><?php foreach ($crumb as $vo) { ?> <span class="am-icon-angle-double-right"></span> <a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a><?php } ?></p>

        <h3 class="page-title"><?php echo $categoryInfo["name"];?> <span>company news</span></h3>

        <div class="filter-box">
            <?php foreach ($condition as $vo) { ?>

            <article class="am-padding-top-xs am-margin-bottom-sm">
                <div class="select-all <?php if ($vo["value"]==="all"){ ?>  selected <?php } ?> "><a href="<?php echo $vo["url"];?>">全部</a></div>
                <?php foreach ($vo["config"] as $v) { ?><div <?php if ($v["value"] == $v["i"]){ ?> class="selected" <?php } ?> ><a href="<?php echo $v["url"];?>"><?php echo $v["name"];?></a></div><?php } ?>
            </article>

            <?php } ?>
        </div>

        <article class="news-listing am-margin-top-lg">

            <?php foreach ($pageList as $vo) { ?>

            <a href="<?php echo $vo["aurl"];?>">
                <img src="<?php echo $vo["image"];?>" class="am-img-responsive am-center" alt="<?php echo $vo["title"];?>" />

                <div>
                    <p class="am-margin-vertical-sm"><?php echo $vo["title"];?></p>
                    <p class="am-margin-vertical-sm am-text-sm"><?php echo $vo["description"];?></p>
                    <time pubdate datetime="<?php echo date('Y-m-d H:i:s',$vo["time"]);?>" class="am-hide"><?php echo date('Y-m-d H:i:s',$vo["time"]);?></time>

                    <span>阅读全文 <small class="am-icon-angle-double-right"></small></span>
                </div>

            </a>

            <?php } ?>

            <div class="pagination"><?php echo $page;?></div>

        </article>

    </div>
</section>

<?php $__Template->display("themes/default/footer"); ?>";s:12:"compile_time";i:1549957640;}";