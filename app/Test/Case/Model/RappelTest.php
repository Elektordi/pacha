<?php
App::uses('Rappel', 'Model');

/**
 * Rappel Test Case
 *
 */
class RappelTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.rappel',
		'app.chat',
		'app.accueil',
		'app.adoption',
		'app.commentaire',
		'app.soin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Rappel = ClassRegistry::init('Rappel');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Rappel);

		parent::tearDown();
	}

}
