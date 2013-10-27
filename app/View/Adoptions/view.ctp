
<div id="page-container" class="row">
	
	<div id="page-content">
		
		<div class="adoptions view">

                    <div class="btn-toolbar pull-right">
                        <div class="btn-group">
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> '.__('Modifier Adoption'), array('action' => 'edit', $adoption['Adoption']['id']), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                            <?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span> '.__('Supprimer Adoption'), array('action' => 'delete', $adoption['Adoption']['id']), array('class' => 'btn btn-default', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $adoption['Adoption']['id'])); ?>                        </div>
                        <div class="btn-group">
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span> '.__('Retour à la liste'), array('action' => 'index'), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                        </div>
                    </div>
                    <h2><?php  echo __('Fiche Adoption'); ?>: XXX</h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($adoption['Adoption']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Chat'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($adoption['Chat']['id'], array('controller' => 'chats', 'action' => 'view', $adoption['Chat']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Nom'); ?></strong></td>
		<td>
			<?php echo h($adoption['Adoption']['nom']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Adresse'); ?></strong></td>
		<td>
			<?php echo h($adoption['Adoption']['adresse']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Telephone'); ?></strong></td>
		<td>
			<?php echo h($adoption['Adoption']['telephone']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Email'); ?></strong></td>
		<td>
			<?php echo h($adoption['Adoption']['email']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Date Debut'); ?></strong></td>
		<td>
			<?php echo h($adoption['Adoption']['date_debut']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Date Fin'); ?></strong></td>
		<td>
			<?php echo h($adoption['Adoption']['date_fin']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
