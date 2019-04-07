<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
//        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>[ 您现在访问的是Home模块的Index控制器 ]</div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
        $news = D('news')->select();
        $this->assign("news",$news);
        //取出橄榄油知识类的内容
        $arr['name'] = '橄榄油知识';
        $this->assign("listgl",D('questproduct as q')->join('alk_tb_questproducttype as t on q.questproducttypeid=t.id')
            ->where($arr)->select());
        //取出葡萄酒文化类的内容
        $pt['name'] = '葡萄酒文化';
        $this->assign("listpt",D('questproduct as q')->join('alk_tb_questproducttype as t on q.questproducttypeid=t.id')
             ->where($pt)->select());

        //取出产品
        $p = new \Home\Model\ProductModel();
        $this->assign("product",$p->Order('id DESC')->limit(4)->select());
        $this->display();
    }
    public function info(){
        $this->display();
    }
}