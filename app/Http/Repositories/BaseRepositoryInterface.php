<?php


namespace App\Http\Repositories;


interface BaseRepositoryInterface
{
    function getAll();
    function findById($id);
    function update($obj);
    function destroy($obj);
}
