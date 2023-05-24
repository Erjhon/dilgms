<?php

namespace App\Controllers;

use App\Models\AnnounceModel;

class AnnouncementCont extends BaseController
{
    public function index()
    {
        return view('file_submission');
    }

    public function getFile($filename)
{
    $filePath = 'public/uploads/' . $filename;

    if (file_exists($filePath)) {
        return $this->response->download($filePath, null);
    } else {
        return $this->response->setStatusCode(404);
    }
}

    public function submitFile()
    {
        $file = $this->request->getFile('userfile');

        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(ROOTPATH . 'public/uploads', $newName);

            // Save file details to the database
            $fileModel = new AnnounceModel();
            $fileModel->insert([
                'filename' => $file->getName(),
                'filepath' => 'public/uploads/' . $newName
            ]);
            
            return redirect()->to('user/home')->with('success', 'File uploaded successfully');
        } else {
            return redirect()->back()->withInput()->with('error', $file->getErrorString());
        }
    
    }

    public function fileShow()
    {
        $fileModel = new AnnounceModel();
        $data['files'] = $fileModel->findAll();
    
        $announceModel = new AnnounceModel();
        $data['announcements'] = $announceModel->findAll();
    
        return view('layout/userdashboard', $data);
    }
    public function showFiles()
    {
        $fileModel = new AnnounceModel();
        $data['files'] = $fileModel->findAll();
    
        $announceModel = new AnnounceModel();
        $data['announcements'] = $announceModel->findAll();
    
        return view('layout/dashboard', $data);
    }
    

}
