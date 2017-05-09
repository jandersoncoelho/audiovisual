<?php
use Migrations\AbstractMigration;

class AddEquipamentoIdIdexToEmprestimos extends AbstractMigration
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
        $table->addColumn('equipamento_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addIndex([
            'equipamento_id',
        ], [
            'name' => 'BY_EQUIPAMENTO_ID',
            'unique' => false,
        ]);

        $table->addForeignKey(
                'equipamento_id',
                'equipamentos',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            );

        $table->update();
    }
}

