
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
		<?php echo $this->MyForm->input('chat_id', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('nom', 'Nom de famille');?>
		<?php echo $this->MyForm->input('nom', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('adresse', 'Adresse');?>
		<?php echo $this->MyForm->input('adresse', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('telephone', 'Téléphone');?>
		<?php echo $this->MyForm->input('telephone', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('email', 'Adresse e-mail');?>
		<?php echo $this->MyForm->input('email', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('date_debut', 'Date d\'adoption');?>
		<?php echo $this->MyForm->input('date_debut', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('date_fin', 'Fin d\'adoption');?>
		<?php echo $this->MyForm->input('date_fin', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

				</fieldset>
			<?php echo $this->MyForm->submit(__('Enregistrer'), array('class' => 'btn btn-large btn-primary')); ?>
<?php echo $this->MyForm->end(); ?>
			
		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
