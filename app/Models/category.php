<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
        // Wajib ditambahkan agar Laravel tahu nama tabel yang dipakai
    protected $table = 'categories';

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
