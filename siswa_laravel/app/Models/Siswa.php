<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = "siswas";
    // protected $guarded = ["id"];
    protected $fillable = ["name", "nis", "jenis_kelamin", "tempat_lahir", "tanggal_lahir", "no_telp" ,"alamat"];

    // public static $rules = [
    //     'nis' => 'unique:siswas,nis',
    // ];
}
