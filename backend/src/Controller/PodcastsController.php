<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Podcasts Controller
 *
 * @property \App\Model\Table\PodcastsTable $Podcasts
 *
 * @method \App\Model\Entity\Podcast[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PodcastsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Canals'],
        ];
        $podcasts = $this->paginate($this->Podcasts);

        $this->set(compact('podcasts'));
    }

    /**
     * View method
     *
     * @param string|null $id Podcast id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $podcast = $this->Podcasts->get($id, [
            'contain' => ['Canals'],
        ]);

        $this->set('podcast', $podcast);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $podcast = $this->Podcasts->newEntity();
        if ($this->request->is('post')) {
            $podcast = $this->Podcasts->patchEntity($podcast, $this->request->getData());
            if ($this->Podcasts->save($podcast)) {
                $this->Flash->success(__('The podcast has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The podcast could not be saved. Please, try again.'));
        }
        $canals = $this->Podcasts->Canals->find('list', ['limit' => 200]);
        $this->set(compact('podcast', 'canals'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Podcast id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $podcast = $this->Podcasts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $podcast = $this->Podcasts->patchEntity($podcast, $this->request->getData());
            if ($this->Podcasts->save($podcast)) {
                $this->Flash->success(__('The podcast has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The podcast could not be saved. Please, try again.'));
        }
        $canals = $this->Podcasts->Canals->find('list', ['limit' => 200]);
        $this->set(compact('podcast', 'canals'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Podcast id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $podcast = $this->Podcasts->get($id);
        if ($this->Podcasts->delete($podcast)) {
            $this->Flash->success(__('The podcast has been deleted.'));
        } else {
            $this->Flash->error(__('The podcast could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
