<!-- File: /app/View/Message/view.ctp -->

<h1><?php echo h($message['Message']['title']); ?></h1>

<p><small>Created: <?php echo $message['Message']['created']; ?></small></p>

<p><?php echo h($message['Message']['body']); ?></p>