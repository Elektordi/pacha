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
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'Numéro unique'),
		'nom' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'collate' => 'utf8_unicode_ci', 'comment' => 'Nom', 'charset' => 'utf8'),
		'naissance' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => 'Naissance'),
		'identification' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'collate' => 'utf8_unicode_ci', 'comment' => 'Identification', 'charset' => 'utf8'),
		'race' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'collate' => 'utf8_unicode_ci', 'comment' => 'Race', 'charset' => 'utf8'),
		'robe' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'collate' => 'utf8_unicode_ci', 'comment' => 'Robe', 'charset' => 'utf8'),
		'sexe' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_unicode_ci', 'comment' => 'Sexe', 'charset' => 'utf8'),
		'etat' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_unicode_ci', 'comment' => 'Statut', 'charset' => 'utf8'),
		'deces' => array('type' => 'date', 'null' => true, 'default' => null, 'comment' => 'Décédé'),
		'accueil_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'Famille d\'accueil'),
		'provenance' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_unicode_ci', 'comment' => 'Provenance du chat', 'charset' => 'utf8'),
		'detenteur' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_unicode_ci', 'comment' => 'Détenteur', 'charset' => 'utf8'),
		'unique' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
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
			'naissance' => '2014-07-14',
			'identification' => 'Lorem ipsum dolor sit amet',
			'race' => 'Lorem ipsum dolor sit amet',
			'robe' => 'Lorem ipsum dolor sit amet',
			'sexe' => 'Lorem ipsum dolor sit ame',
			'etat' => 'Lorem ip',
			'deces' => '2014-07-14',
			'accueil_id' => 1,
			'provenance' => 'Lorem ipsum dolor sit amet',
			'detenteur' => 'Lorem ipsum dolor sit amet',
			'unique' => 'Lorem ipsum dolor sit amet'
		),
	);

}
