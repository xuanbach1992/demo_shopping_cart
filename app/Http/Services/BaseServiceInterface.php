<?php


namespace App\Http\Services;


interface BaseServiceInterface
{
    function show();
    function success($obj);
    function update($id,$obj);
    function delete($id);
}
