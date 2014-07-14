<?php
/**
 * SoinFixture
 *
 */
class SoinFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'chat_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => 'Chat'),
		'type' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_unicode_ci', 'comment' => 'Type de soin', 'charset' => 'utf8'),
		'date_debut' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => 'Date des soins'),
		'date_fin' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => 'Jusqu\'au (si longue durée)'),
		'nature' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'comment' => 'Nature des soins', 'charset' => 'utf8'),
		'veterinaire' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'comment' => 'Vétérinaire', 'charset' => 'utf8'),
		'montant' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 2, 'comment' => 'Montant'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'chat_id' => 1,
			'type' => 'Lorem ipsum dolor sit ame',
			'date_debut' => '2014-07-14',
			'date_fin' => '2014-07-14',
			'nature' => 'Lorem ipsum dolor sit amet',
			'veterinaire' => 'Lorem ipsum dolor sit amet',
			'montant' => 1
		),
	);

}
