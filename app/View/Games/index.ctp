<h1>Games Played:</h1>

<?php echo $this->Html->link('Add Game', array('controller' => 'games', 'action' => 'add'));?>

<table>
	<tr>
		<th>Id</th>
		<th>Location</th>
		<th>Hours</th>
		<th>Date</th>
		<th>Buy in</th>
		<th>Cash Out</th>
	</tr>

	<?php foreach ($games as $game): ?>
	<tr>
		<td><?php echo $game['Game']['id']; ?></td>
		<td><?php echo $game['Game']['location']; ?></td>
		<td><?php echo $game['Game']['hours']; ?></td>
		<td><?php echo $game['Game']['date']; ?></td>
		<td><?php echo $game['Game']['buyin']; ?></td>
		<td><?php echo $game['Game']['cashout']; ?></td>
		<td><?php echo $this->Html->link('Edit', array('action' => 'edit', $game['Game']['id'])); ?>
		<td><?php echo $this->Form->postLink('Delete', array('action' => 'delete', $game['Game']['id']),
		array('confirm' => 'Are you sure?')); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($game); ?>
</table>
