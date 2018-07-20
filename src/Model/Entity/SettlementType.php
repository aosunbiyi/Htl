<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SettlementType Entity
 *
 * @property int $id
 * @property string $settlement_name
 * @property string $alias
 * @property int $active
 * @property string $payment_option
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\CardTypePrefix[] $card_type_prefixes
 */
class SettlementType extends Entity
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
        'settlement_name' => true,
        'alias' => true,
        'active' => true,
        'payment_option' => true,
        'created' => true,
        'modified' => true,
        'card_type_prefixes' => true
    ];
}
