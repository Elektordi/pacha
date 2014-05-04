
<div id="page-container" class="row">
	
	<div id="page-content">
		<div class="adoptions form">
                    
                    		
			<?php echo $this->MyForm->create('Adoption', array('inputDefaults' => array('label' => false), 'role' => 'form')); ?>
				<fieldset>

                                    <div class="btn-toolbar pull-right">
                                                                                <div class="btn-group">
                                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-file"></span> '.__('Retour fiche Adoption'), array('action' => 'view', $adoption['Adoption']['id']), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                                        </div>
                                                                                <div class="btn-group">
                                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span> '.__('Retour à la liste'), array('action' => 'index'), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                                        </div>
                                    </div>
                    
                                                                        <h2><?php  echo __('Modifier Adoption').': '.$adoption['Adoption']['nom']; ?></h2>
                                    			<div class="form-group">
	<?php echo $this->MyForm->label('chat_id', 'Chat');?>
		<?php echo $this->MyForm->input('chat_id', array('class' => 'form-control', 'value' => (empty($default_chat_id)?null:$default_chat_id))); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('nom', 'Nom de famille');?>
		<?php echo $this->MyForm->input('nom', array('class' => 'form-control', 'value' => (empty($default_nom)?null:$default_nom))); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('adresse', 'Adresse');?>
		<?php echo $this->MyForm->input('adresse', array('class' => 'form-control', 'value' => (empty($default_adresse)?null:$default_adresse))); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('telephone', 'Téléphone');?>
		<?php echo $this->MyForm->input('telephone', array('class' => 'form-control', 'value' => (empty($default_telephone)?null:$default_telephone))); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('email', 'Adresse e-mail');?>
		<?php echo $this->MyForm->input('email', array('class' => 'form-control', 'value' => (empty($default_email)?null:$default_email))); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('date_debut', 'Date d\'adoption');?>
		<?php echo $this->MyForm->input('date_debut', array('class' => 'form-control', 'value' => (empty($default_date_debut)?null:$default_date_debut))); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('date_fin', 'Fin d\'adoption');?>
		<?php echo $this->MyForm->input('date_fin', array('class' => 'form-control', 'value' => (empty($default_date_fin)?null:$default_date_fin))); ?>
</div><!-- .form-group -->

				</fieldset>
			<?php echo $this->MyForm->submit(__('Enregistrer'), array('class' => 'btn btn-large btn-primary')); ?>
<?php echo $this->MyForm->end(); ?>
			
		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
