
<div id="page-container" class="row">
	
	<div id="page-content">
		
		<div class="accueils view content">

                    <div class="btn-toolbar pull-right">
                    <?php if($user_level>=5) { ?>                        <div class="btn-group">
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> '.__('Modifier Accueil'), array('action' => 'edit', $accueil['Accueil']['id']), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                            <?php if($user_level>=7) echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span> '.__('Supprimer Accueil'), array('action' => 'delete', $accueil['Accueil']['id']), array('class' => 'btn btn-default', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $accueil['Accueil']['id'])); ?>                        </div>
                    <?php } ?>                        <div class="btn-group">
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span> '.__('Retour à la liste'), array('action' => 'index'), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                        </div>
                    </div>
                    <h2><?php  echo __('Fiche Accueil').': '.$accueil['Accueil']['nom']; ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Nom'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'nom', 'type'=>'string', 'v'=>$accueil['Accueil']['nom'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Adresse'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'adresse', 'type'=>'string', 'v'=>$accueil['Accueil']['adresse'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Téléphone fixe'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'telephone1', 'type'=>'string', 'v'=>$accueil['Accueil']['telephone1'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Téléphone portable'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'telephone2', 'type'=>'string', 'v'=>$accueil['Accueil']['telephone2'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Adresse e-mail'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'email', 'type'=>'string', 'v'=>$accueil['Accueil']['email'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Chats max.'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'limite', 'type'=>'integer', 'v'=>$accueil['Accueil']['limite'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Compte'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'compte', 'type'=>'virtual', 'v'=>$accueil['Accueil']['compte'])); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

                <div style="margin-top: 20px">&nbsp;</div>
                
					
			<div class="related" style="margin-top: 40px">

                                <div class="btn-group btn-group-xs pull-right">
                                    <?php if($user_level>=5) echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Créer Chat'), array('controller' => 'chats', 'action' => 'add', 'accueil_id' => $accueil['Accueil']['id']), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                                </div>
				<h3><?php echo __('Chats lié(e)s:'); ?></h3>
				
				<?php if (!empty($accueil['Chat'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('#'); ?></th>		<th><?php echo __('Nom'); ?></th>		<th><?php echo __('Naissance'); ?></th>		<th><?php echo __('Identification'); ?></th>		<th><?php echo __('Race'); ?></th>		<th><?php echo __('Robe'); ?></th>		<th><?php echo __('Sexe'); ?></th>		<th><?php echo __('Statut'); ?></th>									<th class="actions col-md-2"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($accueil['Chat'] as $chat): ?>
		<tr>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'id', 'type'=>'integer', 'v'=>$chat['id'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'nom', 'type'=>'string', 'v'=>$chat['nom'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'naissance', 'type'=>'date', 'v'=>$chat['naissance'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'identification', 'type'=>'string', 'v'=>$chat['identification'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'race', 'type'=>'string', 'v'=>$chat['race'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'robe', 'type'=>'string', 'v'=>$chat['robe'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'sexe', 'type'=>'string', 'v'=>$chat['sexe'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'etat', 'type'=>'string', 'v'=>$chat['etat'])); ?></td>
			<td class="actions">
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-file"></span> '.__('Fiche'), array('controller' => 'chats', 'action' => 'view', $chat['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
			<?php if($user_level>=5) echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> '.__('Modifier'), array('controller' => 'chats', 'action' => 'edit', $chat['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
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
