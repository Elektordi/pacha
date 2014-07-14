<?php
App::uses('Veterinaire', 'Model');

/**
 * Veterinaire Test Case
 *
 */
class VeterinaireTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.veterinaire'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Veterinaire = ClassRegistry::init('Veterinaire');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Veterinaire);

		parent::tearDown();
	}

}
