
<div id="page-container" class="row">

	<div id="page-content">

		<div class="accueils index">
		
                        <div class="btn-group pull-right">
                                <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Nouveau Accueil'), array('action' => 'add'), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                        </div>
			<h2><?php echo __('Accueils'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
															<th><?php echo $this->Paginator->sort('id'); ?></th>
															<th><?php echo $this->Paginator->sort('nom'); ?></th>
															<th><?php echo $this->Paginator->sort('adresse'); ?></th>
															<th><?php echo $this->Paginator->sort('telephone1'); ?></th>
															<th><?php echo $this->Paginator->sort('telephone2'); ?></th>
															<th><?php echo $this->Paginator->sort('limite'); ?></th>
															<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($accueils as $accueil): ?>
	<tr>
		<td><?php echo h($accueil['Accueil']['id']); ?>&nbsp;</td>
		<td><?php echo h($accueil['Accueil']['nom']); ?>&nbsp;</td>
		<td><?php echo h($accueil['Accueil']['adresse']); ?>&nbsp;</td>
		<td><?php echo h($accueil['Accueil']['telephone1']); ?>&nbsp;</td>
		<td><?php echo h($accueil['Accueil']['telephone2']); ?>&nbsp;</td>
		<td><?php echo h($accueil['Accueil']['limite']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-file"></span> '.__('Fiche'), array('action' => 'view', $accueil['Accueil']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> '.__('Modifier'), array('action' => 'edit', $accueil['Accueil']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			<p><small>
				<?php
				echo $this->Paginator->counter(array(
				'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
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
