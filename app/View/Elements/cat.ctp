<?php

if(empty($img)) {

	$params = $this->request->params;
	$ctrl = $params['controller'];
	$action = $params['action'];

	if($ctrl == 'pages') {
		$page = $params['pass'][0];
		if($page=='home') {
			$img = 'sing';
		} elseif($page=='about') {
			$img = 'random';
		} else {
		    return;
		}
	} elseif($ctrl == 'homepage') {
		$img = 'sing';
	} elseif($ctrl == 'chats') {
		if($action == 'index') {
			$img = 'sleep';
		} elseif($action == 'view') {
			$img = 'paper';
		} elseif($action == 'edit') {
			$img = 'clean';
		} elseif($action == 'add') {
			$img = 'hungry';
		} else {
		    return;
		}
	} elseif($ctrl == 'adoptions') {
		$img = 'box';
	} elseif($ctrl == 'soins') {
		$img = 'eyes';
	} elseif($ctrl == 'accueils') {
		$img = 'cage';
	} elseif($ctrl == 'rappels') {
		$img = 'hungry';
	} elseif($ctrl == 'veterinaires') {
		$img = 'grumpy';
	} elseif($ctrl == 'commentaires') {
		$img = 'fish';
	} elseif($ctrl == 'users') {
		$img = 'poo';
	} elseif($ctrl == 'search') {
		$img = 'slippers';
	} else {
		return;
	}
}

$options = array( 'alt'=>'Auteur des images: Iconka', 'title' => 'Miaou !!!' );

if($img == 'random') {

	$images = array( 'acrobat',
	'birdhouse',
	'box',
	'cage',
	'cart',
	'clean',
	'drunk',
	'eyes',
	'fish',
	'gift',
	'grumpy',
	'hiss',
	'hungry',
	'laptop',
//	'moustache',
	'paper',
	'poo',
	'rascal',
	'sing',
	'sleep',
	'slippers',
	'tied',
	'upsidedown',
	'walk');
	
	$img = $images[rand(0,count($images)-1)];
}

echo $this->Html->image('meow/cat_'.$img.'.png', $options);

?>
