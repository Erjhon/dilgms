<?php

namespace App\Controllers;

use App\Models\EventModel;
use CodeIgniter\Controller;

class EventController extends Controller
{
    public function index()
    {
        $eventModel = new EventModel();
        $data['events'] = $eventModel->getAllEvents();
    
        return view('layout/announcement', $data);
    }
    public function delete($id)
{
    $eventModel = new EventModel();
    $eventModel->delete($id);

    return redirect()->to('events');
}

    
}