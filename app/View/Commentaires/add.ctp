
<div id="page-container" class="row">
	
	<div id="page-content">
		<div class="commentaires form">
                    
                    		
			<?php echo $this->MyForm->create('Commentaire', array('inputDefaults' => array('label' => false), 'role' => 'form')); ?>
				<fieldset>

                                    <div class="btn-toolbar pull-right">
                                                                                <div class="btn-group">
                                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span> '.__('Retour à la liste'), array('action' => 'index'), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                                        </div>
                                    </div>
                    
                                                                        <h2><?php  echo __('Ajouter Commentaire'); ?></h2>
                                    			<div class="form-group">
	<?php echo $this->MyForm->label('chat_id', 'Chat');?>
		<?php echo $this->MyForm->input('chat_id', array('class' => 'form-control', 'value' => (empty($default_chat_id)?null:$default_chat_id))); ?>
</div><!-- .form-group -->
<script>
$('#CommentaireChatId').selectpicker({ liveSearch: true });
</script>

<div class="form-group">
	<?php echo $this->MyForm->label('texte', 'Commentaire');?>
		<?php echo $this->MyForm->input('texte', array('class' => 'form-control', 'value' => (empty($default_texte)?null:$default_texte))); ?>
</div><!-- .form-group -->

				</fieldset>
			<?php echo $this->MyForm->submit(__('Enregistrer'), array('class' => 'btn btn-large btn-primary')); ?>
<?php echo $this->MyForm->end(); ?>
			
		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
