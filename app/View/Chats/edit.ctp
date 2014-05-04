
<div id="page-container" class="row">
	
	<div id="page-content">
		<div class="chats form">
                    
                    		
			<?php echo $this->MyForm->create('Chat', array('inputDefaults' => array('label' => false), 'role' => 'form')); ?>
				<fieldset>

                                    <div class="btn-toolbar pull-right">
                                                                                <div class="btn-group">
                                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-file"></span> '.__('Retour fiche Chat'), array('action' => 'view', $chat['Chat']['id']), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                                        </div>
                                                                                <div class="btn-group">
                                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span> '.__('Retour à la liste'), array('action' => 'index'), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                                        </div>
                                    </div>
                    
                                                                        <h2><?php  echo __('Modifier Chat').': '.$chat['Chat']['unique']; ?></h2>
                                    			<div class="form-group">
	<?php echo $this->MyForm->label('nom', 'Nom');?>
		<?php echo $this->MyForm->input('nom', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('nom2', 'Ancien nom');?>
		<?php echo $this->MyForm->input('nom2', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('naissance', 'Naissance');?>
		<?php echo $this->MyForm->input('naissance', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('identification', 'Identification');?>
		<?php echo $this->MyForm->input('identification', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('race', 'Race');?>
		<?php echo $this->MyForm->input('race', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('robe', 'Robe');?>
		<?php echo $this->MyForm->input('robe', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('sexe', 'Sexe');?>
		<?php echo $this->MyForm->input('sexe', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('etat', 'Statut');?>
		<?php echo $this->MyForm->input('etat', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('deces', 'Décédé');?>
		<?php echo $this->MyForm->input('deces', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('accueil_id', 'Famille d\'accueil');?>
		<?php echo $this->MyForm->input('accueil_id', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

				</fieldset>
			<?php echo $this->MyForm->submit(__('Enregistrer'), array('class' => 'btn btn-large btn-primary')); ?>
<?php echo $this->MyForm->end(); ?>
			
		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
