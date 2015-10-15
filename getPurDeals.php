<?php
require_once __DIR__ . '/db_connect.php';
 $user_id= $_POST['user'];
$db= new DB_CONNECT();
$db->connect();
$q=  mysql_query("select * from purchased where user_id=".$user_id);
$output['deals']=array();


while($row=mysql_fetch_array($q)){
    
    $temp=array();
array_push($temp,$row);


$q2= mysql_query("select * from deals where id=".$row['deal_id']);
$q3= mysql_query("select * from coupon where id=".$row['coup_id']);
array_push($temp,mysql_fetch_array($q2));
array_push($temp,mysql_fetch_array($q3));

 array_push($output['deals'], $temp);
}
 header('Content-Type: application/json');
print(json_encode($output));
mysql_close();
?>
