<?php
require_once('settings.php'); 

$sql = "SELECT * FROM cars";
$result = mysqli_query($conn, $sql);

echo "<table border='1'>";
echo "<tr>
        <th>ID</th>
        <th>Make</th>
        <th>Model</th>
        <th>Price</th>
        <th>Year</th>
      </tr>";

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['car_id'] . "</td>";
        echo "<td>" . $row['make'] . "</td>";
        echo "<td>" . $row['model'] . "</td>";
        echo "<td>$" . $row['price'] . "</td>";
        echo "<td>" . $row['yom'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>There are no cars to display.</td></tr>";
}

echo "</table>";

mysqli_close($conn);
?>
