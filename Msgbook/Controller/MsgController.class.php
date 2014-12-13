<?php

namespace Addons\Msgbook\Controller;
use Addons\Msgbook\Controller\MsgbookController;

class MsgController extends MsgbookController{

	//初始化方法
	function _initialize(){
		
		$this->model=$this->getModel('msg_content');
		parent::_initialize();
	}
	
	//留言方法
	public function liuyan(){
		if(IS_POST){
			$data['username']=I('name');
			$data['content']=I('content');
			$data['ctime']=time();
			$data['token']=get_token();
			
			$res=M('msg_content')->add($data);
			if ($res){
				$this->success('留言成功',U('index'));
			}else {
				$this->error('留言失败');
			}
		}else {
			$this->display();
		}
		
	}
	
	//留言列表方法
	public function index(){
		$msg=M('msg_content')->order('ctime desc')->select();
		$this->msg=$msg;
		$this->display();
	}

	//通用数据列表方法
	public function lists(){
		parent::common_lists($this->model);
	}
	
	//通用数据增加方法
	public function add(){
		parent::common_add($this->model);
	}
	
	//通用数据编辑方法
	public function  edit(){
		parent::common_edit($this->model);
	}
	
	//通用数据删除方法
	public function del(){
		parent::common_del($this->model);
	}
}
