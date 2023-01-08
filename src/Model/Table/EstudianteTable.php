<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Il8n\Time;
use Cake\Il8n\Date;

/**
 * Estudiante Model
 *
 * @method \App\Model\Entity\Estudiante newEmptyEntity()
 * @method \App\Model\Entity\Estudiante newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Estudiante[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Estudiante get($primaryKey, $options = [])
 * @method \App\Model\Entity\Estudiante findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Estudiante patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Estudiante[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Estudiante|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Estudiante saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Estudiante[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Estudiante[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Estudiante[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Estudiante[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EstudianteTable extends Table
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

        $this->setTable('estudiante');
        $this->setDisplayField('idEstudiante');
        $this->setPrimaryKey('idEstudiante');
    }

    /*public function validarFechas($value,$context) 
    { 
        if (!empty($context['data']['fechaNacimiento'])) 
        { 
            $sd = $context['data']['fechaNacimiento']; 
            $sd = $sd['year'].'-'.$sd['month'].'-'.$sd['day']; 
            $ed = date(); 
            $ed = $ed['year'].'-'.$ed['month'].'-'.$ed['day']; 

            $inicio = new Date($sd); 
            $fin = new Date($ed); 
            
            if ($inicio < $fin) { 
                return true; 
            } 
            else 
            { 
                return false; 
            } 
        } 
        else { 
            return false; 
        } 
    }*/

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
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->scalar('correo')
            ->maxLength('correo', 255)
            ->requirePresence('correo', 'create')
            ->notEmptyString('correo')
            ->add('correo', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->date('fechaNacimiento')
            ->requirePresence('fechaNacimiento', 'create')
            ->notEmptyDate('fechaNacimiento')
            /*->add('fechaNacimiento', 
            [ 'validarFechas'=> 
            [ 
                'rule'=>'validarFechas', 
                'provider'=>'table', 
                'message'=>'Fecha Invalida.' 
                ] 
                ] 
            )*/;

        $validator
            ->scalar('cedula')
            ->maxLength('cedula', 11)
            ->requirePresence('cedula', 'create')
            ->notEmptyString('cedula');

        $validator
            ->integer('idTutor')
            ->requirePresence('idTutor', 'create')
            ->notEmptyString('idTutor');

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

    /**
     * Has many asociation.
     *
     * @var array
     */

    public $hasMany = array(
        'ProgresoEstudianteEstudiante' => array(
            'className' => 'ProgresoTable',
            'foreignKey' => 'idEstudiante'
        )
    );
}
