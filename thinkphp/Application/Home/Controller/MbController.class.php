<?php
namespace Home\Controller;
use Think\Controller;
class MbController extends Controller {
    public function my_new(){
    	//M('表名,[表前缀],[数据库连接配置]')
    	// $text=M();
    	// $info=$text->query("select * from mb");/s/默认会读取自动生效的配置
    	// var_dump($info);
    	// $db1=$text->db(1,"$DB_CONFIG1");//切换至第二个数据库
    	// var_dump($db1->query("select * from tk"));
    	// $db2=$text->db(2,"$DB_CONFIG2");//切换至第三个数据库
    	// var_dump($db1->query("select * from tk"));
    	// $n_new=M('Mb');
    	$m_mb=D('Mb');//同时实例化数据库中的那张表和Model

    	$m_new=$m_mb->select();//查询出数据后传参数

    	// echo $m_mb->a;
    	echo $m_mb->getmb(2);
    	// print_r($m_new);
    }
    public function link (){
    	// $Mb=M('mb');

    	// $data=$Mb->where("id<>6")->select();
    	// //数组形式$map['字段1'] = array('表达式','查询条件1')

    	// $map['mb']=5;
    	// $map1['id']=array('gt',4);
    	// $map2['user']=array('eq','sd');
    	// $da=$Mb->where($map1)->where($map2)->select();
    	// $Model=M()->table('tk')->select();

    	// print_r($da); 
    	// print_r($Model);

    	// $y=M('mb')->field('id,name')->select();
    	// print_r($y);

    	// $a=M('mb')->field('id')
	    // 	->union('SELECT id FROM tk')
	    // 	->select();
	    // 	print_r($a);


	    // $l=M('tk')->where('id>2')->order('id,name')->limit(2)->select();
	    // print_r($l);

    	// $Article = M('tk');
    	// $Article->limit('0,4')->select(); // 查询第一页数据
    	// $Article->limit('3,3')->select(); // 查询第二页数据
    	// print_r($Article);


    	// $M=M('tk')->field('name,max(id)')->group('id')->select();
    	// print_r($M);
        // $M=M('tk')->field('name,max(id)')->group('id')->having('count(id)>1')->select(); 
        // print_r($M);

    	
    }
}