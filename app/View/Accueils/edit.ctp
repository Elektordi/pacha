
<div id="page-container" class="row">
	
	<div id="page-content">
		<div class="accueils form">
                    
                    		
			<?php echo $this->MyForm->create('Accueil', array('inputDefaults' => array('label' => false), 'role' => 'form')); ?>
				<fieldset>

                                    <div class="btn-toolbar pull-right">
                                                                                <div class="btn-group">
                                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-file"></span> '.__('Retour fiche Accueil'), array('action' => 'view', $accueil['Accueil']['id']), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                                        </div>
                                                                                <div class="btn-group">
                                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span> '.__('Retour à la liste'), array('action' => 'index'), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                                        </div>
                                    </div>
                    
                                                                        <h2><?php  echo __('Modifier Accueil').': '.$accueil['Accueil']['nom']; ?></h2>
                                    			<div class="form-group">
	<?php echo $this->MyForm->label('nom', 'Nom');?>
		<?php echo $this->MyForm->input('nom', array('class' => 'form-control', 'value' => (empty($default_nom)?null:$default_nom))); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('adresse', 'Adresse');?>
		<?php echo $this->MyForm->input('adresse', array('class' => 'form-control', 'value' => (empty($default_adresse)?null:$default_adresse))); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('telephone1', 'Téléphone 1');?>
		<?php echo $this->MyForm->input('telephone1', array('class' => 'form-control', 'value' => (empty($default_telephone1)?null:$default_telephone1))); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('telephone2', 'Téléphone 2');?>
		<?php echo $this->MyForm->input('telephone2', array('class' => 'form-control', 'value' => (empty($default_telephone2)?null:$default_telephone2))); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->MyForm->label('limite', 'Chats max.');?>
		<?php echo $this->MyForm->input('limite', array('class' => 'form-control', 'value' => (empty($default_limite)?null:$default_limite))); ?>
</div><!-- .form-group -->

				</fieldset>
			<?php echo $this->MyForm->submit(__('Enregistrer'), array('class' => 'btn btn-large btn-primary')); ?>
<?php echo $this->MyForm->end(); ?>
			
		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
