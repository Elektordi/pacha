<?php
App::uses('AppController', 'Controller');
/**
 * Chats Controller
 *
 * @property Chat $Chat
 * @property PaginatorComponent $Paginator
 */
class ChatsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	
/**
 * index method
 *
 * @return void
 */
	public function index() {
	    $this->Paginator->settings = array(
            'order' => array(
                //'Chat.nom' => 'asc'
                'Chat.id' => 'desc'
            )
        );
		$this->Chat->recursive = 0;
	    if(!empty($this->passedArgs['etat'])) {
	        if(empty($this->etats[$this->passedArgs['etat']])) throw new NotFoundException("Invalid status ".$this->passedArgs['etat']);
    		$this->set('chats', $this->paginate(array('etat' => $this->passedArgs['etat'])));
    		$this->set('etat', $this->passedArgs['etat']);
	    } else {
    		$this->set('chats', $this->paginate());
    		$this->set('etat', '');	    
	    }
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Chat->exists($id)) {
			throw new NotFoundException(__('Chat invalide.'));
		}
		$options = array('conditions' => array('Chat.' . $this->Chat->primaryKey => $id));
		$this->set('chat', $this->Chat->find('first', $options));
		
		$veterinaires = $this->Chat->Soin->Veterinaire->find('list');
		$this->set(compact('veterinaires'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Chat->create();
			if ($this->Chat->save($this->request->data)) {
				$this->Session->setFlash(__('Chat enregistré.'), 'flash/success');
				$this->redirect(array('action' => 'view', $this->Chat->id));
			} else {
				$this->Session->setFlash(__('Chat impossible à enregistrer. Réessayez ultérieurement.'), 'flash/error');
			}
		}
		$accueils = $this->addEmptyValue($this->Chat->Accueil->find('list'));
		$this->set(compact('accueils'));
		foreach($this->passedArgs as $k => $v) {
		    $this->set('default_'.$k, $v);
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Chat->id = $id;
		if (!$this->Chat->exists($id)) {
			throw new NotFoundException(__('Chat invalide.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Chat->save($this->request->data)) {
				$this->Session->setFlash(__('Chat sauvegardé.'), 'flash/success');
				$this->redirect(array('action' => 'view', $this->Chat->id));
			} else {
				$this->Session->setFlash(__('Chat impossible à enregistrer. Réessayez ultérieurement.'), 'flash/error');
			}
		}
	    $options = array('conditions' => array('Chat.' . $this->Chat->primaryKey => $id));
	    $this->request->data = $this->Chat->find('first', $options);
        $this->set('chat', $this->request->data);

		$accueils = $this->addEmptyValue($this->Chat->Accueil->find('list'));
		$this->set(compact('accueils'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Chat->id = $id;
		if (!$this->Chat->exists()) {
			throw new NotFoundException(__('Chat invalide.'));
		}
		if ($this->Chat->delete()) {
			$this->Session->setFlash(__('Chat supprimé.'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Chat impossible à supprimer.'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}}
