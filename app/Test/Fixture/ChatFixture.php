<?php
/**
 * ChatFixture
 *
 */
class ChatFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'nom' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'collate' => 'utf8_unicode_ci', 'comment' => 'Nom', 'charset' => 'utf8'),
		'nom2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'collate' => 'utf8_unicode_ci', 'comment' => 'Ancien nom', 'charset' => 'utf8'),
		'naissance' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => 'Naissance'),
		'identification' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'collate' => 'utf8_unicode_ci', 'comment' => 'Identification', 'charset' => 'utf8'),
		'race' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'collate' => 'utf8_unicode_ci', 'comment' => 'Race', 'charset' => 'utf8'),
		'robe' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'collate' => 'utf8_unicode_ci', 'comment' => 'Robe', 'charset' => 'utf8'),
		'sexe' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_unicode_ci', 'comment' => 'Sexe', 'charset' => 'utf8'),
		'etat' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_unicode_ci', 'comment' => 'Statut', 'charset' => 'utf8'),
		'deces' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => 'Décédé'),
		'accueil_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'Famille d\'accueil'),
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
			'nom' => 'Lorem ipsum dolor sit amet',
			'nom2' => 'Lorem ipsum dolor sit amet',
			'naissance' => '2014-05-04',
			'identification' => 'Lorem ipsum dolor sit amet',
			'race' => 'Lorem ipsum dolor sit amet',
			'robe' => 'Lorem ipsum dolor sit amet',
			'sexe' => 'Lorem ipsum dolor sit ame',
			'etat' => 'Lorem ip',
			'deces' => '2014-05-04',
			'accueil_id' => 1
		),
	);

}
