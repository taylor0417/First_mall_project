<?php

//主机
define('DB_HOST','127.0.0.1');
//端口
define('DB_PORT',3306);
//用户
define('DB_USER','root');
//密码
define('DB_PASSWORD','maxin0608');
//库名
define('DB_NAME','mall');
function connect () {
  $connect = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
  return $connect;
}
function createpassword($password){
  if(!$password){
    return false;
  }
  return md5(md5($password).'taylor');
}
