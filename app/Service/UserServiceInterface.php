<?php


namespace App\Service;


interface UserServiceInterface
{
    public function update($request, $id);

    public function getUser($id);

<<<<<<< HEAD
    public function show_profile();
=======
    public function changePassword($request);
>>>>>>> 2d3c953238b755f0c6ff0bf06431562e78f52857
}
