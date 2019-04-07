<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/4/12
 * Time: 15:15
 */

namespace Home\Controller;


use Think\Controller;

class QuestProductController extends Controller{
    public function wineculture(){
        //取出分类
        $all = D("questproducttype")->select();
        $this->assign("title",$all);
        //取出属于葡萄酒文化的内容
        $pt['name'] = '葡萄酒文化';
        $this->assign("listpt",D('questproduct as q')->join('tb_questproducttype as t on q.questproducttypeid=t.id')
            ->where($pt)->select());

        $this->display();
    }
    public function quest($id=null){
        $arr = D("questproduct")->where(array('id'=>$id))->find();
        $this->assign("arr",$arr);
        $this->display();
    }
}