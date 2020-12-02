<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * Podcasts Controller
 *
 * @property \App\Model\Table\PodcastsTable $Podcasts
 *
 * @method \App\Model\Entity\Podcast[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PodcastsController extends AppController
{   
    public function listen()
    {
        $podcasts = $this->paginate($this->Podcasts);
        $user = $this->Auth->user();
        $podcastsTable = TableRegistry::getTableLocator()->get('podcasts');
        $podcast = $podcastsTable->getPodcasts($user['id']);
        $this->set(compact('podcasts', 'user', 'podcast'));
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Canais'],
        ];
        $podcasts = $this->paginate($this->Podcasts);
        $user = $this->Auth->user();

        $this->set(compact('podcasts', 'user'));
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
        $user = $this->Auth->user();

        $this->set(compact('podcast', 'user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $podcast = $this->Podcasts->newEntity();
        $user = $this->Auth->user();

        if ($this->request->is('post')) {
            $podcast = $this->Podcasts->patchEntity($podcast, $this->request->getData());
            $podcast->arquivo = $this->Podcasts->slugUpload($this->request->getData('arquivo')['name']);
            $podcast->capa =  $this->Podcasts->slugUpload($this->request->getData('capa')['name']);
            $podcast->numero_ep = 0;
            $podcast->usuario_id = $user['id'];
            if ($this->Podcasts->save($podcast)) {
                $dest = WWW_ROOT."files".DS."podcasts".DS.$podcast->id.DS;
                $arq = $this->request->getData()['arquivo'];
                $arq['name'] = $podcast->arquivo;
                $img = $this->request->getData()['capa'];
                $img['name'] = $podcast->capa;
                $this->Podcasts->upload($arq, $dest);
                $this->Podcasts->uploadImgRed($img, $dest, 200, 200);
                $this->Flash->success(__('The podcast has been saved.'));

                return $this->redirect(['controller' => 'Usuarios','action' => 'profile']);
            }
            $this->Flash->error(__('The podcast could not be saved. Please, try again.'));
        }
        $canals = $this->Podcasts->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('podcast', 'canals', 'user'));
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
        $user = $this->Auth->user();

        if ($this->request->is(['patch', 'post', 'put'])) {
            $podcast = $this->Podcasts->patchEntity($podcast, $this->request->getData());
            if ($this->Podcasts->save($podcast)) {
                $this->Flash->success(__('The podcast has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The podcast could not be saved. Please, try again.'));
        }
        $canals = $this->Podcasts->Canals->find('list', ['limit' => 200]);
        $this->set(compact('podcast', 'canals', 'user'));
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
