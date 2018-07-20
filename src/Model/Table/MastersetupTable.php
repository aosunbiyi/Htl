<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Mastersetup Model
 *
 * @method \App\Model\Entity\Mastersetup get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mastersetup newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Mastersetup[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mastersetup|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mastersetup|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mastersetup patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mastersetup[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mastersetup findOrCreate($search, callable $callback = null, $options = [])
 */
class MastersetupTable extends Table
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

        $this->setTable('mastersetup');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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

        return $validator;
    }
}
