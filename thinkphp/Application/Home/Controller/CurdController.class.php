<?php
namespace Home\Controller;
use Think\Controller;
class CurdController extends Controller {
	//显示个人信息
	public function index() {
		$curd=M("curd");
		$info=$curd->select();//查找数据
		
		// print_r($info);
		$this->assign("info",$info);
		
		$this->display();
	}

	//新增
	public function add() {
		if (IS_POST) {
			//创建表数据对象
			$curd=M("curd");
			//获取数据
			$data=I("post.");
			
			$data['zhuce_time']=time();
			
//			print_r($data);			
//			exit();
//			echo "<hr/>";
			
			//过滤表不存在的字段
			$filter=$curd->create($data);
			
//			print_r($filter);
			
			
			//插入  返回的是插入数据的ID
			$add_status=$curd->add();
			
			//echo $add_status;
			
			//提示信息
			if($add_status){
				$this->success("新增成功","index");
			}else{
				$this->error("新增失败");
			}
			
			
		} else {
			$this -> display();
		}

	}

	//修改
	public function edit() {
		if(IS_POST){
			$curd=M("curd");
			//$post=I("post.");
			//$filter=$curd->create($post);//create 默认过滤post 数据
			$filter=$curd->create();
			
			
			//修改
			$update_status=$curd->save();
			//提示信息
			if($update_status){
				$this->success("修改成功","index");
			}else{
				$this->error("修改失败");
			}
			
			
			
		}else{
			//获取ID 并且查询数据
			$get_id=I("get.id");
			//查询
//			$find_data=M("curd")->where("id=".$get_id)->find();//查询一条数据 返回一维数组
			$find_data=M("curd")->find($get_id);
			//传递 注入
//			$this->assign("person_data",$find_data);  
			$this->person_data=$find_data;//利用了类的 __set 魔术方法
			$this->display();
			
			
		}
	}

	//删除
	public function del() {
			//获取
		$get_id=I("get.id");
			//删除
			$del=M("curd")->delete($get_id);//返回第一条删除的数据ID
			
			//提示信息
			if($del){
				$this->success("删除成功","/2016/thinkphp/Home/Curd/index");
			}else{
				$this->error("删除失败","/2016/thinkphp/Home/Curd/index");
			}
		}

}
