
<div id="page-container" class="row">

	<div id="page-content">

		<div class="veterinaires index">
		
		                <?php if($user_level>=5) { ?>                        <div class="btn-group pull-right">
                                <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Créer Veterinaire'), array('action' => 'add'), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                        </div>
                        <?php } ?>                        
			<h2><?php echo __('Veterinaires'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
															<th><?php echo $this->Paginator->sort('nom', 'Nom'); ?></th>
															<th><?php echo $this->Paginator->sort('adresse', 'Adresse'); ?></th>
															<th><?php echo $this->Paginator->sort('telephone', 'Téléphone'); ?></th>
															<th><?php echo $this->Paginator->sort('fax', 'Fax'); ?></th>
															<th><?php echo $this->Paginator->sort('email', 'Adresse e-mail'); ?></th>
															<th><?php echo $this->Paginator->sort('commentaires', 'Commentaires'); ?></th>
															<th class="actions col-md-2"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($veterinaires as $veterinaire): ?>
	<tr>
		<td><?php echo $this->element('value',array('page'=>'index', 'name'=>'nom', 'type'=>'string', 'v'=>$veterinaire['Veterinaire']['nom'])); ?>&nbsp;</td>
		<td><?php echo $this->element('value',array('page'=>'index', 'name'=>'adresse', 'type'=>'string', 'v'=>$veterinaire['Veterinaire']['adresse'])); ?>&nbsp;</td>
		<td><?php echo $this->element('value',array('page'=>'index', 'name'=>'telephone', 'type'=>'string', 'v'=>$veterinaire['Veterinaire']['telephone'])); ?>&nbsp;</td>
		<td><?php echo $this->element('value',array('page'=>'index', 'name'=>'fax', 'type'=>'string', 'v'=>$veterinaire['Veterinaire']['fax'])); ?>&nbsp;</td>
		<td><?php echo $this->element('value',array('page'=>'index', 'name'=>'email', 'type'=>'string', 'v'=>$veterinaire['Veterinaire']['email'])); ?>&nbsp;</td>
		<td><?php echo $this->element('value',array('page'=>'index', 'name'=>'commentaires', 'type'=>'string', 'v'=>$veterinaire['Veterinaire']['commentaires'])); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-file"></span> '.__('Fiche'), array('action' => 'view', $veterinaire['Veterinaire']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
			<?php if($user_level>=5) echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> '.__('Modifier'), array('action' => 'edit', $veterinaire['Veterinaire']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
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
