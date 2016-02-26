<?php
// class test(){
// 	private $select="select";
// 	private $field="* ";
// 	private $table="tb_zoo";
// 	private $where="where 1";
// 	private $sql;
// 	public function __construct($field,$table,$where){
// 		$this->field=$field;
// 		$this->table=$table;
// 		$this->where=$where;
// 	}
// 	public function field($string){
// 		$this->field=$string;
// 		return $this;
// 	}
// 	public function table($table){
// 		$this->table="`".$table."`";
// 		return $this;
// 	}
// 	public function where($w_string){
// 		$this->where=$w_string;
// 		return $this;
// 	}
// 	public function select(){
// 		$this->sql=$this->select.$this->field." from ".$this->" where ".$this->where;
// 		return $this->sql;
// 	}
// }
// $test=new test("id,name","category","num>5");
// echo $test->select();

if ($_SERVER['REQUEST_METHOD']=="POST") {

	$link=mysql_connect("127.0.0.1","root","");
	$field=$_POST;

	if (!$link) {
		die('Could not nonnect'.mysql_error());
	}else{
		echo "Connected successfully";
		mysql_select_db("thinkphp");
		mysql_set_charset("utf8");
		$query="desc tb_zoo";
		$res=mysql_query($query);
		print_r(mysql_error());
		$i=0;
		while ($row=mysql_fetch_row($res)) {
			$reslist[$i]=$row;
			$i++;
		}
	}
	mysql_close($link);
	//$reslist 数据库表字段信息




	//判断过滤
	// print_r($reslist);
	$have_field=array();
	foreach ($reslist as $k => $v) {
		if (array_key_exists($k[0], $field)) {// post 一维array("num"=>1,"name"=>aaa)   $v[0]=aaa
			//只留下  数据库有的
			$have_field[$v[0]]=$field[$v[0]];
		}
	}
	// print_r($have_field);
}else{
	$html="<form method='post' action='test.php'>
				num:<input type='text' name='num' />
				name:<input type='text' name='name'/>
				<input type='submit' value='提交'/>
	</form>";
	echo $html;
}

