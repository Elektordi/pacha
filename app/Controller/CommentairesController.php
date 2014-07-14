<?php
App::uses('AppController', 'Controller');
/**
 * Commentaires Controller
 *
 * @property Commentaire $Commentaire
 * @property PaginatorComponent $Paginator
 */
class CommentairesController extends AppController {

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
		$this->Commentaire->recursive = 0;
		$this->set('commentaires', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Commentaire->exists($id)) {
			throw new NotFoundException(__('Commentaire invalide.'));
		}
		$options = array('conditions' => array('Commentaire.' . $this->Commentaire->primaryKey => $id));
		$this->set('commentaire', $this->Commentaire->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Commentaire->create();
			$this->request->data['Commentaire']['auteur'] = $this->Session->read('Auth.User.initiales');
			if ($this->Commentaire->save($this->request->data)) {
				$this->Session->setFlash(__('Commentaire enregistré.'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Commentaire impossible à enregistrer. Réessayez ultérieurement.'), 'flash/error');
			}
		}
		$chats = $this->Commentaire->Chat->find('list');
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
        $this->Commentaire->id = $id;
		if (!$this->Commentaire->exists($id)) {
			throw new NotFoundException(__('Commentaire invalide.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
		    $this->request->data['Commentaire']['auteur'] = $this->Session->read('Auth.User.initiales');
			if ($this->Commentaire->save($this->request->data)) {
				$this->Session->setFlash(__('Commentaire sauvegardé.'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Commentaire impossible à enregistrer. Réessayez ultérieurement.'), 'flash/error');
			}
		}
		$options = array('conditions' => array('Commentaire.' . $this->Commentaire->primaryKey => $id));
		$this->request->data = $this->Commentaire->find('first', $options);
        $this->set('commentaire', $this->request->data);
		
		$chats = $this->Commentaire->Chat->find('list');
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
		$this->Commentaire->id = $id;
		if (!$this->Commentaire->exists()) {
			throw new NotFoundException(__('Commentaire invalide.'));
		}
		if ($this->Commentaire->delete()) {
			$this->Session->setFlash(__('Commentaire supprimé.'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Commentaire impossible à supprimer.'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}}
