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
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $username = mysqli_real_escape_string($conn, $_POST['login']);
  $password = mysqli_real_escape_string($conn, $_POST['pass']);

  //The problem likely arises when special characters (like single quotes, double quotes, etc.)
  // in form inputs break the SQL query. Use mysqli_real_escape_string or prepared statements to resolve this.
  //Fix Using mysqli_real_escape_string
//Escape all user inputs to prevent syntax errors and SQL injection:
  //prepare your query string
  $sql = "INSERT INTO `users` (`email`, `username`, `pass`)  VALUES ('$email','$username','$password')";
  $result = mysqli_query($conn, $sql);
  // For INSERT statements, $result is true/false

  $id = mysqli_insert_id($conn); //the mysqli_insert_id() function returns the id (generated with AUTO_INCREMENT) 
  //redirect to show page with generated id as a parameter
  header("Location: sign_in.php");
} else {
  header("Location:  sign_up.php");
}