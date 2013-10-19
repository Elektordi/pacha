
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Chat'), array('action' => 'edit', $chat['Chat']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Chat'), array('action' => 'delete', $chat['Chat']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $chat['Chat']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Chats'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Chat'), array('action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="chats view">

			<h2><?php  echo __('Chat'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($chat['Chat']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Nom'); ?></strong></td>
		<td>
			<?php echo h($chat['Chat']['nom']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Naissance'); ?></strong></td>
		<td>
			<?php echo h($chat['Chat']['naissance']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Identification'); ?></strong></td>
		<td>
			<?php echo h($chat['Chat']['identification']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Race'); ?></strong></td>
		<td>
			<?php echo h($chat['Chat']['race']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Couleur'); ?></strong></td>
		<td>
			<?php echo h($chat['Chat']['couleur']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
