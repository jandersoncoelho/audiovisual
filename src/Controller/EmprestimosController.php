<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Emprestimos Controller
 *
 * @property \App\Model\Table\EmprestimosTable $Emprestimos
 */
class EmprestimosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */

    public function index()
    {

       $pendentes = $this->Emprestimos->find('all', array(
        'conditions' => array('Emprestimos.situacao' => 'Pendente')
    ));

     $this->set('pendentes', $this->paginate($pendentes));

        $this->set(compact('pendentes'));
        $this->set('_serialize', ['emprestimos']);
    }

       public function finalizados()
    {
    $devolvidos = $this->Emprestimos->find('all', array(
        'conditions' => array('Emprestimos.situacao' => 'Devolvido')
    ));

     $this->set('devolvidos', $this->paginate($devolvidos));

        $this->set(compact('devolvidos'));
        $this->set('_serialize', ['devolvidos']);
    }

 

    /**
     * View method
     *
     * @param string|null $id Emprestimo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $emprestimo = $this->Emprestimos->get($id, [
            'contain' => ['Acessorios', 'Ocorrencias']
        ]);

        $this->set('emprestimo', $emprestimo);
        $this->set('_serialize', ['emprestimo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */

    public function finish($id = null){
        $emprestimo = $this->Emprestimos->get($id, [
            'contain' => ['Acessorios']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])  && $emprestimo->situacao == 'Pendente') {
            $emprestimo = $this->Emprestimos->patchEntity($emprestimo, $this->request->getData());
            if ($this->Emprestimos->save($emprestimo)) {
                $this->Flash->success(__('The emprestimo has been saved.'));

                return $this->redirect(['action' => 'finalizados']);
            }
            $this->Flash->error(__('The emprestimo could not be saved. Please, try again.'));
        }
        $this->set(compact('emprestimo'));
        $this->set('_serialize', ['emprestimo']);
    }

    public function add()
    {
        $emprestimo = $this->Emprestimos->newEntity();
        if ($this->request->is('post')) {
            $emprestimo = $this->Emprestimos->patchEntity($emprestimo, $this->request->getData());
            if ($this->Emprestimos->save($emprestimo)) {
                $this->Flash->success(__('The emprestimo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The emprestimo could not be saved. Please, try again.'));
        }

        $acessorios = $this->Emprestimos->Acessorios->find('list', ['limit' => 200]);
        $solicitantes = $this->Emprestimos->Solicitantes->find('list', ['limit' => 200]);
        $equipamentos = $this->Emprestimos->Equipamentos->find('list', ['limit' => 200]);
        $this->set(compact('emprestimo', 'acessorios', 'solicitantes', 'equipamentos'));
        $this->set('_serialize', ['emprestimo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Emprestimo id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $emprestimo = $this->Emprestimos->get($id, [
            'contain' => ['Acessorios']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $emprestimo = $this->Emprestimos->patchEntity($emprestimo, $this->request->getData());
            if ($this->Emprestimos->save($emprestimo)) {
                $this->Flash->success(__('The emprestimo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The emprestimo could not be saved. Please, try again.'));
        }
        $acessorios = $this->Emprestimos->Acessorios->find('list', ['limit' => 200]);
        $solicitantes = $this->Emprestimos->Solicitantes->find('list', ['limit' => 200]);
        $this->set(compact('emprestimo', 'acessorios', 'solicitantes'));
        $this->set('_serialize', ['emprestimo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Emprestimo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $emprestimo = $this->Emprestimos->get($id);
        if ($this->Emprestimos->delete($emprestimo)) {
            $this->Flash->success(__('The emprestimo has been deleted.'));
        } else {
            $this->Flash->error(__('The emprestimo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
