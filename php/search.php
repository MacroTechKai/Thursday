<a class="back-link" href="<?php echo 'mysearch.php'; ?>"> Back to search</a>
<a class="action" href="<?php echo "all.php" ; ?>">Edit or Delete</a>
<?php
require_once('database.php');

// Connect to the database
$conn = db_connect();

// Get the search query
$query = isset($_GET['q']) ? $_GET['q'] : '';
$query = mysqli_real_escape_string($conn, $query);

// Perform the search
$sql = "SELECT name, description, cuisine, dietary 
        FROM recipe 
        WHERE name LIKE '%$query%' 
           OR description LIKE '%$query%' 
           OR cuisine LIKE '%$query%' 
           OR dietary LIKE '%$query%'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='result'>";
        echo "<h3>{$row['name']}</h3>";
        echo "<p><strong>Description:</strong> {$row['description']}</p>";
        echo "<p><strong>Cuisine:</strong> {$row['cuisine']}</p>";
        echo "<p><strong>Dietary:</strong> {$row['dietary']}</p>";
        echo "</div>";
    }
} else {
    echo "<p>No recipes found for your search query: <strong>'$query'</strong>.</p>";
}

// Disconnect the database
db_disconnect($conn);
?>
