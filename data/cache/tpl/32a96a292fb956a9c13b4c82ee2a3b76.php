<?php exit;?>00157753193111e6c7ba7d7e9c3ae277c6a829fadf2cs:1751:"a:2:{s:8:"template";s:1687:"<?php $__Template->display("themes/mobile/header"); ?>

<img src="/upload/2018-06-01/75.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />

<section class="news-filter am-padding-sm">

    <p class="am-margin-top-0 am-margin-bottom-sm am-text-sm"><a href="/">首页</a><?php foreach ($crumb as $vo) { ?> <span class="am-icon-angle-double-right"></span> <a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a><?php } ?></p>

    <h2 class="am-text-center am-text-lg am-margin-0"><?php echo $contentInfo["title"];?></h2>
    <p class="am-text-center am-margin-vertical-sm am-text-sm">时间：<?php echo date('Y-m-d H:i:s',$contentInfo["time"]);?></p>

    <div class="article-box"><?php echo $contentInfo["content"];?></div>

    <ul class="am-margin-top-xl am-avg-sm-1 pre-next-line">
        <li>
            <div class="am-text-sm am-text-truncate"><span>上一篇：</span>
                <?php if (empty($prevInfo['aurl'])){ ?>
                <a class="am-link-muted ">暂无</a>
                <?php }else{ ?>
                <a href="<?php echo $prevInfo["aurl"];?>" class=""><?php echo $prevInfo["title"];?></a>
                <?php } ?>
            </div>
        </li>
        <li>

            <div class="am-text-sm am-text-truncate"><span>下一篇：</span>
                <?php if (empty($nextInfo['aurl'])){ ?>
                <a class="">暂无</a>
                <?php }else{ ?>
                <a href="<?php echo $nextInfo["aurl"];?>" class=""><?php echo $nextInfo["title"];?></a>
                <?php } ?>
            </div>
        </li>
    </ul>

</section>

<?php $__Template->display("themes/mobile/footer"); ?>";s:12:"compile_time";i:1545995931;}";