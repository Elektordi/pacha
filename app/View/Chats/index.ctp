
<div id="page-container" class="row">

	<div id="page-content">

		<div class="chats index">
	        <div class="btn-toolbar pull-right">
	            <div class="btn-group">
                <?php
                foreach($etats as $k=>$e) {
                    echo $this->Html->link('<span class="glyphicon glyphicon-filter"></span> '.__($e), array('action'=>'index', 'etat'=>$k), array('class' => 'btn btn-default', 'escape' => FALSE));;
                }
                ?></div>
                <div class="btn-group"><?php
                if($user_level>=5) {
                    echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Créer Chat'), array('action' => 'add'), array('class' => 'btn btn-default', 'escape' => FALSE));
                } ?>
                </div>
            </div>
			<h2><?php echo __('Chats'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
															<th><?php echo $this->Paginator->sort('id', '#'); ?></th>
															<th><?php echo $this->Paginator->sort('nom', 'Nom'); ?></th>
															<th><?php echo $this->Paginator->sort('naissance', 'Naissance'); ?></th>
															<th><?php echo $this->Paginator->sort('identification', 'Identification'); ?></th>
															<th><?php echo $this->Paginator->sort('race', 'Race'); ?></th>
															<th><?php echo $this->Paginator->sort('robe', 'Robe'); ?></th>
															<th><?php echo $this->Paginator->sort('sexe', 'Sexe'); ?></th>
															<th><?php echo $this->Paginator->sort('etat', 'Statut'); ?></th>
															<th><?php echo $this->Paginator->sort('accueil_id', 'Famille d\'accueil'); ?></th>
															<th class="actions col-md-2"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($chats as $chat): ?>
	<tr>
		<td><?php echo $this->element('value',array('page'=>'index', 'name'=>'id', 'type'=>'integer', 'v'=>$chat['Chat']['id'])); ?>&nbsp;</td>
		<td><?php echo $this->element('value',array('page'=>'index', 'name'=>'nom', 'type'=>'string', 'v'=>$chat['Chat']['nom'])); ?>&nbsp;</td>
		<td><?php echo $this->element('value',array('page'=>'index', 'name'=>'naissance', 'type'=>'date', 'v'=>$chat['Chat']['naissance'])); ?>&nbsp;</td>
		<td><?php echo $this->element('value',array('page'=>'index', 'name'=>'identification', 'type'=>'string', 'v'=>$chat['Chat']['identification'])); ?>&nbsp;</td>
		<td><?php echo $this->element('value',array('page'=>'index', 'name'=>'race', 'type'=>'string', 'v'=>$chat['Chat']['race'])); ?>&nbsp;</td>
		<td><?php echo $this->element('value',array('page'=>'index', 'name'=>'robe', 'type'=>'string', 'v'=>$chat['Chat']['robe'])); ?>&nbsp;</td>
		<td><?php echo $this->element('value',array('page'=>'index', 'name'=>'sexe', 'type'=>'string', 'v'=>$chat['Chat']['sexe'])); ?>&nbsp;</td>
		<td><?php echo $this->element('value',array('page'=>'index', 'name'=>'etat', 'type'=>'string', 'v'=>$chat['Chat']['etat'])); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($chat['Accueil']['nom'], array('controller' => 'accueils', 'action' => 'view', $chat['Accueil']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-file"></span> '.__('Fiche'), array('action' => 'view', $chat['Chat']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
			<?php if($user_level>=5) echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> '.__('Modifier'), array('action' => 'edit', $chat['Chat']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
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
