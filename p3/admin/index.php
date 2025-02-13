<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page(1.0)</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <script src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
    <div class="bar1">
        <div class="box1">
         <i class="fas fa-bars" id="btnMenu"></i>
        </div>
        <div class="box2">
             New
        </div>
        <div class="box3">
        <span>WERTY@5678bhnj</span>
        <i class="fa-solid fa-right-from-bracket"class="signOut"></i>

        </div>
    </div>
   <div class="left-menu">
<ul>
    <li>
        <a href="">
        <i class="fa-solid fa-user"></i>
            <span>User</span>
    </a>
</li>
<li>
        <a href="">
        <i class="fa-sharp fa-solid fa-plus"></i>
            <span>Set up</span>
    </a>
    <ul class="sub-menu">
        <li>
            <a href="">Menu</a>
        </li>
        <li>
            <a href="">News</a>
        </li>
    </ul>
</li>
</ul>

    </div>
    <div class="container">
    <div class="box">
     <ul class="ul1">
        <li>
            <a id="btnAdd">
            <i class="fa-sharp fa-solid fa-plus"></i>
                add
            </a>
        </li>

     </ul>

     <ul class="ul2">
        <li>
         <input type="button" value="Search">
        </li>
     </ul>
     <ul class="ul3">
     <li>
            <input type="button" value="Back">
        </li>
        <li>
            <input type="button" value="Next">
        </li>
     </ul>
    </div>
    <table id="tblData">
        <tr>
            <th width="100px">ID </th>
            <th>Name</th>
            <th>Price </th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Html</td>
            <td>30</td>
            <td>1</td>
            <td></td>
        </tr>
        <tr>
            <td>1</td>
            <td>Html</td>
            <td>30</td>
            <td>1</td>
            <td></td>
        </tr>
    </table>
</div>
<div class="popup">
<div class="frm">
    <div class="header">
       <span> Rean web</span>
       <div class="btnClose">
       <i class="fa-solid fa-xmark"></i>
       </div>
    </div>
    <div class="body">
   <label for="">ID</label>
   <input type="text" name="" id="txt-id" class="frm-control">

   <label for="">Name</label>
   <input type="text" name="" id="txt-id" class="frm-control">

   <label for="">Price</label>
   <input type="text" name="" id="txt-price" class="frm-control">
   <label for="">Photo</label>
   <div class="img-box">
<input type="file" name="" id="">
   </div>

    </div>
    <div class="footer">
        <div class="btnSave">
        <i class="fa-solid fa-floppy-disk"></i>
            save
        </div>
    </div>
</div>
</div>
</body>
</html>