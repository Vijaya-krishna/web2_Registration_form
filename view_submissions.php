<?php
include 'db_connect.php';

$sql = "SELECT * FROM registrations ORDER BY submitted_at ASC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Registrations</title>
<link rel="stylesheet" href="style.css">
<style>
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    font-size: 16px;
    overflow-x: auto;
    display: block;
}
th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
th {
    background-color: #2575fc;
    color: white;
}
tr:hover { background-color: #f1f1f1; }
tr:nth-child(even) { background-color: #fafafa; }
.container h2 { text-align: center; color: #2575fc; margin-bottom: 20px; }
a.view-link { display: block; text-align: center; margin-top: 15px; color: #2575fc; font-weight: bold; text-decoration: none; }
a.view-link:hover { color: #6a11cb; }
</style>
</head>
<body>
<div class="container">
<h2>All Registrations</h2>

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Course</th>
    <th>Submitted At</th>
</tr>

<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['email']."</td>
                <td>".$row['phone']."</td>
                <td>".$row['course']."</td>
                <td>".$row['submitted_at']."</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='6' style='text-align:center;'>No registrations yet.</td></tr>";
}
$conn->close();
?>
</table>

<p><a class="view-link" href="index.html">← Back to Registration Form</a></p>
</div>
</body>
</html>
