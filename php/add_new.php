<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MealMaster</title>
    <link rel="stylesheet" href="../css/wstyles.css">
</head>
<body>
<?php include("headerEm.php"); ?>
    <main>
        <!-- <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">

            <label for="instruction">Instruction:</label>
            <textarea id="instruction" name="instruction" rows="6"></textarea>

            <div>
                <button type="submit" id="save-button">Save changes</button>
                <button type="button" id="delete-button">Delete recipe</button>
            </div>
        </form> -->
        <a class="back-link" href="<?php echo 'mysearch.php'; ?>"> Back to search</a>
        <br>
        <br>
        <div class="contactcontainer">
        
    <form action="create.php" method="post">

        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>

        <label for="cuisine">Cuisine:</label>
        <input type="text" id="cuisine" name="cuisine" required>

        <label for="dietary">Dietary:</label>
        <input type="text" id="dietary" name="dietary" required>
        
        <button type="submit" class="submit-button">Create new recipe</button>
    </form>
    </main>
    <?php include("footerEm.php"); ?>
</body>
</html>
