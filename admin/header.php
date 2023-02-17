<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../imgs/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        .hovernone:hover{
            background-color: #870909;
            border-radius: 0px;
        }
        .navbar{
            height: 60px;
            margin-bottom: 0px;
            position: absolute;
            top: 0;
            /* border-radius: 0px; */
        }
        .li:hover{
            background-color: transparent !important;
            color:black;
        }
        .hover:hover{
            background-color: #c81e1ecf !important;
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-dark bg-danger rounded-none" style="background-color: #870909; border-radius: 0px;">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" id="qq" href="dashboard.php" style="color: white;">Blood Bank & Donation Admin Panel</a>
            </div>
            <ul class="nav navbar-nav navbar-right ">
                <li class="dropdown hovernone"><a class="dropdown-toggle" id="qw" data-toggle="dropdown" href="#" style="font-weight:bold;color:white; background-color: #870909">
                        <?php
                        include 'conn.php';
                        $username = $_SESSION['username'];
                        $sql = "select * from admin_info where admin_username='$username'";
                        $result = mysqli_query($conn, $sql) or die("query failed.");
                        $row = mysqli_fetch_assoc($result);
                        echo "Hello " . $row['admin_name'];
                        ?><span class="caret"></span></a>
                    <ul class="dropdown-menu" style="background-color:#870909;">
                        <li><a href="change_password.php" style="color: white;" class="hover">Change Password </a></li>
                        <li><a href="logout.php" style="color: white;" class="hover">Logout</a></li>
                    </ul>
                </li>
            </ul>

        </div>

    </nav>
</body>

</html>