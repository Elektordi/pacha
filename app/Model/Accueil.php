<?php
App::uses('AppModel', 'Model');
/**
 * Accueil Model
 *
 * @property Chat $Chat
 */
class Accueil extends AppModel {

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
		'telephone1' => array(
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

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Chat' => array(
			'className' => 'Chat',
			'foreignKey' => 'accueil_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
        
        
    public $displayField = 'nom';
        
    public $virtualFields = array(
        'compte' => '(SELECT COUNT(id) FROM chats WHERE deces IS NULL AND accueil_id=Accueil.id)'
    );
    
    public $indexFields = array('nom', 'adresse', 'telephone1', 'telephone2', 'email', 'compte', 'limite');
    public $viewFields = array('id', 'nom', 'adresse', 'telephone1', 'telephone2', 'email', 'compte', 'limite');
    public $formFields = null; // Tous les champs

}
