<?php
App::uses('AppController', 'Controller');
/**
 * Rappels Controller
 *
 * @property Rappel $Rappel
 * @property PaginatorComponent $Paginator
 */
class RappelsController extends AppController {

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
		$this->Rappel->recursive = 0;
		$this->set('rappels', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Rappel->exists($id)) {
			throw new NotFoundException(__('Rappel invalide.'));
		}
		$options = array('conditions' => array('Rappel.' . $this->Rappel->primaryKey => $id));
		$this->set('rappel', $this->Rappel->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Rappel->create();
			if ($this->Rappel->save($this->request->data)) {
				$this->Session->setFlash(__('Rappel enregistré.'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Rappel impossible à enregistrer. Réessayez ultérieurement.'), 'flash/error');
			}
		}
		$chats = $this->Rappel->Chat->find('list');
		$soins = $this->Rappel->Soin->find('list');
		$this->set(compact('chats', 'soins'));
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
        $this->Rappel->id = $id;
		if (!$this->Rappel->exists($id)) {
			throw new NotFoundException(__('Rappel invalide.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Rappel->save($this->request->data)) {
				$this->Session->setFlash(__('Rappel sauvegardé.'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Rappel impossible à enregistrer. Réessayez ultérieurement.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Rappel.' . $this->Rappel->primaryKey => $id));
			$this->request->data = $this->Rappel->find('first', $options);
                        $this->set('rappel', $this->request->data);
		}
		$chats = $this->Rappel->Chat->find('list');
		$soins = $this->Rappel->Soin->find('list');
		$this->set(compact('chats', 'soins'));
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
		$this->Rappel->id = $id;
		if (!$this->Rappel->exists()) {
			throw new NotFoundException(__('Rappel invalide.'));
		}
		if ($this->Rappel->delete()) {
			$this->Session->setFlash(__('Rappel supprimé.'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Rappel impossible à supprimer.'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}

	public function click($do = null, $id = null) {
	    if(!$do || !$id) throw new NotFoundException(__('Rappel invalide.'));
        $this->Rappel->id = $id;
		if (!$this->Rappel->exists()) {
			throw new NotFoundException(__('Rappel invalide.'));
		}
		
		$a = array();
		if($do=='assign')
		    $a['affectation']=$this->Session->read('Auth.User.initiales');
		elseif($do=='done')
		    $a['ok']=1;
		    
		if ($this->Rappel->save($a)) {
			$this->Session->setFlash(__('Rappel sauvegardé.'), 'flash/success');
		} else {
			$this->Session->setFlash(__('Rappel impossible à enregistrer. Réessayez ultérieurement.'), 'flash/error');
		}

	    $this->redirect(array('controller' => 'homepage'));
	}
	
}
