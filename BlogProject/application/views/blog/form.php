<h2><?php echo isset($title) ? $title : 'Create Post'; ?></h2>

<form action="<?php echo site_url('blog/create'); ?>" method="post">
  <label for="title">Title</label><br>
  <input type="text" name="title" value="<?php echo set_value('title'); ?>" required><br><br>

  <label for="content">Content</label><br>
  <textarea name="content" rows="6" required><?php echo set_value('content'); ?></textarea><br><br>

  <input type="submit" value="Save">
</form>

<hr>
<a href="<?php echo site_url('blog'); ?>">← Back</a>
