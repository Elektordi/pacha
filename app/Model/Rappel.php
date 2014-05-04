<?php
App::uses('AppModel', 'Model');
/**
 * Rappel Model
 *
 * @property Chat $Chat
 * @property Soin $Soin
 */
class Rappel extends AppModel {

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
		'echeance' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'texte' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'ok' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
        'soin_id' => array(
            'check' => array(
                'rule' => array('checkLinks', array('chat_id', 'Soin')),
                'message' => 'Erreur de liaison entre le Chat et le Soin.',
            )
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
		'Soin' => array(
			'className' => 'Soin',
			'foreignKey' => 'soin_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
        
        public $displayField = 'texte';
}
