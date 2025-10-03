<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>

    <?php echo validation_errors(); ?>
    <?php if($this->session->flashdata('success')) echo $this->session->flashdata('success'); ?>

    <form method="post" action="<?= base_url('auth/register') ?>">
        <label>Username:</label><br>
        <input type="text" name="username"><br>

        <label>Email:</label><br>
        <input type="email" name="email"><br>

        <label>Password:</label><br>
        <input type="password" name="password"><br>

        <label>Confirm Password:</label><br>
        <input type="password" name="password_confirm"><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
