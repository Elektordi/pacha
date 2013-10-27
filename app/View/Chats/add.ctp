
<div id="page-container" class="row">
	
	<div id="page-content">
		<div class="chats form">
                    
                    		
			<?php echo $this->Form->create('Chat', array('inputDefaults' => array('label' => false), 'role' => 'form')); ?>
				<fieldset>

                                    <div class="btn-toolbar pull-right">
                                                                                <div class="btn-group">
                                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span> '.__('Retour à la liste'), array('action' => 'index'), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                                        </div>
                                    </div>
                    
                                    <h2><?php  echo __('Modifier Chat'); ?>: XXX</h2>
			<div class="form-group">
	<?php echo $this->Form->label('nom', 'nom');?>
		<?php echo $this->Form->input('nom', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('nom2', 'nom2');?>
		<?php echo $this->Form->input('nom2', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('naissance', 'naissance');?>
		<?php echo $this->Form->input('naissance', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('identification', 'identification');?>
		<?php echo $this->Form->input('identification', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('race', 'race');?>
		<?php echo $this->Form->input('race', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('robe', 'robe');?>
		<?php echo $this->Form->input('robe', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('sexe', 'sexe');?>
		<?php echo $this->Form->input('sexe', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('etat', 'etat');?>
		<?php echo $this->Form->input('etat', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('deces', 'deces');?>
		<?php echo $this->Form->input('deces', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('accueil_id', 'accueil_id');?>
		<?php echo $this->Form->input('accueil_id', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

				</fieldset>
			<?php echo $this->Form->submit(__('Enregistrer'), array('class' => 'btn btn-large btn-primary')); ?>
<?php echo $this->Form->end(); ?>
			
		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
