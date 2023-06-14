<?php 
namespace App\Models;
use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table = 'task';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['dilg_id','task','task_sec','task_third'];
}