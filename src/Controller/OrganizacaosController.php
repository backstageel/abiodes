<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Organizacaos Controller
 *
 * @property \App\Model\Table\OrganizacaosTable $Organizacaos
 */
class OrganizacaosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pessoas']
        ];
        $organizacaos = $this->paginate($this->Organizacaos);

        $this->set(compact('organizacaos'));
        $this->set('_serialize', ['organizacaos']);
    }

    /**
     * View method
     *
     * @param string|null $id Organizacao id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $organizacao = $this->Organizacaos->get($id, [
            'contain' => ['Pessoas', 'Liderancas']
        ]);

        $this->set('organizacao', $organizacao);
        $this->set('_serialize', ['organizacao']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $organizacao = $this->Organizacaos->newEntity();
        if ($this->request->is('post')) {
            $organizacao = $this->Organizacaos->patchEntity($organizacao, $this->request->data);
            if ($this->Organizacaos->save($organizacao)) {
                $this->Flash->success(__('The {0} has been saved.', 'Organizacao'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Organizacao'));
            }
        }
        $pessoas = $this->Organizacaos->Pessoas->find('list', ['limit' => 200]);
        $this->set(compact('organizacao', 'pessoas'));
        $this->set('_serialize', ['organizacao']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Organizacao id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $organizacao = $this->Organizacaos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $organizacao = $this->Organizacaos->patchEntity($organizacao, $this->request->data);
            if ($this->Organizacaos->save($organizacao)) {
                $this->Flash->success(__('The {0} has been saved.', 'Organizacao'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Organizacao'));
            }
        }
        $pessoas = $this->Organizacaos->Pessoas->find('list', ['limit' => 200]);
        $this->set(compact('organizacao', 'pessoas'));
        $this->set('_serialize', ['organizacao']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Organizacao id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $organizacao = $this->Organizacaos->get($id);
        if ($this->Organizacaos->delete($organizacao)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Organizacao'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Organizacao'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
