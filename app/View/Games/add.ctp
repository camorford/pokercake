<h1>Add Game</h1>

<?php 
echo $this->Form->create('Game');
echo $this->Form->input('location');
echo $this->Form->input('hours');
echo $this->Form->input('date');
echo $this->Form->input('buyin');
echo $this->Form->input('cashout');
echo $this->Form->input('gametype');
echo $this->Form->input('comments');
echo $this->Form->end('Save Post');
?>
