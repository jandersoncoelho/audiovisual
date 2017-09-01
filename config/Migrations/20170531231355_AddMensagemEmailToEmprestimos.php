<?php
use Migrations\AbstractMigration;

class AddMensagemEmailToEmprestimos extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('emprestimos');
        $table->addColumn('mensagemEmail', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->update();
    }
}
