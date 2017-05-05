<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Equipamentos Controller
 *
 * @property \App\Model\Table\EquipamentosTable $Equipamentos
 */
class EquipamentosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $equipamentos = $this->paginate($this->Equipamentos);

        $this->set(compact('equipamentos'));
        $this->set('_serialize', ['equipamentos']);
    }

     public function isAuthorized($usuario)
{
    if (isset($usuario['tipo']) && $usuario['tipo'] === 'Administrador') {
        return true;
    }else if(in_array($this->request->action, ['index', 'logout', 'view'])){
    return true;
}
return false;
}

    /**
     * View method
     *
     * @param string|null $id Equipamento id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $equipamento = $this->Equipamentos->get($id, [
            'contain' => ['Acessorios']
        ]);

        $this->set('equipamento', $equipamento);
        $this->set('_serialize', ['equipamento']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $equipamento = $this->Equipamentos->newEntity();
        if ($this->request->is('post')) {
            $equipamento = $this->Equipamentos->patchEntity($equipamento, $this->request->getData());
            if ($this->Equipamentos->save($equipamento)) {
                $this->Flash->success(__('Equipamento cadastrado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O equipamento não pôde ser salvo. Por favor, tente novamente.'));
        }
        $acessorios = $this->Equipamentos->Acessorios->find('list', ['limit' => 200]);
        $this->set(compact('equipamento', 'acessorios'));
        $this->set('_serialize', ['equipamento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Equipamento id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $equipamento = $this->Equipamentos->get($id, [
            'contain' => ['Acessorios']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $equipamento = $this->Equipamentos->patchEntity($equipamento, $this->request->getData());
            if ($this->Equipamentos->save($equipamento)) {
                $this->Flash->success(__('Equipamento alterado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O equipamento não pôde ser alterado. Por favor, tente novamente.'));
        }
        $acessorios = $this->Equipamentos->Acessorios->find('list', ['limit' => 200]);
        $this->set(compact('equipamento', 'acessorios'));
        $this->set('_serialize', ['equipamento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Equipamento id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $equipamento = $this->Equipamentos->get($id);
        if ($this->Equipamentos->delete($equipamento)) {
            $this->Flash->success(__('Equipamento excluído com sucesso.'));
        } else {
            $this->Flash->error(__('O equipamento não pôde ser excluído. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
