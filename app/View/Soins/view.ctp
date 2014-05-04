
<div id="page-container" class="row">
	
	<div id="page-content">
		
		<div class="soins view content">

                    <div class="btn-toolbar pull-right">
                        <div class="btn-group">
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> '.__('Modifier Soin'), array('action' => 'edit', $soin['Soin']['id']), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                            <?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span> '.__('Supprimer Soin'), array('action' => 'delete', $soin['Soin']['id']), array('class' => 'btn btn-default', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $soin['Soin']['id'])); ?>                        </div>
                        <div class="btn-group">
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span> '.__('Retour à la liste'), array('action' => 'index'), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                        </div>
                    </div>
                    <h2><?php  echo __('Fiche Soin').': '.$soin['Soin']['display']; ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Chat'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($soin['Chat']['unique'], array('controller' => 'chats', 'action' => 'view', $soin['Chat']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Type de soin'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'type', 'type'=>'string', 'v'=>$soin['Soin']['type'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Date des soins'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'date_debut', 'type'=>'date', 'v'=>$soin['Soin']['date_debut'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Jusqu\'au (si longue durée)'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'date_fin', 'type'=>'date', 'v'=>$soin['Soin']['date_fin'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Nature des soins'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'nature', 'type'=>'string', 'v'=>$soin['Soin']['nature'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Vétérinaire'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'veterinaire', 'type'=>'string', 'v'=>$soin['Soin']['veterinaire'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Montant'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'montant', 'type'=>'float', 'v'=>$soin['Soin']['montant'])); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

                <div style="margin-top: 20px">&nbsp;</div>
                
					
			<div class="related" style="margin-top: 40px">

                                <div class="btn-group btn-group-xs pull-right">
                                    <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Créer Rappel'), array('controller' => 'rappels', 'action' => 'add', 'soin_id' => $soin['Soin']['id']), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                                </div>
				<h3><?php echo __('Rappels lié(e)s:'); ?></h3>
				
				<?php if (!empty($soin['Rappel'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('#'); ?></th>		<th><?php echo __('Chat'); ?></th>		<th><?php echo __('Échéance'); ?></th>		<th><?php echo __('Affecté à'); ?></th>		<th><?php echo __('Détails'); ?></th>		<th><?php echo __('Validé'); ?></th>									<th class="actions col-md-2"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($soin['Rappel'] as $rappel): ?>
		<tr>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'id', 'type'=>'integer', 'v'=>$rappel['id'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'chat_id', 'type'=>'integer', 'v'=>$rappel['chat_id'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'echeance', 'type'=>'date', 'v'=>$rappel['echeance'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'affectation', 'type'=>'string', 'v'=>$rappel['affectation'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'texte', 'type'=>'string', 'v'=>$rappel['texte'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'ok', 'type'=>'integer', 'v'=>$rappel['ok'])); ?></td>
			<td class="actions">
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-file"></span> '.__('Fiche'), array('controller' => 'rappels', 'action' => 'view', $rappel['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> '.__('Modifier'), array('controller' => 'rappels', 'action' => 'edit', $rappel['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php else: echo '<i>'.__('Aucune donnée.').'</i>'; endif; ?>

				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
