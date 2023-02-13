<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Profile;
use App\Models\Task;

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
}