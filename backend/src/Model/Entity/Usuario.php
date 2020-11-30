<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Usuario Entity
 *
 * @property int $id
 * @property string $nome
 * @property string|null $img_perfil
 * @property string $email
 * @property string|null $sobre
 * @property string $senha
 *
 * @property \App\Model\Entity\Canai[] $canais
 */
class Usuario extends Entity
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
        'nome' => true,
        'img_perfil' => true,
        'email' => true,
        'sobre' => true,
        'senha' => true,
        'canais' => true,
    ];

    protected $_hidden = [
        'senha'
    ];

    protected function _setSenha($senha)
    {
        if (strlen($senha) > 0) {
          return (new DefaultPasswordHasher)->hash($senha);
        }
    }
}
