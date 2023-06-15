<?php namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
 
 
class FullCalendar extends Controller
{
 
    public function calendar() {
 
        $db      = \Config\Database::connect();
        $builder = $db->table('events');   
        $query = $builder->select('*')
                    ->limit(10)->get();
 
        $file = $query->getResult();
 
       foreach ($file as $key => $value) {
            $file['file'][$key]['title'] = $value->title;
            $file['file'][$key]['start'] = $value->start_date;
            $file['file'][$key]['end'] = $value->end_date;
            $file['file'][$key]['backgroundColor'] = "#00a65a";
        }        
      return view('home',$file);
    }
    
 
}