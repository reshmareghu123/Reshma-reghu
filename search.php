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
            <a class="nav-link" href="index.html">student entry</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="search.html">search</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="edit.html">edit</a>
          </li>
        </ul>
      </nav>
      <form method="GET">
     <table>
         <tr>
         <td>
student Admission Number
         </td>
         <td>
             <input type="text" search="front-control"name="adm">
         </td>
        
    </tr>
    <tr>
    <td></td>
    <td><button type="text" class="btn btn-success" name="getvalue">search</button></td>
    </tr>

     </table> 
     </form>
</body>
</html>
<?php
if(isset($_GET["getvalue"]))
{
  $adm=$_GET["adm"];
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
echo $name;
echo $roll;
echo $college;
}
}
else{
  echo"Invalid Admno";
}
}