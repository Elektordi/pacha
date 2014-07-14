
<div id="page-container" class="row">
	
	<div id="page-content">
		<div class="veterinaires form">
                    
                    		
			<?php echo $this->MyForm->create('Veterinaire', array('inputDefaults' => array('label' => false), 'role' => 'form')); ?>
				<fieldset>

                                    <div class="btn-toolbar pull-right">
                                                                                <div class="btn-group">
                                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span> '.__('Retour à la liste'), array('action' => 'index'), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                                        </div>
                                    </div>
                    
                                                                        <h2><?php  echo __('Ajouter Veterinaire'); ?></h2>
                                    			<div class="form-group">
	<?php echo $this->MyForm->label('nom', 'Nom');?>
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
	<?php echo $this->MyForm->label('commentaires', 'Commentaires');?>
		<?php echo $this->MyForm->input('commentaires', array('class' => 'form-control', 'value' => (empty($default_commentaires)?null:$default_commentaires))); ?>
</div><!-- .form-group -->

				</fieldset>
			<?php echo $this->MyForm->submit(__('Enregistrer'), array('class' => 'btn btn-large btn-primary')); ?>
<?php echo $this->MyForm->end(); ?>
			
		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
