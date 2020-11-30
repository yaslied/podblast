<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CanaisTags Controller
 *
 * @property \App\Model\Table\CanaisTagsTable $CanaisTags
 *
 * @method \App\Model\Entity\CanaisTag[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CanaisTagsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Canals', 'Tags'],
        ];
        $canaisTags = $this->paginate($this->CanaisTags);

        $this->set(compact('canaisTags'));
    }

    /**
     * View method
     *
     * @param string|null $id Canais Tag id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $canaisTag = $this->CanaisTags->get($id, [
            'contain' => ['Canals', 'Tags'],
        ]);

        $this->set('canaisTag', $canaisTag);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $canaisTag = $this->CanaisTags->newEntity();
        if ($this->request->is('post')) {
            $canaisTag = $this->CanaisTags->patchEntity($canaisTag, $this->request->getData());
            if ($this->CanaisTags->save($canaisTag)) {
                $this->Flash->success(__('The canais tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The canais tag could not be saved. Please, try again.'));
        }
        $canals = $this->CanaisTags->Canals->find('list', ['limit' => 200]);
        $tags = $this->CanaisTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('canaisTag', 'canals', 'tags'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Canais Tag id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $canaisTag = $this->CanaisTags->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $canaisTag = $this->CanaisTags->patchEntity($canaisTag, $this->request->getData());
            if ($this->CanaisTags->save($canaisTag)) {
                $this->Flash->success(__('The canais tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The canais tag could not be saved. Please, try again.'));
        }
        $canals = $this->CanaisTags->Canals->find('list', ['limit' => 200]);
        $tags = $this->CanaisTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('canaisTag', 'canals', 'tags'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Canais Tag id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $canaisTag = $this->CanaisTags->get($id);
        if ($this->CanaisTags->delete($canaisTag)) {
            $this->Flash->success(__('The canais tag has been deleted.'));
        } else {
            $this->Flash->error(__('The canais tag could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
