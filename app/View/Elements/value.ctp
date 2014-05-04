<?php



if($name=='sexe') {
    $img=array('M'=>'male','F'=>'female','?'=>'shading');
    if(empty($sexes[$v])) $v='?';
    echo $this->Html->image($img[$v].'.png', array('title'=>$sexes[$v]));
    if($page=='view') { 
        echo "&nbsp;".$sexes[$v];
    }
} elseif($name=='ok') {
    echo ($v?'OUI':'NON');
} elseif($type=='date') {
    if($v) echo date('d/m/Y',strtotime($v));
} else {
    $varname = $name.'s';
    if(isset($$varname) && is_array($$varname)) {
        $a = $$varname;
        $v = $a[$v];
    }

    echo h($v);
}
?>
