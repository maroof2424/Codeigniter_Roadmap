<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
</head>
<body>
    <h2>All Students</h2>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Course</th>
        </tr>
        <?php if (!empty($students)): ?>
            <?php foreach ($students as $s): ?>
            <tr>
                <td><?= isset($s['id']) ? $s['id'] : 'N/A' ?></td>
                <td><?= isset($s['name']) ? $s['name'] : 'N/A' ?></td>
                <td><?= isset($s['age']) ? $s['age'] : 'N/A' ?></td>
                <td><?= isset($s['course']) ? $s['course'] : 'N/A' ?></td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="4">No students found</td></tr>
        <?php endif; ?>
    </table>
</body>
</html>
