<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../imgs/logo.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        #sidebar {
            position: relative;
            margin-top: -20px
        }

        #content {
            position: relative;
            margin-left: 270px
        }

        .panel {
            height: 250px;
        }

        .panel-body {
            height: 250px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0px 0px 14px -7px #3f599D;
            box-shadow: 6px 6px 1px rgb(232 39 39 / 58%);

        }

        @media screen and (max-width: 600px) {
            #content {
                position: relative;
                margin-left: auto;
                margin-right: auto;
                margin-top: 60px;
            }
        }


        .block-anchor {
            color: red;
            cursor: pointer;
        }
    </style>
</head>

<body style="color:black;">

    <?php
    include 'conn.php';
    include 'session.php';
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    ?>

        <div id="header">
            <?php include 'header.php';
            ?>
        </div>
        <?php
        $active = "dashboard";
        include 'sidebar.php'; ?>

        <div id="content">

            <div class="content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 lg-12 sm-12">
                            <h1 class="page-title" style="font-size: 40px; font-weight: 600; color: #870909;">Dashboard</h1>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="panel panel-default panel-info" style="border-radius:0px;">
                                        <div class="panel-body panel-info bk-primary text-light" style="background-color:#8eccf9; border-radius:0px">
                                            <div class="stat-panel text-center">
                                                <?php
                                                $sql = " SELECT * from donor_details ";
                                                $result = mysqli_query($conn, $sql) or die("query failed.");
                                                $row = mysqli_num_rows($result);

                                                ?>


                                                <div class="stat-panel-number h1"><?php echo $row ?></div>
                                                <div class="stat-panel-title text-uppercase">Blood Donors Available </div>
                                                <br>
                                                <button class="btn btn-danger" onclick="window.location.href = 'donor_list.php';">
                                                    Full Detail <i class="fa fa-arrow-right"></i>
                                                </button>


                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="panel panel-default panel-info" style="border-radius:0px;">
                                        <div class="panel-body panel-info bk-primary text-light" style="background-color:#ffcdd9;border-radius:0px;">
                                            <div class="stat-panel text-center">
                                                <?php
                                                $sql1 = " SELECT * from contact_query ";
                                                $result1 = mysqli_query($conn, $sql1) or die("query failed.");
                                                $row1 = mysqli_num_rows($result1);

                                                ?>


                                                <div class="stat-panel-number h1 "><?php echo $row1 ?></div>
                                                <div class="stat-panel-title text-uppercase"> All User Queries </div>
                                                <br>
                                                <button class="btn btn-danger" onclick="window.location.href = 'query.php';">
                                                    Full Detail <i class="fa fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="panel panel-default panel-info" style="border-radius:0px;">
                                        <div class="panel-body panel-info bk-primary text-light" style="background-color: #aa00ff5c ;border-radius:0px; ">
                                            <div class="stat-panel text-center">
                                                <?php
                                                $sql2 = "SELECT * from contact_query where query_status=2 ";
                                                $result2 = mysqli_query($conn, $sql2) or die("query failed.");
                                                $row2 = mysqli_num_rows($result2);

                                                ?>


                                                <div class="stat-panel-number h1 "><?php echo $row2 ?></div>
                                                <div class="stat-panel-title text-uppercase"> Pending Queries </div>
                                                <br>
                                                <button class="btn btn-danger" onclick="window.location.href = 'pending_query.php';">
                                                    Full Detail <i class="fa fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            <?php
        } else {
            echo '<div class="alert alert-danger" style = "width: 80%; margin: 20px auto;"><b> Please Login First To Access Admin Portal.</b></div>';
            ?>
                <form method="post" name="" action="login.php" class="form-horizontal">
                    <div class="form-group" style="width: 80%; margin: 20px auto;">
                        <button class="btn" name="submit" type="submit" style="padding: 10px; border-radius: 5px; background-color: green; color: white;">Go to Login Page</button>
                    </div>
                </form>
            <?php }
            ?>

</body>

</html>