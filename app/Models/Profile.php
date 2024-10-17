<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    // Diperlukan deklarasi nama tabel karena tidak ada "s" di dalam nama tabelnya.
    protected $table = 'profile';

    // Cara mendeklarasi field untuk insert di dabatase
    // protected $fillable = ['name', 'email', 'no_hp', 'nim', 'jurusan', 'alamat'];
    protected $guarded = [];

}
