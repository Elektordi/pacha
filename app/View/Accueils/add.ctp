
<div id="page-container" class="row">
	
	<div id="page-content">
		<div class="accueils form">
                    
                    		
			<?php echo $this->Form->create('Accueil', array('inputDefaults' => array('label' => false), 'role' => 'form')); ?>
				<fieldset>

                                    <div class="btn-toolbar pull-right">
                                                                                <div class="btn-group">
                                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span> '.__('Retour à la liste'), array('action' => 'index'), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                                        </div>
                                    </div>
                    
                                    <h2><?php  echo __('Modifier Accueil'); ?>: XXX</h2>
			<div class="form-group">
	<?php echo $this->Form->label('nom', 'nom');?>
		<?php echo $this->Form->input('nom', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('adresse', 'adresse');?>
		<?php echo $this->Form->input('adresse', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('telephone1', 'telephone1');?>
		<?php echo $this->Form->input('telephone1', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('telephone2', 'telephone2');?>
		<?php echo $this->Form->input('telephone2', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('limite', 'limite');?>
		<?php echo $this->Form->input('limite', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

				</fieldset>
			<?php echo $this->Form->submit(__('Enregistrer'), array('class' => 'btn btn-large btn-primary')); ?>
<?php echo $this->Form->end(); ?>
			
		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
