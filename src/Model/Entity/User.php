<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $user_id
 * @property string $user_name
 * @property int $age
 * @property int $seibetsu
 * @property int $tdfk
 * @property string $address
 * @property string|null $hobby1
 * @property string|null $hobby2
 * @property string|null $hobby3
 * @property string|null $prof
 */
class User extends Entity
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
        'user_name' => true,
        'age' => true,
        'seibetsu' => true,
        'tdfk' => true,
        'address' => true,
        'hobby1' => true,
        'hobby2' => true,
        'hobby3' => true,
        'prof' => true,
    ];
}
