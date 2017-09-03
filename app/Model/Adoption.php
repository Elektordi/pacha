<?php
App::uses('AppModel', 'Model');
/**
 * Adoption Model
 *
 * @property Chat $Chat
 */
class Adoption extends AppModel {

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
		)
	);
        
        
    public $displayField = 'nom';
    public $order = "Adoption.date_debut DESC";
        
    public $indexFields = array('id', 'chat_id', 'nom', 'adresse', 'telephone1', 'telephone2', 'email', 'date_debut', 'date_fin');
    public $viewFields = array('id', 'chat_id', 'nom', 'adresse', 'telephone1', 'telephone2', 'email', 'nom_chat', 'date_debut', 'date_fin');

    
    public function beforeSave($options = array()) {
    
        if(!$this->data[$this->alias]['nom_chat']) {
            $id = $this->data[$this->alias]['chat_id'];
            if($id) {
                $chat = $this->Chat->find('first', array('conditions'=>array('Chat.id'=>$id)));
                if($chat) {
                    $this->data[$this->alias]['nom_chat'] = $chat['Chat']['nom'];
                    $this->warning = __('Nouveau nom automatiquement inscrit depuis la fiche chat.');
                }
                
            }
        }
        
        return true;
    }
}
