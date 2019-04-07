<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/4/11
 * Time: 22:18
 */

namespace Admin\Controller;
use Think\Controller;

class CompanyController extends Controller{
    public function select(){
        $this->assign("arr",D("company")->select());
        $this->display();
    }
    public function update(){
        $arr = I("post.");
        //添加
        if(empty($arr['id'])){
            $bool = D("company")->data($arr)->add();
            if($bool){
                $this->success("添加成功！",U('Company/select'));
            }else{
                $this->error("添加失败！",U('Company/select'));
            }
        }
        //更新
        else{
            $bool = D("company")->data($arr)->save();
            if($bool){
                $this->success("更新成功！",U('Company/select'));
            }else{
                $this->error("更新失败！",U('Company/select'));
            }
        }
    }
}