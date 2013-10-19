
<div id="page-container" class="row">

	<div id="page-content">

		<div class="chats index">
		
			<h2><?php echo __('Chats'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
															<th><?php echo $this->Paginator->sort('id'); ?></th>
															<th><?php echo $this->Paginator->sort('nom'); ?></th>
															<th><?php echo $this->Paginator->sort('naissance'); ?></th>
															<th><?php echo $this->Paginator->sort('identification'); ?></th>
															<th><?php echo $this->Paginator->sort('race'); ?></th>
															<th><?php echo $this->Paginator->sort('couleur'); ?></th>
															<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($chats as $chat): ?>
	<tr>
		<td><?php echo h($chat['Chat']['id']); ?>&nbsp;</td>
		<td><?php echo h($chat['Chat']['nom']); ?>&nbsp;</td>
		<td><?php echo h($chat['Chat']['naissance']); ?>&nbsp;</td>
		<td><?php echo h($chat['Chat']['identification']); ?>&nbsp;</td>
		<td><?php echo h($chat['Chat']['race']); ?>&nbsp;</td>
		<td><?php echo h($chat['Chat']['couleur']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ouvrir'), array('action' => 'view', $chat['Chat']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Modifier'), array('action' => 'edit', $chat['Chat']['id']), array('class' => 'btn btn-default btn-xs')); ?>
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			<p><small>
				<?php
				echo $this->Paginator->counter(array(
				'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
				));
				?>			</small></p>

			<ul class="pagination">
				<?php
		echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
		echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
		echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
	?>
			</ul><!-- /.pagination -->
			<ul class="pagination">
				<li class=""><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span> Nouveau Chat'), array('action' => 'add'), array('class' => '', 'escape' => FALSE)); ?></li>			</ul>
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->