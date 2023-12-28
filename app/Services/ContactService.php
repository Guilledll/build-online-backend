<?php

namespace App\Services;

use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Interfaces\ContactServiceInterface;
use App\Models\Contact;

class ContactService implements ContactServiceInterface
{
    public function all(int $user_id)
    {
        return Contact::query()->where('user_id', $user_id)->get();
    }

    public function find(int $id)
    {
        $contact = Contact::query()->findOrFail($id);

        return $contact;
    }

    public function store(StoreContactRequest $request)
    {
    }

    public function update(UpdateContactRequest $request)
    {
    }
}