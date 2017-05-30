<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Acessorios Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Emprestimos
 * @property \Cake\ORM\Association\BelongsToMany $Equipamentos
 *
 * @method \App\Model\Entity\Acessorio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Acessorio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Acessorio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Acessorio|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Acessorio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Acessorio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Acessorio findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AcessoriosTable extends Table
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

        $this->setTable('acessorios');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Emprestimos', [
            'foreignKey' => 'acessorio_id',
            'targetForeignKey' => 'emprestimo_id',
            'joinTable' => 'emprestimos_acessorios'
        ]);
        $this->belongsToMany('Equipamentos', [
            'foreignKey' => 'acessorio_id',
            'targetForeignKey' => 'equipamento_id',
            'joinTable' => 'equipamentos_acessorios'
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
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['nome']));

        return $rules;
    }
}
