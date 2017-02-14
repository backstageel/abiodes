<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Liderancas Controller
 *
 * @property \App\Model\Table\LiderancasTable $Liderancas
 */
class LiderancasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Organizacaos', 'Pessoas']
        ];
        $liderancas = $this->paginate($this->Liderancas);

        $this->set(compact('liderancas'));
        $this->set('_serialize', ['liderancas']);
    }

    /**
     * View method
     *
     * @param string|null $id Lideranca id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lideranca = $this->Liderancas->get($id, [
            'contain' => ['Organizacaos', 'Pessoas', 'Membros']
        ]);

        $this->set('lideranca', $lideranca);
        $this->set('_serialize', ['lideranca']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lideranca = $this->Liderancas->newEntity();
        if ($this->request->is('post')) {
            $lideranca = $this->Liderancas->patchEntity($lideranca, $this->request->data);
            if ($this->Liderancas->save($lideranca)) {
                $this->Flash->success(__('The {0} has been saved.', 'Lideranca'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Lideranca'));
            }
        }
        $organizacaos = $this->Liderancas->Organizacaos->find('list', ['limit' => 200]);
        $pessoas = $this->Liderancas->Pessoas->find('list', ['limit' => 200]);
        $this->set(compact('lideranca', 'organizacaos', 'pessoas'));
        $this->set('_serialize', ['lideranca']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Lideranca id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lideranca = $this->Liderancas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lideranca = $this->Liderancas->patchEntity($lideranca, $this->request->data);
            if ($this->Liderancas->save($lideranca)) {
                $this->Flash->success(__('The {0} has been saved.', 'Lideranca'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Lideranca'));
            }
        }
        $organizacaos = $this->Liderancas->Organizacaos->find('list', ['limit' => 200]);
        $pessoas = $this->Liderancas->Pessoas->find('list', ['limit' => 200]);
        $this->set(compact('lideranca', 'organizacaos', 'pessoas'));
        $this->set('_serialize', ['lideranca']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Lideranca id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lideranca = $this->Liderancas->get($id);
        if ($this->Liderancas->delete($lideranca)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Lideranca'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Lideranca'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
