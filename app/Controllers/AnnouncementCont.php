<?php

namespace App\Controllers;

use App\Models\AnnounceModel;

class AnnouncementCont extends BaseController
{
    public function addAnnouncement()
    {
        $announceModel = new AnnounceModel();

        $data = [
            // 'title' => 'New Announcement',
            'title' => $this->request->getPost('title'),
            'start_date' => $this->request->getPost('start_date'),
            'end_date' => $this->request->getPost('end_date'),
        ];

        $announceModel->insert($data);

        return redirect()->to('admin/announcement')->with('success', 'Data added successfully.');
    }

    public function index()
    {
        $announceModel = new AnnounceModel();
        $data['announcements'] = $announceModel->findAll();

        return view('home', $data);
    }

    
}