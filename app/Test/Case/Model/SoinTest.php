<?php
App::uses('Soin', 'Model');

/**
 * Soin Test Case
 *
 */
class SoinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.soin',
		'app.chat',
		'app.accueil',
		'app.adoption',
		'app.commentaire'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Soin = ClassRegistry::init('Soin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Soin);

		parent::tearDown();
	}

}
