<?php

$user = 'root';
$password = 'root';
$db = 'db_portfolio';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port
);


  if(mysqli_connect_errno()){
       printf("Connection failed: %s\n", mysqli_connect_error());
    exit();
  }
  $query="SELECT project_name_short, project_name_long, project_image, project_desc, project_link, project_date FROM `tbl_projects` ORDER BY project_date DESC";
  $get=mysqli_query($link,$query);

  $grpResult="";

  while ($result = mysqli_fetch_assoc($get)) {
    //echo $movResult['movies_id'];
    $jsonResult = json_encode($result);
    $grpResult .=$jsonResult.",";
    
}   
    $grpResult=substr($grpResult,0,-1);
    $grpResult="[".$grpResult."]";

    echo $grpResult;

  mysqli_close($link);


?>