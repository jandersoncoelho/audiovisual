<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Emprestimo Entity
 *
 * @property int $id
 * @property int $idAtendente
 * @property int $idSolicitante
 * @property int $idEquipamento
 * @property string $nomeDevolveu
 * @property \Cake\I18n\Time $dataRetirada
 * @property \Cake\I18n\Time $dataDevolucao
 * @property string $ocorrencia
 * @property string $situacao
 *
 * @property \App\Model\Entity\Acessorio[] $acessorios
 */
class Emprestimo extends Entity
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
