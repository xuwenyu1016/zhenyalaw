<?php
namespace app\article\controller;
use app\admin\controller\AdminController;
/**
 * 文章列表
 */

class AdminContentController extends AdminController {
    /**
     * 判断是否开启伪静态
     */
    protected function rewrite(){
        $file = CONFIG_PATH . 'performance.php';
        $data = load_config($file);
        $rewrite  = $data['REWRITE_ON']?true:false;
        $_SERVER["SCRIPT_NAME"] = 'index.php';
        config('REWRITE_ON',true);
        \framework\base\Route::parseUrl( config('REWRITE_RULE'), $rewrite );
    }
    /**
     * 当前模块参数
     */
    protected function _infoModule(){
        $classId = request('request.class_id',0,'intval');
        if (empty($classId)) {
            $url = array();
        }else{
            $url = array('class_id'=>$classId);
        }
        return array(
            'info'  => array(
                'name' => '文章管理',
                'description' => '管理网站的所有文章',
                ),
            'menu' => array(
                    array(
                        'name' => '文章列表',
                        'url' => url('index',$url),
                        'icon' => 'list',
                    ),
                ),
            'add' => array(
                    array(
                        'name' => '添加文章',
                        'url' => url('add',$url),
                        'icon' => 'plus',
                    ),
                )
            );
    }
	/**
     * 列表
     */
    public function index(){
        //筛选条件
        $where = array();
        $keyword = request('request.keyword','');
        $classId = request('request.class_id',0,'intval');
        $positionId = request('request.position_id',0,'intval');
        $status = request('request.status',0,'intval');
        if(!empty($keyword)){
            $where[] = 'A.title like "%'.$keyword.'%"';
        }
        if(!empty($classId)){
            $where['C.class_id'] = $classId;
        }
        if(!empty($positionId)){
            $where[] = 'find_in_set('.$positionId.',position) ';
        }
        if(!empty($status)){
            switch ($status) {
                case '1':
                    $where['A.status'] = 1;
                    break;
                case '2':
                    $where['A.status'] = 0;
                    break;
            }
        }
        //URL参数
        $pageMaps = array();
        $pageMaps['keyword'] = $keyword;
        $pageMaps['status'] = $status;
        $pageMaps['class_id'] = $classId;
        $pageMaps['position_id'] = $positionId;
        //查询数据
        $list = target('ContentArticle')->page(30)->loadList($where,$limit);
        $this->pager = target('ContentArticle')->pager;
        //位置导航
        $breadCrumb = array('文章列表'=>url());
        //模板传值
        $this->assign('breadCrumb',$breadCrumb);
        $this->assign('list',$list);
        $this->assign('page',$this->getPageShow($pageMaps));
        $this->assign('categoryList',target('duxcms/Category')->loadList());
        $this->assign('positionList',target('duxcms/Position')->loadList());
        $this->assign('pageMaps',$pageMaps);
        $this->adminDisplay();
    }

    /**
     * 增加
     */
    public function add(){
        if(!IS_POST){
            $classId = request('request.class_id',0,'intval');
            $copyId = request('request.copy_id',0,'intval');
            $info = array();
            $info['class_id'] = $classId;
            if (!empty($copyId)) {
                $model = target('ContentArticle');
                $info = $model->getInfo($copyId);
                $info['content_id'] = '';
            }
            $breadCrumb = array('文章列表'=>url('index'),'文章添加'=>url());
            $this->assign('breadCrumb',$breadCrumb);
            $this->assign('name','添加');
            $this->assign('info',$info);
            $this->assign('categoryList',target('duxcms/Category')->loadList());
            $this->assign('tplList',target('admin/Config')->tplList());
            $this->assign('positionList',target('duxcms/Position')->loadList());
            $this->assign('default_config',current_config());
            $this->adminDisplay('info');
        }else{
            $contetid = target('ContentArticle')->saveData('add');
            if($contetid){
                self::ping1($contetid);
                $this->success('文章添加成功！',url('index'));
            }else{
                $msg = target('ContentArticle')->getError();
                if(empty($msg)){
                    $this->error('文章添加失败');
                }else{
                    $this->error($msg);
                }
            }
        }
    }

