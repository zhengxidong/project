<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->assign("arr", D('company')->select());
//        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>[ 您现在访问的是Home模块的Index控制器 ]</div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    $this->display();
    }
    public function update(){
        $arr = I('post.');
        $data['id'] = $arr['id'];
        $d = D('company')->where($data)->field("logo,content")->select();
        //添加
        if($arr['id']=='') {
                $up = new \Think\Upload();
                $up->rootPath = './Public/Upload/logo/';
                $up->uploadOne($_FILES['logo']);
                $arr['logo'] = $this->savePath.$up->saveName;
                $bool = D('company')->data($arr)->add();
                if ($bool) {
                    $this->success("操作成功！", U('Index/info'));
                } else {
                    $this->error("操作失败！", U('Index/info'));
                }
            } //更新
            if (!empty($_FILES['logo']['name'])) {

                    $path = "./Public/Upload/logo/".$d[0]['logo'];
                if(file_exists($path)){
                 unlink($path);
                }
                    $up = new \Think\Upload();
                    $up->rootPath = "./Public/Upload/logo/";
                    $info = $up->uploadOne($_FILES['logo']);
                    $logo = $info['savepath'].$info['savename'];

                    $arr['logo'] = $logo;
                    $arr['content'] = $d[0]['content'];
                    $bool = D('company')->data($arr)->save();
                    if ($bool) {
                        $this->success("操作成功！", U('Index/info'));
                    } else {
                        $this->error("操作失败！", U('Index/info'));
                    }
                }
                else {
                    $arr['logo'] = $d[0]['logo'];
                    $arr['content'] = $d[0]['content'];
                    $bool = D('company')->where(array('id'=>$arr['id']))->data($arr)->save();
                    if ($bool) {
                        $this->success("操作成功！", U('Index/info'));
                    } else {
                        $this->error("操作失败！", U('Index/info'));
                    }
                }
        }
}