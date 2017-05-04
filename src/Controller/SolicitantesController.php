<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Solicitantes Controller
 *
 * @property \App\Model\Table\SolicitantesTable $Solicitantes
 */
class SolicitantesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $solicitantes = $this->paginate($this->Solicitantes);

        $this->set(compact('solicitantes'));
        $this->set('_serialize', ['solicitantes']);
    }

    /**
     * View method
     *
     * @param string|null $id Solicitante id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $solicitante = $this->Solicitantes->get($id, [
            'contain' => []
        ]);

        $this->set('solicitante', $solicitante);
        $this->set('_serialize', ['solicitante']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $solicitante = $this->Solicitantes->newEntity();
        if ($this->request->is('post')) {
            $solicitante = $this->Solicitantes->patchEntity($solicitante, $this->request->getData());
            if ($this->Solicitantes->save($solicitante)) {
                $this->Flash->success(__('The solicitante has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The solicitante could not be saved. Please, try again.'));
        }
        $this->set(compact('solicitante'));
        $this->set('_serialize', ['solicitante']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Solicitante id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $solicitante = $this->Solicitantes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $solicitante = $this->Solicitantes->patchEntity($solicitante, $this->request->getData());
            if ($this->Solicitantes->save($solicitante)) {
                $this->Flash->success(__('The solicitante has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The solicitante could not be saved. Please, try again.'));
        }
        $this->set(compact('solicitante'));
        $this->set('_serialize', ['solicitante']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Solicitante id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $solicitante = $this->Solicitantes->get($id);
        if ($this->Solicitantes->delete($solicitante)) {
            $this->Flash->success(__('The solicitante has been deleted.'));
        } else {
            $this->Flash->error(__('The solicitante could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
