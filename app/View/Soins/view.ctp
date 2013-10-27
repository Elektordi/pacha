
<div id="page-container" class="row">
	
	<div id="page-content">
		
		<div class="soins view">

                    <div class="btn-toolbar pull-right">
                        <div class="btn-group">
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> '.__('Modifier Soin'), array('action' => 'edit', $soin['Soin']['id']), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                            <?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span> '.__('Supprimer Soin'), array('action' => 'delete', $soin['Soin']['id']), array('class' => 'btn btn-default', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $soin['Soin']['id'])); ?>                        </div>
                        <div class="btn-group">
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span> '.__('Retour à la liste'), array('action' => 'index'), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                        </div>
                    </div>
                    <h2><?php  echo __('Fiche Soin'); ?>: XXX</h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($soin['Soin']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Chat'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($soin['Chat']['id'], array('controller' => 'chats', 'action' => 'view', $soin['Chat']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Type'); ?></strong></td>
		<td>
			<?php echo h($soin['Soin']['type']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Date Debut'); ?></strong></td>
		<td>
			<?php echo h($soin['Soin']['date_debut']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Date Fin'); ?></strong></td>
		<td>
			<?php echo h($soin['Soin']['date_fin']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Nature'); ?></strong></td>
		<td>
			<?php echo h($soin['Soin']['nature']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Veterinaire'); ?></strong></td>
		<td>
			<?php echo h($soin['Soin']['veterinaire']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Montant'); ?></strong></td>
		<td>
			<?php echo h($soin['Soin']['montant']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
