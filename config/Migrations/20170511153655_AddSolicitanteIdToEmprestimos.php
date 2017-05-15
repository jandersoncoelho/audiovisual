<?php
use Migrations\AbstractMigration;

class AddSolicitanteIdToEmprestimos extends AbstractMigration
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
        $table->addColumn('solicitante_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addIndex([
            'solicitante_id',
        ], [
            'name' => 'BY_SOLICITANTE_ID',
            'unique' => false,
        ]);
        $table->update();
    }
}
