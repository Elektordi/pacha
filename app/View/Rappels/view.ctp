
<div id="page-container" class="row">
	
	<div id="page-content">
		
		<div class="rappels view content">

                    <div class="btn-toolbar pull-right">
                        <div class="btn-group">
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> '.__('Modifier Rappel'), array('action' => 'edit', $rappel['Rappel']['id']), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                            <?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span> '.__('Supprimer Rappel'), array('action' => 'delete', $rappel['Rappel']['id']), array('class' => 'btn btn-default', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $rappel['Rappel']['id'])); ?>                        </div>
                        <div class="btn-group">
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span> '.__('Retour à la liste'), array('action' => 'index'), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                        </div>
                    </div>
                    <h2><?php  echo __('Fiche Rappel'); ?>: XXX</h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($rappel['Rappel']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Chat'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($rappel['Chat']['id'], array('controller' => 'chats', 'action' => 'view', $rappel['Chat']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Echeance'); ?></strong></td>
		<td>
			<?php echo h($rappel['Rappel']['echeance']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Affectation'); ?></strong></td>
		<td>
			<?php echo h($rappel['Rappel']['affectation']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Texte'); ?></strong></td>
		<td>
			<?php echo h($rappel['Rappel']['texte']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Source'); ?></strong></td>
		<td>
			<?php echo h($rappel['Rappel']['source']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Ok'); ?></strong></td>
		<td>
			<?php echo h($rappel['Rappel']['ok']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

                <div style="margin-top: 20px">&nbsp;</div>
                
			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
