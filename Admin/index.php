<?php include('config/db.php');
  if(!isset($_SESSION['firstname']))
      echo "<script>window.location.assign('login.php')</script>";


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Admin WeebStudio</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link href="style.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <style>
input[type="text"],
input[type="email"],
input[type="tel"],
input[type="file"],
textarea{
    padding: .8rem;
    border-radius: 8px;
    
    border: 2px solid transparent;
    background: #F4F6F9;
    outline: none;
}
input:focus{
	border: 2px solid var(--purple--400);
}
textarea:focus{
	border: 2px solid var(--purple--400);
}
  </style>
</head>  <body>
       <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg" style="background-color: #5C2AFF;">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.php" style="text-decoration:none;" class="logo"><span class="lite">WeebStudio</span></a>
      <!--logo end-->

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
          <!-- inbox notificatoin start-->
          <li id="mail_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon_mail_alt"></i>
                            <span class="badge bg-important">1</span>
                        </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 1 new messages</p>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" style="height: 50px;width: 50px;" src="./img/avatar-mini.jpg"></span>
                                    <span class="Sujet">
                                    <span class="from">Talla </span>
                                    <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        Bonjour le projet avance?
                                    </span>
                                </a>
              </li>
             
              <li>
                <a href="#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox notificatoin end -->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" style="text-decoration:none;" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" style="height: 50px;width: 50px;" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username"><?php if(isset($_SESSION['firstname'])) echo $_SESSION['firstname']." ".$_SESSION['lastname']; ?> </span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#" style="text-decoration:none;"><i class="icon_profile"></i> Mon Profil</a>
              </li>
              <li>
                <a href="#" style="text-decoration:none;"><i class="icon_mail_alt"></i> Mes Messages</a>
              </li>
             
              <li>
                <a href="login.html" style="text-decoration:none;"><i class="icon_key_alt"></i> Deconnection</a>
              </li>
            
             
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside >
       
        <div id="sidebar" class="nav-collapse " style="background-color: #5C2AFF;font-weight: bold;">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu" >
           
            <li class="sub-menu"  >
              <a href="javascript:;" class="">
                            <i class="icon_desktop"></i>
                            <span>Dashboard</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
              <ul class="sub">
                
                <li><a class="" href="index.php">Message</a></li>
                <li><a class="" href="?page=Service">Service</a></li>
                <li><a class="" href="?page=Realisation">Realisation</a></li>
              </ul>
            </li>
           </ul>
           <ul style="background-color: #5235b1; margin-top: 340%; position: absolute;">
            
            <a class="" href="login.html" style="color: white;text-decoration:none;">
                          <i class="icon_key_alt"></i>
                          Deconnection

                      </a>

          
                    </ul>
        </div>
       
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
          <!--overview start-->
         
          <div class="row">
              
            <div class="col-lg-12">
              <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
              <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="index.html" style="text-decoration:none;">Home</a></li>
                <li><i class="fa fa-laptop"></i>Dashboard</li>
              </ol>
            </div>
          </div>   
          </section>
          <section class="wrapper">
      <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-user"></i>
              <div class="count">6.674</div>
              <div class="title">Menbre en ligne</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-users"></i>
              <div class="count">7.538</div>
              <div class="title">Nombre Total des Visiteurs</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-thumbs-o-up"></i>
              <div class="count">4.362</div>
              <div class="title">Nombre de Like</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->
        </div>

    </section>
          <?php
          if(isset($_GET['page']))
          {
            
            if($_GET['page']=='Service')
            {
              ?>  <section class="wrapper">
              <div class="row">
                <div class="col-lg-12">
                  <section class="panel">
                    <header class="panel-heading">
                      Enregistrement d'un Service
                      
                    </header>
                <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" enctype="multipart/form-data" id="feedback_form" method="POST" action="">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Sujet <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="Sujet" name="Sujet" minlength="5" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Decription <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="description" name="description" minlength="5" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-2">Image</label>
                      <div class="col-lg-10">
                        <input class="form-control" id="image" name="image" type="file" required /> 
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit" name="Service">Save</button>
                        <button class="btn btn-default" type="button">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>
        
              </div>
            </section>
            <section class="wrapper">
  <div class="row">
    <div class="col-lg-12">
      <section class="panel">
        <header class="panel-heading">
          Liste Des Services
        </header>
  
        <table class="table table-striped table-advance table-hover">
          <tbody>
            <tr>
              <th><i ></i> Subjet</th>
              <th><i ></i> Description</th>
              <th><i ></i> Image</th>
              
              <th><i class="icon_cogs"></i> Action</th>
            </tr>
             <?php 

                $query = "SELECT * FROM `service`";
                $con = getConnexion();
                $services=$con->query($query)->fetchAll();
                foreach($services as $service)
                {
                  ?>
                  <tr>
              <td><?=$service['sujet']?></td>
              <td><?=$service['description']?></td>
              <td><img src="../assets/img/<?=$service['image']?>" style="width: 80px;height: 80px;" alt=""></td>
              <td>
                <div class="btn-group">
                  <a class="btn btn-primary" href="?id=<?=$service['id_service']?>&sujet=<?=$service['sujet']?>&description=<?=$service['description']?>"><i class="icon_plus_alt2"></i></a>
                  <a class="btn btn-danger" href="?id_service=<?=$service['id_service']?>"><i class="icon_close_alt2"></i></a>
                </div>
              </td>
            </tr>
                  <?php
                }
               ?>
          </tbody>
        </table>
      </section>
    </div>
  </div>

        </section>
            <?php
            }
            if($_GET['page']=='Realisation')
            {
              ?>
               <section class="wrapper">
  <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Enregistrement d'une Realisation
          </header>
      <div class="panel-body">
      <div class="form">
        <form class="form-validate form-horizontal" enctype="multipart/form-data" id="feedback_form" method="POST" action="">
          <div class="form-group ">
            <label for="cname" class="control-label col-lg-2">Sujet <span class="required">*</span></label>
            <div class="col-lg-10">
              <input class="form-control" id="Sujet" name="Sujet" minlength="5" type="text" required />
            </div>
          </div>
          <div class="form-group ">
              <label for="cname" class="control-label col-lg-2">Lien <span class="required">*</span></label>
              <div class="col-lg-10">
                <input class="form-control" id="lien" name="lien" minlength="5" type="text" required />
              </div>
            </div>
            <div class="form-group ">
              <label for="cname" class="control-label col-lg-2">Description <span class="required">*</span></label>
              <div class="col-lg-10">
               <textarea class="form-control" id="description" name="description" minlength="5" type="text" required ></textarea>
              </div>
            </div>
          <div class="form-group ">
            <label for="ccomment" class="control-label col-lg-2">Image</label>
            <div class="col-lg-10">
              <input class="form-control" id="image" name="image" type="file" required /> 
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
              <button class="btn btn-primary" type="submit" name="Realisation">Save</button>
              <button class="btn btn-default" type="button">Cancel</button>
            </div>
          </div>
        </form>
      </div>
  
    </div>
    </div>
  </div>

          </section>
          <section class="wrapper">
  <div class="row">
    <div class="col-lg-12">
      <section class="panel">
        <header class="panel-heading">
          Liste Des Realisation
          
        </header>
  
        <table class="table table-striped table-advance table-hover">
          <tbody>
            <tr>
              <th><i ></i> Subjet</th>
              <th><i ></i> Lien</th>
              <th><i ></i> Description</th>
              <th><i ></i> Image</th>
              
              <th><i class="icon_cogs"></i> Action</th>
            </tr>

                         <?php 

                $query = "SELECT * FROM `realisation`";
                $con = getConnexion();
                $realisations=$con->query($query)->fetchAll();
                foreach($realisations as $realisation)
                {
                  ?>
                  <tr>
              <td><?=$realisation['sujet']?></td>
              <td><?=$realisation['lien']?></td>
              <td><?=$realisation['description']?></td>
              <td><img src="../assets/img/<?=$realisation['image']?>" style="width: 80px;height: 80px;" alt=""></td>
              <td>
                <div class="btn-group">
                  <a class="btn btn-primary" href="?id=<?=$realisation['id_realisation']?>&lien=<?=$realisation['lien']?>&sujet=<?=$realisation['sujet']?>&description=<?=$realisation['description']?>"><i class="icon_plus_alt2"></i></a>
                  <a class="btn btn-danger" href="?id_realisation=<?=$realisation['id_realisation']?>"><i class="icon_close_alt2"></i></a>
                </div>
              </td>
            </tr>
                  <?php
                }
               ?>
          </tbody>
        </table>
      </section>
    </div>
  </div>

        </section>
              <?php
            }
          }
        else
         {
      ?> 
      <section class="wrapper">
  <div class="row">
    <div class="col-lg-12">
      <section class="panel">
        <header class="panel-heading">
          Liste Des Messages
        </header>
  
        <table class="table table-striped table-advance table-hover">
          <tbody>
            <tr>
              <th><i class="icon_profile"></i> Nom Complet</th>
              <th><i class="icon_calendar"></i> Date</th>
              <th><i class="icon_mail_alt"></i> Email</th>
              <th><i class="icon_mail_alt"></i> Message</th>
              
              <th><i class="icon_cogs"></i> Action</th>
            </tr>
                  <?php 

                $query = "SELECT * FROM `message`";
                $con = getConnexion();
                $messages=$con->query($query)->fetchAll();
                foreach($messages as $message)
                {
                  ?>
            <tr>
              <td><?=$message['nom_complet']?></td>
              <td><?=$message['date']?></td>
              <td><?=$message['email']?></td>
              <td><?=$message['message']?></td>
              <td>
                <div class="btn-group">
                  <a class="btn btn-primary" style="text-decoration:none;" href="?email=<?=$message['email']?>">Repondre</a>
                 
                </div>
              </td>
            </tr>
            <?php

                }
            ?>
        
          </tbody>
        </table>
      </section>
    </div>
  </div>

        </section>
      <?php
         }
           
         ?>  

        <div class="text-right">
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
            -->
            Designer par l'equipe <a href="https://WeebStudio.com/" style="text-decoration:none;" >Weebstudio</a>
          </div>
        </div>
      </section>
      <!--main content end-->
    </section>
    <!-- container section start -->
    <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
  
  </body>
  </html>
  <?php 
     function getConnexion()
     {
         $pdo = new PDO
         (
             "mysql:host=localhost;dbname=weebstudio;charset=utf8", 
             "root", 
             "",
             array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
         );
         return $pdo;
     }
 if(isset($_POST['Service']))
 {
   if(isset($_FILES['image']))
    require_once('uploadimage.php');

  $query = "INSERT INTO `service` Values(null,:sujet,:descriptions,:images)";
  $con = getConnexion();
  $stmt = $con->prepare($query);
  $insert= $stmt->execute
  (
      array
      (
          ':sujet' => $_POST['Sujet'],
          ':descriptions'=>$_POST['description'],
          ':images' => $_FILES['image']['name']
      )
  ); 
  if($insert)
    echo "<span style=\"color: green;font-weight: bold;\">Ajout du service reussi</span>"; 
  else
    echo "<span style=\"color: red;font-weight: bold;\">echec d'ajout du service</span>";
 }
 
 if(isset($_POST['Realisation']))
 {
   if(isset($_FILES['image']))
      require_once('uploadimage.php');

  $query = "INSERT INTO `realisation` Values(null,:sujet,:lien,:descriptions,:images)";
  $con = getConnexion();
  $stmt = $con->prepare($query);
  $insert= $stmt->execute
  (
      array
      (
          ':sujet' => $_POST['Sujet'],
          ':lien'=>$_POST['lien'],
          ':descriptions'=>$_POST['description'],
          ':images' => $_FILES['image']['name']
      )
  ); 
  if($insert)
    echo " <center><span style=\"color: green;font-weight: bold;\">Ajout de la realisation reussi</span></center>"; 
  else
    echo "<center><span style=\"color: red;font-weight: bold;\">echec d'ajout de la realisation</span></center>";
 }
        
     

     ?>
    <?php 
                 if(isset($_GET['id_service']) || isset($_GET['id_ser']))
                 {   
                      if(!isset($_GET['id_ser']))
                           echo "<script>let result=confirm('vouler vous vraiment supprimer ce service de la base de donnees')</script>";
                      if(!isset($_GET['result']))
                           echo "<script>window.location.assign(\"index.php?id_ser=".$_GET['id_service']."&result=\"+ result)</script>";



                    
                 }
              
                 if(isset($_GET['result']))
                 {
                   if($_GET['result']=='true')
                      {
                         $query="DELETE FROM `service` WHERE `id_service` =".$_GET['id_ser'];
                      var_dump($_GET['result']);
                      $bdd=getConnexion();
                     if ($bdd->query($query))
                       echo "<script>alert('service supprimer')</script>";
                     else
                      echo "<script>alert(\" imposible de supprimer ce service\")</script>";
                      }
                      else
                      {
                     echo "<script>alert(\"suppresion annuler\")</script>";
                      }
                      echo "<script>window.location.assign(\"index.php?page=Service\")</script>";

                 }

                 if(isset($_GET['id_realisation']) || isset($_GET['id_ser']))
                 {   
                      if(!isset($_GET['id_real']))
                           echo "<script>let result=confirm('vouler vous vraiment supprimer cette realisation de la base de donnees')</script>";
                      if(!isset($_GET['result1']))
                           echo "<script>window.location.assign(\"index.php?id_real=".$_GET['id_realisation']."&result1=\"+ result)</script>";



                    
                 }
              
                 if(isset($_GET['result1']))
                 {
                   if($_GET['result1']=='true')
                      {
                         $query="DELETE FROM `realisation` WHERE `id_realisation` =".$_GET['id_real'];
                      
                      $bdd=getConnexion();
                     if ($bdd->query($query))
                       echo "<script>alert('realisation supprimer')</script>";
                     else
                      echo "<script>alert(\" imposible de supprimer cette realisation\")</script>";
                      }
                      else
                      {
                     echo "<script>alert(\"suppresion annuler\")</script>";
                      }
                      echo "<script>window.location.assign(\"index.php?page=Realisation\")</script>";

                 }
              ?>
