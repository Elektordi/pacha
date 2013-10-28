
<div id="page-container" class="row">
	
	<div id="page-content">
		
		<div class="accueils view content">

                    <div class="btn-toolbar pull-right">
                        <div class="btn-group">
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> '.__('Modifier Accueil'), array('action' => 'edit', $accueil['Accueil']['id']), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                            <?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span> '.__('Supprimer Accueil'), array('action' => 'delete', $accueil['Accueil']['id']), array('class' => 'btn btn-default', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $accueil['Accueil']['id'])); ?>                        </div>
                        <div class="btn-group">
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span> '.__('Retour à la liste'), array('action' => 'index'), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                        </div>
                    </div>
                    <h2><?php  echo __('Fiche Accueil').': '.$accueil['Accueil']['nom']; ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($accueil['Accueil']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Nom'); ?></strong></td>
		<td>
			<?php echo h($accueil['Accueil']['nom']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Adresse'); ?></strong></td>
		<td>
			<?php echo h($accueil['Accueil']['adresse']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Telephone1'); ?></strong></td>
		<td>
			<?php echo h($accueil['Accueil']['telephone1']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Telephone2'); ?></strong></td>
		<td>
			<?php echo h($accueil['Accueil']['telephone2']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Limite'); ?></strong></td>
		<td>
			<?php echo h($accueil['Accueil']['limite']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

                <div style="margin-top: 20px">&nbsp;</div>
                
					
			<div class="related" style="margin-top: 40px">

                                <div class="btn-group btn-group-xs pull-right">
                                    <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span> '.__('Créer Chat'), array('controller' => 'chats', 'action' => 'add'), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                                </div>
				<h3><?php echo __('Chats liés:'); ?></h3>
				
				<?php if (!empty($accueil['Chat'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nom'); ?></th>
		<th><?php echo __('Nom2'); ?></th>
		<th><?php echo __('Naissance'); ?></th>
		<th><?php echo __('Identification'); ?></th>
		<th><?php echo __('Race'); ?></th>
		<th><?php echo __('Robe'); ?></th>
		<th><?php echo __('Sexe'); ?></th>
		<th><?php echo __('Etat'); ?></th>
		<th><?php echo __('Deces'); ?></th>
									<th class="actions col-md-2"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($accueil['Chat'] as $chat): ?>
		<tr>
			<td><?php echo $chat['id']; ?></td>
			<td><?php echo $chat['nom']; ?></td>
			<td><?php echo $chat['nom2']; ?></td>
			<td><?php echo $chat['naissance']; ?></td>
			<td><?php echo $chat['identification']; ?></td>
			<td><?php echo $chat['race']; ?></td>
			<td><?php echo $chat['robe']; ?></td>
			<td><?php echo $chat['sexe']; ?></td>
			<td><?php echo $chat['etat']; ?></td>
			<td><?php echo $chat['deces']; ?></td>
			<td class="actions">
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-file"></span> '.__('Fiche'), array('controller' => 'chats', 'action' => 'view', $chat['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> '.__('Modifier'), array('controller' => 'chats', 'action' => 'edit', $chat['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
