<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Organizacao Entity
 *
 * @property int $id
 * @property string $pessoa_id
 * @property string $data_criacao
 *
 * @property \App\Model\Entity\Pessoa $pessoa
 * @property \App\Model\Entity\Lideranca[] $liderancas
 */
class Organizacao extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
