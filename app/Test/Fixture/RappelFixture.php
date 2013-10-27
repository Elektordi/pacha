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
		'chat_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'echeance' => array('type' => 'date', 'null' => false, 'default' => null),
		'affectation' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'texte' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'source' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
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
			'echeance' => '2013-10-27',
			'affectation' => 'Lorem ',
			'texte' => 'Lorem ipsum dolor sit amet',
			'source' => 'Lorem ipsum dolor sit amet'
		),
	);

}
