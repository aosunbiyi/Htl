<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Advancesetting Model
 *
 * @method \App\Model\Entity\Advancesetting get($primaryKey, $options = [])
 * @method \App\Model\Entity\Advancesetting newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Advancesetting[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Advancesetting|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Advancesetting|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Advancesetting patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Advancesetting[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Advancesetting findOrCreate($search, callable $callback = null, $options = [])
 */
class AdvancesettingTable extends Table
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

        $this->setTable('advancesetting');
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