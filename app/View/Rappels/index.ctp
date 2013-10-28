
<div id="page-container" class="row">

	<div id="page-content">

		<div class="rappels index">
		
                        <div class="btn-group pull-right">
                                <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Nouveau Rappel'), array('action' => 'add'), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                        </div>
			<h2><?php echo __('Rappels'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
															<th><?php echo $this->Paginator->sort('id'); ?></th>
															<th><?php echo $this->Paginator->sort('chat_id'); ?></th>
															<th><?php echo $this->Paginator->sort('echeance'); ?></th>
															<th><?php echo $this->Paginator->sort('affectation'); ?></th>
															<th><?php echo $this->Paginator->sort('texte'); ?></th>
															<th><?php echo $this->Paginator->sort('source'); ?></th>
															<th><?php echo $this->Paginator->sort('ok'); ?></th>
															<th class="actions col-md-2"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($rappels as $rappel): ?>
	<tr>
		<td><?php echo h($rappel['Rappel']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($rappel['Chat']['unique'], array('controller' => 'chats', 'action' => 'view', $rappel['Chat']['id'])); ?>
		</td>
		<td><?php echo h($rappel['Rappel']['echeance']); ?>&nbsp;</td>
		<td><?php echo h($rappel['Rappel']['affectation']); ?>&nbsp;</td>
		<td><?php echo h($rappel['Rappel']['texte']); ?>&nbsp;</td>
		<td><?php echo h($rappel['Rappel']['source']); ?>&nbsp;</td>
		<td><?php echo h($rappel['Rappel']['ok']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-file"></span> '.__('Fiche'), array('action' => 'view', $rappel['Rappel']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> '.__('Modifier'), array('action' => 'edit', $rappel['Rappel']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
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