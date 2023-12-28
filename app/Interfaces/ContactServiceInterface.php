<?php

namespace App\Interfaces;

use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;

interface ContactServiceInterface
{
    public function all(int $user_id);
    public function find(int $id);
    public function store(StoreContactRequest $request);
    public function update(UpdateContactRequest $request);
}