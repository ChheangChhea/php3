<?php
$cn= new mysqli("localhost","root","","php25_3");
$cn->set_charset('utf8');
$sql="SELECT * FROM tbl_menu ORDER BY id DESC";
$rs=$cn->query($sql);
$data=array();
while($row=$rs->fetch_array()){
    $data[] =array(
    "id"=>$row[0],
    "title"=>$row[1],
    "img"=>$row[2],
    "od"=>$row[3],
    "status"=>$row[4]
    );
}
// $data['id']=1;
// $data['name']='dwwe';
// $data['sublect']='dvf';
// $data[] =array(
//     "id"=>'1',
//     "name"=>'wdd',
//     "Sb"=>'deelop'
// );
// $data[] =array(
//     "id"=>'2',
//     "name"=>'wddcc',
//     "Sb"=>'deelopccc'
// );
echo json_encode($data)
?>