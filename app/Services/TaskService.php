<?php

namespace App\Services;

use App\Models\Task;
use App\Notifications\TaskDeadlineNotification;
use Carbon\Carbon;
use Illuminate\Container\Attributes\Auth;

class TaskService
{
    public function getAllTasks()
    {
        return Task::where('user_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function createTask(array $data)
    {
        $data['user_id'] = auth()->id();
        return Task::create($data);
    }

    public function updateTask(Task $task, array $data)
    {
        $data['user_id'] = auth()->id();

        $task->update($data);

        return $task;
    }

    public function deleteTask(Task $task)
    {
        $task->delete();
    }

    public function notifyPendingTasks()
    {
        \Log::info('notifyPendingTasks function triggered.');
        // Deadline o'tgan va hali bajarilmagan (pending) tasklarni olish
        $tasks = Task::where('status', 'pending')
            ->where('deadline', '<', Carbon::now())
            ->get();

        \Log::info('Found tasks: ' . $tasks->count());

        foreach ($tasks as $task) {
            $user = $task->user;  // Task egasi

            if ($user) {
                \Log::info('Notifying user: ' . $user->email);
                // Foydalanuvchiga email xabar yuborish
                $user->notify(new TaskDeadlineNotification($task));
            }
        }
    }
}
