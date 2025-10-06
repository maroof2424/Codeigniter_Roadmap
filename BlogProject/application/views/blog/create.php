<!DOCTYPE html>
<html>
<head>
    <title>Create New Post</title>
</head>
<body>
    <h1>Create a New Blog Post</h1>

    <?php if($this->session->flashdata('error')): ?>
        <p style="color:red;"><?= $this->session->flashdata('error') ?></p>
    <?php endif; ?>

    <form method="post" action="<?= base_url('blog/create') ?>">
        <label>Title:</label><br>
        <input type="text" name="title" required><br><br>

        <label>Content:</label><br>
        <textarea name="content" rows="6" cols="40" required></textarea><br><br>

        <button type="submit">Create Post</button>
    </form>
</body>
</html>
