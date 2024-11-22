<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../css/wstyles.css" />
</head>

<body>

  <?php
  //conect to the datbase

  require_once('database.php');
  include "headerEm.php";
  $conn = db_connect();
  //access URL parameter
  if (!isset($_GET['id'])) { //check if we get the id
    header("Location:  all.php");
  }
  $id = $_GET['id'];

  //prepare your query
  $sql = "SELECT * FROM recipe WHERE id= '$id'";

  $result_set = mysqli_query($conn, $sql);

  $result = mysqli_fetch_assoc($result_set);

  ?>
  <!-- display the employee data -->
  <div id="content">

    <a class="back-link" href="all.php"> Back to List</a>

    <div class="page show">

      <h1> <?php echo $result['name']; ?></h1>

      <div class="attributes">
        <dl>
          <dt>Recipe Name</dt>
          <dd><?php echo $result['name']; ?></dd>
        </dl>
        <dl>
          <dt>Recipe Description</dt>
          <dd><?php echo $result['description']; ?></dd>
        </dl>
        <dl>
          <dt>Recipe cuisine</dt>
          <dd><?php echo $result['cuisine']; ?></dd>
        </dl>
        <dl>
          <dt>Recipe Dietary</dt>
          <dd><?php echo $result['dietary']; ?></dd>
        </dl>
        <dl>

      </div>


    </div>

  </div>

  <?php include 'footerEm.php'; ?>
</body>

</html>