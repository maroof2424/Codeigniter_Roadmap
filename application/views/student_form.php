<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>
    <h2>Add New Student</h2>

    <?php echo form_open('students/save'); ?>

    <p>
        <?php echo form_label('Name:', 'name'); ?>
        <?php echo form_input('name', '', 'required'); ?>
    </p>

    <p>
        <?php echo form_label('Age:', 'age'); ?>
        <?php echo form_input('age', '', 'required'); ?>
    </p>

    <p>
        <?php echo form_label('Course:', 'course'); ?>
        <?php echo form_input('course', '', 'required'); ?>
    </p>

    <p>
        <?php echo form_label('Bio:', 'bio'); ?>
        <?php echo form_textarea('bio'); ?>
    </p>

    <p>
        <?php echo form_submit('submit', 'Save Student'); ?>
    </p>

    <?php echo form_close(); ?>
</body>
</html>
