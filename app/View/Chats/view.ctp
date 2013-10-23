
<div id="page-container" class="row">
	
	<div id="page-content">
		
		<div class="chats view">

                    <div class="btn-toolbar pull-right">
                        <div class="btn-group">
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> '.__('Modifier Chat'), array('action' => 'edit', $chat['Chat']['id']), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                            <?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span> '.__('Supprimer Chat'), array('action' => 'delete', $chat['Chat']['id']), array('class' => 'btn btn-default', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $chat['Chat']['id'])); ?>                        </div>
                        <div class="btn-group">
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span> '.__('Retour à la liste'), array('action' => 'index'), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                        </div>
                    </div>
                    <h2><?php  echo __('Fiche Chat'); ?>: XXX</h2>
			
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
