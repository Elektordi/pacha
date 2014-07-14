<?php
/**
 * CommentaireFixture
 *
 */
class CommentaireFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'chat_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => 'Chat'),
		'date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'comment' => 'Date'),
		'auteur' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_unicode_ci', 'comment' => 'Auteur', 'charset' => 'utf8'),
		'texte' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_unicode_ci', 'comment' => 'Commentaire', 'charset' => 'utf8'),
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
			'date' => '2014-07-14 20:23:44',
			'auteur' => 'Lorem ',
			'texte' => 'Lorem ipsum dolor sit amet'
		),
	);

}
