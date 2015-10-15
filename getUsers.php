<?php

require_once __DIR__ . '/db_connect.php';
 
$db= new DB_CONNECT();
$output['users']=array();
 $db->connect();
$q=mysql_query("SELECT * from users");
while($row=mysql_fetch_array($q))
{  $temp=array();
  $temp['id']=$row['id'];
    $temp['username']=$row['name'];
    $temp['pass']=$row['password'];
    array_push($output['users'], $temp);
}
 header('Content-Type: application/json');
print(json_encode($output));
  
mysql_close();
?>