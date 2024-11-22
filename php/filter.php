<?php
require_once('database.php');
$conn = db_connect();

// 获取过滤参数
$type = isset($_GET['Cuisine']) ? 'Cuisine' : (isset($_GET['Dietary']) ? 'Dietary' : '');
$value = isset($_GET[$type]) ? mysqli_real_escape_string($conn, $_GET[$type]) : '';

if (!empty($type) && !empty($value)) {
    // 使用大小写不敏感查询
    $sql = "SELECT name, description, cuisine FROM recipe WHERE LOWER($type) = LOWER('$value')";
    echo "SQL Query: $sql<br>"; // 调试用

    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='result'>";
            echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
            echo "<p><strong>Description:</strong> " . htmlspecialchars($row['description']) . "</p>";
            echo "<p><strong>Cuisine:</strong> " . htmlspecialchars($row['cuisine']) . "</p>";
            echo "</div>";
        }
    } else {
        echo "<p>No recipes found for $type: '" . htmlspecialchars($value) . "'.</p>";
    }
} else {
    echo "<p>Invalid filter request.</p>";
}

db_disconnect($conn);
?>
