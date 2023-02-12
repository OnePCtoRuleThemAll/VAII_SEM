<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Profile;
use App\Models\Users;

/**
 * Class StatisticsController
 * Example class of a controller
 * @package App\Controllers
 */
class ProfileController extends AControllerBase

{
    public function authorize(string $action)
    {
        return true;
    }

    public function index(): Response
    {
        $profile = [Profile::getOne($_SESSION['user']->getId()), Users::getOne($_SESSION['user']->getId())];
        return $this->html($profile);
    }

    public function saveEdited(): Response
    {
        $id = $this->request()->getValue("id");
        $data = $this->request()->getPost();
        $profile = Profile::getOne($id);
        if ($this->validate($data)) {
            $profile->setName($data["name"]);
            $profile->setSurename($data["surename"]);
            $profile->setAge($data["age"]);
            $profile->setFaculty($data["faculty"]);
            $profile->setEmail($data["email"]);
            $profile->save();
        }
        return $this->redirect("?c=profile");
    }

    private function validate($data): bool
    {
        if(!ctype_alpha($data["name"])) {
            return false;
        }
        if(!ctype_alpha($data["surename"])) {
            return false;
        }
        if(!is_numeric($data["age"])) {
            return false;
        }
        if(!ctype_alpha($data["faculty"])) {
            return false;
        }
        if(!ctype_alpha($data["email"])) {
            return false;
        }
        return true;
    }
}