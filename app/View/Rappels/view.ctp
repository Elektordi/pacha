
<div id="page-container" class="row">
	
	<div id="page-content">
		
		<div class="rappels view content">

                    <div class="btn-toolbar pull-right">
                        <div class="btn-group">
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> '.__('Modifier Rappel'), array('action' => 'edit', $rappel['Rappel']['id']), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                            <?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span> '.__('Supprimer Rappel'), array('action' => 'delete', $rappel['Rappel']['id']), array('class' => 'btn btn-default', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $rappel['Rappel']['id'])); ?>                        </div>
                        <div class="btn-group">
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span> '.__('Retour à la liste'), array('action' => 'index'), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                        </div>
                    </div>
                    <h2><?php  echo __('Fiche Rappel').': '.$rappel['Rappel']['texte']; ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Chat'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($rappel['Chat']['unique'], array('controller' => 'chats', 'action' => 'view', $rappel['Chat']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Échéance'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'echeance', 'type'=>'date', 'v'=>$rappel['Rappel']['echeance'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Affecté à'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'affectation', 'type'=>'string', 'v'=>$rappel['Rappel']['affectation'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Détails'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'texte', 'type'=>'string', 'v'=>$rappel['Rappel']['texte'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Concerne'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'source', 'type'=>'string', 'v'=>$rappel['Rappel']['source'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Validé'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'ok', 'type'=>'integer', 'v'=>$rappel['Rappel']['ok'])); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

                <div style="margin-top: 20px">&nbsp;</div>
                
			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
