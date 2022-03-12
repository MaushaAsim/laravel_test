<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $tasks = [
            0 => ['task' => 'We have work to do', 'due' => '2022-05-03 15:30:00'],
            1 => ['task' => 'We more have work to do', 'due' => '2022-03-13 24:00:00'],
            2 => ['task' => 'We even more have work to do', 'due' => '2022-03-01 16:30:00'],
            3 => ['task' => 'We lots work to do', 'due' => '2022-09-02 11:30:00'],


        ];
        if ($request->ajax()) {
            foreach ($tasks as $index => $task) {
                $tasks[$index]['due'] = Carbon::createFromFormat('Y-m-d H:i:s', $task['due'])
                    ->setTimezone($request->timezone)->toDateTimeString();
            }
            return view('table')->with('tasks', $tasks);
        }

        return view('todo-list')->with('tasks', $tasks);
    }
}
