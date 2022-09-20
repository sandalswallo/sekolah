<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mapel;
use App\Models\Kelas;



class Siswa extends Model
{
    use HasFactory;
    protected $table ='siswa';
    protected $guarded =[];

    protected function mapel(){
        return $this->belongsTo(Mapel::class);
    }

    protected function kelas(){
        return $this->belongsTo(Kelas::class);
    }
    

  
}