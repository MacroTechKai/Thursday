<!-- single page form so we get the id and if we hit post the we update so we will process the update mysqli_query
and redirect to show page otherwise just display the record. -->
<?php
require_once('database.php');
$conn = db_connect();

include 'headerEm.php' ;
if (!isset($_GET['id'])) { //check if we get the id
  header("Location: all.php");
}
$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  //access the employee information
  $name = $_POST['name']; // access the form data
  $description = $_POST['description'];
  $cuisine = $_POST['cuisine'];
  $dietary = $_POST['dietary'];
  //update the table with new information
  $sql = "UPDATE recipe set name = '$name' , description='$description',cuisine='$cuisine', dietary='$dietary' where id = '$id' ";
  $result = mysqli_query($conn, $sql);
  //redirect to show page
  header("Location: show.php?id=$id");
}
// display the employee information
else {
  $sql = "SELECT * FROM recipe WHERE id= '$id' ";

  $result_set = mysqli_query($conn, $sql);

  $result = mysqli_fetch_assoc($result_set);
}

?>
 <link rel="stylesheet" href="../css/wstyles.css" />
<div id="content">

  <!-- <a class="back-link" href="index.php"> Back to List</a> -->

  <div class="recipe edit">
    <h1>Edit recipe</h1>

    <form action="<?php echo 'edit.php?id=' . $result['id']; ?>" method="post">
      <dl>
        <dt> ID</dt>
        <dd><input type="text" name="id" value="<?php echo $result['id']; ?>" /></dd>
        </dd>
      </dl>
      <dl>
        <dt>Name</dt>
        <dd><input type="text" name="name" value="<?php echo $result['name']; ?>" /></dd>
      </dl>
      <dl>
        <dt>Description</dt>
        <dd><input type="text" name="description" value="<?php echo $result['description']; ?>" /></dd>

        </dd>
      </dl>
      <dl>
        <dt>Cuisine</dt>

        <dd><input type="text" name="cuisine" value="<?php echo $result['cuisine']; ?>" /></dd>

        </dd>
      </dl>

<dl>
        <dt>Dietary</dt>

        <dd><input type="text" name="dietary" value="<?php echo $result['dietary']; ?>" /></dd>

        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Edit Recipe" />
      </div>
    </form>

  </div>

</div>

<?php include("footerEm.php"); ?>