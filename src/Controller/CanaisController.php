<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Canais Controller
 *
 * @property \App\Model\Table\CanaisTable $Canais
 *
 * @method \App\Model\Entity\Canai[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CanaisController extends AppController
{
    public function discover()
    {
        $canais = $this->paginate($this->Canais);
        $user = $this->Auth->user();

        $this->set(compact('canais', 'user'));
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Usuarios'],
        ];
        $canais = $this->paginate($this->Canais);
        $user = $this->Auth->user();

        $this->set(compact('canais', 'user'));
    }

    /**
     * View method
     *
     * @param string|null $id Canai id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $canai = $this->Canais->get($id, [
            'contain' => ['Usuarios', 'Tags'],
        ]);
        $user = $this->Auth->user();

        $this->set(compact('canai', 'user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $canai = $this->Canais->newEntity();
        $user = $this->Auth->user();

        if ($this->request->is('post')) {
            $canai = $this->Canais->patchEntity($canai, $this->request->getData());
            if ($this->Canais->save($canai)) {
                $this->Flash->success(__('The canai has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The canai could not be saved. Please, try again.'));
        }
        $usuarios = $this->Canais->Usuarios->find('list', ['limit' => 200]);
        $tags = $this->Canais->Tags->find('list', ['limit' => 200]);
        $this->set(compact('canai', 'usuarios', 'tags', 'user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Canai id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $canai = $this->Canais->get($id, [
            'contain' => ['Tags'],
        ]);
        $user = $this->Auth->user();

        if ($this->request->is(['patch', 'post', 'put'])) {
            $canai = $this->Canais->patchEntity($canai, $this->request->getData());
            if ($this->Canais->save($canai)) {
                $this->Flash->success(__('The canai has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The canai could not be saved. Please, try again.'));
        }
        $usuarios = $this->Canais->Usuarios->find('list', ['limit' => 200]);
        $tags = $this->Canais->Tags->find('list', ['limit' => 200]);
        $this->set(compact('canai', 'usuarios', 'tags', 'user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Canai id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $canai = $this->Canais->get($id);
        if ($this->Canais->delete($canai)) {
            $this->Flash->success(__('The canai has been deleted.'));
        } else {
            $this->Flash->error(__('The canai could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
