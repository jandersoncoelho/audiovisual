<?php
namespace App\Mailer;

use Cake\Mailer\Mailer;

/**
 * Usuarios mailer.
 */
class UsuariosMailer extends Mailer
{

    /**
     * Mailer's name.
     *
     * @var string
     */
    static public $name = 'Usuarios';

    public function welcome($usuario){
    	$this->to($usuario->email)
    	->profile('audiovisual')
    	->emailFormat('html')
    	->template('default')
    	->layout('default')
        ->viewVars(['nome' => $usuario->nome])
        ->subject(sprintf('Olá %s', $usuario->nome, 'você foi cadastrado no sitema de controle audiovisual.'))
        

    }

}
