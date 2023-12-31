<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TodoListController extends Controller
{

    function __construct() {
        $this->task = new Task;
    }

    function index() {
        $tasks = $this->task->getTaskList();
        return view('index', compact('tasks'));
    }

    function savetask(Request $request) {
        $data = [
            'task_name' => $request->taskname
        ];
        $this->task->saveTask($data);
        return back();
    }

    function deleteTask($id) {
        $this->task->deleteTask($id);
        return back();
    }

    function updateTask($id) {
        $task = $this->task->getTask($id);
        return view('update-task', compact('task'));
    }

    function saveUpdatedTask(Request $request) {
        $data = [
            'task_name' => $request->updatedtask
        ];

        $this->task->updateTask($data, $request->id);
        return redirect()->route('home');
    }
}
