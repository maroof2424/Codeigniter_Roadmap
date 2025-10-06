<!DOCTYPE html>
<html>
<head>
    <title>All Blog Posts</title>
</head>
<body>
    <h1>All Posts</h1>

    <a href="<?= base_url('blog/create') ?>">+ Create New Post</a>
    <hr>

    <?php if(!empty($posts)): ?>
        <?php foreach($posts as $post): ?>
            <h3><?= $post['title'] ?></h3>
            <p><?= word_limiter($post['content'], 30) ?></p>
            <a href="#">Read More</a>
            <hr>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No posts yet 😔</p>
    <?php endif; ?>
</body>
</html>
