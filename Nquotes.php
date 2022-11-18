<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Motivational Quotes</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
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

    .height10{
      height:5px;
    }
    .mtop10{
      margin-top:10px;
    }
    .modal-label{
      position:relative;
      top:7px
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

<div class="container">
  <h1 style="margin-top: 5px; margin-left: 210px;" class="page-header text-center">Motivational Quotes</h1>
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <div class="row" style="margin-left: 170px;">
      <?php
        if(isset($_SESSION['error'])){
          echo
          "
          <div class='alert alert-danger text-center'>
            <button class='close'>&times;</button>
            ".$_SESSION['error']."
          </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo
          "
          <div class='alert alert-success text-center'>
            <button class='close'>&times;</button>
            ".$_SESSION['success']."
          </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      </div>
      <div class="row">
        <a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> New</a>
        
      </div>
      <div class="height10">
      </div>
      <div class="row">
        <table id="myTable" class="table table-bordered table-striped" style="width: 1080px;">
          <thead>
            <th>Quotes</th>
            <th>Author</th>
            <th>Action</th>
          </thead>
          <tbody>
            <?php
              include_once('Qconnection.php');
              $sql = "SELECT * FROM mquotes";

              //use for MySQLi-OOP
              $query = $conn->query($sql);
              while($row = $query->fetch_assoc()){
                echo 
                "<tr>
                  <td>".$row['quotes']."</td>
                  <td>".$row['author']."</td>
                  
                  <td>
                    <a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
                    <a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
                  </td>
                </tr>";
                include('Qedit_delete_modal.php');
              }
              /////////////////

              //use for MySQLi Procedural
              // $query = mysqli_query($conn, $sql);
              // while($row = mysqli_fetch_assoc($query)){
              //  echo
              //  "<tr>
              //    <td>".$row['quotes']."</td>
              //    <td>".$row['author']."</td>
              //
              //    <td>
              //      <a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
              //      <a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
              //    </td>
              //  </tr>";
              //  include('Qedit_delete_modal.php');
              // }
              /////////////////

            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php include('Qadd_modal.php') ?>

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
  //inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
      $('.alert').hide();
    })
});
</script>

  

 
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





</body>
</html>