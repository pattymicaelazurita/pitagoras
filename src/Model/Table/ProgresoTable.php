<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Progreso Model
 *
 * @method \App\Model\Entity\Progreso newEmptyEntity()
 * @method \App\Model\Entity\Progreso newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Progreso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Progreso get($primaryKey, $options = [])
 * @method \App\Model\Entity\Progreso findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Progreso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Progreso[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Progreso|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Progreso saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Progreso[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Progreso[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Progreso[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Progreso[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProgresoTable extends Table
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

        $this->setTable('progreso');
        $this->setDisplayField('idProgreso');
        $this->setPrimaryKey('idProgreso');
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
            ->integer('idNivelAlcanzado')
            ->requirePresence('idNivelAlcanzado', 'create')
            ->notEmptyString('idNivelAlcanzado');

        $validator
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmptyDate('fecha');

        $validator
            ->integer('puntajeActual')
            ->requirePresence('puntajeActual', 'create')
            ->notEmptyString('puntajeActual');

        $validator
            ->integer('idEstudiante')
            ->requirePresence('idEstudiante', 'create')
            ->notEmptyString('idEstudiante');

        return $validator;
    }

    /**
     * Belongs association.
     *
     * @var array
     */

    public $belongsTo = array(
        'ProgresoEstudiante' => array(
            'className' => 'EstudianteTable',
            'foreignKey' => 'idEstudiante'
        )
    );
}
