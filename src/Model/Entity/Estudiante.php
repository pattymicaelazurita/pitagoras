<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Authentication\PasswordHasher\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * Estudiante Entity
 *
 * @property int $idEstudiante
 * @property string $nombre
 * @property string $password
 * @property string $correo
 * @property \Cake\I18n\FrozenDate $fechaNacimiento
 * @property string $cedula
 * @property int $idTutor
 */
class Estudiante extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'nombre' => true,
        'password' => true,
        'correo' => true,
        'fechaNacimiento' => true,
        'cedula' => true,
        'idTutor' => true,
    ];

    protected $_hidden = [
        'password',
    ];

    protected function _setPassword($password)
    {
        if(strlen($password) > 0){
            return (new DefaultPasswordHasher())->hash($password);
        }
    }
}
