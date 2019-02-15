<?php exit;?>0015774158414a51fb392d44a1a52119cc44f5b7a083s:9492:"a:2:{s:8:"template";s:9428:"<form method="post" class="form-x dux-form form-auto" id="form" action="<?php echo url();?>">
    <div class="panel dux-box  active">
        <div class="panel-head">
            <strong><?php echo $name;?>字段 [<?php echo $fieldsetInfo["name"];?>]</strong>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="label">
                    <label>名称</label>
                </div>
                <div class="field">
                    <input type="text" class="input" id="name" name="name" size="60" datatype="s" value="<?php echo $info["name"];?>">
                    <div class="input-note">当前字段的描述</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>字段名</label>
                </div>
                <div class="field">
                    <input type="text" class="input" id="field" name="field" size="60" datatype="/^(?!\d)\w+$/" errormsg="字段名只能为英文数字和下划线！" value="<?php echo $info["field"];?>">
                    <div class="input-note">数据库中的字段名</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>字段类型</label>
                </div>
                <div class="field">
                    <select class="input" name="type">
                       <?php foreach ($typeField as $key => $vo) { ?>
                        <?php if ($info['type']==$key){ ?>
                        <option value="<?php echo $key;?>" selected>
                        <?php }else{ ?>
                        <option value="<?php echo $key;?>">
                        <?php } ?>
                        <?php echo $vo["name"];?> (<?php echo $propertyField[$vo['property']]['name']; ?>)</option>
                        <?php } ?>
                      </select>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>字段提示</label>
                </div>
                <div class="field">
                    <input type="text" class="input" id="tip" name="tip" size="60" value="<?php echo $info["tip"];?>">
                    <div class="input-note">字段后面的提示信息</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>字段后端验证</label>
                </div>
                <div class="field">
                    <select class="input" name="verify_type">
                       <?php foreach ($typeVerify as $key => $vo) { ?>
                        <?php if ($info['verify_type']==$vo['data']){ ?>
                        <option value="<?php echo $vo["data"];?>" selected>
                        <?php }else{ ?>
                        <option value="<?php echo $vo["data"];?>">
                        <?php } ?>
                        <?php echo $vo["name"];?></option>
                        <?php } ?>
                      </select>
                      <input type="text" class="input" id="verify_data" name="verify_data" size="30" value="<?php echo base64_decode($info['verify_data']);?>">
                      <select class="input js-assign" target="#verify_data">
                        <option value="">==内置规则==</option>
                        <?php foreach ($ruleVerify as $vo) { ?>
                        <option value="<?php echo $vo["data"];?>"><?php echo $vo["name"];?></option>
                        <?php } ?>
                    </select>
                      <div class="input-note">PHP处理时进行的验证，输入框为验证规则，不验证请留空</div>
                </div>
            </div>
            
            <div class="form-group">
                <div class="label">
                    <label>字段js验证</label>
                </div>
                <div class="field">
                    <input type="text" class="input" id="verify_data_js" name="verify_data_js" size="41" value="<?php echo base64_decode($info['verify_data_js']);?>">
                    <select class="input js-assign" target="#verify_data_js">
                        <option value="">==内置规则==</option>
                        <?php foreach ($ruleVerifyJs as $vo) { ?>
                        <option value="<?php echo $vo["data"];?>"><?php echo $vo["name"];?></option>
                        <?php } ?>
                    </select>
                      <div class="input-note">用于表单的JS验证规则，不验证请留空，请参考 validform.rjboy.cn</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>验证条件</label>
                </div>
                <div class="field">
                    <select class="input"  id="verify_condition" name="verify_condition">
                        <?php if ($info['verify_condition']==1){ ?>
                        <option value="1" selected>必须验证</option>
                        <?php }else{ ?>
                        <option value="1">必须验证</option>
                        <?php } ?>
                        <?php if ($info['verify_condition']==2){ ?>
                        <option value="2" selected>不为空验证</option>
                        <?php }else{ ?>
                        <option value="2">不为空验证</option>
                        <?php } ?>
                    </select>
                    <div class="input-note">指定的情况下进行验证，设置验证规则后生效</div>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label>参与筛选</label>
                </div>
                <div class="field">
                    <select class="input"  id="issearch" name="issearch">
                        <?php if ($info['issearch']==2){ ?>
                        <option value="2" selected>不参与筛选</option>
                        <?php }else{ ?>
                        <option value="2">不参与筛选</option>
                        <?php } ?>
                        <?php if ($info['issearch']==1){ ?>
                        <option value="1" selected>参与筛选</option>
                        <?php }else{ ?>
                        <option value="1">参与筛选</option>
                        <?php } ?>
                    </select>
                    <div class="input-note">选择参与验证后,自动处理多条件筛选参数</div>
                </div>
            </div>
            
            <div class="form-group">
                <div class="label">
                    <label>验证失败提示</label>
                </div>
                <div class="field">
                    <input type="text" class="input" id="errormsg" name="errormsg" size="60" value="<?php echo $info["errormsg"];?>">
                    <div class="input-note">验证失败后的提示信息，设置验证规则后请填写</div>
                </div>
            </div>
            
            <div class="form-group">
                <div class="label">
                    <label>字段配置</label>
                </div>
                <div class="field">
                   <textarea class="input" id="config" name="config" rows="3" cols="62"><?php echo $info["config"];?></textarea>
                   <div class="input-note">如果为选择或下拉等类型时多个项目名用逗号分隔开</div>
                </div>
            </div>
            
            <div class="form-group">
                <div class="label">
                    <label>默认值</label>
                </div>
                <div class="field">
                   <input type="text" class="input" id="default" name="default" size="60" value="<?php echo $info["default"];?>">
                   <div class="input-note">默认的内容，如果为选择或下拉等类型时填写默认选择值，多个值用逗号分隔开</div>
                </div>
            </div>
            
            <div class="form-group">
                <div class="label">
                    <label>字段顺序</label>
                </div>
                <div class="field">
                  <input type="number" class="input" id="sequence" name="sequence" size="60" datatype="n" value="<?php echo default_data($info['sequence'],0);?>">
                   <div class="input-note">数字越小字段越靠前</div>
                </div>
            </div>
            
        </div>
        <div class="panel-foot">
            <div class="form-button">
                <div id="tips"></div>
                <input type="hidden" name="fieldset_id" type="hidden" value="<?php echo $fieldsetInfo["fieldset_id"];?>">
                <input type="hidden" name="field_id" type="hidden" value="<?php echo $info["field_id"];?>">
                <button class="button bg-main" type="submit">保存</button>
                <button class="button bg" type="reset">重置</button>
            </div>
        </div>
    </div>
</form>
<script>
    Do.ready('base', function () {
        $('#form').duxFormPage();
    });
</script>";s:12:"compile_time";i:1545879841;}";