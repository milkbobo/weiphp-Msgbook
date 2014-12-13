<?php

namespace Addons\Msgbook;
use Common\Controller\Addon;

/**
 * 留言板插件
 * @author 爱德华
 */

    class MsgbookAddon extends Addon{

        public $info = array(
            'name'=>'Msgbook',
            'title'=>'留言板',
            'description'=>'我的留言板',
            'status'=>1,
            'author'=>'爱德华',
            'version'=>'1.0',
            'has_adminlist'=>0,
            'type'=>1         
        );

	public function install() {
		$install_sql = './Addons/Msgbook/install.sql';
		if (file_exists ( $install_sql )) {
			execute_sql_file ( $install_sql );
		}
		return true;
	}
	public function uninstall() {
		$uninstall_sql = './Addons/Msgbook/uninstall.sql';
		if (file_exists ( $uninstall_sql )) {
			execute_sql_file ( $uninstall_sql );
		}
		return true;
	}

        //实现的weixin钩子方法
        public function weixin($param){

        }

    }