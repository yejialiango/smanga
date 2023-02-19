<?php 

require_once '../public/common.php';
require_once '../public/lkw.php';
require_once '../public/ini.php';
$configFile = "$configPath/sql.ini";

#初始化变量
$ip = read_ini('config','ip',$configFile);
$userName = read_ini('config','userName',$configFile);
$passWord = read_ini('config','passWord',$configFile);
$port = read_ini('config','port',$configFile);
$database = 'smanga';

#创建连接
$link = @mysqli_connect($ip,$userName,$passWord,$database,$port)or exit_request([
			'code'=>1,
			'message'=>'数据库链接错误',
		]);

#执行连接
// mysqli_select_db("smanga",$link);

#设置数据编码
mysqli_set_charset($link,'utf8');

#数据库操作接口
$dosqlUrl = 'http://localhost:81/php/dosql/mysql.php';

 ?>
