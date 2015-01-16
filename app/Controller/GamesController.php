<?php

class GamesController extends AppController {
	public $helpers = array('Html', 'Form');
	public $components = array('Session');

	public function index() {
		$this->set('games', $this->Game->find('all'));
	}

	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid game'));
		}

		$game = $this->Game->findById($id);
		if (!$game) {
			throw new NotFoundException(__('Invalid game'));
		}

		$this->set('game', $game);
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Game->create();
			if ($this->Game->save($this->request->data)) {
				$this->Session->setFlash(__('Your game has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to add your game'));

		}
	}

	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid Game'));
		}

		$game = $this->Game->findById($id);
		if (!$game) {
			throw new NotFoundException(__('Invalid Game'));
		}

		if ($this->request->is(array('game', 'put'))) {
				$this->Game->id = $id;
			if ($this->Game->save($this->request->data)) {
				$this->Session->setFlash(__('Your game has been updated.'));
				return $this->redirect(array('action' => 'index'));
			}

			$this->Session->setFlash(__('Unable to update your game'));
		}

		if (!$this->request->data) {
				$this->request->data = $game;
		}
	}


	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Game->delete($id)) {
			$this->Session->setFlash (__('The game with the id: %s has been deleted.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}
	}

}