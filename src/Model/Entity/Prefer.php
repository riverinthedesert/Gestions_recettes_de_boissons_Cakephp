<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Prefer extends Entity
{
    protected $_accessible = [
        'id' => true,
        'titre'=>true,
        'idRecette' => true,
        'idUser'=>true,
    ];
}
?>