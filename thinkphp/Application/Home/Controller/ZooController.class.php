<?php
namespace Home\Controller;
use Think\Controller;
class ZooController extends Controller{
	public function index(){
		$Zoo=M('tb_zoo');
		if(IS_POST){
			// var_dump($_POST);
			if (empty($_POST['abc'])){
				echo "<script></script>";
			}else{
			$info=$Zoo->where("name= "."'".$_POST['abc']."'")->select();
			// var_dump($info);
			}
		}else{
		//获取	
		$info=$Zoo->select();
		// print_r($info);
		}
		$this->assign("info",$info);
		$this->display();
	}
	public function add(){
		// var_dump($_POST);
		if(IS_POST){
			$Zoo=M('tb_zoo');
			$data=I('post.');
			$filter=$Zoo->create($data);
			var_dump($data);
			$add_status=$Zoo->add();
			// exit();
			if (empty($data)) {
				$this->error("增加失败");
			}else{
				$this->success("增加成功","index");
			}
		}else{
			$this->display();
		}
	}
	public function edit (){
		if(IS_POST){
			$Zoo=M("tb_zoo");
			$filter=$Zoo->create();
			$update_status=$Zoo->save();
			if($update_status){
				$this->success("更改成功","index");
			}else{
				$this->error("更改失败");
			}
		}else{
			$get_id=I("get.id");
			$find_data=M("tb_zoo")->find($get_id); 
			$this->person_data=$find_data;
			$this->display();
		}
	}
	public function del() {
		$get_id=I("get.id");
			$del=M("tb_zoo")->delete($get_id);
			if($del){
				$this->success("删除成功","/2016/thinkphp/Home/Zoo/index");
			}else{
				$this->error("删除失败","/2016/thinkphp/Home/Zoo/index");
			}
	}
}


