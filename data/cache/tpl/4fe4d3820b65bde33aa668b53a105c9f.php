<?php exit;?>0015776061906e9768ca93adcc0c624f778a5fbf2b7cs:3652:"a:2:{s:8:"template";s:3588:"<footer class="am-padding-sm">

    <article class="am-padding-top-sm am-margin-top-xs">
        <img src="/upload/2018-06-01/40.png" class="am-img-responsive" alt="" />
        <div class="am-padding-left-xs">
            <p class="am-margin-0 am-text-lg"><b>告诉我们您的需求</b></p>
            <p class="am-margin-0 am-text-xs">在线填写需求，我们将尽快为您提供法律咨询服务。</p>
        </div>
    </article>
    <form action="<?php echo U('DuxCms/Form/push');?>" method="post" class="am-margin-top-lg" id="formSubmit">

        <div class="am-form-group">
            <input name="name" type="text" placeholder="姓名："/>
        </div>

        <div class="am-form-group">
            <input name="tel" type="tel" placeholder="手机号："/>
        </div>

        <div class="am-form-group">
            <textarea name="content" type="text" placeholder="内容："></textarea>
        </div>

        <div class="am-form-group validate">
            <div>
                <input name="checkcode" type="text" maxlength="4" size="4" placeholder="验证码：" />
                <img title="点击刷新" src="<?php echo url('duxcms/ValidateCode/index');?>" align="absbottom" onclick="this.src='<?php echo url('duxcms/ValidateCode/index');?>&'+Math.random();" />
            </div>

            <input type="hidden" id="dizhi" name="dizhi" value="">
            <input name="ip" type="hidden" value="">
            <input name="table" type="hidden" value="guestbook">
            <input name="token" type="hidden" value=' <?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"guestbook"));  echo $echoList; ?> '>
            <button class="more-btn" type="submit">提&nbsp;交</button>
        </div>



    </form>
    <p class="am-text-lg am-text-center am-margin-vertical-sm"><b>震亚律师事务所</b></p>
    <p class="am-text-sm am-text-justify am-margin-vertical-sm">上海震亚律师事务所于2010年7月15日成立，北京、澳大利亚均有分支机构，律所采用"一体化公司制"管理模式，内部以团队合作和法律事务部的方式开展业务。</p>
    <p class="am-text-sm am-margin-vertical-sm">地址：上海市静安区成都北路333号招商局广场南楼18楼（整层）<br/>电话：021-62570999&emsp;&emsp;传真：021-6252-3999<br/>交通：地铁13号线、2号线、12号线南京西路8号出口</p>

    <div>
        <img src="/upload/2018-06-01/41.png" class="am-img-responsive am-center" alt="" />
        <p class="am-margin-0 am-padding-left-sm am-text-sm am-text-center">扫一扫<br/>关注震亚公众号</p>
    </div>

    <p class="am-margin-top-sm am-margin-bottom-0 am-text-center am-text-xs">
        <a href="http://www.miitbeian.gov.cn" target="_blank">沪ICP备12048123号</a>&emsp;&emsp;&emsp;
        <a href="https://exmail.qq.com/cgi-bin/loginpage?t=dm_loginpage&amp;dmtype=bizmail" target="_blank">邮箱登陆</a> |
        <a href="http://192.168.1.254:1888/LoginAction!toIndex.action" target="_blank">律师平台</a>
    </p>

</footer>



<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="/assets/js/amazeui.min.js"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=2ab9a8e5f4c7f4b99d508d3d0025b954"></script>

<script type="text/javascript" charset="utf-8" async src="http://lxbjs.baidu.com/lxb.js?sid=10922645"></script>

<script src="/assets/js/swiper.min.js"></script>

<script src="/assets/js/Njs.js"></script>


</body>
</html>";s:12:"compile_time";i:1546070190;}";