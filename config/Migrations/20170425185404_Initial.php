<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {

        $this->table('acessorios')
            ->addColumn('nome', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('emprestimos')
            ->addColumn('idAtendente', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('idSolicitante', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('idEquipamento', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('nomeDevolveu', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('dataRetirada', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('dataDevolucao', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('ocorrencia', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('situacao', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->create();

        $this->table('emprestimos_acessorios', ['id' => false, 'primary_key' => ['emprestimo_id', 'acessorio_id']])
            ->addColumn('emprestimo_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('acessorio_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addIndex(
                [
                    'acessorio_id',
                ]
            )
            ->addIndex(
                [
                    'emprestimo_id',
                ]
            )
            ->addIndex(
                [
                    'acessorio_id',
                    'emprestimo_id',
                ]
            )
            ->create();

        $this->table('emprestimos_usuarios', ['id' => false, 'primary_key' => ['emprestimo_id', 'usuario_id']])
            ->addColumn('emprestimo_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('usuario_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addIndex(
                [
                    'emprestimo_id',
                ]
            )
            ->addIndex(
                [
                    'usuario_id',
                ]
            )
            ->addIndex(
                [
                    'usuario_id',
                    'emprestimo_id',
                ]
            )
            ->create();

        $this->table('equipamentos')
            ->addColumn('nome', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('numeroPatrimonio', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'numeroPatrimonio',
                ],
                ['unique' => true]
            )
            ->create();

        $this->table('equipamentos_acessorios', ['id' => false, 'primary_key' => ['equipamento_id', 'acessorio_id']])
            ->addColumn('equipamento_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('acessorio_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addIndex(
                [
                    'acessorio_id',
                ]
            )
            ->addIndex(
                [
                    'equipamento_id',
                ]
            )
            ->addIndex(
                [
                    'acessorio_id',
                    'equipamento_id',
                ]
            )
            ->create();

        $this->table('usuarios')
            ->addColumn('nome', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('password', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('tipo', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('emprestimos_acessorios')
            ->addForeignKey(
                'acessorio_id',
                'acessorios',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->addForeignKey(
                'emprestimo_id',
                'emprestimos',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

        $this->table('emprestimos_usuarios')
            ->addForeignKey(
                'emprestimo_id',
                'emprestimos',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->addForeignKey(
                'usuario_id',
                'usuarios',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

        $this->table('equipamentos_acessorios')
            ->addForeignKey(
                'acessorio_id',
                'acessorios',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->addForeignKey(
                'equipamento_id',
                'equipamentos',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();
    }

    public function down()
    {
        $this->table('emprestimos_acessorios')
            ->dropForeignKey(
                'acessorio_id'
            )
            ->dropForeignKey(
                'emprestimo_id'
            );

        $this->table('emprestimos_usuarios')
            ->dropForeignKey(
                'emprestimo_id'
            )
            ->dropForeignKey(
                'usuario_id'
            );

        $this->table('equipamentos_acessorios')
            ->dropForeignKey(
                'acessorio_id'
            )
            ->dropForeignKey(
                'equipamento_id'
            );

        $this->dropTable('acessorios');
        $this->dropTable('emprestimos');
        $this->dropTable('emprestimos_acessorios');
        $this->dropTable('emprestimos_usuarios');
        $this->dropTable('equipamentos');
        $this->dropTable('equipamentos_acessorios');
        $this->dropTable('usuarios');
    }
}