    /**
     * 修改
     */
    public function edit(){
        if(!IS_POST){
            $contentId = request('get.content_id','','intval');
            if(empty($contentId)){
                $this->error('参数不能为空！');
            }
            //获取记录
            $model = target('ContentArticle');
            $info = $model->getInfo($contentId);
            if(!$info){
                $this->error($model->getError());
            }
            $breadCrumb = array('文章列表'=>url('index'),'文章修改'=>url('',array('content_id'=>$contentId)));
            $this->assign('breadCrumb',$breadCrumb);
            $this->assign('name','修改');
            $this->assign('info',$info);
            $this->assign('categoryList',target('duxcms/Category')->loadList());
            $this->assign('tplList',target('admin/Config')->tplList());
            $this->assign('positionList',target('duxcms/Position')->loadList());
            $this->assign('default_config',current_config());
            $this->adminDisplay('info');
        }else{
            if(target('ContentArticle')->saveData('edit')){
                $this->success('文章修改成功！',url('index'));
            }else{
                $msg = target('ContentArticle')->getError();
                if(empty($msg)){
                    $this->error('文章修改失败');
                }else{
                    $this->error($msg);
                }
            }
        }
    }

    /**
     * 删除
     */
    public function del(){
        $contentId = request('post.data',0,'intval');
        if(empty($contentId)){
            $this->error('参数不能为空！');
        }
        if(target('ContentArticle')->delData($contentId)){
            $this->success('文章删除成功！');
        }else{
            $this->error('文章删除失败！');
        }
    }

    /**
     * 批量操作
     */
    public function batchAction(){
        $type = request('post.type',0,'intval');
        $ids = request('post.ids');
        $classId = request('post.class_id',0,'intval');
        if(empty($type)){
            $this->error('请选择操作！');
        }
        if ($type == 5) {
            if (count($ids)>1) {
                $this->error('只能复制单条文章');
            }
            $this->success('文章复制成功！',url('add',array('copy_id'=>$ids[0])));
        }
        if(empty($ids)){
            $this->error('请先选择操作项目！');
        }
        if($type == 3){
            if(empty($classId)){
                $this->error('请选择操作栏目！');
            }
        }
        foreach ($ids as $id) {
            $data = array();
            $data['content_id'] = $id;
            switch ($type) {
                case 1:
                    //发布
                    $data['status'] = 1;
                    target('duxcms/Content')->editData($data);
                    break;
                case 2:
                    //草稿
                    $data['status'] = 0;
                    target('duxcms/Content')->editData($data);
                    break;
                case 3:
                    $data['class_id'] = $classId;
                    target('duxcms/Content')->editData($data);
                    break;
                case 4:
                    //删除
                    target('ContentArticle')->delData($id);
                    break;
            }
        }
        $this->success('批量操作执行完毕！');

    }

    /**
    * 向百度推送此条链接
    */
    public function ping1($contentId)
    {
        $this->rewrite();
        $url = array(
            url('article/Content/index',array('content_id' => $contentId)),
            );
        $ping = ping($url);
        if($ping['status']==200){
            $stat = target('ContentArticle')->pingSucess($contentId);          
        }
    }
    /**
    * 向百度推送此条链接
    */
    public function ping($contentId)
    {
        $this->rewrite();
        $contentId = request('get.content_id',0,'intval');
        if(empty($contentId)){
            $this->error('参数不能为空！');
        }
        $url = array(
            url('article/Content/index',array('content_id' => $contentId)),
            );
        $ping = ping($url);
        if($ping['status']==200){
            $stat = target('ContentArticle')->pingSucess($contentId);
            if ($stat) {
               $this->success('文章推送成功！今日还剩'.$ping['remain'].'条推送可用！');
            }
        }else{
            $this->error('文章推送失败！');
        }
    }


}

