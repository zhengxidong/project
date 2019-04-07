<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/4/12
 * Time: 20:43
 */

namespace Home\Controller;
use Think\Controller;

class FeedbackController extends Controller{
    public function add(){
        $arr = I('post.');
        if(!empty($arr)){
            $arr['feedbackdate'] = time();
            unset($arr['Submit_x']);
            unset($arr['Submit_y']);
            D('feedback')->data($arr)->add();
            $this->redirect('Feedback/add',5,'页面跳转中');
        }else{
            $this->display();
        }
    }
}