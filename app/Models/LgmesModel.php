<?php

namespace App\Models;

use CodeIgniter\Model;

class LgmesModel extends Model
{
protected $table = 'lgmes';
protected $primaryKey = 'id';

protected $allowedFields = ['task', 'task_sec'];
}