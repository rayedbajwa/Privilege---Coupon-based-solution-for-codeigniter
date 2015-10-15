<?php

require_once __DIR__ . '/db_connect.php';
 
$db= new DB_CONNECT();
$output['deals']=array();
 $db->connect();
$q=mysql_query("SELECT * from deals");
while($row=mysql_fetch_array($q))
{  $temp=array();
  $temp['id']=$row['id'];
    $temp['name']=$row['name'];
    $temp['desc']=$row['description'];
     $temp['expire_time']=$row['expire_time'];
      $temp['brand_id']=$row['brand_id'];
       $temp['img']=$row['image'];
       
    array_push($output['deals'], $temp);
}
 header('Content-Type: application/json');
print(json_encode($output));
  
mysql_close();
?>
