<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Processo extends Model
{
    Public function assunto(){
        return $this->belongsTo('App\Processo');
    }
        Public function unidade(){
        return $this->belongsTo('App\Processo');
    }
        Public function arquivo(){
        return $this->belongsTo('App\Processo');
    }
}
