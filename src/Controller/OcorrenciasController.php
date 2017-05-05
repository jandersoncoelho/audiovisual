<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ocorrencias Controller
 *
 * @property \App\Model\Table\OcorrenciasTable $Ocorrencias
 */
class OcorrenciasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $ocorrencias = $this->paginate($this->Ocorrencias);

        $this->set(compact('ocorrencias'));
        $this->set('_serialize', ['ocorrencias']);
    }

         public function isAuthorized($usuario)
{
    if (isset($usuario['tipo']) && $usuario['tipo'] === 'Administrador') {
        return true;
    }else if(in_array($this->request->action, ['index', 'logout', 'view', 'add'])){
    return true;
}
return false;
}

    /**
     * View method
     *
     * @param string|null $id Ocorrencia id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ocorrencia = $this->Ocorrencias->get($id, [
            'contain' => []
        ]);

        $this->set('ocorrencia', $ocorrencia);
        $this->set('_serialize', ['ocorrencia']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($idEmprestimo = null)
    {
        $this->set('idEmprestimo', $idEmprestimo);
        $ocorrencia = $this->Ocorrencias->newEntity();
        if ($this->request->is('post')) {
            $ocorrencia = $this->Ocorrencias->patchEntity($ocorrencia, $this->request->getData());
            if ($this->Ocorrencias->save($ocorrencia)) {
                $this->Flash->success(__('Ocorrência salva com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A ocorrência não pôde ser salva. Por favor, tente novamente.'));
        }
        $this->set(compact('ocorrencia'));
        $this->set('_serialize', ['ocorrencia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ocorrencia id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ocorrencia = $this->Ocorrencias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ocorrencia = $this->Ocorrencias->patchEntity($ocorrencia, $this->request->getData());
            if ($this->Ocorrencias->save($ocorrencia)) {
                $this->Flash->success(__('Ocorrência alterada com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A ocorrência não pôde ser alterada. Por favor, tente novamente.'));
        }
        $this->set(compact('ocorrencia'));
        $this->set('_serialize', ['ocorrencia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ocorrencia id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ocorrencia = $this->Ocorrencias->get($id);
        if ($this->Ocorrencias->delete($ocorrencia)) {
            $this->Flash->success(__('Ocorrência excluída com sucesso.'));
        } else {
            $this->Flash->error(__('A ocorrência não pôde ser excluída. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
