<?php
/**
 * AdoptionFixture
 *
 */
class AdoptionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'chat_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'nom' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'adresse' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'telephone' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'date_debut' => array('type' => 'date', 'null' => false, 'default' => null),
		'date_fin' => array('type' => 'date', 'null' => true, 'default' => null),
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
			'nom' => 'Lorem ipsum dolor sit amet',
			'adresse' => 'Lorem ipsum dolor sit amet',
			'telephone' => 'Lorem ipsum d',
			'email' => 'Lorem ipsum dolor sit amet',
			'date_debut' => '2013-10-27',
			'date_fin' => '2013-10-27'
		),
	);

}
