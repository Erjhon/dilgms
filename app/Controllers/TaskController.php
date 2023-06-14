<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\FasModel;
use App\Models\LgmesModel;

class TaskController extends BaseController
{
    public function insert()
    {
        $taskModel = new TaskModel();

        $data = [
            $id => $this->request->getPost('dilg_id'),
            'task' => $this->request->getPost('task'),
            'task_sec' => $this->request->getPost('task_sec'),
            'task_third' => $this->request->getPost('task_third'),
        ];

        $taskModel->insert($data);
        

        return redirect()->to('/dilg')->with('success', 'Data added successfully.');
    }

    public function lgmes()
    {
        $lgmesModel = new LgmesModel();

        $data = [
            'task' => $this->request->getPost('task'),
            'task_sec' => $this->request->getPost('task_sec'),
        ];

        $lgmesModel->insert($data);

        return redirect()->to('/dilg')->with('success', 'Data added successfully.');
    }

    public function fas()
    {
        $fasModel = new FasModel();

        $data = [
            'task' => $this->request->getPost('task'),
            'task_sec' => $this->request->getPost('task_sec'),
        ];

        $fasModel->insert($data);

        return redirect()->to('/dilg')->with('success', 'Data added successfully.');
    }
}