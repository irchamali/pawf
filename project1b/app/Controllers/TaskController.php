<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\TaskModel; #added

class TaskController extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();
        $tasks = $taskModel->orderBy('id', 'DESC')->findAll();

        return view('v_task', [
        'title' => 'Task List',
        'tasks' => $tasks,
        ]);
    }
}
