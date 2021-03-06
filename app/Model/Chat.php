<?php
App::uses('AppModel', 'Model');
/**
 * Chat Model
 *
 * @property Accueil $Accueil
 * @property Adoption $Adoption
 * @property Commentaire $Commentaire
 * @property Rappel $Rappel
 * @property Soin $Soin
 */
class Chat extends AppModel {

    public $SearchMe = 1;

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'identification' => array(
			'unique' => array(
				'rule' => array('isunique'),
				'message' => 'Identification déjà utilisée',
				'allowEmpty' => true,
				'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'sexe' => array(
			'notblank' => array(
				'rule' => array('notblank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'etat' => array(
			'notblank' => array(
				'rule' => array('notblank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'provenance' => array(
			'notblank' => array(
				'rule' => array('notblank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'unique' => array(
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
		'Accueil' => array(
			'className' => 'Accueil',
			'foreignKey' => 'accueil_id',
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
		'Adoption' => array(
			'className' => 'Adoption',
			'foreignKey' => 'chat_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => 'Adoption.date_debut DESC',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Commentaire' => array(
			'className' => 'Commentaire',
			'foreignKey' => 'chat_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => 'Commentaire.date DESC',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Rappel' => array(
			'className' => 'Rappel',
			'foreignKey' => 'chat_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => 'Rappel.echeance DESC',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Soin' => array(
			'className' => 'Soin',
			'foreignKey' => 'chat_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => 'Soin.date_debut DESC',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	
    public function beforeSave($options = array()) {
    
        $u = '';
        if(!empty($this->data[$this->alias]['nom'])) $u = $this->data[$this->alias]['nom'];
        
        if(!empty($this->data[$this->alias]['identification'])) {
            if($u) $u.= ' ('.$this->data[$this->alias]['identification'].')';
            else $u = $this->data[$this->alias]['identification'];
        }

        if(!$u) $u = '[Inconnu]';
        
        $this->data[$this->alias]['unique'] = $u;
        
        return true;
    }
        
    public $displayField = 'unique';
    /*public $virtualFields = array(
        'unique' => 'IFNULL(Chat.nom,IFNULL(Chat.identification,CONCAT("Chat #",CAST(Chat.id AS CHAR) COLLATE utf8_unicode_ci)))'
    );*/
    public $order = "Chat.id DESC";

    public $indexFields = array('id', 'nom', 'naissance', 'identification', 'race', 'robe', 'sexe', 'etat', 'accueil_id');
    public $viewFields = array('id', 'nom', 'naissance', 'identification', 'race', 'robe', 'sexe', 'etat', 'deces', 'accueil_id', 'provenance', 'detenteur');
    public $formFields = array('nom', 'naissance', 'identification', 'race', 'robe', 'sexe', 'etat', 'deces', 'accueil_id', 'provenance', 'detenteur'); // Tous les champs
    public $nosearchFields = array('etat');
}
