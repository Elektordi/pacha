<?php
App::uses('Accueil', 'Model');

/**
 * Accueil Test Case
 *
 */
class AccueilTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.accueil',
		'app.chat',
		'app.adoption',
		'app.commentaire',
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
		$this->Accueil = ClassRegistry::init('Accueil');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Accueil);

		parent::tearDown();
	}

}
