
<div id="page-container" class="row">
	
	<div id="page-content">
		
		<div class="veterinaires view content">

                    <div class="btn-toolbar pull-right">
                        <div class="btn-group">
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> '.__('Modifier Veterinaire'), array('action' => 'edit', $veterinaire['Veterinaire']['id']), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                            <?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span> '.__('Supprimer Veterinaire'), array('action' => 'delete', $veterinaire['Veterinaire']['id']), array('class' => 'btn btn-default', 'escape' => FALSE), __('Are you sure you want to delete # %s?', $veterinaire['Veterinaire']['id'])); ?>                        </div>
                        <div class="btn-group">
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
                
			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
