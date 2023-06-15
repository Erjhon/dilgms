<?php

namespace App\Controllers;

use App\Models\FileModel;
use App\Models\AnnounceModel;

class FileController extends BaseController
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
            $fileModel = new FileModel();
            $fileModel->insert([
                'filename' => $file->getName(),
                'filepath' => 'public/uploads/' . $newName
            ]);
            
            return redirect()->to('admin/dashboard')->with('success', 'File uploaded successfully');
        } else {
            return redirect()->back()->withInput()->with('error', $file->getErrorString());
        }
    
    }

    public function showFiles()
    {
        $fileModel = new FileModel();
        $data['files'] = $fileModel->orderBy('id', 'desc')->findAll();
    
        $announceModel = new AnnounceModel();
        $data['announcements'] = $announceModel->findAll();
    
        return view('layout/dashboard', $data);
    }

    public function fileShow()
    {
        $fileModel = new FileModel();
        $data['files'] = $fileModel->findAll();

        $announceModel = new AnnounceModel();
        $data['announcements'] = $announceModel->findAll();
    
        return view('layout/userdashboard', $data);
    }

    public function deleteFile($id)
{
    $fileModel = new FileModel();
    $file = $fileModel->find($id);

    if (!$file) {
        return redirect()->back()->with('error', 'File not found');
    }

    $filePath = ROOTPATH . $file['filepath'];

    if (file_exists($filePath)) {
        unlink($filePath); // Delete the file from the filesystem
    }

    $fileModel->delete($id); // Delete the file record from the database

    return redirect()->back()->with('success', 'File deleted successfully');
}

}