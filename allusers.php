<?php
ob_start();
require_once "config.php";
session_start();
ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">

<head style="background: linear-gradient(to right, #ffffcc 0%, #66ffcc 100%);">
        <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>UB-CUSTOMERS</title>

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="styles.css">
</head>
<body style="background: linear-gradient(to right, #ffffcc 0%, #66ffcc 100%);">
 <!-- NAVBAR START--> 
 <?php include("nav.php") ?>
 <nav class="navbar navbar-#E75480 bg-white navbar-expand-sm  fixed-top" style="background: linear-gradient(to right, #ffffcc 0%, #66ffcc 100%);">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mr-auto" href="allusers.php"style="color:#cc0044;font-weight: bold;"><i class="fa fa-university" style="font-weight:bold" aria-hidden="true"> UNIVERSAL BANK </i></a>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item "><a class="nav-link" href="index.html" style="color:#cc0044;font-weight:bold"><span class="fa fa-home fa-lg"></span> HOME</a></li>
                     <!-- <li class="nav-item active"><a class="nav-link" href="allusers.php" style="color: #E75480;font-weight:bold"><i class="fa fa-user-o" aria-hidden="true"></i></i>  Users</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="history.php" style="color:#cc0044;font-weight:bold"><i class="fa fa-history" aria-hidden="true"></i></span> TRANSACTION HISTORY</a></li>
                </ul>
               
        </div>
        
      </div>
    </nav>
     <hr style="border:1px solid grey; width: 1150px">
<!-- NAVBAR END-->

<!-- ALLUSERS TABLE START-->
<div class="row row-content">
        <div class="col-12 offset-sm-1 col-sm-10">
          <h2 style="padding-top: 30px ;text-align: center; color:white"><b></b></h2>
            <div class="table-responsive">
                <table class="table table-white table-striped" style="border-color: #000000;width: 99%">
                    <thead class="thead-dark">
                      <tr style="color:  #bfff00;font-weight:bold;border-color: #000000;border-width:small;text-align: center">
                      <th style="color:  #bfff00;font-weight:bold;border-color: #000000;border-width:small;text-align: center">ID</th>
                      <th style="color:  #bfff00;font-weight:bold;border-color: #000000;border-width:small;text-align: center">NAME</th>
                      <th style="color:  #bfff00;font-weight:bold;border-color: #000000;border-width:small;text-align: center">EMAIL ID</th>
                      <th style="color:  #bfff00;font-weight:bold;border-color: #000000;border-width:small;text-align: center">AMOUNT</th>
                      <th style="color:  #bfff00;font-weight:bold;border-color: #000000;border-width:small;text-align: center">VIEW</th>
                      </tr>
                    </thead>
                    <tbody style="border-color: #000000"> 
                      <tr>
                      <?php 
                      $stmt = $pdo->query("SELECT * FROM users");
                      $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                      if(count($rows)>0){
                        foreach($rows as $row ) { ?>
                        <td style="color:  #990099;font-weight:bold;border-style: solid;
        border-color: #000000; border-width: small;border-width: thin;text-align: center"><?php echo htmlentities($row['user_id']); ?> </td>
                        <td style="color:  #990099;font-weight:bold;border-style: solid;
        border-color: #000000; border-width: thin;text-align: center"><?php echo ('<a href="profile.php?user_id='.$row['user_id'].'" style="color: #990099">'.htmlentities($row['user_name']).'</a> ');
                        ?> </td>
                        <td style="color:  #990099;font-weight:bold;border-style: solid;
        border-color: #000000; border-width: thin;text-align: center"><?php echo htmlentities($row['email']); ?> </td>
                        <td style="color:  #990099;font-weight:bold;border-style: solid;
        border-color: #000000; border-width: thin;text-align: center"><?php echo htmlentities($row['user_credits']); ?> </td>
                        <td style="color:  #990099;font-weight:bold;border-style: solid;
        border-color: #000000; border-width: thin;text-align: center"><button class="btn btn-dark" ><?php  echo('<a href="profile.php?user_id='.$row['user_id'].'" style="color: #66ffff">'."View".'</a> ');?></button></td>
                        </tr>
                        <?php }
                              }
                          ?>
                    </tbody>
                </table>
            </div>
        </div>
 </div>                   
<!-- ALLUSERS TABLE END-->

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>   
</body>
</html>


