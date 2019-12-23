<?php


namespace App\Service\impl;


use Illuminate\Http\Request;

interface MusicServiceInterface
{
    public function getMusics();
    public function create(Request $request);
    public function update(Request $request, $id);
    public function delete($id);
}
