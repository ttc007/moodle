<!DOCTYPE html>
<html>
<head>
    <title>LibraryCousers</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="home.css">
    <style type="text/css">
        #headertop{
            background: #30add1; height: 70px;
            width: 100%;
            position: absolute;
            top: 0;
        }
        header ul li {
            float: left;
            padding: 1em;
        }
        header ul {
            list-style-type: none;
            margin: 0 100px; 
        }
        main ul {
            list-style-type: square;
        }
        main ul ul {
            list-style-type: circle;
        }

        main {
            min-height:800px;
            margin:100px 200px;
        }
        footer{
            background: #30add1; height: 70px;
            text-align: center;
            padding: 1em;
        }
        .navbar {
            display: none;
        }
        #page-footer{
            display: none;
        }
        a{
            color: #337ab7;
        }
        a:hover{
            color: #23527c;
        }
        span,.block_action,.skip,.singlebutton,#instance-23-header,.block_tree{
            
            display: none;
        }
        #region-main{
            width: 40%;
            float: left !important;
        }
        .pagination ul{
            list-style-type: none;
        }
        .pagination li{
            float: left;
        }
        .pagination a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color .3s;
        }

        .pagination a.active {
            background-color: #4CAF50;
            color: white;
        }

        .pagination a:hover:not(.active) {background-color: #ddd;}

        .breadcrumb{
            background: #337ab7;
        }
        .minicalendar th,td{
            width: 10px;
        }
    </style>
</head>
<body>
<header id="headertop">
    <?php
        if(isset($_GET["logout"])){
            unset($_COOKIE['user']);
            setcookie('user', null, -1, '/');
            echo $_COOKIE["user"];
            require_logout();
            header("Location:/moodle1/login/index.php");

        }
        // echo $_COOKIE["user"];
    ?>
    <ul>
        <li><a href="/moodle1"><h5>Home</h5></a></li>
        
        <?php if(isset($_COOKIE["user"])){?>
            <li><a href="/moodle1/my"><h5><?php echo "Trang của ".$_COOKIE["user"]; ?></h5></a></li>
            <li style="float: right;"><a href="/moodle1?logout=1"><h5>Logout</h5></a></li>
        <?php }else{
            echo "<li style='float: right;'><a href='/moodle1/login/index.php'><h5>Login</h5></a></li>";
        } ?>
    </ul>
</header>
<main>