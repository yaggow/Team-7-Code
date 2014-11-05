<!-- File: /app/View/Message/view.ctp -->

<h1><?php echo h($messages['Message']['title']); ?></h1>

<p><small>Created: <?php echo $messages['Message']['created']; ?></small></p>

<p><?php echo h($messages['Message']['body']); ?></p>