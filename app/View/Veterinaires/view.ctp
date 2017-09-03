
<div id="page-container" class="row">
	
	<div id="page-content">
		
		<div class="veterinaires view content">

                    <div class="btn-toolbar pull-right">
                    <?php if($user_level>=5) { ?>                        <div class="btn-group">
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> '.__('Modifier Veterinaire'), array('action' => 'edit', $veterinaire['Veterinaire']['id']), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                            <?php if($user_level>=7) echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span> '.__('Supprimer Veterinaire'), array('action' => 'delete', $veterinaire['Veterinaire']['id']), array('class' => 'btn btn-default', 'escape' => FALSE), __('Voulez-vous vraiement supprimer #%s ?', $veterinaire['Veterinaire']['id'])); ?>                        </div>
                    <?php } ?>                        <div class="btn-group">
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span> '.__('Retour à la liste'), array('action' => 'index'), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                        </div>
                    </div>
                    <h2><?php  echo __('Fiche Veterinaire').': '.$veterinaire['Veterinaire']['nom']; ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Nom'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'nom', 'type'=>'string', 'v'=>$veterinaire['Veterinaire']['nom'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Adresse'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'adresse', 'type'=>'string', 'v'=>$veterinaire['Veterinaire']['adresse'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Téléphone'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'telephone', 'type'=>'string', 'v'=>$veterinaire['Veterinaire']['telephone'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Fax'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'fax', 'type'=>'string', 'v'=>$veterinaire['Veterinaire']['fax'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Adresse e-mail'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'email', 'type'=>'string', 'v'=>$veterinaire['Veterinaire']['email'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Commentaires'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'commentaires', 'type'=>'string', 'v'=>$veterinaire['Veterinaire']['commentaires'])); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

                <div style="margin-top: 20px">&nbsp;</div>
                
					
			<div class="related" style="margin-top: 40px">

                                <div class="btn-group btn-group-xs pull-right">
                                    <?php if($user_level>=5) echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Créer Soin'), array('controller' => 'soins', 'action' => 'add', 'veterinaire_id' => $veterinaire['Veterinaire']['id']), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                                </div>
				<h3><?php echo __('Soins lié(e)s:'); ?></h3>
				
				<?php if (!empty($veterinaire['Soin'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Type de soin'); ?></th>		<th><?php echo __('Date des soins'); ?></th>		<th><?php echo __('Jusqu\'au (si longue durée)'); ?></th>		<th><?php echo __('Nature des soins'); ?></th>		<th><?php echo __('Chat'); ?></th>		<th><?php echo __('Montant'); ?></th>									<th class="actions col-md-2"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($veterinaire['Soin'] as $soin): ?>
		<tr>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'type', 'type'=>'string', 'v'=>$soin['type'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'date_debut', 'type'=>'date', 'v'=>$soin['date_debut'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'date_fin', 'type'=>'date', 'v'=>$soin['date_fin'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'nature', 'type'=>'string', 'v'=>$soin['nature'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'chat_id', 'type'=>'integer', 'v'=>$soin['chat_id'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'montant', 'type'=>'float', 'v'=>$soin['montant'])); ?></td>
			<td class="actions">
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-file"></span> '.__('Fiche'), array('controller' => 'soins', 'action' => 'view', $soin['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
			<?php if($user_level>=5) echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> '.__('Modifier'), array('controller' => 'soins', 'action' => 'edit', $soin['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
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
