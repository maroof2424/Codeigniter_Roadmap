<h2>All Blog Posts</h2>

<a href="<?php echo site_url('blog/create'); ?>">+ Create New Post</a>
<hr>

<?php if(!empty($posts)): ?>
  <?php foreach($posts as $post): ?>
    <div style="margin-bottom:20px;">
      <h3><?php echo $post['title']; ?></h3>
      <p><?php echo substr($post['content'], 0, 150); ?>...</p>
      <small>By User #<?php echo $post['author_id']; ?> | <?php echo $post['created_at']; ?></small><br>
      <a href="<?php echo site_url('blog/view/'.$post['slug']); ?>">Read More</a>
    </div>
    <hr>
  <?php endforeach; ?>
<?php else: ?>
  <p>No posts yet.</p>
<?php endif; ?>
