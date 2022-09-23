<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Log extends Model
{
    use HasFactory;

    public static function register($tipo, $sucesso, $mensagem)
    {
        $usuario_id = null;
        
        $data = Carbon::now(-3)->toDateTimeString();

        try {
            DB::table('log')->insert([
                'tipo' => $tipo,
                'data' => $data,
                'sucesso' => $sucesso,
                'mensagem' => $mensagem
            ]);
            
            return true;
        } catch (\Exception $ex) {
            return false;
        }
    }


}
