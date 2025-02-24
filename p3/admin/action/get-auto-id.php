<?php
$cn= new mysqli("localhost","root","","php25_3");
$tbl=array(
    "0"=>"tbl_menu",
    "1"=>"tbl_news"
);
$opt=$_POST['opt'];

$sql="SELECT Max(id) FROM ".$tbl[$opt]."";
$rs = $cn->query($sql);

$row = $rs->fetch_array();
$msg['id']=$row[0];
echo json_encode($msg);

?>