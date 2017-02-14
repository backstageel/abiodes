<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pessoa Entity
 *
 * @property int $id
 * @property string $user_id
 * @property string $name
 * @property string $data_nascimento
 * @property string $telemovel
 * @property string $email
 * @property string $nuit
 * @property string $numero_bi
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Lideranca[] $liderancas
 * @property \App\Model\Entity\Membro[] $membros
 * @property \App\Model\Entity\Organizacao[] $organizacaos
 */
class Pessoa extends Entity
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
