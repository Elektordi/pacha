<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Menu principal</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button><!-- /.navbar-toggle -->
		<?php echo $this->Html->Link('PACHA', '/', array('class' => 'navbar-brand')); ?>
	</div><!-- /.navbar-header -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li><?php echo $this->Html->Link('Accueil', '/'); ?></li>
			<li><?php echo $this->Html->Link('Chats', '/chats'); ?></li>
			<li><?php echo $this->Html->Link('Adoptions', '/adoptions'); ?></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Suivi médical <b class="caret"></b></a>
				<ul class="dropdown-menu">
				    <?php
				        foreach($types as $k => $v)  {
				            echo '<li>'.$this->Html->Link($v, array('controller'=>'soins', 'action'=>'index', 'type'=>$k)).'</li>';
				        }
				    ?>
				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Gestion <b class="caret"></b></a>
				<ul class="dropdown-menu">
                                        <li><?php echo $this->Html->Link('Évènements', '/rappels'); ?></li>
					<li><?php echo $this->Html->Link('Familles d\'accueil', '/accueils'); ?></li>
					<li><?php echo $this->Html->Link('Comptes utilisateurs', '/users'); ?></li>
					<li class="divider"></li>
					<li><?php echo $this->Html->Link('A propos de...', '/pages/about'); ?></li>
				</ul>
			</li>
		</ul><!-- /.nav navbar-nav -->
		
        <form class="navbar-form navbar-left visible-md visible-lg" role="search" method="post" action="<?php echo $this->Html->url("/search"); ?>">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Rechercher..." name="query" size="15">
            <span class="input-group-btn"><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button></span>
          </div>
          
        </form>
        
        <ul class="nav navbar-nav navbar-right">
        	<li><?php echo $this->Html->Link('<span class="glyphicon glyphicon-user"></span> '.$session->read('Auth.User.initiales'), '/users/profile', array('escape'=>FALSE)); ?></li>
	        <li><?php echo $this->Html->Link('<span class="glyphicon glyphicon-off"></span> Déconnexion', '/users/logout', array('escape'=>FALSE)); ?></li>
        </ul>
	</div><!-- /.navbar-collapse -->
</nav><!-- /.navbar navbar-default -->
