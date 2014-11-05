<?php
class MessageController extends AppController {
    public $helpers = array('Html', 'Form');
    public $components = array('Session');

    public function index() {
        $this->set('messages', $this->Message->find('all'));
    }

     public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid Message'));
        }

        $message = $this->Message->findById($id);
        if (!$message) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('messages', $message);
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->request->data['Message']['user_id'] = $this->Auth->user('id');
            $this->Message->create();
            if ($this->Message->save($this->request->data)) {
                $this->Session->setFlash(__('Your message has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your message.'));
        }
    }

    public function edit($id = null) {
    if (!$id) {
        throw new NotFoundException(__('Invalid message'));
    }

    $message = $this->Message->findById($id);
    if (!$message) {
        throw new NotFoundException(__('Invalid message'));
    }

    if ($this->request->is(array('post', 'put'))) {
        $this->Message->id = $id;
        if ($this->Message->save($this->request->data)) {
            $this->Session->setFlash(__('Your post has been updated.'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Unable to update your post.'));
    }

    if (!$this->request->data) {
        $this->request->data = $message;
    }
}
}
?>