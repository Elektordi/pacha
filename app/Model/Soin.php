<?php
App::uses('AppModel', 'Model');
/**
 * Soin Model
 *
 * @property Chat $Chat
 * @property Veterinaire $Veterinaire
 * @property Rappel $Rappel
 */
class Soin extends AppModel {

    public $SearchMe = 1;

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'chat_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'type' => array(
			'notblank' => array(
				'rule' => array('notblank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'date_debut' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nature' => array(
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
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Chat' => array(
			'className' => 'Chat',
			'foreignKey' => 'chat_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Veterinaire' => array(
			'className' => 'Veterinaire',
			'foreignKey' => 'veterinaire_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Rappel' => array(
			'className' => 'Rappel',
			'foreignKey' => 'soin_id',
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
	
    public $displayField = 'display';
    public $virtualFields = array(
        'display' => 'CONCAT((SELECT c.nom FROM chats c WHERE c.id = Soin.chat_id)," ",Soin.date_debut)'
    );
    
    public $indexFields = array('chat_id', 'type', 'date_debut', 'date_fin', 'nature', 'veterinaire_id', 'montant');
    public $viewFields = array('id', 'chat_id', 'type', 'date_debut', 'date_fin', 'nature', 'veterinaire_id', 'montant');
    public $formFields = null; // Tous les champs
}
