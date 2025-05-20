<?php
require 'db.php';

$result = $conn->query("SELECT name, email, message, date_submitted FROM contacts ORDER BY date_submitted DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>
    <h2>Contact Submissions</h2>
    <table border="1" cellpadding="5">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Date Submitted</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td><?= nl2br(htmlspecialchars($row['message'])) ?></td>
            <td><?= date("Y-m-d H:i", strtotime($row['date_submitted'])) ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
