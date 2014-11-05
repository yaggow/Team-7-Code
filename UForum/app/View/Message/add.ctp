<!-- File: /app/View/Message/add.ctp -->

<h1>Add Message</h1>
<?php
echo $this->Form->create('Message');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->input('user');
echo $this->Form->end('Save Message');
?>