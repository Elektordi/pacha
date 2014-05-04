
<div id="page-container" class="row">

	<div id="page-content">

		<div class="chats index">
		
			<h2><?php echo __('Tableau de bord'); ?></h2>
			
                        <?php if(count($events)) { ?>
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
                                                    <th><?php echo __('Date'); ?></th>
                                                    <th><?php echo __('Échéance'); ?></th>
                                                    <th><?php echo __('Chat'); ?></th>
                                                    <th><?php echo __('Évènement'); ?></th>
                                                    <th><?php echo __('Affecté à'); ?></th>
                                                    <th class="actions col-md-3"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
						<?php
                                                $user = $this->Session->read('Auth.User.initiales');
						foreach ($events as $event) { ?>
	<tr class="<?php if(in_array($event['importance'],array('warning','danger'))) echo h($event['importance']); ?>">
		<td><?php echo h(date('d/m/Y',$event['date'])); ?>&nbsp;</td>
		<td><span class="label label-<?php echo h($event['importance']); ?>"><?php echo h($event['echeance']); ?></span>&nbsp;</td>
		<td><?php echo h($event['chat']['unique']); ?>&nbsp;</td>
		<td><?php echo h($event['message']); ?>&nbsp;</td>
        <td><?php echo (empty($event['affectation'])?'-':h($event['affectation'])); ?>&nbsp;<?php if($event['affectation']==$user) echo '<span class="glyphicon glyphicon-flag" style="color: red;"></span>'; ?></td>
		<td class="actions">
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-file"></span> '.__('Fiche chat'), array('controller' => 'Chats','action' => 'view', $event['chat']['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
                        <?php echo $this->Html->link('<span class="glyphicon glyphicon-exclamation-sign"></span> '.__('Plus d\'infos'), array('controller' => 'rappels','action' => 'view', $event['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
                        <?php   if($event['affectation']=="") 
                                    echo $this->Html->link('<span class="glyphicon glyphicon-flag"></span> '.__('M\'affecter'), array('controller' => 'rappels','action' => 'click', 'assign', $event['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE));
                                else
                                    echo $this->Html->link('<span class="glyphicon glyphicon-thumbs-up" style="color: green;"></span> '.__('Fait'), array('controller' => 'rappels','action' => 'click', 'done', $event['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE));
                        ?>
		</td>
	</tr>
<?php                                           } ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
                        <?php } else { ?>
                            <div class="jumbotron">
                                <p><?php echo __('<span class="glyphicon glyphicon-thumbs-up"></span> Bonne nouvelle: Aucun évènement ne requiert votre attention.'); ?></p>
                            </div>
                        <?php } ?>
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
