<?php
$title = "Read Order Data";
include 'header.php';
include 'feature3_db.php';
?>

<style>
    /* CSS样式用于设置表格边框 */
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>

<?php
// SQL query to retrieve data from the 'orders' table
$sql = "SELECT * FROM orderonline";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Products</th>
                    <th>First Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Payment Method</th>
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td><a href='feature3_updatesingle.php?id=$row[id]' style='color:red;'>$row[id]</a></td>
                <td>{$row['products']}</td>
                <td>{$row['fname']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['address']}</td>
                <td>{$row['paymentmethod']}</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "No results";
}

// close the connection when done
$conn->close();
?>

<?php
include 'footer.php';
?>
