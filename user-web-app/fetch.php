<?php
$conn = new mysqli("localhost", "root", "", "my_database");

$result = $conn->query("SELECT * FROM users");

echo "<table>
<tr><th>ID</th><th>Name</th><th>Age</th><th>Status</th><th>Toggle</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['name']}</td>
    <td>{$row['age']}</td>
    <td>{$row['status']}</td>
    <td><button class='toggle-btn' onclick='toggleStatus({$row['id']})'>Toggle</button></td>
    </tr>";
}
echo "</table>";

$conn->close();
?>
