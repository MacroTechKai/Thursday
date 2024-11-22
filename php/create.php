<?php

require_once('database.php');
include "headerEm.php";
include "footerEm.php";
$conn = db_connect();

// Handle form values sent by new.php
if ($_SERVER['REQUEST_METHOD'] == 'POST') { //make sure we submit the data
  // $name = $_POST['name']; // access the form data
  // $description = $_POST['description'];
  // $cuisine = $_POST['cuisine'];
  // $dietary = $_POST['dietary'];
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $description = mysqli_real_escape_string($conn, $_POST['description']);
  $cuisine = mysqli_real_escape_string($conn, $_POST['cuisine']);
  $dietary = mysqli_real_escape_string($conn, $_POST['dietary']);
  //The problem likely arises when special characters (like single quotes, double quotes, etc.)
  // in form inputs break the SQL query. Use mysqli_real_escape_string or prepared statements to resolve this.
  //Fix Using mysqli_real_escape_string
//Escape all user inputs to prevent syntax errors and SQL injection:
  //prepare your query string
  $sql = "INSERT INTO recipe (name, description,cuisine, dietary) VALUES ('$name','$description','$cuisine','$dietary')";
  $result = mysqli_query($conn, $sql);
  // For INSERT statements, $result is true/false

  $id = mysqli_insert_id($conn); //the mysqli_insert_id() function returns the id (generated with AUTO_INCREMENT) 
  //redirect to show page with generated id as a parameter
  header("Location: search.php?id=$id");
} else {
  header("Location:  add_new.php");
}
