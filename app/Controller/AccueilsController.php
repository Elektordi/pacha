<?php
App::uses('AppController', 'Controller');
/**
 * Accueils Controller
 *
 * @property Accueil $Accueil
 * @property PaginatorComponent $Paginator
 */
class AccueilsController extends AppController {

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
		$this->Accueil->recursive = 0;
		$this->set('accueils', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Accueil->exists($id)) {
			throw new NotFoundException(__('Accueil invalide.'));
		}
		$options = array('conditions' => array('Accueil.' . $this->Accueil->primaryKey => $id));
		$this->set('accueil', $this->Accueil->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Accueil->create();
			if ($this->Accueil->save($this->request->data)) {
				$this->Session->setFlash(__('Accueil enregistré.'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Accueil impossible à enregistrer. Réessayez ultérieurement.'), 'flash/error');
			}
		}
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
        $this->Accueil->id = $id;
		if (!$this->Accueil->exists($id)) {
			throw new NotFoundException(__('Accueil invalide.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Accueil->save($this->request->data)) {
				$this->Session->setFlash(__('Accueil sauvegardé.'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Accueil impossible à enregistrer. Réessayez ultérieurement.'), 'flash/error');
			}
		}
		$options = array('conditions' => array('Accueil.' . $this->Accueil->primaryKey => $id));
		$this->request->data = $this->Accueil->find('first', $options);
        $this->set('accueil', $this->request->data);
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
		$this->Accueil->id = $id;
		if (!$this->Accueil->exists()) {
			throw new NotFoundException(__('Accueil invalide.'));
		}
		if ($this->Accueil->delete()) {
			$this->Session->setFlash(__('Accueil supprimé.'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Accueil impossible à supprimer.'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}}
