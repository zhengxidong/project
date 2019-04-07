<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/4/12
 * Time: 20:24
 */

namespace Home\Controller;
use Think\Controller;

class MessageController extends Controller{
    public function add(){
        $arr = I('post.');
        if(!empty($arr)){
            unset($arr['Submit_x']);
            unset($arr['Submit_y']);
            D("message")->data($arr)->add();
            echo '<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>';
            echo("<script>alert('留言成功！');location.href='add'</script>");
        }
        else{
            $this->assign("arr",D('message')->select());
            $this->display();
        }

    }
}