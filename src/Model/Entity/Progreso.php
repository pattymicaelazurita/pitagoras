<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Progreso Entity
 *
 * @property int $idProgreso
 * @property int $idNivelAlcanzado
 * @property \Cake\I18n\FrozenTime $fecha
 * @property int $puntajeActual
 * @property int $idEstudiante
 */
class Progreso extends Entity
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
        'idNivelAlcanzado' => true,
        'fecha' => true,
        'puntajeActual' => true,
        'idEstudiante' => true,
    ];
}
