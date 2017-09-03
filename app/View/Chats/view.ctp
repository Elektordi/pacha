
<div id="page-container" class="row">
	
	<div id="page-content">
		
		<div class="chats view content">

                    <div class="btn-toolbar pull-right">
                    <?php if($user_level>=5) { ?>                        <div class="btn-group">
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> '.__('Modifier Chat'), array('action' => 'edit', $chat['Chat']['id']), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                            <?php if($user_level>=7) echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span> '.__('Supprimer Chat'), array('action' => 'delete', $chat['Chat']['id']), array('class' => 'btn btn-default', 'escape' => FALSE), __('Voulez-vous vraiement supprimer #%s ?', $chat['Chat']['id'])); ?>                        </div>
                    <?php } ?>                        <div class="btn-group">
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span> '.__('Retour à la liste'), array('action' => 'index'), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                        </div>
                    </div>
                    <h2><?php  echo __('Fiche Chat').': '.$chat['Chat']['unique']; ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Numéro unique'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'id', 'type'=>'integer', 'v'=>$chat['Chat']['id'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Nom'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'nom', 'type'=>'string', 'v'=>$chat['Chat']['nom'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Naissance'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'naissance', 'type'=>'date', 'v'=>$chat['Chat']['naissance'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Identification'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'identification', 'type'=>'string', 'v'=>$chat['Chat']['identification'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Race'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'race', 'type'=>'string', 'v'=>$chat['Chat']['race'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Robe'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'robe', 'type'=>'string', 'v'=>$chat['Chat']['robe'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Sexe'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'sexe', 'type'=>'string', 'v'=>$chat['Chat']['sexe'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Statut'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'etat', 'type'=>'string', 'v'=>$chat['Chat']['etat'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Décédé'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'deces', 'type'=>'date', 'v'=>$chat['Chat']['deces'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Famille d\'accueil'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($chat['Accueil']['nom'], array('controller' => 'accueils', 'action' => 'view', $chat['Accueil']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Provenance du chat'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'provenance', 'type'=>'string', 'v'=>$chat['Chat']['provenance'])); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Détenteur'); ?></strong></td>
		<td>
			<?php echo $this->element('value',array('page'=>'view', 'name'=>'detenteur', 'type'=>'string', 'v'=>$chat['Chat']['detenteur'])); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

                <div style="margin-top: 20px">&nbsp;</div>
                
					
			<div class="related" style="margin-top: 40px">

                                <div class="btn-group btn-group-xs pull-right">
                                    <?php if($user_level>=5) echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Créer Adoption'), array('controller' => 'adoptions', 'action' => 'add', 'chat_id' => $chat['Chat']['id']), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                                </div>
				<h3><?php echo __('Adoptions lié(e)s:'); ?></h3>
				
				<?php if (!empty($chat['Adoption'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('#'); ?></th>		<th><?php echo __('Nom'); ?></th>		<th><?php echo __('Adresse'); ?></th>		<th><?php echo __('Téléphone fixe'); ?></th>		<th><?php echo __('Téléphone portable'); ?></th>		<th><?php echo __('Adresse e-mail'); ?></th>		<th><?php echo __('Date d\'adoption'); ?></th>		<th><?php echo __('Fin d\'adoption'); ?></th>									<th class="actions col-md-2"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($chat['Adoption'] as $adoption): ?>
		<tr>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'id', 'type'=>'integer', 'v'=>$adoption['id'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'nom', 'type'=>'string', 'v'=>$adoption['nom'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'adresse', 'type'=>'string', 'v'=>$adoption['adresse'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'telephone1', 'type'=>'string', 'v'=>$adoption['telephone1'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'telephone2', 'type'=>'string', 'v'=>$adoption['telephone2'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'email', 'type'=>'string', 'v'=>$adoption['email'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'date_debut', 'type'=>'date', 'v'=>$adoption['date_debut'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'date_fin', 'type'=>'date', 'v'=>$adoption['date_fin'])); ?></td>
			<td class="actions">
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-file"></span> '.__('Fiche'), array('controller' => 'adoptions', 'action' => 'view', $adoption['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
			<?php if($user_level>=5) echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> '.__('Modifier'), array('controller' => 'adoptions', 'action' => 'edit', $adoption['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php else: echo '<i>'.__('Aucune donnée.').'</i>'; endif; ?>

				
			</div><!-- /.related -->

					
			<div class="related" style="margin-top: 40px">

                                <div class="btn-group btn-group-xs pull-right">
                                    <?php if($user_level>=5) echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Créer Commentaire'), array('controller' => 'commentaires', 'action' => 'add', 'chat_id' => $chat['Chat']['id']), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                                </div>
				<h3><?php echo __('Commentaires lié(e)s:'); ?></h3>
				
				<?php if (!empty($chat['Commentaire'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Date'); ?></th>		<th><?php echo __('Auteur'); ?></th>		<th><?php echo __('Commentaire'); ?></th>									<th class="actions col-md-2"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($chat['Commentaire'] as $commentaire): ?>
		<tr>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'date', 'type'=>'datetime', 'v'=>$commentaire['date'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'auteur', 'type'=>'string', 'v'=>$commentaire['auteur'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'texte', 'type'=>'string', 'v'=>$commentaire['texte'])); ?></td>
			<td class="actions">
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-file"></span> '.__('Fiche'), array('controller' => 'commentaires', 'action' => 'view', $commentaire['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
			<?php if($user_level>=5) echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> '.__('Modifier'), array('controller' => 'commentaires', 'action' => 'edit', $commentaire['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php else: echo '<i>'.__('Aucune donnée.').'</i>'; endif; ?>

				
			</div><!-- /.related -->

					
			<div class="related" style="margin-top: 40px">

                                <div class="btn-group btn-group-xs pull-right">
                                    <?php if($user_level>=5) echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Créer Rappel'), array('controller' => 'rappels', 'action' => 'add', 'chat_id' => $chat['Chat']['id']), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                                </div>
				<h3><?php echo __('Rappels lié(e)s:'); ?></h3>
				
				<?php if (!empty($chat['Rappel'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Échéance'); ?></th>		<th><?php echo __('Affecté à'); ?></th>		<th><?php echo __('Détails'); ?></th>		<th><?php echo __('Validé'); ?></th>									<th class="actions col-md-2"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($chat['Rappel'] as $rappel): ?>
		<tr>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'echeance', 'type'=>'date', 'v'=>$rappel['echeance'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'affectation', 'type'=>'string', 'v'=>$rappel['affectation'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'texte', 'type'=>'string', 'v'=>$rappel['texte'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'ok', 'type'=>'integer', 'v'=>$rappel['ok'])); ?></td>
			<td class="actions">
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-file"></span> '.__('Fiche'), array('controller' => 'rappels', 'action' => 'view', $rappel['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
			<?php if($user_level>=5) echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> '.__('Modifier'), array('controller' => 'rappels', 'action' => 'edit', $rappel['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php else: echo '<i>'.__('Aucune donnée.').'</i>'; endif; ?>

				
			</div><!-- /.related -->

					
			<div class="related" style="margin-top: 40px">

                                <div class="btn-group btn-group-xs pull-right">
                                    <?php if($user_level>=5) echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Créer Soin'), array('controller' => 'soins', 'action' => 'add', 'chat_id' => $chat['Chat']['id']), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                                </div>
				<h3><?php echo __('Soins lié(e)s:'); ?></h3>
				
				<?php if (!empty($chat['Soin'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Type de soin'); ?></th>		<th><?php echo __('Date des soins'); ?></th>		<th><?php echo __('Jusqu\'au (si longue durée)'); ?></th>		<th><?php echo __('Nature des soins'); ?></th>		<th><?php echo __('Vétérinaire'); ?></th>		<th><?php echo __('Montant'); ?></th>									<th class="actions col-md-2"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($chat['Soin'] as $soin): ?>
		<tr>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'type', 'type'=>'string', 'v'=>$soin['type'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'date_debut', 'type'=>'date', 'v'=>$soin['date_debut'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'date_fin', 'type'=>'date', 'v'=>$soin['date_fin'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'nature', 'type'=>'string', 'v'=>$soin['nature'])); ?></td>
			<td><?php echo $this->element('value',array('page'=>'relation', 'name'=>'veterinaire_id', 'type'=>'integer', 'v'=>$soin['veterinaire_id'])); ?></td>
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
