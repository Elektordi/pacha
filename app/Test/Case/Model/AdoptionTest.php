<?php
App::uses('Adoption', 'Model');

/**
 * Adoption Test Case
 *
 */
class AdoptionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.adoption',
		'app.chat'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Adoption = ClassRegistry::init('Adoption');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Adoption);

		parent::tearDown();
	}

}
