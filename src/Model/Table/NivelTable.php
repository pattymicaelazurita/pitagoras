<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Nivel Model
 *
 * @method \App\Model\Entity\Nivel newEmptyEntity()
 * @method \App\Model\Entity\Nivel newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Nivel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Nivel get($primaryKey, $options = [])
 * @method \App\Model\Entity\Nivel findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Nivel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Nivel[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Nivel|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Nivel saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Nivel[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Nivel[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Nivel[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Nivel[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class NivelTable extends Table
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

        $this->setTable('nivel');
        $this->setDisplayField('idNivel');
        $this->setPrimaryKey('idNivel');
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
            ->maxLength('nombre', 15)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('temas')
            ->maxLength('temas', 255)
            ->requirePresence('temas', 'create')
            ->notEmptyString('temas');

        $validator
            ->integer('idCiencia')
            ->requirePresence('idCiencia', 'create')
            ->notEmptyString('idCiencia');

        return $validator;
    }
}
