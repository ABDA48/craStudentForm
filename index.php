<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <style>
.second{
    color: black;
}
.image{
     
    padding-left: 300px;
}
    </style>
<form method="GET" action="index.php">
        <div>
            <label>Id</label><br>
            <input type="text" name ="id">
        </div>
     
        <input type="submit" value ="Submit">
    </form>
    

<?php
 $dbhost="btyildnz7devh3sfljsg-mysql.services.clever-cloud.com:3306";
 $dbuser="ux4ypgedzepexlmh";
 $dbpass="2ZB9ZKYpCwaetDiw9n0E";
 $db="btyildnz7devh3sfljsg";
$con=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
if( $_GET["id"] ) {
    $id=$_GET['id'];
/*
    "	
    Pere	
    Mere	
    Telephone pere/mere	
    Origine	
    Adress	
    Telephone	
    Institution	
    Filiere	
    Batch	
    BACC"
    */
 }
$res=mysqli_query($con,"SELECT * FROM university where id=".$id);
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC)){
    echo '<div class="container" style="margin-left:100px;margin-right:100px;">
   <div class="image"> <img width="150px" height="150px" src="avatar.jpg"/></div>
<div class="row" style="margin: 20px;">
    <div class="col-sm-6">

    <p class="text-primary first">
Nom :<br><span class="second">'.$row["Nom"].'</span></p>	

<p class="text-primary first">
Date de naissance :<br><span class="second">'.$row["Nom"].'</span></p>

<p class="text-primary first">
Email :<br><span class="second">'.$row["Nom"].'</span></p>

<p class="text-primary first">
Pere :<br><span class="second">'.$row["Pere"].'</span></p>

<p class="text-primary first">
Mere :<br><span class="second">'.$row["Mere"].'</span></p>

<p class="text-primary first">
Sexe :<br><span class="second">'.$row["Mere"].'</span></p>

<p class="text-primary first">
Institution :<br><span class="second">'.$row["Institution"].'</span></p>

<p class="text-primary first">
Batch :<br><span class="second">'.$row["Batch"].'</span></p>

           
	
    </div>
    <div class="col-sm-6">
    
<p class="text-primary first">
Prenom :<br><span class="second">'.$row["Prenom"].'</span></p>

<p class="text-primary first">
Origine :<br><span class="second">'.$row["Origine"].'</span></p>

<p class="text-primary first">
Telephone :<br><span class="second">'.$row["Telephone"].'</span></p>

<p class="text-primary first">
statut :<br><span class="second">'.$row["Telephone"].'</span></p>

<p class="text-primary first">
Telephone pere/mere :<br><span class="second">'.$row["Telephone_pere_mere"].'</span></p>


<p class="text-primary first">
category :<br><span class="second">'.$row["Telephone"].'</span></p>


<p class="text-primary first">
Bacc :<br><span class="second">'.$row["Telephone"].'</span></p>

<p class="text-primary first">
filliere :<br><span class="second">'.$row["Filiere"].'</span></p>

    </div>
  
  </div>
</div>';



} 
mysqli_free_result($res);
?>









</body>
</html>
