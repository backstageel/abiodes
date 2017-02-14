<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Membros Controller
 *
 * @property \App\Model\Table\MembrosTable $Membros
 */
class MembrosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Liderancas', 'Pessoas']
        ];
        $membros = $this->paginate($this->Membros);

        $this->set(compact('membros'));
        $this->set('_serialize', ['membros']);
    }

    /**
     * View method
     *
     * @param string|null $id Membro id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $membro = $this->Membros->get($id, [
            'contain' => ['Liderancas', 'Pessoas']
        ]);

        $this->set('membro', $membro);
        $this->set('_serialize', ['membro']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $membro = $this->Membros->newEntity();
        if ($this->request->is('post')) {
            $membro = $this->Membros->patchEntity($membro, $this->request->data);
            if ($this->Membros->save($membro)) {
                $this->Flash->success(__('The {0} has been saved.', 'Membro'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Membro'));
            }
        }
        $liderancas = $this->Membros->Liderancas->find('list', ['limit' => 200]);
        $pessoas = $this->Membros->Pessoas->find('list', ['limit' => 200]);
        $this->set(compact('membro', 'liderancas', 'pessoas'));
        $this->set('_serialize', ['membro']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Membro id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $membro = $this->Membros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $membro = $this->Membros->patchEntity($membro, $this->request->data);
            if ($this->Membros->save($membro)) {
                $this->Flash->success(__('The {0} has been saved.', 'Membro'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Membro'));
            }
        }
        $liderancas = $this->Membros->Liderancas->find('list', ['limit' => 200]);
        $pessoas = $this->Membros->Pessoas->find('list', ['limit' => 200]);
        $this->set(compact('membro', 'liderancas', 'pessoas'));
        $this->set('_serialize', ['membro']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Membro id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $membro = $this->Membros->get($id);
        if ($this->Membros->delete($membro)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Membro'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Membro'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
