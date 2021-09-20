<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Demanda extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = "dados_demanda";
    protected $fillable = [
        'id', 'data_abertura', 'data_conclusao', 'regiao_adm', 'tipo_demanda', 'status_demanda', 'demandante', 'assessor_responsavel', 'observacao',
    ];

    public static function lista() { //traz os dados da tabela
        $conn = DB::connection('mysql')->select("SELECT * from dados_demanda "); 
        return $conn;
    }

    public static function dados($id) { //traz os dados do 'id' específico
        $conn = DB::table('dados_demanda')
                        ->select('*')
                        ->from('dados_demanda')
                        ->where('dados_demanda.id', '=', $id)
                        ->first();
        return $conn;
    }

    public static function salva($id, $data) { //função para salvar os dados editados da demanda
        $conn = DB::table('dados_demanda')
                        ->where('dados_demanda.id', '=', $id)
                        ->update($data);
        return $conn;
    }

}