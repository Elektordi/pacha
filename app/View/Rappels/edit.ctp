
<div id="page-container" class="row">
	
	<div id="page-content">
		<div class="rappels form">
                    
                    		
			<?php echo $this->Form->create('Rappel', array('inputDefaults' => array('label' => false), 'role' => 'form')); ?>
				<fieldset>

                                    <div class="btn-toolbar pull-right">
                                                                                <div class="btn-group">
                                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-file"></span> '.__('Retour fiche Rappel'), array('action' => 'view', $rappel['Rappel']['id']), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                                        </div>
                                                                                <div class="btn-group">
                                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span> '.__('Retour à la liste'), array('action' => 'index'), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                                        </div>
                                    </div>
                    
                                    <h2><?php  echo __('Modifier Rappel'); ?>: XXX</h2>
			<div class="form-group">
	<?php echo $this->Form->label('id', 'id');?>
		<?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('chat_id', 'chat_id');?>
		<?php echo $this->Form->input('chat_id', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('echeance', 'echeance');?>
		<?php echo $this->Form->input('echeance', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('affectation', 'affectation');?>
		<?php echo $this->Form->input('affectation', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('texte', 'texte');?>
		<?php echo $this->Form->input('texte', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('source', 'source');?>
		<?php echo $this->Form->input('source', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('ok', 'ok');?>
		<?php echo $this->Form->input('ok', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

				</fieldset>
			<?php echo $this->Form->submit(__('Enregistrer'), array('class' => 'btn btn-large btn-primary')); ?>
<?php echo $this->Form->end(); ?>
			
		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
