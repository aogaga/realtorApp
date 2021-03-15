<?php


namespace App\Repositories\Contracts;


interface ContactRepositoryInterface
{
    public function add(array  $data);
    public function get($id);
    public function all();

}
