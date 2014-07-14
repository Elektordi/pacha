
<div id="page-container" class="row">
	
	<div id="page-content">
		<div class="rappels form">
                    
                    		
			<?php echo $this->MyForm->create('Rappel', array('inputDefaults' => array('label' => false), 'role' => 'form')); ?>
				<fieldset>

                                    <div class="btn-toolbar pull-right">
                                                                                <div class="btn-group">
                                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span> '.__('Retour à la liste'), array('action' => 'index'), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                                        </div>
                                    </div>
                    
                                                                        <h2><?php  echo __('Ajouter Rappel'); ?></h2>
                                    			<div class="form-group">
	<?php echo $this->MyForm->label('chat_id', 'Chat');?>
		<?php echo $this->MyForm->input('chat_id', array('class' => 'form-control', 'value' => (empty($default_chat_id)?null:$default_chat_id))); ?>
</div><!-- .form-group -->
<script>
$('#RappelChatId').selectpicker({ liveSearch: true });
</script>

<div class="form-group">
	<?php echo $this->MyForm->label('echeance', 'Échéance');?>
		<?php echo $this->MyForm->input('echeance', array('class' => 'form-control', 'value' => (empty($default_echeance)?null:$default_echeance))); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('affectation', 'Affecté à');?>
		<?php echo $this->MyForm->input('affectation', array('class' => 'form-control', 'value' => (empty($default_affectation)?null:$default_affectation))); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('texte', 'Détails');?>
		<?php echo $this->MyForm->input('texte', array('class' => 'form-control', 'value' => (empty($default_texte)?null:$default_texte))); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('soin_id', 'Concerne');?>
		<?php echo $this->MyForm->input('soin_id', array('class' => 'form-control', 'value' => (empty($default_soin_id)?null:$default_soin_id))); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('ok', 'Validé');?>
		<?php echo $this->MyForm->input('ok', array('class' => 'form-control', 'value' => (empty($default_ok)?null:$default_ok))); ?>
</div><!-- .form-group -->

				</fieldset>
			<?php echo $this->MyForm->submit(__('Enregistrer'), array('class' => 'btn btn-large btn-primary')); ?>
<?php echo $this->MyForm->end(); ?>
			
		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
