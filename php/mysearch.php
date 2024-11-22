<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="../css/headfooter.css">
    <link rel="stylesheet" href="../css/search.css">
    <script src="../js/search.js" defer></script>
</head>
<body>
    <?php include("headerEm.php"); ?>
    <main>
        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Search recipes...">
            <button id="searchButton">Search</button>
            <button><a id="addnewrecipe" href="add_new.php" style="text-decoration: none; color: white;">Add</a></button>
        </div>
     
     
        <div id="filters">
            <h2>Filters</h2>
            <div id="filter-options">

                <button class="filter-category" data-type="Cuisine">Cuisine</button>
                <button class="filter-category" data-type="Dietary">Dietary</button>
            </div>
            <div id="filter-sub-options"></div>
        </div>
        <div id="results"></div>
    </main>
    <?php include("footerEm.php"); ?>   
</body>
</html>
