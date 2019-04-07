<?php
namespace app\index\controller;
use app\index\controller\Base;
use think\Request;
use app\index\model\User as UserModel;
use think\Session;
class User extends Base
{
    public function login()
    {
        $this->alreadyLogin();//防止重复登录
        return $this-> view -> fetch();
    }
    public function checklogin(Request $request)
    {
    	//初始化返回参数
    	$status = 0;
    	$result = '';
    	$data = $request->param();
    	//创建验证规则
    	$rule = [

    		'name|用户名' =>'require',
    		'password|密码不能为空' => 'require',
    		'verify|验证码' => 'require|captcha'
    	];
    	//自定义验证规则
    	$msg = [
    		'name'     => ['require'=>'用户名不能为空，请检查'],
    		'password' => ['require'=>'密码不能为空，请检查'],
    		'verify'   => [
    		'require'  =>'验证码不能为空，请检查',
    		'captcha'  =>'验证码错误'
    		],
    	];
    	//进行验证
    	$result = $this->validate($data,$rule,$msg);
        //如果验证通过则执行
        if($result===true)
        {

        	$map = [

        	    'name' => $data['name'],
        	    'password' => md5($data['password'])
        	];

        	//查询用户信息
        	$user = UserModel::get($map);

        	if($user==null)
        	{
        		$result ='没有找到该用户';
        	}
        	else
        	{
        		    $status = 1;

        		    $result = '验证通过，点击确定进入后台';

        		    Session::set('user_id',$user->id);//用户ID

        	      Session::set('user_info',$user->getData());//获取用户所有信息

                $user ->setInc('login_count');
        	}
        }
    	return ['status'=>$status,'message'=>$result,"data"=>$msg];
    }
    public function logout()
    {
    	//注销session
    	Session::delete('user_id');
    	session::delete('user_info');
    	$this->success('注销成功，正在返回','user/login');
    }

    //管理员列表
    public function adminList()
    {
        $this->view ->assign('title','管理员列表');
        $this->view ->assign('keywords','管理系统');
        $this->view ->assign('desc','管理系统');

        $this->view ->count = UserModel::count();

        //判断当前是不是admin用户
        //先通过Session获取到用户登录信息
        $userName = Session::get('user_info.name');

        if($userName == 'admin')
        {
            //admin用户可以查看所有记录，数据要经过模型获取器处理
            $list = UserModel::all();
            /*dump($list);
            exit;*/
        }
        else
        {
            //为了公用列表模板，使用了all（），其实这里用get（）符合逻辑，但有时也要变通
            //非admin只能看自己信息，数据要经过模型获取器处理
            $list = UserModel::all(['name'=>$userName]);
        }
        $this->view->assign('list',$list);

        //渲染管理员列表模板
        return $this->view->fetch('admin_list');
    }
    //启动与禁用
    public function setStatus(Request $request)
    {
        $user_id = $request->param('id');//第一种
        //$user_id = Request::instance()->get('id');第二种
        $result = UserModel::get($user_id);
        if($result->getData('status')==1)
        {
            UserModel::update(['status'=>0],['id'=>$user_id]);
        }
        else
        {
            UserModel::update(['status'=>1],['id'=>$user_id]);
        }
    }
    //渲染编辑管理员界面
    public function adminEdit(Request $request)
    {
        $user_id = $request->param('id');
        $result = UserModel::get($user_id);
        $this->view ->assign('title','编辑管理员信息');
        $this->view ->assign('keywords','php.cn');
        $this->view ->assign('desc','PHP中文网ThinkPHP5开发实战课程');
        $this->view->assign('user_info',$result->getData());
        return $this->view->fetch('admin_edit');
    }
    //更新数据
    public function editUser(Request $request)
    {
        //获取表单数据
        $param = $request->param();

        //去掉表单中为空的数据，即没有修改的内容
        foreach ($param as $key =>$value)
        {
            if(!empty($value))
            {
                $data[$key] = $value;
            }
        }
        $condition = ['id'=>$data['id']];
        $result = UserModel::update($data,$condition);
        //如果是admin用户，更新当前session中用户信息user_info中的角色role，供页面调用
        if(Session::get('user_info.name')=='admin')
        {
            Session::set('user_info.role',$data['role']);
        }
        if(true == $result)
        {
            return ['status'=>1,'message'=>'更新成功'];
        }
        else
        {
            return ['status'=>0,'message'=>'更新失败，请检查'];
        }
    }
    //删除操作
    public function deleteUser(Request $request)
    {
        $user_id = $request->param('id');
        UserModel::update(['is_delete'=>1],['id'=>$user_id]);
        UserModel::destroy($user_id);
    }
    //恢复删除操作
    public function unDelete()
    {
        UserModel::update(['delete_time'=>NULL],['is_delete'=>1]);
    }
    //渲染添加管理员界面
    public function adminAdd()
    {
        $this->view->assign('title','添加管理员');
        $this->view->assign('keywords','php.cn');
        $this->view->assign('title','PHP中文网ThinkPHP5开发实战课程');

        return $this->view->fetch('admin_add');
    }
    public function checkUserName(Request $request)
    {
        $userName = trim($request->param('name'));
        $status = 1;
        $message = '用户名可用';
        if(UserModel::get(['name'=>$userName]))
        {
            $status =0;
            $message = '用户名重复，请重新输入';
        }
        return ['status'=>$status,'message'=>$message];
    }
    public function checkUserEmail(Request $request)
    {
        $userEmail = trim($request->param('email'));
        $status = 1;
        $message = '邮箱可用';
        if(UserModel::get(['email'=>$userEmail]))
        {
            $status = 0;
            $message = '邮箱重复，请重新输入';
        }
        return ['status'=>$status,'message'=>$message];
    }

    public function addUser(Request $request)
    {
        $data = $request->param();
        $status = 1;
        $message = '添加成功';
        $rule = [
            'name|用户名'=>"require|min:3|max:10",
            'password|密码'=>"require|min:3|max:10",
            'email|邮箱'=>"require|email"
        ];
        $result = $this->validate($data,$rule);
        if($result ===true)
        {
            $user = UserModel::create($request->param());
            if($user === null)
            {
                $status =0;
                $message = '添加失败';
            }
        }
        return ['status'=>$status,'message'=>$message];
    }
}
