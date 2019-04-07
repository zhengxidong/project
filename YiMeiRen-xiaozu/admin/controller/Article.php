<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/20
 * Time: 16:41
 */
require './controller/Controller.php';
class ArticleController extends Controller{
    public function select(){
        $article = new ArticleModel();
        $articlearr = $article->select("select tb_article.id,
tb_article.articletitle,
tb_article.articlecontent,
tb_articletype.articletypename,
tb_admin.username,
tb_article.articletime
from tb_articletype inner join tb_article
on tb_article.articletypeid=tb_articletype.id
INNER join tb_admin on tb_article.adminid=tb_admin.id");
        $GLOBALS['smarty']->assign("article",$articlearr);
        $GLOBALS['smarty']->display("article/select.html");
    }
    public function add(){
        if(!empty($_POST)){
            $article = new ArticleModel();
            $articlecontent = $_POST['articlecontent'];
            $time = date("Y-m-d H:i:s",time());

            $data = $article->add("insert into tb_article values(null,'{$_POST['articletitle']}','{$articlecontent}','{$_POST['articletypeid']}','{$_POST['adminid']}','{$time}')");

            if($data){
                echo "<script>location.href='?c=article&a=select'</script>";
            }
            else{
                echo "<script>alert('操作失败');location.href='?c=article&a=select'</script>";
            }
        }else{
            $admin = new AdminModel();
            $adminarr = $admin->select("select * from tb_admin");

            $articletype = new ArticleTypeModel();
            $articletypearr = $articletype->select("select * from tb_articletype");

            $GLOBALS['smarty']->assign("admin",$adminarr);
            $GLOBALS['smarty']->assign("articletype",$articletypearr);
            $GLOBALS['smarty']->display("article/add.html");
        }

    }
    public function delete(){
        $type = new ArticleModel();
        if($type->delete()){
            echo "<script>location.href='?c=article&a=select'</script>";
        }else{
            echo "<script>alert('操作失败');location.href='?c=article&a=select'</script>";
        }

    }
    public function edit(){
        //查出所有文章分类
        $type =new ArticleTypeModel();
        $typearr = $type->select("select * from tb_articletype");
        $GLOBALS['smarty']->assign("type",$typearr);
        //查出所有管理员
        $adminarr = new AdminModel();
        $admin = $adminarr->select("select * from tb_admin");
        $GLOBALS['smarty']->assign("admin",$admin);
        //查出文章
        $arr = new ArticleModel();
        $article = $arr->edit();
        $GLOBALS['smarty']->assign("article",$article);
        $GLOBALS['smarty']->display("article/edit.html");
    }
    public function update(){
        $type = new ArticleModel();

        if($type->update()){
            echo "<script>location.href='?c=article&a=select'</script>";
        }
        else{
            echo "<script>alert('操作失败');location.href='?c=article&a=select'</script>";
        }
    }
}