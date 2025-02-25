<?php
$cn= new mysqli("localhost","root","","php25_3");
$cn->set_charset('utf8');
$sql="SELECT * FROM tbl_menu";
$rs=$cn->query($sql);
while($row=$rs->fetch_array()){
    ?>
    <tr>
        <td><?php each $row[0] ; ?></td>
        <td><?php each $row[1] ; ?></td>
        <td><?php each $row[2] ; ?></td>
        <td><?php each $row[0] ; ?></td>
        <td><?php each $row[0] ; ?></td>
    </tr>
    <?php
}

?>