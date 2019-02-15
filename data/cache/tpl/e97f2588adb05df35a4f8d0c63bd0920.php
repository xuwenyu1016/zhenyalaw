<?php exit;?>0015799224364f4288cde779ee5b28f2a7992fcc3014s:6780:"a:2:{s:8:"template";s:6716:"<?php $__Template->display("themes/mobile/header"); ?>

<img src="/upload/2018-06-01/75.png" class="am-img-responsive am-center" alt="<?php echo $categoryInfo["name"];?>" />

<section class="services am-padding-sm">

    <p class="am-margin-top-0 am-margin-bottom-sm am-text-sm"><a href="/">首页</a><?php foreach ($crumb as $vo) { ?> <span class="am-icon-angle-double-right"></span> <a href="/article/gongsifalvshiwu.html"><?php echo $vo["name"];?></a><?php } ?></p>

    <h3 class="page-title"><?php echo $categoryInfo["name"];?> <span>zhenya law services</span></h3>


    <section class="accordion">
        <dl class="accordion-item">
            <dt class="accordion-title"><?php echo $contentInfo["title"];?>
                <a href="#doc-oc-demo1" data-am-offcanvas>更多服务</a>

                <div id="doc-oc-demo1" class="am-offcanvas">
                    <div class="am-offcanvas-bar">
                        <div class="am-offcanvas-content">
                            <ul class="am-nav">
                                <li>
                                    <?php if ( $contentInfo['title'] ==  '公司法律事务'  ){ ?>
                                    <a href="/article/gongsifalvshiwu.html" class="active">公司法律事务 <span class="am-icon-caret-right"></span></a>
                                    <?php }else{ ?>
                                    <a href="/article/gongsifalvshiwu.html">公司法律事务 <span class="am-icon-caret-right"></span></a>
                                    <?php } ?>
                                </li>
                                <li>
                                    <?php if ( $contentInfo['title'] ==  '政府法律事务'  ){ ?>
                                    <a href="/article/zhengfufalvshiwu.html" class="active">政府法律事务 <span class="am-icon-caret-right"></span></a>
                                    <?php }else{ ?>
                                    <a href="/article/zhengfufalvshiwu.html">政府法律事务 <span class="am-icon-caret-right"></span></a>
                                    <?php } ?>
                                </li>
                                <li>
                                    <?php if ( $contentInfo['title'] ==  '国际法律事务'  ){ ?>
                                    <a href="/article/guojifalvshiwu.html" class="active">国际法律事务 <span class="am-icon-caret-right"></span></a>
                                    <?php }else{ ?>
                                    <a href="/article/guojifalvshiwu.html">国际法律事务 <span class="am-icon-caret-right"></span></a>
                                    <?php } ?>
                                </li>
                                <li>
                                    <?php if ( $contentInfo['title'] ==  '房地产与建筑工程法律事务'  ){ ?>
                                    <a href="/article/fangdichanyujianzhugongchengfa.html" class="active">房地产与建筑工程法律事务 <span class="am-icon-caret-right"></span></a>
                                    <?php }else{ ?>
                                    <a href="/article/fangdichanyujianzhugongchengfa.html">房地产与建筑工程法律事务 <span class="am-icon-caret-right"></span></a>
                                    <?php } ?>
                                </li>
                                <li>
                                    <?php if ( $contentInfo['title'] ==  '金融法律事务'  ){ ?>
                                    <a href="/article/jinrongfalvshiwu.html" class="active">金融法律事务 <span class="am-icon-caret-right"></span></a>
                                    <?php }else{ ?>
                                    <a href="/article/jinrongfalvshiwu.html">金融法律事务 <span class="am-icon-caret-right"></span></a>
                                    <?php } ?>
                                </li>
                                <li>
                                    <?php if ( $contentInfo['title'] ==  '知识产权法律事务'  ){ ?>
                                    <a href="/article/zhishichanquanfalvshiwu.html" class="active">知识产权法律事务 <span class="am-icon-caret-right"></span></a>
                                    <?php }else{ ?>
                                    <a href="/article/zhishichanquanfalvshiwu.html">知识产权法律事务 <span class="am-icon-caret-right"></span></a>
                                    <?php } ?>
                                </li>
                                <li>
                                    <?php if ( $contentInfo['title'] ==  '民事法律事务'  ){ ?>
                                    <a href="/article/minshifalvshiwu.html" class="active">民事法律事务 <span class="am-icon-caret-right"></span></a>
                                    <?php }else{ ?>
                                    <a href="/article/minshifalvshiwu.html">民事法律事务 <span class="am-icon-caret-right"></span></a>
                                    <?php } ?>
                                </li>
                                <li>
                                    <?php if ( $contentInfo['title'] ==  '刑事法律事务'  ){ ?>
                                    <a href="/article/xingshifalvshiwu.html" class="active">刑事法律事务 <span class="am-icon-caret-right"></span></a>
                                    <?php }else{ ?>
                                    <a href="/article/xingshifalvshiwu.html">刑事法律事务 <span class="am-icon-caret-right"></span></a>
                                    <?php } ?>
                                </li>
                                <li>
                                    <?php if ( $contentInfo['title'] ==  '家族财富管理法律事务'  ){ ?>
                                    <a href="/article/jiazucaifuguanlifalvshiwu.html" class="active">家族财富管理法律事务 <span class="am-icon-caret-right"></span></a>
                                    <?php }else{ ?>
                                    <a href="/article/jiazucaifuguanlifalvshiwu.html">家族财富管理法律事务 <span class="am-icon-caret-right"></span></a>
                                    <?php } ?>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
            </dt>
            <dd class="accordion-bd">
                <div class="accordion-content"><?php echo $contentInfo["content"];?></div>
            </dd>
        </dl>

    </section>
</section>

<?php $__Template->display("themes/mobile/footer"); ?>";s:12:"compile_time";i:1548386436;}";