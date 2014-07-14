<?php
/**
 * RappelFixture
 *
 */
class RappelFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'chat_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => 'Chat'),
		'echeance' => array('type' => 'date', 'null' => false, 'default' => null, 'comment' => 'Échéance'),
		'affectation' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_unicode_ci', 'comment' => 'Affecté à', 'charset' => 'utf8'),
		'texte' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_unicode_ci', 'comment' => 'Détails', 'charset' => 'utf8'),
		'soin_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8_unicode_ci', 'comment' => 'Concerne', 'charset' => 'utf8'),
		'ok' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'comment' => 'Validé'),
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
			'echeance' => '2014-07-14',
			'affectation' => 'Lorem ',
			'texte' => 'Lorem ipsum dolor sit amet',
			'soin_id' => 'Lorem ipsum dolor sit amet',
			'ok' => 1
		),
	);

}
