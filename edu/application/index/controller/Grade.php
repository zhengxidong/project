<?php
namespace app\index\controller;
use app\index\model\Grade as GradeModel;
use app\index\model\Teacher;
use think\Request;

class Grade extends Base
{
	//班级列表
	public function gradeList()
	{
		//获取所有班级表数据
		$grade = GradeModel::all();

        //获取记录数量
		$count = GradeModel::count();
        $gradeList = [];
        //遍历grade表
		foreach ($grade as $key => $value) {
			$data = [
				'id' => $value->id,
				'name' => $value->name,
				'length' => $value->length,
				'price' => $value->price,
				'status' => $value->status,
				'create_time' => $value->create_time,
				//用关联方法teacher属性方式访问teacher表中数据
				'teacher' => isset($value->teacher->name) ? $value->teacher->name : '<span style="color:red;">未分配</span>',
			];
			//每次关联查询结果,保存到数组$gradeList中
			$gradeList[] = $data;
		}
		$this->view -> assign('gradeList',$gradeList);
		$this->view->assign('count',$count);

		return $this->view->fetch('grade_list');
	}

    //渲染班级添加界面
    public function gradeAdd()
    {
    	$this->view->assign('title','编辑班级');
    	$this->view->assign('keywords','www.edu.net');

    	return $this->view->fetch('grade_add');
    }

    public function doAdd(Request $request)
    {
    	//从提交表单中获取数据
    	$data = $request->param();
        
        //更新当前记录
    	$result = GradeModel::create($data);

    	$status = 0;

    	$message = '添加失败，请检查';
        
        //检测更新结果,将结果返回给grade_edit模板中的ajax提交回调处理
    	if(true == $result)
    	{
    		$status = 1;
    		$message = '添加成功';
    	}

    	return ['status'=>$status,'message'=>$message];
    }
}