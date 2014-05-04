
<div id="page-container" class="row">

	<div id="page-content">

		<div class="commentaires index">
		
                        <div class="btn-group pull-right">
                                <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Créer Commentaire'), array('action' => 'add'), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                        </div>
			<h2><?php echo __('Commentaires'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
															<th><?php echo $this->Paginator->sort('id', '#'); ?></th>
															<th><?php echo $this->Paginator->sort('chat_id', 'Chat'); ?></th>
															<th><?php echo $this->Paginator->sort('date', 'Date'); ?></th>
															<th><?php echo $this->Paginator->sort('auteur', 'Auteur'); ?></th>
															<th><?php echo $this->Paginator->sort('texte', 'Commentaire'); ?></th>
															<th><?php echo $this->Paginator->sort('source', 'Concerne'); ?></th>
															<th class="actions col-md-2"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($commentaires as $commentaire): ?>
	<tr>
		<td><?php echo $this->element('value',array('page'=>'index', 'name'=>'id', 'type'=>'integer', 'v'=>$commentaire['Commentaire']['id'])); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($commentaire['Chat']['unique'], array('controller' => 'chats', 'action' => 'view', $commentaire['Chat']['id'])); ?>
		</td>
		<td><?php echo $this->element('value',array('page'=>'index', 'name'=>'date', 'type'=>'datetime', 'v'=>$commentaire['Commentaire']['date'])); ?>&nbsp;</td>
		<td><?php echo $this->element('value',array('page'=>'index', 'name'=>'auteur', 'type'=>'string', 'v'=>$commentaire['Commentaire']['auteur'])); ?>&nbsp;</td>
		<td><?php echo $this->element('value',array('page'=>'index', 'name'=>'texte', 'type'=>'string', 'v'=>$commentaire['Commentaire']['texte'])); ?>&nbsp;</td>
		<td><?php echo $this->element('value',array('page'=>'index', 'name'=>'source', 'type'=>'string', 'v'=>$commentaire['Commentaire']['source'])); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-file"></span> '.__('Fiche'), array('action' => 'view', $commentaire['Commentaire']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> '.__('Modifier'), array('action' => 'edit', $commentaire['Commentaire']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			<p><small>
				<?php
				echo $this->Paginator->counter(array(
				'format' => __('Page {:page} sur {:pages}, avec {:current} lignes affichés sur un total de {:count}, de la ligne {:start} à la ligne {:end}')
				));
				?>			</small></p>

			<ul class="pagination">
				<?php
		echo $this->Paginator->prev('< ' . __('Page précédente'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
		echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
		echo $this->Paginator->next(__('Page suivante') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
	?>
			</ul><!-- /.pagination -->
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
