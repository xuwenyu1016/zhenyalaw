<?php exit;?>0015814934711c3694022f5abd7c210c14ab86e29429s:3046:"a:2:{s:8:"template";s:2982:"<?php $__Template->display("themes/default/head"); ?>

<img src="/upload/2018-06-01/3.png" class="am-img-responsive am-center img-min-with" alt="<?php echo $categoryInfo["name"];?>" />

<section class="news-container am-padding-vertical-xl">
    <div class="am-container">

        <p class="am-margin-top-0 am-margin-bottom-sm"><a href="/">首页</a><?php foreach ($crumb as $vo) { ?> <span class="am-icon-angle-double-right"></span> <a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a><?php } ?></p>

        <div class="news-article">

            <article class="am-padding-lg">
                <h2 class="am-text-center am-padding-top-sm am-text-xl am-margin-0"><?php echo $contentInfo["title"];?></h2>
                <p class="am-text-center am-margin-vertical-sm am-text-sm">时间：<time pubdate datetime="<?php echo date('Y-m-d H:i:s',$contentInfo["time"]);?>"><?php echo date('Y-m-d H:i:s',$contentInfo["time"]);?></time></p>

                <div class="article-box"><?php echo $contentInfo["content"];?></div>

                <ul class="am-margin-top-xl am-avg-sm-2 pre-next-line">
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
            </article>

            <aside class="am-padding-lg">
                <p class="am-margin-top-0 am-margin-bottom-sm"><b>更多精彩内容</b></p>
                <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>2, "sub"=>true, "limit"=>3, "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                <a href="<?php echo $list["aurl"];?>">
                    <img src="<?php echo $list["image"];?>" alt="<?php echo $list["title"];?>" class="img-responsive" />
                    <p class="am-text-sm am-margin-top-xs am-margin-bottom-sm"><?php echo $list["title"];?></p>
                </a>
                <?php } ?>
            </aside>

        </div>
    </div>

</section>


<?php $__Template->display("themes/default/footer"); ?>";s:12:"compile_time";i:1549957471;}";