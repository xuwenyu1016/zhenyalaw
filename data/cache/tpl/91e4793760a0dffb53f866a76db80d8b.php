<?php exit;?>001577432113c4a9e56558574ba4c1acd70feae70530s:12615:"a:2:{s:8:"template";s:12550:"<form method="post" class="form-x dux-form form-auto" id="form" action="<?php echo url();?>">
    <div class="tab dux-tab">
        <div class="panel dux-box  active">
            <div class="panel-head">
                <div class="tab-head">
                    <strong><?php echo $name;?>页面</strong>
                    <ul class="tab-nav">
                        <li class="active"><a href="#tab-1">基本信息</a>
                        </li>
                        <li><a href="#tab-2">扩展信息</a>
                        </li>
                        <li><a href="#tab-3">外链信息</a></li>                        
                    </ul>
                </div>
            </div>
            <div class="tab-body">
                <div class="tab-panel active" id="tab-1">
                    <div class="form-group">
                        <div class="label">
                            <label>上级栏目</label>
                        </div>
                        <div class="field">
                            <select class="input" name="parent_id">
                                <option value="0">==顶级栏目==</option>
                                <?php foreach ($categoryList as $vo) { ?>
                                <?php if ($info['parent_id'] == $vo['class_id']){ ?>
                                <option value="<?php echo $vo["class_id"];?>" selected>
                                    <?php }else{ ?>
                                    <option value="<?php echo $vo["class_id"];?>">
                                        <?php } ?>
                                        <?php echo $vo["cname"];?></option>
                                    <?php } ?>
                            </select>
                            <div class="input-note">当前栏目的上级栏目</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="label">
                            <label>页面名称</label>
                        </div>
                        <div class="field">
                            <input type="text" class="input" id="name" name="name" size="60" datatype="s" value="<?php echo $info["name"];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="label">
                            <label>形象图</label>
                        </div>
                        <div class="field">
                            <input type="text" class="input" id="image" name="image" size="38" value="<?php echo $info["image"];?>">
                            <a class="button bg-blue button-small  js-img-upload" data="image" id="image_upload" preview="image_preview" href="javascript:;" ><span class="icon-upload"> 上传</span></a>
                            <a class="button bg-blue button-small icon-picture-o" id="image_preview" href="javascript:;" > 预览</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="label">
                            <label>页面内容</label>
                        </div>
                        <div class="field">
                            <textarea class="input js-editor" id="content" name="content" rows="20" ><?php echo html_out($info["content"]);?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="label">
                            <label>栏目关键词</label>
                        </div>
                        <div class="field">
                            <input type="text" class="input" id="keywords" name="keywords" size="60" value="<?php echo $info["keywords"];?>">
                            <div class="input-note">当前栏目的关键词</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="label">
                            <label for="sitename">栏目描述</label>
                        </div>
                        <div class="field">
                            <textarea class="input" id="description" name="description" rows="3" cols="62"><?php echo $info["description"];?></textarea>
                            <div class="input-note">当前栏目的描述信息</div>
                        </div>
                    </div>
                    <div id="expand"></div>
                    <div class="form-group">
                        <div class="label">
                            <label>栏目顺序</label>
                        </div>
                        <div class="field">
                            <input type="number" class="input" id="sequence" name="sequence" size="60" datatype="n" value="<?php echo default_data($info['sequence'],1);?>">
                            <div class="input-note">栏目列表调用时的顺序，数字越小越靠前</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="label">
                            <label for="sitename">页面模板</label>
                        </div>
                        <div class="field">
                            <input type="text" class="input" id="class_tpl" name="class_tpl" size="20" datatype="*" value="<?php echo default_data($info['class_tpl'],'page');?>">
                            <select class="input js-assign" target="#class_tpl">
                                <option value="">请选择</option>
                                <?php foreach ($tplList as $vo) { ?>
                                <option value="<?php echo $vo["name"];?>"><?php echo $vo["file"];?></option>
                                <?php } ?>
                            </select>
                            <div class="input-note">当前页面模板</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="label">
                            <label>页面状态</label>
                        </div>
                        <div class="field">
                               <?php if(!isset($info['show'])){ $info['show'] = 1; }; ?>
                                <div class="button-group button-group-small radio">
                                    <?php if ($info['show']){ ?>
                                    <label class="button active"><input name="show" value="1" checked="checked" type="radio">
                                    <?php }else{ ?>
                                    <label class="button"><input name="show" value="1" type="radio">
                                    <?php } ?>
                                    <span class="icon icon-check"></span> 开启</label>
                                    <?php if (!$info['show']){ ?>
                                    <label class="button active"><input name="show" checked="checked" value="0" type="radio">
                                    <?php }else{ ?>
                                    <label class="button"><input name="show" value="0" type="radio">
                                    <?php } ?>
                                    <span class="icon icon-times"></span> 关闭</label>
                                </div>
                                <div class="input-note">隐藏后在调用栏目列表时不显示</div>
                            </div>
                    </div>
                </div>
                <div class="tab-panel" id="tab-2">
                    <div class="form-group">
                        <div class="label">
                            <label>子标题</label>
                        </div>
                        <div class="field">
                            <input type="text" class="input" id="subname" name="subname" size="60" value="<?php echo $info["subname"];?>">
                            <div class="input-note">扩展标题的副标题信息</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="label">
                            <label>栏目URL</label>
                        </div>
                        <div class="field">
                            <input type="text" class="input" id="urlname" name="urlname" size="60" value="<?php echo $info["urlname"];?>">
                            <div class="input-note">设置URL规则后会生效</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="label">
                            <label>绑定字段集</label>
                        </div>
                        <div class="field">
                            <select class="input" name="fieldset_id">
                               <option value="0">==不绑定==</option>
                                <?php foreach ($expandList as $vo) { ?>
                                <?php if ($info['fieldset_id'] == $vo['fieldset_id']){ ?>
                                <option value="<?php echo $vo["fieldset_id"];?>" selected>
                                    <?php }else{ ?>
                                    <option value="<?php echo $vo["fieldset_id"];?>">
                                        <?php } ?>
                                        <?php echo $vo["name"];?></option>
                                    <?php } ?>
                            </select>
                            <div class="input-note">绑定后添加内容时可使用扩展字段</div>
                        </div>
                    </div>
                </div>
                <div class="tab-panel" id="tab-3">
                    <div class="form-group">
                        <div class="label">
                            <label>http外链</label>
                        </div>
                        <div class="field">
                            <input type="text" class="input" id="url" name="url" size="60" value="<?php echo $info["url"];?>">
                            <div class="input-note">网站外部链接</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="label">
                            <label>网站内链</label>
                        </div>
                        <div class="field">
                            <select class="input" name="cid">
                                <option value="0">==顶级栏目==</option>
                                <?php foreach ($categoryList as $vo) { ?>
                                <?php if ($info['cid'] == $vo['class_id']){ ?>
                                <option value="<?php echo $vo["class_id"];?>" selected>
                                    <?php }else{ ?>
                                    <option value="<?php echo $vo["class_id"];?>">
                                        <?php } ?>
                                        <?php echo $vo["cname"];?></option>
                                    <?php } ?>
                            </select>
                            <div class="input-note">网站内部链接,只需选择栏目名称</div>
                        </div>
                    </div>                    
                </div>                
            </div>
            <div class="panel-foot">
                <div class="form-button">
                    <div id="tips"></div>
                    <input type="hidden" name="class_id" id="expand_id" type="hidden" value="<?php echo $info["class_id"];?>">
                    <button class="button bg-main" type="submit">保存</button>
                    <button class="button bg" type="reset">重置</button>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    Do.ready('base', function () {
        //表单综合处理
        $('#form').duxFormPage();
        //动态获取扩展字段
        $('#expand_id').change(function() {
            $('#expand').load('<?php echo url("duxcms/AdminExpand/getField");?>',{class_id:$(this).val(),content_id:$(this).val()},function(){
                $('#expand').duxFormPage({form:false});
            });
        });
        $('#expand_id').change();
    });
</script>";s:12:"compile_time";i:1545896113;}";