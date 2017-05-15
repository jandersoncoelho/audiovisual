<?php
use Migrations\AbstractMigration;

class AddAtendenteIdToEmprestimos extends AbstractMigration
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
        $table->addColumn('atendente_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addIndex([
            'atendente_id',
        ], [
            'name' => 'BY_ATENDENTE_ID',
            'unique' => false,
        ]);
        $table->update();
    }
}
