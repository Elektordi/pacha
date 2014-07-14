<?php
App::uses('Commentaire', 'Model');

/**
 * Commentaire Test Case
 *
 */
class CommentaireTest extends CakeTestCase {

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
		'app.soin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Commentaire = ClassRegistry::init('Commentaire');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Commentaire);

		parent::tearDown();
	}

}
