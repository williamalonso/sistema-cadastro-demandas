@extends('layout.index')
@section('titulo', 'Cadastrar Usuario')
@section('conteudo')

    <div class="card border-light">
        <div class="card-body">
            <section id="titulo">
                <h1 class="text-center pt-4">Editar Dados</h1>
            </section>
        </div>
    </div>
    <div class="container">
        <form class="m-5" action="{{route('editar.demanda', $registro->id )}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2">Data de Abertura</label>
                <div class="col-lg-6 input-group mb-2">
                    <input type="date" class="form-control sem_numero" id="data_abertura" tabindex="1" name="data_abertura" value="{{$registro->data_abertura}}">
                </div>
            </div>

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2">Data para Conclusão</label>
                <div class="col-lg-6 input-group mb-2">
                    <input type="date" class="form-control" id="data_conclusao" tabindex="2" name="data_conclusao" value="{{$registro->data_conclusao}}">
                </div>
            </div>

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="regiao_adm">Região Administrativa</label>
                <div class="col-lg-6">
                    <select  name="regiao_adm" class="form-control" id="id_regiao_adm" tabindex="3" value="{{$registro->regiao_adm}}">
                        <option <?php if ($registro->regiao_adm ===  "") { ?> selected <?php } ?> value="">Selecione uma região</option>
                        <option <?php if ($registro->regiao_adm ===  "I - Gama") { ?> selected <?php } ?> value="I - Gama">I - Gama</option>
                        <option <?php if ($registro->regiao_adm ===  "II - Taguatinga") { ?> selected <?php } ?> value="II - Taguatinga">II - Taguatinga</option>
                        <option <?php if ($registro->regiao_adm ===  "III - Brazlândia") { ?> selected <?php } ?> value="III - Brazlândia">III - Brazlândia</option>
                        <option <?php if ($registro->regiao_adm ===  "IV - Sobradinho") { ?> selected <?php } ?> value="IV - Sobradinho">IV - Sobradinho</option>
                        <option <?php if ($registro->regiao_adm ===  "V - Planaltina") { ?> selected <?php } ?> value="V - Planaltina">V - Planaltina</option>
                        <option <?php if ($registro->regiao_adm ===  "VI - Paranoá") { ?> selected <?php } ?> value="VI - Paranoá">VI - Paranoá</option>
                        <option <?php if ($registro->regiao_adm ===  "VII - Núcleo Bandeirante") { ?> selected <?php } ?> value="VII - Núcleo Bandeirante">VII - Núcleo Bandeirante</option>
                        <option <?php if ($registro->regiao_adm ===  "VIII - Ceilândia") { ?> selected <?php } ?> value="VIII - Ceilândia">VIII - Ceilândia</option>
                        <option <?php if ($registro->regiao_adm ===  "IX - Guará") { ?> selected <?php } ?> value="IX - Guará">IX - Guará</option>
                        <option <?php if ($registro->regiao_adm ===  "X - Cruzeiro") { ?> selected <?php } ?> value="X - Cruzeiro">X - Cruzeiro</option>
                        <option <?php if ($registro->regiao_adm ===  "XI - Samambaia") { ?> selected <?php } ?> value="XI - Samambaia"> XI - Samambaia</option>
                        <option <?php if ($registro->regiao_adm ===  "XII - Santa Maria") { ?> selected <?php } ?> value="XII - Santa Maria">XII - Santa Maria</option>
                        <option <?php if ($registro->regiao_adm ===  "XIII - São Sebastião") { ?> selected <?php } ?> value="XIII - São Sebastião">XIII - São Sebastião</option>
                        <option <?php if ($registro->regiao_adm ===  "XIV - Recanto das Emas") { ?> selected <?php } ?> value="XIV - Recanto das Emas">XIV - Recanto das Emas</option>
                        <option <?php if ($registro->regiao_adm ===  "XV - Lago Sul") { ?> selected <?php } ?> value="XV - Lago Sul">XV - Lago Sul</option>
                        <option <?php if ($registro->regiao_adm ===  "XVI - Riacho Fundo") { ?> selected <?php } ?> value="XVI - Riacho Fundo">XVI - Riacho Fundo</option>
                        <option <?php if ($registro->regiao_adm ===  "XVII - Lago Norte") { ?> selected <?php } ?> value="XVII - Lago Norte">XVII - Lago Norte</option>
                        <option <?php if ($registro->regiao_adm ===  "XVIII - Candangolândia") { ?> selected <?php } ?> value="XVIII - Candangolândia">XVIII - Candangolândia</option>
                        <option <?php if ($registro->regiao_adm ===  "XIX - Águas Claras") { ?> selected <?php } ?> value="XIX - Águas Claras">XIX - Águas Claras</option>
                        <option <?php if ($registro->regiao_adm ===  "XX - Riacho Fundo 2") { ?> selected <?php } ?> value="XX - Riacho Fundo 2">XX - Riacho Fundo 2</option>
                        <option <?php if ($registro->regiao_adm ===  "XXI - Sudoeste/Octogonal") { ?> selected <?php } ?> value="XXI - Sudoeste/Octogonal">XXI - Sudoeste/Octogonal</option>
                        <option <?php if ($registro->regiao_adm ===  "XXII - Varjão") { ?> selected <?php } ?> value="XXII - Varjão">XXII - Varjão</option>
                        <option <?php if ($registro->regiao_adm ===  "XXIII - Park Way") { ?> selected <?php } ?> value="XXIII - Park Way">XXIII - Park Way</option>
                        <option <?php if ($registro->regiao_adm ===  "XXIV - Estrutural/Scia") { ?> selected <?php } ?> value="XXIV - Estrutural/Scia">XXIV - Estrutural/Scia</option>
                        <option <?php if ($registro->regiao_adm ===  "XXV - Sobradinho II") { ?> selected <?php } ?> value="XXV - Sobradinho II">XXV - Sobradinho II</option>
                        <option <?php if ($registro->regiao_adm ===  "XXVI - Jardim Botânico") { ?> selected <?php } ?> value="XXVI - Jardim Botânico">XXVI - Jardim Botânico</option>
                        <option <?php if ($registro->regiao_adm ===  "XXVII - Itapoã") { ?> selected <?php } ?> value="XXVII - Itapoã">XXVII - Itapoã</option>
                        <option <?php if ($registro->regiao_adm ===  "XXVIII - SIA") { ?> selected <?php } ?> value="XXVIII - SIA">XXVIII - SAI</option>
                        <option <?php if ($registro->regiao_adm ===  "XXIX - Vicente Pires") { ?> selected <?php } ?> value="XXIX - Vicente Pires">XXIX - Vicente Pires</option>
                        <option <?php if ($registro->regiao_adm ===  "XXX - Fercal") { ?> selected <?php } ?> value="XXX - Fercal">XXX - Fercal</option>
                        <option <?php if ($registro->regiao_adm ===  "XXXI - Sol Nascente/Pôr do Sol") { ?> selected <?php } ?> value="XXXI - Sol Nascente/Pôr do Sol">XXXI - Sol Nascente/Pôr do Sol</option>
                        <option <?php if ($registro->regiao_adm ===  "XXXII - Arniqueira") { ?> selected <?php } ?> value="XXXII - Arniqueira">XXXII - Arniqueira</option>
                    </select>
                </div>
            </div>

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="tipo_demanda">Tipo de Demanda</label>
                <div class="col-lg-6">
                    <select  name="tipo_demanda" class="form-control" id="id_tipo_demanda" tabindex="4" value="{{$registro->tipo_demanda}}">
                        <option <?php if ($registro->tipo_demanda ===  "") { ?> selected <?php } ?> value="">Selecione uma demanda</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.1 - PAISAGISMO/ARVORES") { ?> selected <?php } ?> value="1.1 - PAISAGISMO/ARVORES">1.1 - PAISAGISMO/ARVORES</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.1 - PAISAGISMO/ARVORES > 1.1.1 - CORTE DE ARVORES") { ?> selected <?php } ?> value="1.1 - PAISAGISMO/ARVORES > 1.1.1 - CORTE DE ARVORES">1.1 - PAISAGISMO/ARVORES > 1.1.1 - CORTE DE ARVORES</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.1 - PAISAGISMO/ARVORES > 1.1.10 - DIVERSOS") { ?> selected <?php } ?> value="1.1 - PAISAGISMO/ARVORES > 1.1.10 - DIVERSOS">1.1 - PAISAGISMO/ARVORES > 1.1.10 - DIVERSOS</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.1 - PAISAGISMO/ARVORES > 1.1.11 - DOAÇÃO DE MUDAS") { ?> selected <?php } ?> value="1.1 - PAISAGISMO/ARVORES > 1.1.11 - DOAÇÃO DE MUDAS">1.1 - PAISAGISMO/ARVORES > 1.1.11 - DOAÇÃO DE MUDAS</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.1 - PAISAGISMO/ARVORES > 1.1.2 - PODA DE ÁRVORES") { ?> selected <?php } ?> value="1.1 - PAISAGISMO/ARVORES > 1.1.2 - PODA DE ÁRVORES">1.1 - PAISAGISMO/ARVORES > 1.1.2 - PODA DE ÁRVORES</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.1 - PAISAGISMO/ARVORES > 1.1.3 - PLANTIO DE ARVORES") { ?> selected <?php } ?> value="1.1 - PAISAGISMO/ARVORES > 1.1.3 - PLANTIO DE ARVORES">1.1 - PAISAGISMO/ARVORES > 1.1.3 - PLANTIO DE ARVORES</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.1 - PAISAGISMO/ARVORES > 1.1.4 - IMPLEMENTAÇÃO DE PAISAGISMO") { ?> selected <?php } ?> value="1.1 - PAISAGISMO/ARVORES > 1.1.4 - IMPLEMENTAÇÃO DE PAISAGISMO">1.1 - PAISAGISMO/ARVORES > 1.1.4 - IMPLEMENTAÇÃO DE PAISAGISMO</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.1 - PAISAGISMO/ARVORES > 1.1.5 - ROÇAGEM/LIMPEZA") { ?> selected <?php } ?> value="1.1 - PAISAGISMO/ARVORES > 1.1.5 - ROÇAGEM/LIMPEZA">1.1 - PAISAGISMO/ARVORES > 1.1.5 - ROÇAGEM/LIMPEZA</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.1 - PAISAGISMO/ARVORES > 1.1.6 - ERRADICAÇÃO DE ÁRVORES") { ?> selected <?php } ?> value="1.1 - PAISAGISMO/ARVORES > 1.1.6 - ERRADICAÇÃO DE ÁRVORES">1.1 - PAISAGISMO/ARVORES > 1.1.6 - ERRADICAÇÃO DE ÁRVORES</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.1 - PAISAGISMO/ARVORES > 1.1.7 - HORTA COMUNITÁRIA") { ?> selected <?php } ?> value="1.1 - PAISAGISMO/ARVORES > 1.1.7 - HORTA COMUNITÁRIA">1.1 - PAISAGISMO/ARVORES > 1.1.7 - HORTA COMUNITÁRIA</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.1 - PAISAGISMO/ARVORES > 1.1.8 - CAMPO SINTÉTICO") { ?> selected <?php } ?> value="1.1 - PAISAGISMO/ARVORES > 1.1.8 - CAMPO SINTÉTICO">1.1 - PAISAGISMO/ARVORES > 1.1.8 - CAMPO SINTÉTICO</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.1 - PAISAGISMO/ARVORES > 1.1.9 - PLANTAÇÃO DE MUDAS") { ?> selected <?php } ?> value="1.1 - PAISAGISMO/ARVORES > 1.1.9 - PLANTAÇÃO DE MUDAS">1.1 - PAISAGISMO/ARVORES > 1.1.9 - PLANTAÇÃO DE MUDAS</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.2 - PAVIMENTAÇÕES") { ?> selected <?php } ?> value="1.2 - PAVIMENTAÇÕES">1.2 - PAVIMENTAÇÕES</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.2 - PAVIMENTAÇÕES > 1.2.1 - TAPA BURACOS") { ?> selected <?php } ?> value="1.2 - PAVIMENTAÇÕES > 1.2.1 - TAPA BURACOS">1.2 - PAVIMENTAÇÕES > 1.2.1 - TAPA BURACOS</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.2 - PAVIMENTAÇÕES > 1.2.10 - PATROL") { ?> selected <?php } ?> value="1.2 - PAVIMENTAÇÕES > 1.2.10 - PATROL">1.2 - PAVIMENTAÇÕES > 1.2.10 - PATROL</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.2 - PAVIMENTAÇÕES > 1.2.11 - ASFALTO") { ?> selected <?php } ?> value="1.2 - PAVIMENTAÇÕES > 1.2.11 - ASFALTO">1.2 - PAVIMENTAÇÕES > 1.2.11 - ASFALTO</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.2 - PAVIMENTAÇÕES > 1.2.12 - BURACOS / GALERIAS PLUVIAIS") { ?> selected <?php } ?> value="1.2 - PAVIMENTAÇÕES > 1.2.12 - BURACOS / GALERIAS PLUVIAIS">1.2 - PAVIMENTAÇÕES > 1.2.12 - BURACOS / GALERIAS PLUVIAIS</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.2 - PAVIMENTAÇÕES > 1.2.13 - RETROFIT") { ?> selected <?php } ?> value="1.2 - PAVIMENTAÇÕES > 1.2.13 - RETROFIT">1.2 - PAVIMENTAÇÕES > 1.2.13 - RETROFIT</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.2 - PAVIMENTAÇÕES > 1.2.14 - NIVELAMENTO DE TAMPAS") { ?> selected <?php } ?> value="1.2 - PAVIMENTAÇÕES > 1.2.14 - NIVELAMENTO DE TAMPAS">1.2 - PAVIMENTAÇÕES > 1.2.14 - NIVELAMENTO DE TAMPAS</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.2 - PAVIMENTAÇÕES > 1.2.2 - RECAPEAMENTO") { ?> selected <?php } ?> value="1.2 - PAVIMENTAÇÕES > 1.2.2 - RECAPEAMENTO">1.2 - PAVIMENTAÇÕES > 1.2.2 - RECAPEAMENTO</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.2 - PAVIMENTAÇÕES > 1.2.3 - EXECUÇÃO/RECUPERAÇÃO DE CALÇADAS") { ?> selected <?php } ?> value="1.2 - PAVIMENTAÇÕES > 1.2.3 - EXECUÇÃO/RECUPERAÇÃO DE CALÇADAS">1.2 - PAVIMENTAÇÕES > 1.2.3 - EXECUÇÃO/RECUPERAÇÃO DE CALÇADAS</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.2 - PAVIMENTAÇÕES > 1.2.4 - MEIO FIO") { ?> selected <?php } ?> value="1.2 - PAVIMENTAÇÕES > 1.2.4 - MEIO FIO">1.2 - PAVIMENTAÇÕES > 1.2.4 - MEIO FIO</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.2 - PAVIMENTAÇÕES > 1.2.5 - CASCALHAMENTO") { ?> selected <?php } ?> value="1.2 - PAVIMENTAÇÕES > 1.2.5 - CASCALHAMENTO">1.2 - PAVIMENTAÇÕES > 1.2.5 - CASCALHAMENTO</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.2 - PAVIMENTAÇÕES > 1.2.6 - EROSÃO") { ?> selected <?php } ?> value="1.2 - PAVIMENTAÇÕES > 1.2.6 - EROSÃO">1.2 - PAVIMENTAÇÕES > 1.2.6 - EROSÃO</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.2 - PAVIMENTAÇÕES > 1.2.7 - BOCA DE LOBOS / GRELHAS") { ?> selected <?php } ?> value="1.2 - PAVIMENTAÇÕES > 1.2.7 - BOCA DE LOBOS / GRELHAS">1.2 - PAVIMENTAÇÕES > 1.2.7 - BOCA DE LOBOS / GRELHAS</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.2 - PAVIMENTAÇÕES > 1.2.8 - MAQUINA FRESADORA") { ?> selected <?php } ?> value="1.2 - PAVIMENTAÇÕES > 1.2.8 - MAQUINA FRESADORA">1.2 - PAVIMENTAÇÕES > 1.2.8 - MAQUINA FRESADORA</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.2 - PAVIMENTAÇÕES > 1.2.9 - LOMBADAS") { ?> selected <?php } ?> value="1.2 - PAVIMENTAÇÕES > 1.2.9 - LOMBADAS">1.2 - PAVIMENTAÇÕES > 1.2.9 - LOMBADAS</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.3 - EDIFICAÇÕES") { ?> selected <?php } ?> value="1.3 - EDIFICAÇÕES">1.3 - EDIFICAÇÕES</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.3 - EDIFICAÇÕES > 1.3.1 - CONSTRUÇÕES") { ?> selected <?php } ?> value="1.3 - EDIFICAÇÕES > 1.3.1 - CONSTRUÇÕES">1.3 - EDIFICAÇÕES > 1.3.1 - CONSTRUÇÕES</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.3 - EDIFICAÇÕES > 1.3.2 - EDIFÍCIOS PÚBLICOS") { ?> selected <?php } ?> value="1.3 - EDIFICAÇÕES > 1.3.2 - EDIFÍCIOS PÚBLICOS">1.3 - EDIFICAÇÕES > 1.3.2 - EDIFÍCIOS PÚBLICOS</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.3 - EDIFICAÇÕES > 1.3.3 - CONSERVAÇÃO DE EDIFICAÇÕES") { ?> selected <?php } ?> value="1.3 - EDIFICAÇÕES > 1.3.3 - CONSERVAÇÃO DE EDIFICAÇÕES">1.3 - EDIFICAÇÕES > 1.3.3 - CONSERVAÇÃO DE EDIFICAÇÕES</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.4 - OBRAS E URBANIZAÇÕES") { ?> selected <?php } ?> value="1.4 - OBRAS E URBANIZAÇÕES">1.4 - OBRAS E URBANIZAÇÕES</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.4 - OBRAS E URBANIZAÇÕES > 1.4.1 - DRENAGEM DE AGUAS PLUVIAIS") { ?> selected <?php } ?> value="1.4 - OBRAS E URBANIZAÇÕES > 1.4.1 - DRENAGEM DE AGUAS PLUVIAIS">1.4 - OBRAS E URBANIZAÇÕES > 1.4.1 - DRENAGEM DE AGUAS PLUVIAIS</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.4 - OBRAS E URBANIZAÇÕES > 1.4.10 - REDUTORES DE VELOCIDADE") { ?> selected <?php } ?> value="1.4 - OBRAS E URBANIZAÇÕES > 1.4.10 - REDUTORES DE VELOCIDADE">1.4 - OBRAS E URBANIZAÇÕES > 1.4.10 - REDUTORES DE VELOCIDADE</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.4 - OBRAS E URBANIZAÇÕES > 1.4.11 - QUADRAS POLIESPORTIVAS") { ?> selected <?php } ?> value="1.4 - OBRAS E URBANIZAÇÕES > 1.4.11 - QUADRAS POLIESPORTIVAS">1.4 - OBRAS E URBANIZAÇÕES > 1.4.11 - QUADRAS POLIESPORTIVAS</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.4 - OBRAS E URBANIZAÇÕES > 1.4.12 - PARQUES") { ?> selected <?php } ?> value="1.4 - OBRAS E URBANIZAÇÕES > 1.4.12 - PARQUES">1.4 - OBRAS E URBANIZAÇÕES > 1.4.12 - PARQUES</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.4 - OBRAS E URBANIZAÇÕES > 1.4.13 - RESTAURANTES COMUNITÁRIOS") { ?> selected <?php } ?> value="1.4 - OBRAS E URBANIZAÇÕES > 1.4.13 - RESTAURANTES COMUNITÁRIOS">1.4 - OBRAS E URBANIZAÇÕES > 1.4.13 - RESTAURANTES COMUNITÁRIOS</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.4 - OBRAS E URBANIZAÇÕES > 1.4.2 - PRAÇAS") { ?> selected <?php } ?> value="1.4 - OBRAS E URBANIZAÇÕES > 1.4.2 - PRAÇAS">1.4 - OBRAS E URBANIZAÇÕES > 1.4.2 - PRAÇAS</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.4 - OBRAS E URBANIZAÇÕES > 1.4.3 - UBS") { ?> selected <?php } ?> value="1.4 - OBRAS E URBANIZAÇÕES > 1.4.3 - UBS">1.4 - OBRAS E URBANIZAÇÕES > 1.4.3 - UBS</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.4 - OBRAS E URBANIZAÇÕES > 1.4.4 - ILUMINAÇÃO") { ?> selected <?php } ?> value="1.4 - OBRAS E URBANIZAÇÕES > 1.4.4 - ILUMINAÇÃO">1.4 - OBRAS E URBANIZAÇÕES > 1.4.4 - ILUMINAÇÃO</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.4 - OBRAS E URBANIZAÇÕES > 1.4.6 - FEIRAS") { ?> selected <?php } ?> value="1.4 - OBRAS E URBANIZAÇÕES > 1.4.6 - FEIRAS">1.4 - OBRAS E URBANIZAÇÕES > 1.4.6 - FEIRAS</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.4 - OBRAS E URBANIZAÇÕES > 1.4.7 - REVITALIZAÇÃO") { ?> selected <?php } ?> value="1.4 - OBRAS E URBANIZAÇÕES > 1.4.7 - REVITALIZAÇÃO">1.4 - OBRAS E URBANIZAÇÕES > 1.4.7 - REVITALIZAÇÃO</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.4 - OBRAS E URBANIZAÇÕES > 1.4.8 - REGULARIZAÇÃO") { ?> selected <?php } ?> value="1.4 - OBRAS E URBANIZAÇÕES > 1.4.8 - REGULARIZAÇÃO">1.4 - OBRAS E URBANIZAÇÕES > 1.4.8 - REGULARIZAÇÃO</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.4 - OBRAS E URBANIZAÇÕES > 1.4.9 - PROJETOS") { ?> selected <?php } ?> value="1.4 - OBRAS E URBANIZAÇÕES > 1.4.9 - PROJETOS">1.4 - OBRAS E URBANIZAÇÕES > 1.4.9 - PROJETOS</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.5 - MOBILIÁRIOS URBANOS") { ?> selected <?php } ?> value="1.5 - MOBILIÁRIOS URBANOS">1.5 - MOBILIÁRIOS URBANOS</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.5 - MOBILIÁRIOS URBANOS > 1.5.1 - MANUTENÇÃO DE MOBILIÁRIOS URBANOS") { ?> selected <?php } ?> value="1.5 - MOBILIÁRIOS URBANOS > 1.5.1 - MANUTENÇÃO DE MOBILIÁRIOS URBANOS">1.5 - MOBILIÁRIOS URBANOS > 1.5.1 - MANUTENÇÃO DE MOBILIÁRIOS URBANOS</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.6 - PEC") { ?> selected <?php } ?> value="1.6 - PEC">1.6 - PEC</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.7 - DIVERSOS") { ?> selected <?php } ?> value="1.7 - DIVERSOS">1.7 - DIVERSOS</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.7 - DIVERSOS > 1.7.1 - SOLICITAÇÃO DE CAMINHA") { ?> selected <?php } ?> value="1.7 - DIVERSOS > 1.7.1 - SOLICITAÇÃO DE CAMINHA">1.7 - DIVERSOS > 1.7.1 - SOLICITAÇÃO DE CAMINHA</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.7 - DIVERSOS > 1.7.2 - SOLICITAÇÃO DE MAQUINA FRESADORA") { ?> selected <?php } ?> value="1.7 - DIVERSOS > 1.7.2 - SOLICITAÇÃO DE MAQUINA FRESADORA">1.7 - DIVERSOS > 1.7.2 - SOLICITAÇÃO DE MAQUINA FRESADORA</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.7 - DIVERSOS > 1.7.3 - SOLICITAÇÃO DE PATROL") { ?> selected <?php } ?> value="1.7 - DIVERSOS > 1.7.3 - SOLICITAÇÃO DE PATROL">1.7 - DIVERSOS > 1.7.3 - SOLICITAÇÃO DE PATROL</option>
                        <option <?php if ($registro->tipo_demanda ===  "1.7 - DIVERSOS > 1.7.4 - VISTORIAS") { ?> selected <?php } ?> value="1.7 - DIVERSOS > 1.7.4 - VISTORIAS">1.7 - DIVERSOS > 1.7.4 - VISTORIAS</option>
                    </select>
                </div>
            </div>

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="status_demanda">Status da Demanda</label>
                <div class="col-lg-6">
                    <select  name="status_demanda" class="form-control" id="id_status_demanda" tabindex="5" value="{{$registro->status_demanda}}">
                        <option <?php if ($registro->status_demanda ===  "") { ?> selected <?php } ?> value="">Selecione um status</option>
                        <option <?php if ($registro->status_demanda ===  "1 - Em Projeto") { ?> selected <?php } ?> value="1 - Em Projeto">1 - Em Projeto</option>
                        <option <?php if ($registro->status_demanda ===  "2 - Orçamento") { ?> selected <?php } ?> value="2 - Orçamento">2 - Orçamento</option>
                        <option <?php if ($registro->status_demanda ===  "3 - Termo de Referência") { ?> selected <?php } ?> value="3 - Termo de Referência">3 - Termo de Referência</option>
                        <option <?php if ($registro->status_demanda ===  "4 - Pronto para Licitar") { ?> selected <?php } ?> value="4 - Pronto para Licitar">4 - Pronto para Licitar</option>
                        <option <?php if ($registro->status_demanda ===  "5 - Em Licitação") { ?> selected <?php } ?> value="5 - Em Licitação">5 - Em Licitação</option>
                        <option <?php if ($registro->status_demanda ===  "6 - Homologado") { ?> selected <?php } ?> value="6 - Homologado">6 - Homologado</option>
                        <option <?php if ($registro->status_demanda ===  "7 - Em Contratação") { ?> selected <?php } ?> value="7 - Em Contratação">7 - Em Contratação</option>
                        <option <?php if ($registro->status_demanda ===  "8 - Em Execução") { ?> selected <?php } ?> value="8 - Em Execução">8 - Em Execução</option>
                        <option <?php if ($registro->status_demanda ===  "9 - Concluído") { ?> selected <?php } ?> value="9 - Concluído">9 - Concluído</option>
                        <option <?php if ($registro->status_demanda ===  "10 - Ata de Registro de Preço") { ?> selected <?php } ?> value="10 - Ata de Registro de Preço">10 - Ata de Registro de Preço</option>
                        <option <?php if ($registro->status_demanda ===  "11 - Suspensa - TCDF") { ?> selected <?php } ?> value="11 - Suspensa - TCDF">11 - Suspensa - TCDF</option>
                        <option <?php if ($registro->status_demanda ===  "12 - Extra") { ?> selected <?php } ?> value="12 - Extra">12 - Extra</option>
                    </select>
                </div>
            </div>

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="demandante">Demandante</label>
                <div class="col-lg-6 input-group mb-2">
                    <input type="text" class="form-control" id="demandante" tabindex="6" name="demandante" value="{{$registro->demandante}}">
                </div>
            </div>

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="assessor_responsavel">Assessor Responsável</label>
                <div class="col-lg-6 input-group mb-2">
                    <input type="text" class="form-control" id="assessor_responsavel" tabindex="7" name="assessor_responsavel" value="{{$registro->assessor_responsavel}}">
                </div>
            </div>

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="observacao">Observação</label>
                <div class="col-lg-6 input-group mb-2">
                    <textarea class="form-control" name="observacao" id="observacao" aria-label="With textarea" tabindex="8">{{$registro->observacao}}</textarea>
                </div>
            </div>

            <br>

            <div class="form-group row">
                <div class="col-sm-9 control-label text-lg-center pt-2">
                    <button class="btn btn-primary" tabindex="9">Enviar</button>
                    <button type="reset" class="btn btn-default" tabindex="10">Limpar</button>
                </div>
            </div>
        </form>
    </div>
    <br>
@endsection