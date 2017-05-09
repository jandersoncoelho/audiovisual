<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Equipamentos Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Acessorios
 *
 * @method \App\Model\Entity\Equipamento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Equipamento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Equipamento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Equipamento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Equipamento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Equipamento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Equipamento findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EquipamentosTable extends Table
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

        $this->setTable('equipamentos');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Acessorios', [
            'foreignKey' => 'equipamento_id',
            'targetForeignKey' => 'acessorio_id',
            'joinTable' => 'equipamentos_acessorios'
        ]);

        $this->hasMany('Emprestimos', [
            'foreignKey' => 'equipamento_id'
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

        $validator
            ->requirePresence('numeroPatrimonio', 'create')
            ->notEmpty('numeroPatrimonio')
            ->add('numeroPatrimonio', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['numeroPatrimonio']));

        return $rules;
    }
}
