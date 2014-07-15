
<div id="page-container" class="row">
	
	<div id="page-content">
		<div class="soins form">
                    
                    		
			<?php echo $this->MyForm->create('Soin', array('inputDefaults' => array('label' => false), 'role' => 'form')); ?>
				<fieldset>

                                    <div class="btn-toolbar pull-right">
                                                                                <div class="btn-group">
                                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-file"></span> '.__('Retour fiche Soin'), array('action' => 'view', $soin['Soin']['id']), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                                        </div>
                                                                                <div class="btn-group">
                                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span> '.__('Retour à la liste'), array('action' => 'index'), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                                        </div>
                                    </div>
                    
                                                                        <h2><?php  echo __('Modifier Soin').': '.$soin['Soin']['display']; ?></h2>
                                    			<div class="form-group">
	<?php echo $this->MyForm->label('chat_id', 'Chat');?>
		<?php echo $this->MyForm->input('chat_id', array('class' => 'form-control', 'value' => (empty($default_chat_id)?null:$default_chat_id))); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('type', 'Type de soin');?>
		<?php echo $this->MyForm->input('type', array('class' => 'form-control', 'value' => (empty($default_type)?null:$default_type))); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('date_debut', 'Date des soins');?>
		<?php echo $this->MyForm->input('date_debut', array('class' => 'form-control', 'value' => (empty($default_date_debut)?null:$default_date_debut))); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('date_fin', 'Jusqu\'au (si longue durée)');?>
		<?php echo $this->MyForm->input('date_fin', array('class' => 'form-control', 'value' => (empty($default_date_fin)?null:$default_date_fin))); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('nature', 'Nature des soins');?>
		<?php echo $this->MyForm->input('nature', array('class' => 'form-control', 'value' => (empty($default_nature)?null:$default_nature))); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('veterinaire_id', 'Vétérinaire');?>
		<?php echo $this->MyForm->input('veterinaire_id', array('class' => 'form-control', 'value' => (empty($default_veterinaire_id)?null:$default_veterinaire_id))); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('montant', 'Montant');?>
		<?php echo $this->MyForm->input('montant', array('class' => 'form-control', 'value' => (empty($default_montant)?null:$default_montant))); ?>
</div><!-- .form-group -->

				</fieldset>
			<?php echo $this->MyForm->submit(__('Enregistrer'), array('class' => 'btn btn-large btn-primary')); ?>
<?php echo $this->MyForm->end(); ?>
			
		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
