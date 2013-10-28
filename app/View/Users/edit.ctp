
<div id="page-container" class="row">
	
	<div id="page-content">
		<div class="users form">
                    
                    		
			<?php echo $this->Form->create('User', array('inputDefaults' => array('label' => false), 'role' => 'form')); ?>
				<fieldset>

                                    <div class="btn-toolbar pull-right">
                                                                                <div class="btn-group">
                                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-file"></span> '.__('Retour fiche User'), array('action' => 'view', $user['User']['id']), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                                        </div>
                                                                                <div class="btn-group">
                                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span> '.__('Retour à la liste'), array('action' => 'index'), array('class' => 'btn btn-default', 'escape' => FALSE)); ?>                                        </div>
                                    </div>
                    
                                                                        <h2><?php  echo __('Modifier User').': '.$user['User']['initiales']; ?></h2>
                                    			<div class="form-group">
	<?php echo $this->Form->label('username', 'username');?>
		<?php echo $this->Form->input('username', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('password', 'password');?>
		<?php echo $this->Form->input('password', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('initiales', 'initiales');?>
		<?php echo $this->Form->input('initiales', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('level', 'level');?>
		<?php echo $this->Form->input('level', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

				</fieldset>
			<?php echo $this->Form->submit(__('Enregistrer'), array('class' => 'btn btn-large btn-primary')); ?>
<?php echo $this->Form->end(); ?>
			
		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
