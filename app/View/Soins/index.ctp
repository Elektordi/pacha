
<div id="page-container" class="row">

	<div id="page-content">

		<div class="soins index">
		
                        <div class="btn-group pull-right">
                                <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Nouveau Soin'), array('action' => 'add'), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                        </div>
			<h2><?php echo __('Soins'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
															<th><?php echo $this->Paginator->sort('id'); ?></th>
															<th><?php echo $this->Paginator->sort('chat_id'); ?></th>
															<th><?php echo $this->Paginator->sort('type'); ?></th>
															<th><?php echo $this->Paginator->sort('date_debut'); ?></th>
															<th><?php echo $this->Paginator->sort('date_fin'); ?></th>
															<th><?php echo $this->Paginator->sort('nature'); ?></th>
															<th><?php echo $this->Paginator->sort('veterinaire'); ?></th>
															<th><?php echo $this->Paginator->sort('montant'); ?></th>
															<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($soins as $soin): ?>
	<tr>
		<td><?php echo h($soin['Soin']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($soin['Chat']['id'], array('controller' => 'chats', 'action' => 'view', $soin['Chat']['id'])); ?>
		</td>
		<td><?php echo h($soin['Soin']['type']); ?>&nbsp;</td>
		<td><?php echo h($soin['Soin']['date_debut']); ?>&nbsp;</td>
		<td><?php echo h($soin['Soin']['date_fin']); ?>&nbsp;</td>
		<td><?php echo h($soin['Soin']['nature']); ?>&nbsp;</td>
		<td><?php echo h($soin['Soin']['veterinaire']); ?>&nbsp;</td>
		<td><?php echo h($soin['Soin']['montant']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-file"></span> '.__('Fiche'), array('action' => 'view', $soin['Soin']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> '.__('Modifier'), array('action' => 'edit', $soin['Soin']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
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
