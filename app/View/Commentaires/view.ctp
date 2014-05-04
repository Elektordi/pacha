
<div id="page-container" class="row">
	
	<div id="page-content">
		
		<div class="commentaires view content">

                    <div class="btn-toolbar pull-right">
                        <div class="btn-group">
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> '.__('Modifier Commentaire'), array('action' => 'edit', $commentaire['Commentaire']['id']), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                            <?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span> '.__('Supprimer Commentaire'), array('action' => 'delete', $commentaire['Commentaire']['id']), array('class' => 'btn btn-default', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $commentaire['Commentaire']['id'])); ?>                        </div>
                        <div class="btn-group">
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span> '.__('Retour à la liste'), array('action' => 'index'), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                        </div>
                    </div>
                    <h2><?php  echo __('Fiche Commentaire').': '.$commentaire['Commentaire']['id']; ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Chat'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($commentaire['Chat']['unique'], array('controller' => 'chats', 'action' => 'view', $commentaire['Chat']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Date'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'date', 'type'=>'datetime', 'v'=>$commentaire['Commentaire']['date'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Auteur'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'auteur', 'type'=>'string', 'v'=>$commentaire['Commentaire']['auteur'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Commentaire'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'texte', 'type'=>'string', 'v'=>$commentaire['Commentaire']['texte'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Concerne'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'source', 'type'=>'string', 'v'=>$commentaire['Commentaire']['source'])); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

                <div style="margin-top: 20px">&nbsp;</div>
                
			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
