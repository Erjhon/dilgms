<?php

namespace App\Models;

use CodeIgniter\Model;

class DilgModel extends Model
{
    protected $table = 'dilg';
    protected $primaryKey = 'id';
    protected $allowedFields = ['lgu_place', 'brgy_num', 'income', 'lgoo_name','month','lgmes','lgcds','fas'];
}
