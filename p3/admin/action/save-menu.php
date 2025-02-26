<?php
    $cn= new mysqli("localhost","root","","php25_3");
     $cn->set_charset('utf8');
    $title=$cn->real_escape_string(trim($_POST['txt-title']));
    $img =$_POST['txt-img-name'];
    $od=$cn->real_escape_string(trim($_POST['txt-od']));
    $status=$_POST['txt-status'];

    $sql="INSERT INTO tbl_menu VALUES(null,'$title','$img',$od,$status)";
    $cn->query($sql);
    $msg['id'] = $cn->insert_id;
    echo json_encode($msg);
?>