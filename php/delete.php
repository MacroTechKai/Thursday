<!-- example of single page processing form  -->
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../css/wstyles.css" />
</head>
<body>
<?php

require_once('database.php');
include "headerEm.php" ;
$conn = db_connect();

if(!isset($_GET['id'])) {
header("Location: all.php");
}
$id = $_GET['id'];
// if we decided to delete, execute delete query and redirect to the main page

if($_SERVER['REQUEST_METHOD'] == 'POST') {

  $sql = "DELETE FROM recipe WHERE id ='$id'";
  $result = mysqli_query($conn, $sql);
//redirect to the main page
  header("Location: all.php");
} 
else  // to access the employee data
{
  $sql = "SELECT * FROM recipe WHERE id= '$id' ";
    
$result_set = mysqli_query($conn, $sql);
    
$result = mysqli_fetch_assoc($result_set);
    
}

?>

<?php $page_title = 'Delete Page'; ?>


<div id="content">

  <a class="back-link" href="all.php">&laquo; Back to List</a>

  <div class="page delete">
    <h1>Delete Page</h1>
    <p>Are you sure you want to delete this recipe?</p>
    <p class="item"><?php echo $result['name']; ?></p>

    <form form action="<?php echo 'delete.php?id=' . $result['id']; ?>"  method="post">
      <div id="operations">
        <input type="submit" name="commit" value="Delete Recipe" />
      </div>
    </form>
  </div>
  <?php include 'footerEm.php'; ?>
</div>


