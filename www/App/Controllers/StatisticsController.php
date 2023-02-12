<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Actual;
use App\Models\Teams;

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
        $statistics = [Actual::getAll(), Teams::getAll()];
        return $this->html($statistics);
    }

    public function add(): Response
    {
        $data = $this->request()->getPost();
        if (isset($data["name"])) {
            if ($this->validate($data)) {
                $statistics = new Actual();
                $statistics->setName($data["name"]);
                $statistics->setSurename($data["surename"]);
                $statistics->setNote($data["note"]);
                $statistics->setPoints($data["points"]);
                $statistics->save();
                return $this->redirect("?c=statistics");
            }        }
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
        if ($statistics != null) {
            return $this->html($statistics,'edit');

        }
        return $this->redirect("?c=statistics");
    }

    public function saveEdited(): Response
    {
        $id = $this->request()->getValue("id");
        $data = $this->request()->getPost();
        $statistics = Actual::getOne($id);
        if ($this->validate($data)) {
            $statistics->setName($data["name"]);
            $statistics->setSurename($data["surename"]);
            $statistics->setNote($data["note"]);
            $statistics->setPoints($data["points"]);
            $statistics->save();
            return $this->redirect("?c=statistics");
        }
        return $this->html($statistics, 'edit');
    }

    private function validate($data): bool
    {
        if(!ctype_alpha($data["name"])) {
            return false;
        }
        if(!ctype_alpha($data["surename"])) {
            return false;
        }
        if(!is_numeric($data["points"])) {
            return false;
        }
        if(!ctype_alpha($data["note"])) {
            return false;
        }
        return true;
    }
}