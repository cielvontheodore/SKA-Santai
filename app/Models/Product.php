<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'description', 'image', 'price', 'contact'];

    /**
     * The admin types the wa.me link themselves; this only makes sure it has a scheme.
     */
    public function whatsappUrl(): string
    {
        $contact = trim($this->contact);

        return str_starts_with($contact, 'http') ? $contact : 'https://' . $contact;
    }
}
