
<div id="page-container" class="row">

	<div id="page-content">

		<div class="adoptions index">
		
                        <div class="btn-group pull-right">
                                <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Nouveau Adoption'), array('action' => 'add'), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                        </div>
			<h2><?php echo __('Adoptions'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
															<th><?php echo $this->Paginator->sort('id'); ?></th>
															<th><?php echo $this->Paginator->sort('chat_id'); ?></th>
															<th><?php echo $this->Paginator->sort('nom'); ?></th>
															<th><?php echo $this->Paginator->sort('adresse'); ?></th>
															<th><?php echo $this->Paginator->sort('telephone'); ?></th>
															<th><?php echo $this->Paginator->sort('email'); ?></th>
															<th><?php echo $this->Paginator->sort('date_debut'); ?></th>
															<th><?php echo $this->Paginator->sort('date_fin'); ?></th>
															<th class="actions col-md-2"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($adoptions as $adoption): ?>
	<tr>
		<td><?php echo h($adoption['Adoption']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($adoption['Chat']['unique'], array('controller' => 'chats', 'action' => 'view', $adoption['Chat']['id'])); ?>
		</td>
		<td><?php echo h($adoption['Adoption']['nom']); ?>&nbsp;</td>
		<td><?php echo h($adoption['Adoption']['adresse']); ?>&nbsp;</td>
		<td><?php echo h($adoption['Adoption']['telephone']); ?>&nbsp;</td>
		<td><?php echo h($adoption['Adoption']['email']); ?>&nbsp;</td>
		<td><?php echo h($adoption['Adoption']['date_debut']); ?>&nbsp;</td>
		<td><?php echo h($adoption['Adoption']['date_fin']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-file"></span> '.__('Fiche'), array('action' => 'view', $adoption['Adoption']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> '.__('Modifier'), array('action' => 'edit', $adoption['Adoption']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
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
