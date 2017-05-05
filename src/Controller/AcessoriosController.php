<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Acessorios Controller
 *
 * @property \App\Model\Table\AcessoriosTable $Acessorios
 */
class AcessoriosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $acessorios = $this->paginate($this->Acessorios);

        $this->set(compact('acessorios'));
        $this->set('_serialize', ['acessorios']);
    }

    /**
     * View method
     *
     * @param string|null $id Acessorio id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $acessorio = $this->Acessorios->get($id, [
            'contain' => ['Emprestimos', 'Equipamentos']
        ]);

        $this->set('acessorio', $acessorio);
        $this->set('_serialize', ['acessorio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $acessorio = $this->Acessorios->newEntity();
        if ($this->request->is('post')) {
            $acessorio = $this->Acessorios->patchEntity($acessorio, $this->request->getData());
            if ($this->Acessorios->save($acessorio)) {
                $this->Flash->success(__('Acessório cadastrado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O acessório não pôde ser salvo. Por favor, tente novamente.'));
        }
        $emprestimos = $this->Acessorios->Emprestimos->find('list', ['limit' => 200]);
        $equipamentos = $this->Acessorios->Equipamentos->find('list', ['limit' => 200]);
        $this->set(compact('acessorio', 'emprestimos', 'equipamentos'));
        $this->set('_serialize', ['acessorio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Acessorio id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $acessorio = $this->Acessorios->get($id, [
            'contain' => ['Emprestimos', 'Equipamentos']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $acessorio = $this->Acessorios->patchEntity($acessorio, $this->request->getData());
            if ($this->Acessorios->save($acessorio)) {
                $this->Flash->success(__('Acessório alterado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O acessório não pôde ser alterado. Por favor, tente novamente.'));
        }
        $emprestimos = $this->Acessorios->Emprestimos->find('list', ['limit' => 200]);
        $equipamentos = $this->Acessorios->Equipamentos->find('list', ['limit' => 200]);
        $this->set(compact('acessorio', 'emprestimos', 'equipamentos'));
        $this->set('_serialize', ['acessorio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Acessorio id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $acessorio = $this->Acessorios->get($id);
        if ($this->Acessorios->delete($acessorio)) {
            $this->Flash->success(__('Acessório excluído com sucesso.'));
        } else {
            $this->Flash->error(__('O acessório não pôde ser excluído. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
