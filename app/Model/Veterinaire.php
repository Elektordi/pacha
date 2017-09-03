<?php
App::uses('AppModel', 'Model');
/**
 * Veterinaire Model
 *
 */
class Veterinaire extends AppModel {

    public $SearchMe = 1;

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nom' => array(
			'notblank' => array(
				'rule' => array('notblank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'adresse' => array(
			'notblank' => array(
				'rule' => array('notblank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'telephone' => array(
			'notblank' => array(
				'rule' => array('notblank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	
    public $displayField = 'nom';
    
    public $indexFields = array('nom', 'adresse', 'telephone', 'fax', 'email', 'commentaires');
    public $viewFields = array('id', 'nom', 'adresse', 'telephone', 'fax', 'email', 'commentaires');
    public $formFields = null; // Tous les champs
}
