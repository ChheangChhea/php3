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
            <i class="fa-solid fa-right-from-bracket" class="signOut"></i>

        </div>
    </div>
    <div class="left-menu">
        <ul>
            <li>
                <a>
                    <i class="fa-solid fa-user"></i>
                    <span>User</span>
                </a>
            </li>
            <li>
                <a>
                    <i class="fa-sharp fa-solid fa-plus"></i>
                    <span>Set up</span>
                </a>
                <ul class="sub-menu">
                    <li data-opt="0">
                        <a>Menu</a>
                    </li>
                    <li data-opt="1">
                        <a>News</a>
                    </li>
                    <li data-opt="2">
                        <a>Ads</a>
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
           
        </table>
    </div>
</body>
<script src="js/index.js"></script>

</html>