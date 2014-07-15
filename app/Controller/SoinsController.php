<?php
App::uses('AppController', 'Controller');
/**
 * Soins Controller
 *
 * @property Soin $Soin
 * @property PaginatorComponent $Paginator
 */
class SoinsController extends AppController {

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
                'Soin.date_debut' => 'desc'
            )
        );
		$this->Soin->recursive = 0;
	    if(!empty($this->passedArgs['type'])) {
	        if(empty($this->types[$this->passedArgs['type']])) throw new NotFoundException("Invalid type ".$this->passedArgs['type']);
    		$this->set('soins', $this->paginate(array('type' => $this->passedArgs['type'])));
    		$this->set('type', $this->passedArgs['type']);
	    } else {
    		$this->set('soins', $this->paginate());
    		$this->set('type', '');	    
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
		if (!$this->Soin->exists($id)) {
			throw new NotFoundException(__('Soin invalide.'));
		}
		$options = array('conditions' => array('Soin.' . $this->Soin->primaryKey => $id));
		$this->set('soin', $this->Soin->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Soin->create();
			$this->request->data['Soin']['montant'] = str_replace(',', '.', $this->request->data['Soin']['montant']);
			if ($this->Soin->save($this->request->data)) {
				$this->Session->setFlash(__('Soin enregistré.'), 'flash/success');
				$this->redirect(array('action' => 'view', $this->Soin->id));
			} else {
				$this->Session->setFlash(__('Soin impossible à enregistrer. Réessayez ultérieurement.'), 'flash/error');
			}
		}
		$chats = $this->addEmptyValue($this->Soin->Chat->find('list'));
		$veterinaires = $this->addEmptyValue($this->Soin->Veterinaire->find('list'));
		$this->set(compact('chats', 'veterinaires'));
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
        $this->Soin->id = $id;
		if (!$this->Soin->exists($id)) {
			throw new NotFoundException(__('Soin invalide.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->request->data['Soin']['montant'] = str_replace(',', '.', $this->request->data['Soin']['montant']);
			if ($this->Soin->save($this->request->data)) {
				$this->Session->setFlash(__('Soin sauvegardé.'), 'flash/success');
				$this->redirect(array('action' => 'view', $this->Soin->id));
			} else {
				$this->Session->setFlash(__('Soin impossible à enregistrer. Réessayez ultérieurement.'), 'flash/error');
			}
		}
	    $options = array('conditions' => array('Soin.' . $this->Soin->primaryKey => $id));
	    $this->request->data = $this->Soin->find('first', $options);
        $this->set('soin', $this->request->data);
        
		$chats = $this->addEmptyValue($this->Soin->Chat->find('list'));
		$veterinaires = $this->addEmptyValue($this->Soin->Veterinaire->find('list'));
		$this->set(compact('chats', 'veterinaires'));
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
		$this->Soin->id = $id;
		if (!$this->Soin->exists()) {
			throw new NotFoundException(__('Soin invalide.'));
		}
		if ($this->Soin->delete()) {
			$this->Session->setFlash(__('Soin supprimé.'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Soin impossible à supprimer.'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}}
