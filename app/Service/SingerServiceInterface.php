<?php


namespace App\Service;


use Illuminate\Http\Request;

interface SingerServiceInterface
{
    public function getSinger($singerId);

    public function getSingers();

    public function create(Request $request);
}
