<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ocorrencias Model
 *
 * @method \App\Model\Entity\Ocorrencia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ocorrencia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ocorrencia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ocorrencia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ocorrencia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ocorrencia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ocorrencia findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OcorrenciasTable extends Table
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

        $this->setTable('ocorrencias');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->integer('idEmprestimo')
            ->requirePresence('idEmprestimo', 'create')
            ->notEmpty('idEmprestimo');

        $validator
            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

        $validator
            ->requirePresence('providenciaTomada', 'create')
            ->notEmpty('providenciaTomada');

        return $validator;
    }
}
