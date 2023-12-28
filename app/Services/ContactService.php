<?php

namespace App\Services;

use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Models\Contact;

class ContactService
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
        $contact = auth()->user()->contacts()->create($request->validated());

        return $contact;
    }

    public function update(int $id, UpdateContactRequest $request)
    {
        $contact = Contact::query()->where(['id' => $id, 'user_id' => auth()->user()->id])->firstOrFail();

        $contact->update($request->validated());
    }
}