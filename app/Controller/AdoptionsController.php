<?php
App::uses('AppController', 'Controller');
/**
 * Adoptions Controller
 *
 * @property Adoption $Adoption
 * @property PaginatorComponent $Paginator
 */
class AdoptionsController extends AppController {

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
		$this->Adoption->recursive = 0;
		$this->set('adoptions', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Adoption->exists($id)) {
			throw new NotFoundException(__('Adoption invalide.'));
		}
		$options = array('conditions' => array('Adoption.' . $this->Adoption->primaryKey => $id));
		$this->set('adoption', $this->Adoption->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Adoption->create();
			if ($this->Adoption->save($this->request->data)) {
				$this->Session->setFlash(__('Adoption enregistré.'), 'flash/success');
				$this->redirect(array('action' => 'view', $this->Adoption->id));
			} else {
				$this->Session->setFlash(__('Adoption impossible à enregistrer. Réessayez ultérieurement.'), 'flash/error');
			}
		}
		$chats = $this->addEmptyValue($this->Adoption->Chat->find('list'));
		$this->set(compact('chats'));
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
        $this->Adoption->id = $id;
		if (!$this->Adoption->exists($id)) {
			throw new NotFoundException(__('Adoption invalide.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Adoption->save($this->request->data)) {
				$this->Session->setFlash(__('Adoption sauvegardé.'), 'flash/success');
				$this->redirect(array('action' => 'view', $this->Adoption->id));
			} else {
				$this->Session->setFlash(__('Adoption impossible à enregistrer. Réessayez ultérieurement.'), 'flash/error');
			}
		}
	    $options = array('conditions' => array('Adoption.' . $this->Adoption->primaryKey => $id));
	    $this->request->data = $this->Adoption->find('first', $options);
        $this->set('adoption', $this->request->data);

		$chats = $this->addEmptyValue($this->Adoption->Chat->find('list'));
		$this->set(compact('chats'));
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
		$this->Adoption->id = $id;
		if (!$this->Adoption->exists()) {
			throw new NotFoundException(__('Adoption invalide.'));
		}
		if ($this->Adoption->delete()) {
			$this->Session->setFlash(__('Adoption supprimé.'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Adoption impossible à supprimer.'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}}
