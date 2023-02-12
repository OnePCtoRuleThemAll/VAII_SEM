<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Profile;
use App\Models\Users;

/**
 * Class RegistrationController
 * Example class of a controller
 * @package App\Controllers
 */

class RegistrationController extends AControllerBase
{

    public function authorize(string $action)
    {
        return true;
    }
    public function index(): Response
    {
        return $this->html();
    }

    public function register(): Response
    {
        $data = $this->request()->getPost();
        $users = Users::getAll();

        if(isset($data["username"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $confPassword = $_POST["password2"];
            $emailAddress = $_POST["emailAddress"];

            if(!$this->validatePassword($password)) {
                return $this->html(['error' =>'Invalid password']);
            }

            if(!$this->validateUsername($username)) {
                return $this->html(['error' =>'Invalid username']);
            }

            if(!$this->validateEmail($emailAddress)) {
                return $this->html(['error' =>'Invalid email']);
            }

            if($password != $confPassword) {
                return $this->html(['error' =>'Passwords not same']);
            }

            foreach ($users as $user) {
                if($user->getUsername() == $data["username"]) {
                    return $this->html(['error' =>'Login not available']);
                }
                if($user->getEmail() == $data["emailAddress"]) {
                    return $this->html(['error' =>'Account for thi email already exists']);
                }
            }

            $newUser = new Users();
            $newUser->setUsername($data["username"]);
            $psswd = password_hash($data["password"], PASSWORD_BCRYPT);
            $newUser->setPassword($psswd);
            $newUser->setEmail($data["emailAddress"]);
            $newUser->setRole("user");
            $newUser->save();
            $newProfile = new Profile();
            $newProfile->save();
            return $this->redirect("?c=auth&a=login");
        }
        return $this->html();
    }

    private function validatePassword($password)
    {
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
            return false;
        }else{
            return true;
        }
    }

    private function validateUsername($username)
    {
        if(preg_match('/^\w{8,}$/', $username)) {
            return true;
        }
        return false;
    }

    private function validateEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
}