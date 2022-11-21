<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Actual;

/**
 * Class StatisticsController
 * Example class of a controller
 * @package App\Controllers
 */

class StatisticsController extends AControllerBase
{
    public function authorize(string $action)
    {
        return true;
    }

    public function index(): Response
    {
        $statistics = Actual::getAll();
        return $this->html($statistics);
    }

    public function add(): Response
    {
        $data = $this->request()->getPost();
        if (isset($data["name"])) {
            $statistics = new Actual();
            $statistics->setName($data["name"]);
            $statistics->setSurename($data["surename"]);
            $statistics->setNote($data["note"]);
            $statistics->setPoints($data["points"]);
            $statistics->save();
            return $this->redirect("?c=statistics");
        }
        return $this->html();
    }

    public function delete(): Response
    {
        $id = $this->request()->getValue("id");
        $statistics = Actual::getOne($id);
        if ($statistics != null) {
            $statistics->delete();

        }
        return $this->redirect("?c=statistics");
    }

    public function edit(): Response
    {
        $id = $this->request()->getValue("id");
        $statistics = Actual::getOne($id);
        if ($statistics == null) {
            return $this->redirect("?c=statistics");

        }
        return $this->redirect("?c=statistics");
    }
}