<?php
/*
Plugin Name: 服务器后台文件管理器 - eXtplorer
Version: 1.0
Plugin URL: http://weirdo.ga/
Description: 管理服务器文件
Author: weirdo4253
Author Email: weirdo4253@qq.com
Author URL: http://weirdo.ga/
For: 不限
*/
if (!defined('SYSTEM_ROOT')) { die('Insufficient Permissions'); } 

function admin_eXtplorer_navi()
{
    ?>
    <li><a href="plugins/admin_eXtplorer/files/"><span class="glyphicon glyphicon-wrench"></span> 进入后台</a></li>
<?php
}

addAction('navi_4', 'admin_eXtplorer_navi');
?>