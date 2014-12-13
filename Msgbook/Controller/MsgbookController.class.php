<?php

namespace Addons\Msgbook\Controller;
use Home\Controller\AddonsController;

class MsgbookController extends AddonsController{

	//初始化方法
	public function _initialize(){
		$controller=strtolower(_CONTROLLER);
		//显示导航条
		$res['title']='插件配置';
		$res['url']=addons_url('Msgbook://Msgbook/config');
		$res['class']=$controller=='msgbook'?'current':'';//显示样式
		$nav[]=$res;
		
		$res['title']='留言管理';
		$res['url']=addons_url('Msgbook://Msg/lists');
		$res['class']=$controller=='msg'?'current':'';//显示样式
		$nav[]=$res;
		
		$this->nav=$nav;
	}
}
