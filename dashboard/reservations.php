<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sport Club Admin</title>

    <script src='js/myscript.js'></script>
    
    <script type="text/javascript" src="js/bootstrap-notify.min.js"></script>
    <link href="css/toggleswitch.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/myStyle.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="css/animate.min.css" rel="stylesheet">

    <script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-notify.min.js"></script>



    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            [data-notify="progressbar"] {
                margin-bottom: 0px;
                position: absolute;
                bottom: 0px;
                left: 0px;
                width: 100%;
                height: 5px;
            }
        </style>
    </head>

    <body>

        <?php
        session_start();
        require_once("connect_db_sport.php");
        if(!isset($_SESSION['Admin']))
        {
            header ("Location: http://localhost/sport_server/");
            exit();
        }
        ?>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Sport Club Admin</a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <!--<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                        <ul class="dropdown-menu message-dropdown">
                            <li class="message-preview">
                                <a href="#">
                                    <div class="media">
                                        <span class="pull-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading">
                                                <strong>John Smith</strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message-preview">
                                <a href="#">
                                    <div class="media">
                                        <span class="pull-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading">
                                                <strong>John Smith</strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message-preview">
                                <a href="#">
                                    <div class="media">
                                        <span class="pull-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading">
                                                <strong>John Smith</strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message-footer">
                                <a href="#">Read All New Messages</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                        <ul class="dropdown-menu alert-dropdown">
                            <li>
                                <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">View All</a>
                            </li>
                        </ul>
                    </li>-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['Admin_Fname']."&nbsp;".$_SESSION['Admin_Lname']; ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#" onclick="return logout();"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li>
                            <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                        </li>
                        
                        <li>
                            <a href="all_user.php"><i class="fa fa-fw fa-users"></i> สมาชิกทั้งหมด</a>
                        </li>

                        <li>
                            <a href="all_user_deactive.php"><i class="fa fa-fw fa-user-times"></i> สมาชิกที่รอยืนยัน</a>
                        </li>

                        <li>
                            <a href="all_user_active.php"><i class="fa fa-fw fa-user-plus"></i> สมาชิกที่ยืนยันแล้ว</a>
                        </li>

                        <li>
                            <a href="all_admin.php"><i class="fa fa-fw fa-user-secret"></i> เจ้าหน้าที่</a>
                        </li>

                        <li class="active">
                            <a href="reservations.php"><i class="fa fa-fw fa-ticket"></i> ปิด-เปิด ระบบจองคิว</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

            <div id="page-wrapper">

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                ปิด-เปิด ระบบจองคิว
                                <small></small>
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-file"></i> ปิด-เปิด ระบบจองคิว
                                </li>
                            </ol>

                            <!-- Toggle Switch -->
                            
                            <table border="0px" width="100%">
                                <thead>
                                    <th></th>

                                </thead>
                                <tbody>
                                    <tr>
                            <?php
                            $sql = "SELECT * FROM reservation";
                            $res = mysqli_query($con,$sql);
                            $count = 0;
                            if($res->num_rows >0){
                                while ($row = $res->fetch_array(MYSQL_BOTH)){
                                    if($row['status'] == 1){
                                        echo "<center><p><font size='6'>สถานะ : <font size='6' color='green'>เปิด</font></font></p></center>";
                                        echo "<td style='text-align:center;'>";
                                        echo "<br><button class='closeButton' onclick='reserv_close()' type='button'><font size='5'>ต้องการปิดระบบจองคิว?</font></button>";
                                        echo "</td>";
                                       
                                    }else{
                                        echo "<center><p><font size='6'>สถานะ : <font size='6' color='red'>ปิด</font></font></p></center>";
                                        echo "<td style='text-align:center;'>";
                                        echo "<br><button class='openButton' onclick='reserv_open()' type='button'><font size='5'>ต้องการเปิดระบบจองคิว?</font></button>";
                                        echo "</td>";
                                    }
                                }
                            }
                            ?>

                                    </tr>
                                </tbody>
                            </table>
                            <br><br>


                            <!-- End Toggle Switch -->

                        </div>
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
              $(".search").keyup(function () {
                var searchTerm = $(".search").val();
                var listItem = $('.results tbody').children('tr');
                var searchSplit = searchTerm.replace(/ /g, "'):containsi('")

                $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
                    return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
                }
            });

                $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
                    $(this).attr('visible','false');
                });

                $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
                    $(this).attr('visible','true');
                });

                var jobCount = $('.results tbody tr[visible="true"]').length;
                $('.counter').text(jobCount + ' item');

                if(jobCount == '0') {$('.no-result').show();}
                else {$('.no-result').hide();}
            });
          });

      </script>
        

      
      <script>

    </script>
</body>

</html>
