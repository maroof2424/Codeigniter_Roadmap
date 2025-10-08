<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>All Blog Posts</h2>

<a href="<?= base_url('blog/create') ?>">+ Add New Post</a>
<hr>

<?php if ($this->session->flashdata('msg')): ?>
    <p style="color:green;"><?= $this->session->flashdata('msg'); ?></p>
<?php endif; ?>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>Title</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>

    <?php foreach($posts as $post): ?>
        <tr>
            <td><?= $post['title']; ?></td>
            <td><?= ucfirst($post['status']); ?></td>
            <td>
                <a href="<?= base_url('blog/edit/'.$post['id']); ?>">Edit</a> |
                <a href="<?= base_url('blog/delete/'.$post['id']); ?>" onclick="return confirm('Delete this post?')">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
