<?php

namespace App\Controllers;

use App\Models\DilgModel;
use App\Models\TaskModel;
use CodeIgniter\Controller;

class DilgController extends Controller
{
    public function index()
    {
        $dilgModel = new DilgModel();
        $data['dilg'] = $dilgModel->findAll();

        return view('layout/status', $data);
    }

    public function status()
    {
        $dilgModel = new DilgModel();
        $data['dilg'] = $dilgModel->findAll();

        return view('layout/user_status', $data);
    }

    public function profile()
    {
        return view('layout/profile');
    }

    public function store()
    {
        $dilgModel = new DilgModel();

        $data = [
            'lgu_place' => $this->request->getPost('lgu_place'),
            'brgy_num' => $this->request->getPost('brgy_num'),
            'income' => $this->request->getPost('income'),
            'lgoo_name' => $this->request->getPost('lgoo_name'),
            'month' => $this->request->getPost('month'),
            'lgmes' => $this->request->getPost('lgmes'),
            'lgcds' => $this->request->getPost('lgcds'),
            'fas' => $this->request->getPost('fas'),
        ];

        $dilgModel->insert($data);

        return redirect()->to('user/home')->with('success', 'Data added successfully.');
    }    

    public function edit($id)
    {
        $dilgModel = new DilgModel();
        $data['dilg'] = $dilgModel->find($id);

        return view('layout/edit', $data);
    }

    public function update($id)
    {
        $dilgModel = new DilgModel();
        $taskModel = new TaskModel();
    
        // Retrieve the task data from the request
        $updatedData = [
            'lgu_place' => $this->request->getPost('lgu_place'),
            'brgy_num' => $this->request->getPost('brgy_num'),
            'income' => $this->request->getPost('income'),
            'lgoo_name' => $this->request->getPost('lgoo_name'),
            'month' => $this->request->getPost('month'),
            'lgmes' => $this->request->getPost('lgmes'),
            'lgcds' => $this->request->getPost('lgcds'),
            'fas' => $this->request->getPost('fas'),
        ];
    
        // // Update the Dilg entry
        $dilgModel->update($id, $updatedData);
    
        // Add data to a different table (Task table)
        if ($this->request->getPost('lgmes') === 'not submitted' || $this->request->getPost('lgmes') === 'late') {
            $taskData = [
                'dilg_id' => $id,
                'task' => $this->request->getPost('task'),
                'task_sec' => $this->request->getPost('task_sec'),
                'task_third' => $this->request->getPost('task_third'),
            ];
    
            $taskModel->insert($taskData);
        }
    
        return redirect()->to('/dilg')->with('success', 'Data updated successfully.');
    }

    public function delete($id)
{
    $dilgModel = new DilgModel();
    $dilgModel->delete($id);

    return redirect()->to('/dilg')->with('success', 'Data deleted successfully.');
}


    public function createTask()
{
    // Validate the form data
    $validationRules = [
        'dilg_id' => 'required',
        'task_name' => 'required',
        'description' => 'required'
    ];

    if (!$this->validate($validationRules)) {
        // Redirect back to the form with validation errors
        return redirect()->back()->withInput()->with('error', 'Please fill out all the required fields');
    }

    // Retrieve the form data
    $dilgId = $this->request->getPost('dilg_id');
    $taskName = $this->request->getPost('task_name');
    $description = $this->request->getPost('description');

    // Store the task in the database
    $taskModel = new TaskModel();
    $taskData = [
        'dilg_id' => $dilgId,
        'task_name' => $taskName,
        'description' => $description
    ];

    $taskModel->insert($taskData);

    // Redirect to the desired page after successful task creation
    return redirect()->to('dilg')->with('success', 'Task added successfully');
}

}