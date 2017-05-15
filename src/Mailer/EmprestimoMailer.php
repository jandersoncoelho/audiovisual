<?php
namespace App\Mailer;

use Cake\Mailer\Mailer;

/**
 * Emprestimo mailer.
 */
class EmprestimoMailer extends Mailer
{

    /**
     * Mailer's name.
     *
     * @var string
     */
    static public $name = 'Emprestimo';

    public function emprestar($emprestimo, $solicitante, $equipamento){

        $this->to($solicitante->email)
             ->profile('audiovisual')
             ->emailFormat('html')
             ->template('emprestar')
             ->layout('default')
             ->viewVars(array('dataRetirada' => $emprestimo->dataRetirada,
              'nome' => $solicitante->nome, 'numeroPatrimonio' => $equipamento->numeroPatrimonio,
              'nomeEquipamento' => $equipamento->nome, 'acessorios' => $emprestimo->acessorios
              ))
             ->subject(sprintf('Você acabou de realizar um empréstimo.'));
    }

    public function receber($emprestimo, $solicitante, $equipamento){

        $this->to($solicitante->email)
             ->profile('audiovisual')
             ->emailFormat('html')
             ->template('receber')
             ->layout('default')
             ->viewVars(array('dataRetirada' => $emprestimo->dataRetirada,
              'nome' => $solicitante->nome, 'numeroPatrimonio' => $equipamento->numeroPatrimonio,
              'nomeEquipamento' => $equipamento->nome, 'acessorios' => $emprestimo->acessorios,
              'dataDevolucao' => $emprestimo->dataDevolucao,
              'nomeDevolveu' => $emprestimo->nomeDevolveu
              ))
             ->subject(sprintf('Seu empréstimo foi finalizado.'));
    }

}
