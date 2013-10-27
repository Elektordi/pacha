<?php
App::uses('AppController', 'Controller');
/**
 * Soins Controller
 *
 * @property Soin $Soin
 * @property PaginatorComponent $Paginator
 */
class SoinsController extends AppController {

    
    public $types = array(
        'm' => 'Médicament',
        'v' => 'Vaccination',
        's' => 'Stérilisation',
        'i' => 'Identification',
        't' => 'Test',
        'x' => 'Autre'
    );
    
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
		$this->Soin->recursive = 0;
		$this->set('soins', $this->paginate());
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
			if ($this->Soin->save($this->request->data)) {
				$this->Session->setFlash(__('Soin enregistré.'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Soin impossible à enregistrer. Réessayez ultérieurement.'), 'flash/error');
			}
		}
		$chats = $this->Soin->Chat->find('list');
		$this->set(compact('chats'));
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
			if ($this->Soin->save($this->request->data)) {
				$this->Session->setFlash(__('Soin sauvegardé.'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Soin impossible à enregistrer. Réessayez ultérieurement.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Soin.' . $this->Soin->primaryKey => $id));
			$this->request->data = $this->Soin->find('first', $options);
                        $this->set('soin', $this->request->data);
		}
		$chats = $this->Soin->Chat->find('list');
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
