<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>
    <h1>All Students</h1>
    <a href="<?php echo site_url('students/create'); ?>">+ Add New Student</a>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th><th>Name</th><th>Age</th><th>Course</th><th>Bio</th><th>Actions</th>
        </tr>
        <?php foreach($students as $s): ?>
        <tr>
            <td><?php echo $s['id']; ?></td>
            <td><?php echo $s['name']; ?></td>
            <td><?php echo $s['age']; ?></td>
            <td><?php echo $s['course']; ?></td>
            <td><?php echo !empty($s['bio']) ? word_limiter($s['bio'], 5) : 'No Bio'; ?></td>
            <td>
                <a href="<?php echo site_url('students/edit/'.$s['id']); ?>">Edit</a> | 
                <a href="<?php echo site_url('students/delete/'.$s['id']); ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
