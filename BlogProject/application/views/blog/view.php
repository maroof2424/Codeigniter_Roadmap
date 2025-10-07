<h2><?php echo $post['title']; ?></h2>

<p><?php echo $post['content']; ?></p>
<small>Author ID: <?php echo $post['author_id']; ?></small><br>
<small>Posted on: <?php echo $post['created_at']; ?></small>
<hr>

<a href="<?php echo site_url('blog'); ?>">← Back to All Posts</a>
