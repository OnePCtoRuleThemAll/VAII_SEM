<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Profile;

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
        $profile = Profile::getAll();
        return $this->html($profile);
    }
}