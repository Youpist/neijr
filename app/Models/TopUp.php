<?php

namespace App\Models;

use App\Models\User;
use App\Models\Wallet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TopUp extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function wallet(){
        return $this->belongsTo(Wallet::class, 'rekening', 'rekening');
    }
    public function user(){
        return $this->belongsTo(User::class,'id_user');
    }
}