<?php
App::uses('CommentairesController', 'Controller');

/**
 * CommentairesController Test Case
 *
 */
class CommentairesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.commentaire',
		'app.chat',
		'app.accueil',
		'app.adoption',
		'app.rappel',
		'app.soin',
		'app.user'
	);

}
