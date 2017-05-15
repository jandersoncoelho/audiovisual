<?php
use Migrations\AbstractMigration;

class RemoveNomeSolicitanteFromEmprestimos extends AbstractMigration
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
        $table->removeColumn('nomeSolicitante');
        $table->update();
    }
}
