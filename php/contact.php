<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../css/wstyles.css">
</head>
<body>
<?php include("headerEm.php"); ?>
<main>
    <p>Feel free to contact me if you have any questions!</p>
<div class="contactcontainer">
    <form action="submit.php" method="post">

        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>

        <label for="recipe">Recipe:</label>
        <input type="text" id="recipe" name="recipe" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        
        <button type="submit" class="submit-button">submit</button>
    </form>
    <img id="tabletalk" src="../images/signin.jpg" alt="Table Talk" width="588" height="391" >
</div>
</main>
<?php include("footerEm.php"); ?>
</body>
</html>