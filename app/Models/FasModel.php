<?php

namespace App\Models;

use CodeIgniter\Model;
class FasModel extends Model
{
    protected $table = 'fas';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['task', 'task_sec'];
}