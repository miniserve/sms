<?php
// header('Content-Type: text/plain; charset=UTF-8');
// echo "System Environment:\n\n";
// foreach ($_ENV as $key => $value) {
//   echo "{$key}: {$value}\n";
// }
// phpinfo();s
$redis=new \Redis();
$redis->connect("106.12.95.247", 6379); //连接Redis
// $redis->auth($_ENV["REDIS_PASS"]); //密码验证
$redis->select(1);//选择数据库2
$redis->set( "code", "11111111111"); //设置测试key
$redis->expire("11111111111",300); 
echo $redis->get("11111111111");//输出value
echo "sssssss";
