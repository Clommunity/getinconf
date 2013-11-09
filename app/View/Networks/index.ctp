<div class="networks index">
	<h2><?php echo __('Networks'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('ip'); ?></th>
			<th><?php echo $this->Paginator->sort('netmask'); ?></th>
			<th><?php echo $this->Paginator->sort('bitmask'); ?></th>
			<th><?php echo $this->Paginator->sort('trustednodes','Trusted'); ?></th>
			<th class="actions"><?php echo __(''); ?></th>
	</tr>
	<?php
	foreach ($networks as $network): ?>
	<tr>
		<td><?php echo h($network['Network']['name']); ?>&nbsp;</td>
		<td><?php echo h($network['Network']['ip']); ?>&nbsp;</td>
		<td><?php echo h($network['Network']['netmask']); ?>&nbsp;</td>
		<td><?php echo h($network['Network']['bitmask']); ?>&nbsp;</td>
		<td><?php echo ($network['Network']['trustednodes'])?"Yes":"No"; ?></td>
		<td class="actions">
			<?php echo $this->Html->link("<i class='icon-file'></i>", array('action' => 'view', 
				$network['Network']['id']), array('class'=> 'btn', 
				'escape' => false, 'title' => __('View'))); ?>
			<?php echo $this->Html->link("<i class='icon-pencil'></i>", array('action' => 'edit', $network['Network']['id']), array('class'=> 'btn', 'escape' => false , 'title' => __('Edit'))); ?>
			<?php echo $this->Form->postLink("<i class='icon-trash'></i>", array('action' => 'delete', $network['Network']['id']), array('class'=> 'btn', 'escape' => false, 'title' => __('Delete')) , __('Are you sure you want to delete # %s?', $network['Network']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
<?php echo $this->Paginator->pagination(); ?>

</div>
<div class="actions">
	<?php echo $this->Html->link("<i class='icon-edit'></i> ".__('New Network'), array('action' => 'add'), array('class'=> 'btn', 'escape' => false)); ?>
</div>
