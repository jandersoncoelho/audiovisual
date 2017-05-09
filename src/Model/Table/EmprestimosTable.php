<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Emprestimos Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Acessorios
 *
 * @method \App\Model\Entity\Emprestimo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Emprestimo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Emprestimo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Emprestimo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Emprestimo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Emprestimo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Emprestimo findOrCreate($search, callable $callback = null, $options = [])
 */
class EmprestimosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('emprestimos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

         $this->hasMany('Ocorrencias', [
            'foreignKey' => 'idEmprestimo'
        ]);

        $this->belongsToMany('Acessorios', [
            'foreignKey' => 'emprestimo_id',
            'targetForeignKey' => 'acessorio_id',
            'joinTable' => 'emprestimos_acessorios'
        ]);

         $this->belongsTo('Solicitantes');
         //$this->belongsTo('Equipamentos');
        //$this->belongsTo('Usuarios');

         $this->belongsTo('Equipamentos', [
            'foreignKey' => 'equipamento_id',
            'joinType' => 'INNER'
        ]);

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

       
            $validator
            ->requirePresence('nomeAtendente', 'create')
            ->notEmpty('nomeAtendente');

        $validator
            ->requirePresence('nomeSolicitante', 'create')
            ->notEmpty('nomeSolicitante');

        $validator
            ->allowEmpty('nomeResponsavel');

        $validator
            ->allowEmpty('numeroPatrimonio');

        $validator
            ->allowEmpty('nomeDevolveu');

        $validator
            ->dateTime('dataRetirada')
            ->allowEmpty('dataRetirada');

        $validator
            ->dateTime('dataDevolucao')
            ->allowEmpty('dataDevolucao');

        $validator
            ->allowEmpty('situacao');

        return $validator;
    }
}
