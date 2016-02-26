<?php
namespace Home\Model;
use Think\Model;
class MbModel extends Model {
	public $a=1;

    public function getmb($mb){
        $mb*=2;
        return $mb;
    }
   
}