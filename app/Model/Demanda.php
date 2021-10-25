<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Demanda extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = "demandas";
    protected $fillable = [
        'id', 'nome', 'telefone', 'datavisita', 'demanda', 'cidade', 'sei', 'dataconclusao', 'andamento', 'observacoes',
    ];

    public static function lista() { //traz os dados da tabela
        $conn = DB::connection('mysql')->select("SELECT * from demandas "); 
        return $conn;
    }

    public static function dados($id) { //traz os dados do 'id' específico
        $conn = DB::table('demandas')
                        ->select('*')
                        ->from('demandas')
                        ->where('demandas.id', '=', $id)
                        ->first();
        return $conn;
    }

    public static function salva($id, $data) { //função para salvar os dados editados da demanda
        $conn = DB::table('demandas')
                        ->where('demandas.id', '=', $id)
                        ->update($data);
        return $conn;
    }

}