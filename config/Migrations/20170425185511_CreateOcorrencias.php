<?php
use Migrations\AbstractMigration;

class CreateOcorrencias extends AbstractMigration
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
        $table = $this->table('ocorrencias');
        $table->addColumn('idEmprestimo', 'integer', [
             'default' => null,
                'limit' => 11,
                'null' => false,
            ]);
        $table->addColumn('descricao', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('providenciaTomada', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addForeignKey('idEmprestimo', 'emprestimos', 'id');
        $table->create();
    }
}
