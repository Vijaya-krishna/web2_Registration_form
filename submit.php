<?php
include 'db_connect.php';

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$course = htmlspecialchars($_POST['course']);


$dt = new DateTime("now", new DateTimeZone('Asia/Kolkata'));
$submitted_at = $dt->format('Y-m-d H:i:s');

$sql = "INSERT INTO registrations (name, email, phone, course, submitted_at)
        VALUES ('$name', '$email', '$phone', '$course', '$submitted_at')";

if ($conn->query($sql) === TRUE) {
    echo "<div style='padding:20px; background:#f2f2f2; border-radius:10px;'>
            <h3>Application Submitted Successfully ✅</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Course:</strong> $course</p>
            <p><strong>Submitted At:</strong> $submitted_at</p>
          </div>";
} else {
    echo "<span style='color:red;'>Error: " . $conn->error . "</span>";
}

$conn->close();
?>
