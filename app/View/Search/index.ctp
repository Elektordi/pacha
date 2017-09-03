<h1>Recherche: "<?php echo $query; ?>"</h1>

<form class="hidden-md hidden-lg" role="search" method="post" action="<?php echo $this->Html->url("/search"); ?>">
  <div class="input-group" style="width: 200px;">
    <input type="text" class="form-control" placeholder="Rechercher..." name="query" size="15" value="<?php if(!empty($query)) echo h($query); ?>">
    <span class="input-group-btn"><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button></span>
  </div>
  
</form>

<?php

if(!empty($error)) {
    echo "<p><b>Erreur: $error</b></p>";
    return;
}

foreach($results as $table => $r) {
    $schema = $r['schema'];
    unset($r['schema']);
    $cols = array();
    ?>
    <h3><?php echo $table.'s'; ?> trouvé(e)s:</h3>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <?php
                        foreach($schema as $name => $col) {
                            if(empty($col['comment'])) continue;
                            echo '<th>'.__($col['comment']).'</th>';
                            $cols[] = $name;
                        }
                    ?>
                    <th class="actions">Actions</th>
                </tr>
            </thead>
            <tbody>
	        <?php
		        foreach ($r as $row) {
		            ?>
		            <tr>
		            <?php
		            foreach($cols as $col) {
		                echo '<td>'.$this->element('value',array('page'=>'search', 'name'=>$col, 'type'=>$schema[$col]['type'], 'v'=>$row[$col])).'</td>';
		            }
		            ?>
			        <td class="actions">
			            <?php echo $this->Html->link('<span class="glyphicon glyphicon-file"></span> '.__('Fiche'), array('controller' => strtolower($table.'s'), 'action' => 'view', $row['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
			            <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> '.__('Modifier'), array('controller' =>  strtolower($table.'s'), 'action' => 'edit', $row['id']), array('class' => 'btn btn-default btn-xs', 'escape' => FALSE)); ?>
			        </td>
		        </tr>
	        <?php } ?>
		    </tbody>
	    </table><!-- /.table table-striped table-bordered -->
    </div><!-- /.table-responsive -->
    <?php
}

if(empty($results)) echo "<p><i>Aucun résultat...</i></p>";
?>
