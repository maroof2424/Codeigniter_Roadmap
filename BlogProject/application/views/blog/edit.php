<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Edit Post</h2>

<form method="post" action="">
    <p>Title:</p>
    <input type="text" name="title" value="<?= $post['title'] ?>" required><br><br>

    <p>Content:</p>
    <textarea name="content" rows="5" required><?= $post['content'] ?></textarea><br><br>

    <p>Status:</p>
    <select name="status">
        <option value="draft" <?= $post['status'] == 'draft' ? 'selected' : '' ?>>Draft</option>
        <option value="published" <?= $post['status'] == 'published' ? 'selected' : '' ?>>Published</option>
    </select><br><br>

    <button type="submit">Update Post</button>
</form>

</body>
</html>