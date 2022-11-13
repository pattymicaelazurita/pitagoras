<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tutor Model
 *
 * @method \App\Model\Entity\Tutor newEmptyEntity()
 * @method \App\Model\Entity\Tutor newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Tutor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tutor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tutor findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Tutor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tutor[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tutor|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tutor saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tutor[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tutor[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tutor[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tutor[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TutorTable extends Table
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

        $this->setTable('tutor');
        $this->setDisplayField('idTutor');
        $this->setPrimaryKey('idTutor');
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
            ->notEmptyString('correo');

        $validator
            ->dateTime('fechaNacimiento')
            ->requirePresence('fechaNacimiento', 'create')
            ->notEmptyDateTime('fechaNacimiento');

        $validator
            ->scalar('cedula')
            ->maxLength('cedula', 11)
            ->requirePresence('cedula', 'create')
            ->notEmptyString('cedula');

        return $validator;
    }
}
