<?php  include('serverquotes.php'); ?>
<?php 
  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($db, "SELECT * FROM mquotes WHERE id=$id");

    if ($record->num_rows == 1) {
      $row = mysqli_fetch_array($record);
      $quotes = $row['quotes'];
      $author = $row['author'];

    }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
}
.edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
}

.del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
}
</style>
</head>
<body>

<h2>Motivational Quotes</h2>

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<?php $results = mysqli_query($db, "SELECT * FROM mquotes"); ?>

<table>
  <tr>
    <th>Quotes</th>
    <th>Author</th>
    <th>Action</th>
  </tr>

  <?php while ($row = mysqli_fetch_array($results)) { ?>
    <tr>
      <td><?php echo $row['quotes']; ?></td>
      <td><?php echo $row['author']; ?></td>
      <td>
      <a class="edit_btn" data-toggle="modal" data-target="#myEdit"> Edit</a>
      
        <a href="serverquotes.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
      </td>
    </tr>
  <?php } ?>
</table>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Quote</h4>
      </div>
      <div class="modal-body">
       <form method="post" action="serverquotes.php" >
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div class="input-group">
      <label>Quotes</label>
      <input type="text" name="quotes" value="<?php echo $quotes; ?>">
    </div>
    <div class="input-group">
      <label>Author</label>
      <input type="text" name="author" value="<?php echo $author; ?>">
    </div>
    <div class="modal-footer">
      
      <button class="btn btn-default" type="submit" name="save" >Save</button>
    </div>
  </form>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="myEdit" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Quote</h4>
      </div>
      <div class="modal-body">
      <form method="post" action="serverquotes.php" >
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div class="input-group">
      <label>Quotes</label>
      <input type="text" name="quotes" value="<?php echo $quotes; ?>">
    </div>
    <div class="input-group">
      <label>Author</label>
      <input type="text" name="author" value="<?php echo $author; ?>">
    </div>
    <div class="input-group">
      
      <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
      
    </div>
  </form>
      </div>
    </div>

  </div>
</div>


</body>
</html>

