<!-- File: /app/View/Messages/index.ctp -->

<h1>Blog posts</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out message info -->

    <?php foreach ($messages as $message): ?>
    <tr>
        <td><?php echo $message['Message']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($message['Message']['title'],
array('controller' => 'message', 'action' => 'view', $message['Message']['id'])); ?>
        </td>

        <td><?php echo $message['Message']['created']; ?></td>
         <td>
            <?php
                echo $this->Html->link(
                    'Edit',
                    array('action' => 'edit', $message['Message']['id'])
                );
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($message); ?>
</table>
<?php echo $this->Html->link(
    'Add Message',
    array('controller' => 'message', 'action' => 'add')
); ?>