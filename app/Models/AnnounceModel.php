<?php

namespace App\Models;

use CodeIgniter\Model;

class AnnounceModel extends Model
{
    protected $table = 'announcement';
    protected $primaryKey = 'id';
    protected $allowedFields = ['filename', 'filepath'];
}
