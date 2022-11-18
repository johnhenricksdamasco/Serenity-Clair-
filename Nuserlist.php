<?php
  $servername = "localhost";
  $username = "root";
  $password= "";
  $dbname = "serenitydb";

  $connect = new mysqli($servername, $username, $password, $dbname);

    if ($connect->connect_error) {
      die("connection failed: ". $connect->connect_error);
        }

  $sql = "SELECT id, fullname, gender, email, username, password FROM loginuser";
  $result = $connect->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Users List</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="jquery.dataTables.min.css">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
  height: 55px;
  width: 500px;
}

/* Fixed sidenav, full height */
.sidenav {
  height: 625px;
  width: 190px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  margin-top: 10px;
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 15px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: #84B6D8;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 24px 20px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
  background-color: #84B6D8;

}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 30px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  font-size: 16px;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.navbar {
  overflow: hidden;
  background-color: #ececec;

}

 .container{
        position: absolute;
        right: 5px;
        left:0px;
        top: 10%;
        height: 90%;
        width: 100%;
        background-color: white;
        padding: 30px;
    }
    .col{
        position: absolute;
        left:310px;
        width: 900px;
        height: 220px;
        top:10px;
        border-radius: 2px;
        margin: 10px;
        background-color: white;
        border: 3px solid black; 
        border-color: #84B6D8;
    }
    .cols{
        position: absolute;
        top:350px;
        left:270px;
        width: 400px;
        height: 250px;
        background-color: white;
        border: 3px solid black; 
        border-color: #84B6D8;
    } 
    .colse{
        position: absolute;
        top:350px;
        left:830px;
        width: 400px;
        height: 250px;
        background-color: white;
        border: 3px solid black; 
        border-color: #84B6D8;
    }
    .col p{
        position: absolute;
        font-size: 30px;
        color: black;
        font-family: serif;
        margin-top: 10px;
        margin-left: 20px;
    }
    .cols p{
        position: absolute;
        font-size: 30px;
        color: black;
        font-family: serif;
        margin-top: 10px;
        left:5px;
    }
    .colse p{
        position: absolute;
        font-size: 30px;
        color: black;
        font-family: serif;
        top:19px;
        left:5px;
    }
    .fa-user-group{
        position: absolute;
        color: black;
        font-size:150px;
        top:25px;
        left:25px;
    }

    .col h5{
      position: absolute;
      font-size: 140px;
      color: black;
      font-family: serif;
      margin-top: 30px;
      margin-left: 420px;
    }

.table{
    width: 100%;
    border-collapse: collapse;
    height: 30px;
    margin-left: 197px;
  }

  .table td,.table th{
      padding:12px 15px;
      border:1px solid #ddd;
      text-align: center;
      font-size:16px;
      width: 10px;
  }

  .table th{
    background-color: lightblue;
    color:#6F6F6F;
  }

  .table tbody tr:nth-child(even){
    background-color: #D6D5D5;
  }

@media(max-width: 500px){
  .table thead{
    display: none;
  }

  .table, .table tbody, .table tr, .table td{
    display: block;
    width: 100%;
  }
  .table tr{
    margin-bottom:15px;
  }
  .table td{
    text-align: right;
    padding-left: 50%;
    text-align: right;
    position: relative;
  }
  .table td::before{
    content: attr(data-label);
    position: absolute;
    left:0;
    width: 50%;
    padding-left:15px;
    font-size:15px;
    font-weight: bold;
    text-align: left;
  }
}
  #table-wrapper {
      position:relative;
  }
  #table-scroll {
      height:470px;
      overflow:auto;  
      margin-top:20px;
  }
  #table-wrapper table {
      width:1100px;
  }
  #table-wrapper table * {
      color:black;
  }
  #table-wrapper table thead th .text {
      position:absolute;   
      top:-20px;
      z-index:2;
      height:20px;
      width:35%;
      border:1px solid red;
}
</style>


</head>

<body>


<div class="navbar">
  <div class="dropdown" style="float: right;">
    <button class="dropbtn">Admin&nbsp&nbsp  
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Notification</a>
      <a href="#">Profile</a>
      <a href="#">Change Password</a>
      <a href="#">Logout</a>
    </div>
  </div> 
</div>



<div class="sidenav">
  <img src="LOGO Circle.png" style="width:130px; height: 130px; margin-left: 25px;"></img>
  <a href="Ndashboard.php" style="margin-top: 70px;">Dashboard</a>
   <button class="dropdown-btn">Manage 
      <i class="fa fa-caret-down"></i>
   </button>
  <div class="dropdown-container">
    <a href="Nmusictherapy.php">Music Therapy</a>
    <a href="Nstress.php">Stress Reliever</a>
    <a href="Nquotes.php">Motivational Quotes</a>
  </div>
  <a href="Nfeedback.php">Feedback</a>
  <a href="Nregistration">Registration Request</a>
  <a href="Nuserlist.php">Users List</a>
  <a href="Naccount.php">Accounts</a>
  <a href="Nuserlogs.php">User Logs</a>

</div>

<div class="main">
<div class="container" >
      
<div id="table-wrapper">
  <div id="table-scroll">
      <table id="'myDataTable" class="table">
      <thead>
      <tr>
       <th>User ID</th>
       <th>Full Name</th>
       <th>Gender</th>
       <th>Email</th>
       <th>Username</th>
       <th>Password</th>
      </tr>
     </thead>


     <tbody style="background-color: #999797;">
    <?php 
            if ($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo "<tr> 
                            <td>". $row["id"]."</td>
                            <td>". $row["fullname"]."</td>
                            <td>". $row["gender"]."</td>
                            <td>". $row["email"]."</td> 
                            <td>". $row["username"]."</td> 
                            <td>". $row["password"]."</td> 
                         </tr>";

                }
            } else {
                echo "0 results";
            }

            $connect->close();

            ?>

     </tbody>
   </table>
</div>
</div>
      </form>

    </div>
</div>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

<script src="jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrao@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script>
  $(document).ready( function () {
    $('#myDataTable').DataTable();
} );
</script>
<script src="js/scripts.js"></script>

<!-- Summernote JS - CDN Link -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-;ite.min.js"></script>
<script>
  $(document).ready(function() {
    //$("#summernote").summernote():

    $('summernote').summernote({
      placeholder: 'Type your Description'.
      height: 300
    });

    $('.dropdown-toggle').dropdown();
  });
</script>





</body>
</html>