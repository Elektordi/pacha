<?php
App::uses('AppController', 'Controller');
/**
 * Veterinaires Controller
 *
 * @property Veterinaire $Veterinaire
 * @property PaginatorComponent $Paginator
 */
class VeterinairesController extends AppController {

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
                'Veterinaire.nom' => 'asc'
            )
        );
		$this->Veterinaire->recursive = 0;
		$this->set('veterinaires', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Veterinaire->exists($id)) {
			throw new NotFoundException(__('Veterinaire invalide.'));
		}
		$options = array('conditions' => array('Veterinaire.' . $this->Veterinaire->primaryKey => $id));
		$this->set('veterinaire', $this->Veterinaire->find('first', $options));

		$chats = $this->Veterinaire->Soin->Chat->find('list');
		$this->set(compact('chats'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Veterinaire->create();
			if ($this->Veterinaire->save($this->request->data)) {
				$this->Session->setFlash(__('Veterinaire enregistré.'), 'flash/success');
				$this->redirect(array('action' => 'view', $this->Veterinaire->id));
			} else {
				$this->Session->setFlash(__('Veterinaire impossible à enregistrer. Réessayez ultérieurement.'), 'flash/error');
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
        $this->Veterinaire->id = $id;
		if (!$this->Veterinaire->exists($id)) {
			throw new NotFoundException(__('Veterinaire invalide.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Veterinaire->save($this->request->data)) {
				$this->Session->setFlash(__('Veterinaire sauvegardé.'), 'flash/success');
				$this->redirect(array('action' => 'view', $this->Veterinaire->id));
			} else {
				$this->Session->setFlash(__('Veterinaire impossible à enregistrer. Réessayez ultérieurement.'), 'flash/error');
			}
		}
		$options = array('conditions' => array('Veterinaire.' . $this->Veterinaire->primaryKey => $id));
		$this->request->data = $this->Veterinaire->find('first', $options);
        $this->set('veterinaire', $this->request->data);

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
		$this->Veterinaire->id = $id;
		if (!$this->Veterinaire->exists()) {
			throw new NotFoundException(__('Veterinaire invalide.'));
		}
		if ($this->Veterinaire->delete()) {
			$this->Session->setFlash(__('Veterinaire supprimé.'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Veterinaire impossible à supprimer.'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}}
