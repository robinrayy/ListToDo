<?php

namespace App\Repositories;
use App\testmodel;


interface testinterface{
    function create(string $description);
    function all();
    function getById($id);
    function update($id, string $description, $status);
    function delete($id);
}   