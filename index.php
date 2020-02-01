<!DOCTYPE html>
<html lang="en">
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php">student entry</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="search.php">search</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="edit.php">edit</a>
    </li>
  </ul>
     
    </nav>


    <form method="GET">
 <table class="table">
     <tr>
         <td>name</td>
         <td><input type="text" name="getName" class="form-control"></td>
     </tr>
     <tr>
         <td>rollno</td>
         <td><input type="text"name= "getRoll" class="form-control"></td>
         <tr>
             <td>college</td>
             <td><input type="text" name="getCollege" class="form-control"></td>
         </tr>
     </tr>
     <tr>
         <td>Addmission number</td>
         <td><input type="text" name="getAddmissionnumber" class="form-control"></td>
     </tr>
     <tr>
         <td></td>
         <td>
             <Button class="btn btn-secondary " name="mybutton">SUBMIT</Button>
         </td>
     </tr>
 </table>
 
</form>
</body>
</html>
<?php
if(isset($_GET["mybutton"]))
{
  $name=$_GET["getName"];
  $roll=$_GET["getRoll"];
  $college=$_GET["getCollege"];
  $addmission=$_GET["getAddmissionnumber"];
  $serverName="localhost";
  $DbUsername="root";
  $DbPassword="";
  $DbName="mydb";
  $connection=new mysqli($serverName,$DbUsername,$DbPassword,$DbName);
$sql="INSERT INTO `student`( `name`, `rollno`, `admno`, `college`) VALUES ('$name',$roll,$addmission,'$college')";
$result=$connection->query($sql);
if($result===TRUE)
{
  echo"succesfully insert";
}
else{
  echo $connection->error;
}
}
?>