<?php 
namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::getAll();
        return view('task.index', compact('tasks'));
    }

    public function show($id){
        $task = Task::find($id); // Ganti ini sesuai dengan cara Anda mengambil data
        return view('task.show', compact('task'));
    }
}

?>