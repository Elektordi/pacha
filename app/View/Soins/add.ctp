
<div id="page-container" class="row">
	
	<div id="page-content">
		<div class="soins form">
                    
                    		
			<?php echo $this->Form->create('Soin', array('inputDefaults' => array('label' => false), 'role' => 'form')); ?>
				<fieldset>

                                    <div class="btn-toolbar pull-right">
                                                                                <div class="btn-group">
                                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span> '.__('Retour à la liste'), array('action' => 'index'), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                                        </div>
                                    </div>
                    
                                                                        <h2><?php  echo __('Ajouter Soin'); ?></h2>
                                    			<div class="form-group">
	<?php echo $this->Form->label('chat_id', 'chat_id');?>
		<?php echo $this->Form->input('chat_id', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('type', 'type');?>
		<?php echo $this->Form->input('type', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('date_debut', 'date_debut');?>
		<?php echo $this->Form->input('date_debut', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('date_fin', 'date_fin');?>
		<?php echo $this->Form->input('date_fin', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('nature', 'nature');?>
		<?php echo $this->Form->input('nature', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('veterinaire', 'veterinaire');?>
		<?php echo $this->Form->input('veterinaire', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('montant', 'montant');?>
		<?php echo $this->Form->input('montant', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

				</fieldset>
			<?php echo $this->Form->submit(__('Enregistrer'), array('class' => 'btn btn-large btn-primary')); ?>
<?php echo $this->Form->end(); ?>
			
		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
