<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Profile;
use App\Models\Task;
use App\Core\Responses\JsonResponse;

/**
 * Class TaskController
 * Example class of a controller
 * @package App\Controllers
 */
class TaskController extends AControllerBase
{

    public function authorize(string $action)
    {
        return true;
    }
    public function index(): Response
    {
        $tasks = Task::getAll('taskmaster = ?',[$_SESSION['user']->getId()]);
        $target = Profile::getOne($tasks[0]->getTarget());
        return $this->html($target);
    }

    public function finishTask(): JsonResponse
    {
        $data = $this->request()->getValue("code");
        $tasks = Task::getAll('taskmaster = ?',[$_SESSION['user']->getId()]);
        if($tasks[0]->getCode() == $data) {
            $tasks[0]->setState("Completed");
            $tasks[0]->save();
            return $this->json("Completed");
        }
        return $this->json("Incomplete");
    }
}