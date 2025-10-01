<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
</head>
<body>
    <h1><?php echo isset($student) ? "Edit Student" : "Add Student"; ?></h1>

    <?php echo form_open(); ?>
        <label>Name:</label><br>
        <input type="text" name="name" value="<?php echo isset($student) ? $student['name'] : ''; ?>"><br><br>

        <label>Age:</label><br>
        <input type="number" name="age" value="<?php echo isset($student) ? $student['age'] : ''; ?>"><br><br>

        <label>Course:</label><br>
        <input type="text" name="course" value="<?php echo isset($student) ? $student['course'] : ''; ?>"><br><br>

        <label>Bio:</label><br>
        <textarea name="bio"><?php echo isset($student) ? $student['bio'] : ''; ?></textarea><br><br>

        <button type="submit">Save</button>
    <?php echo form_close(); ?>

    <a href="<?php echo site_url('students'); ?>">Back to List</a>
</body>
</html>
