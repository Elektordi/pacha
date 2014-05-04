<?php
if($name=='sexe') {
    $img=array('M'=>'male','F'=>'female','?'=>'shading');
    if(empty($sexes[$v])) $v='?';
    echo $this->Html->image($img[$v].'.png', array('title'=>$sexes[$v]));
    if($page=='view') { 
        echo "&nbsp;".$sexes[$v];
    }
} elseif($name=='etat') {    
    echo $etats[$v];
} elseif($name=='type') {    
    echo $types[$v];
} elseif($name=='source') {    
    echo "<b>TODO</b> $v";
} elseif($type=='date') {
    if($v) echo date('d/m/Y',strtotime($v));
} else {
    echo h($v);
}
?>
