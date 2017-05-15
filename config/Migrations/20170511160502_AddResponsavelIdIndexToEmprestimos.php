<?php
use Migrations\AbstractMigration;

class AddResponsavelIdIndexToEmprestimos extends AbstractMigration
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
        $table->addColumn('responsavel_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addIndex([
            'responsavel_id',
        ], [
            'name' => 'BY_RESPONSAVEL_ID',
            'unique' => false,
        ]);
        $table->update();
    }
}
