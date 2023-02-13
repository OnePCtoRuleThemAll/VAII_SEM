<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\JsonResponse;
use App\Core\Responses\Response;
use App\Models\Profile;
use App\Models\Users;

/**
 * Class HomeController
 * Example class of a controller
 * @package App\Controllers
 */
class AdminController extends AControllerBase
{
    /**
     * Authorize controller actions
     * @param $action
     * @return bool
     */
    public function authorize($action)
    {
        return $this->app->getAuth()->isLogged();
    }

    /**
     * Example of an action (authorization needed)
     * @return \App\Core\Responses\Response|\App\Core\Responses\ViewResponse
     */
    public function index(): Response
    {
        $profiles = Profile::getAll();
        return $this->html($profiles);
    }

    public function filter(): JsonResponse
    {
        $substring = $this->request()->getValue("substring");
        $profiles = Profile::getAll();
        $data = array();
        foreach ($profiles as $profile) {
            if (str_contains(strtolower($profile->getName()), strtolower($substring)) ){
                array_push($data, $profile);
            }
        }
        return $this->json($data);
    }
}