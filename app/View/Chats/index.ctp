
<div id="page-container" class="row">

	<div id="page-content">

		<div class="chats index">
		
                        <div class="btn-group pull-right">
                                <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Nouveau Chat'), array('action' => 'add'), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                        </div>
			<h2><?php echo __('Chats'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
															<th><?php echo $this->Paginator->sort('id'); ?></th>
															<th><?php echo $this->Paginator->sort('nom'); ?></th>
															<th><?php echo $this->Paginator->sort('nom2'); ?></th>
															<th><?php echo $this->Paginator->sort('naissance'); ?></th>
															<th><?php echo $this->Paginator->sort('identification'); ?></th>
															<th><?php echo $this->Paginator->sort('race'); ?></th>
															<th><?php echo $this->Paginator->sort('robe'); ?></th>
															<th><?php echo $this->Paginator->sort('sexe'); ?></th>
															<th><?php echo $this->Paginator->sort('etat'); ?></th>
															<th><?php echo $this->Paginator->sort('deces'); ?></th>
															<th><?php echo $this->Paginator->sort('accueil_id'); ?></th>
															<th class="actions col-md-2"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($chats as $chat): ?>
	<tr>
		<td><?php echo h($chat['Chat']['id']); ?>&nbsp;</td>
		<td><?php echo h($chat['Chat']['nom']); ?>&nbsp;</td>
		<td><?php echo h($chat['Chat']['nom2']); ?>&nbsp;</td>
		<td><?php echo h($chat['Chat']['naissance']); ?>&nbsp;</td>
		<td><?php echo h($chat['Chat']['identification']); ?>&nbsp;</td>
		<td><?php echo h($chat['Chat']['race']); ?>&nbsp;</td>
		<td><?php echo h($chat['Chat']['robe']); ?>&nbsp;</td>
		<td><?php echo h($chat['Chat']['sexe']); ?>&nbsp;</td>
		<td><?php echo h($chat['Chat']['etat']); ?>&nbsp;</td>
		<td><?php echo h($chat['Chat']['deces']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($chat['Accueil']['id'], array('controller' => 'accueils', 'action' => 'view', $chat['Accueil']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-file"></span> '.__('Fiche'), array('action' => 'view', $chat['Chat']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> '.__('Modifier'), array('action' => 'edit', $chat['Chat']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
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
