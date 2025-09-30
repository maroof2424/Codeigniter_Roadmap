<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
</head>
<body>
    <h2>All Students</h2>

    <a href="<?php echo site_url('students/add'); ?>">+ Add New Student</a>
    <br><br>

    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th><th>Name</th><th>Age</th><th>Course</th><th>Bio</th>
        </tr>
        <?php foreach ($students as $s): ?>
        <tr>
            <td><?php echo isset($s['name']) ? $s['name'] : 'N/A'; ?></td>
<td><?php echo isset($s['age']) ? $s['age'] : 'N/A'; ?></td>
<td><?php echo isset($s['course']) ? $s['course'] : 'N/A'; ?></td>
<td><?php echo !empty($s['bio']) ? word_limiter($s['bio'], 5) : 'No Bio'; ?></td>

        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
