<?php

namespace App\Models;

use Zizaco\Entrust\EntrustPermission;

/**
 * Class Permission
 * @package App\models
 */
class Permission extends EntrustPermission
{
    protected $fillable = ['name','display_name','description'];

}
