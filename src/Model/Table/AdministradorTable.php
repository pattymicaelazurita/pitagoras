<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Administrador Model
 *
 * @method \App\Model\Entity\Administrador newEmptyEntity()
 * @method \App\Model\Entity\Administrador newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Administrador[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Administrador get($primaryKey, $options = [])
 * @method \App\Model\Entity\Administrador findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Administrador patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Administrador[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Administrador|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Administrador saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Administrador[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Administrador[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Administrador[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Administrador[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AdministradorTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('administrador');
        $this->setDisplayField('idAdministrador');
        $this->setPrimaryKey('idAdministrador');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 50)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('contrasenia')
            ->maxLength('contrasenia', 255)
            ->requirePresence('contrasenia', 'create')
            ->notEmptyString('contrasenia');

        $validator
            ->scalar('correo')
            ->maxLength('correo', 255)
            ->requirePresence('correo', 'create')
            ->notEmptyString('correo')
            ->add('correo', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['correo']), ['errorField' => 'correo']);

        return $rules;
    }
}
