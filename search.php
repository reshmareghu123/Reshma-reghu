<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">student entry</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="search.php">search</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="edit.php">edit</a>
          </li>
        </ul>
      </nav>
      <h1>
      search
      </h1>
      <br>
      <form method="GET">
     <table class="table">
         <tr>
         <td>
student Admission Number
         </td>
         <td>
             <input type="text" search="front-control"name="getAdmno">
         </td>
        
    </tr>
    <tr>
    <td></td>
    <td><button type="submit" class="btn btn-success" name="submit">
    search
    </button>
    </td>
    </tr>

     </table> 
     </form>
</body>
</html>
<?php
if(isset($_GET["submit"]))
{
  $adm=$_GET["getAdmno"];
$serverName="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="mydb";
$connection=new mysqli($serverName,$DbUsername,$DbPassword,$DbName);
$sql="SELECT  `name`, `rollno`,  `college` FROM `student` WHERE `admno`=$adm";
$result=$connection->query($sql);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
$name=$row["name"];
$roll=$row["rollno"];
$college=$row["college"];
echo "<table class='table'> <tr><td>name</td><td>$name</td></tr>
<tr><td>roll</td><td>$roll</tr><tr><td>college</td><td>$college</tr></table>";
}
}
else{
  echo"Invalid ";
}
}