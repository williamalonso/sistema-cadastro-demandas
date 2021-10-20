@extends('layout.index')
@section('titulo', 'Cadastrar Demanda')
@section('conteudo')

    <div class="card border-light">
        <div class="card-body">
            <section id="titulo">
                <h1 class="text-center pt-4">Inserir Dados</h1>
            </section>
        </div>
    </div>
    <div class="container">
        <form class="m-5" action="{{route('cadastrar.demanda')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2">Data de Abertura</label>
                <div class="col-lg-6 input-group mb-2">
                    <input type="date" class="form-control sem_numero" id="data_abertura" tabindex="1" name="data_abertura">
                </div>
            </div>

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2">Data para Conclusão</label>
                <div class="col-lg-6 input-group mb-2">
                    <input type="date" class="form-control" id="data_conclusao" tabindex="2" name="data_conclusao">
                </div>
            </div>

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="regiao_adm">Região Administrativa</label>
                <div class="col-lg-6">
                    <select  name="regiao_adm" class="form-control" id="id_regiao_adm" tabindex="3">
                        <option value="">Selecione uma região</option>
                        <option value="I - Gama">I - Gama</option>
                        <option value="II - Taguatinga">II - Taguatinga</option>
                        <option value="III - Brazlândia">III - Brazlândia</option>
                        <option value="IV - Sobradinho">IV - Sobradinho</option>
                        <option value="V - Planaltina">V - Planaltina</option>
                        <option value="VI - Paranoá">VI - Paranoá</option>
                        <option value="VII - Núcleo Bandeirante">VII - Núcleo Bandeirante</option>
                        <option value="VIII - Ceilândia">VIII - Ceilândia</option>
                        <option value="IX - Guará">IX - Guará</option>
                        <option value="X - Cruzeiro">X - Cruzeiro</option>
                        <option value="XI - Samambaia"> XI - Samambaia</option>
                        <option value="XII - Santa Maria">XII - Santa Maria</option>
                        <option value="XIII - São Sebastião">XIII - São Sebastião</option>
                        <option value="XIV - Recanto das Emas">XIV - Recanto das Emas</option>
                        <option value="XV - Lago Sul">XV - Lago Sul</option>
                        <option value="XVI - Riacho Fundo">XVI - Riacho Fundo</option>
                        <option value="XVII - Lago Norte">XVII - Lago Norte</option>
                        <option value="XVIII - Candangolândia">XVIII - Candangolândia</option>
                        <option value="XIX - Águas Claras">XIX - Águas Claras</option>
                        <option value="XX - Riacho Fundo 2">XX - Riacho Fundo 2</option>
                        <option value="XXI - Sudoeste/Octogonal">XXI - Sudoeste/Octogonal</option>
                        <option value="XXII - Varjão">XXII - Varjão</option>
                        <option value="XXIII - Park Way">XXIII - Park Way</option>
                        <option value="XXIV - Estrutural/Scia">XXIV - Estrutural/Scia</option>
                        <option value="XXV - Sobradinho II">XXV - Sobradinho II</option>
                        <option value="XXVI - Jardim Botânico">XXVI - Jardim Botânico</option>
                        <option value="XXVII - Itapoã">XXVII - Itapoã</option>
                        <option value="XXVIII - SIA">XXVIII - SIA</option>
                        <option value="XXIX - Vicente Pires">XXIX - Vicente Pires</option>
                        <option value="XXX - Fercal">XXX - Fercal</option>
                        <option value="XXXI - Sol Nascente/Pôr do Sol">XXXI - Sol Nascente/Pôr do Sol</option>
                        <option value="XXXII - Arniqueira">XXXII - Arniqueira</option>
                    </select>
                </div>
            </div>

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="tipo_demanda">Tipo de Demanda</label>
                <div class="col-lg-6">
                    <select  name="tipo_demanda" class="form-control" id="id_tipo_demanda" tabindex="4">
                        <option value="">Selecione uma demanda</option>
                        <option value="1.1 - PAISAGISMO/ARVORES">1.1 - PAISAGISMO/ARVORES</option>
                        <option value="1.1 - PAISAGISMO/ARVORES > 1.1.1 - CORTE DE ARVORES">1.1 - PAISAGISMO/ARVORES > 1.1.1 - CORTE DE ARVORES</option>
                        <option value="1.1 - PAISAGISMO/ARVORES > 1.1.10 - DIVERSOS">1.1 - PAISAGISMO/ARVORES > 1.1.10 - DIVERSOS</option>
                        <option value="1.1 - PAISAGISMO/ARVORES > 1.1.11 - DOAÇÃO DE MUDAS">1.1 - PAISAGISMO/ARVORES > 1.1.11 - DOAÇÃO DE MUDAS</option>
                        <option value="1.1 - PAISAGISMO/ARVORES > 1.1.2 - PODA DE ÁRVORES">1.1 - PAISAGISMO/ARVORES > 1.1.2 - PODA DE ÁRVORES</option>
                        <option value="1.1 - PAISAGISMO/ARVORES > 1.1.3 - PLANTIO DE ARVORES">1.1 - PAISAGISMO/ARVORES > 1.1.3 - PLANTIO DE ARVORES</option>
                        <option value="1.1 - PAISAGISMO/ARVORES > 1.1.4 - IMPLEMENTAÇÃO DE PAISAGISMO">1.1 - PAISAGISMO/ARVORES > 1.1.4 - IMPLEMENTAÇÃO DE PAISAGISMO</option>
                        <option value="1.1 - PAISAGISMO/ARVORES > 1.1.5 - ROÇAGEM/LIMPEZA">1.1 - PAISAGISMO/ARVORES > 1.1.5 - ROÇAGEM/LIMPEZA</option>
                        <option value="1.1 - PAISAGISMO/ARVORES > 1.1.6 - ERRADICAÇÃO DE ÁRVORES">1.1 - PAISAGISMO/ARVORES > 1.1.6 - ERRADICAÇÃO DE ÁRVORES</option>
                        <option value="1.1 - PAISAGISMO/ARVORES > 1.1.7 - HORTA COMUNITÁRIA">1.1 - PAISAGISMO/ARVORES > 1.1.7 - HORTA COMUNITÁRIA</option>
                        <option value="1.1 - PAISAGISMO/ARVORES > 1.1.8 - CAMPO SINTÉTICO">1.1 - PAISAGISMO/ARVORES > 1.1.8 - CAMPO SINTÉTICO</option>
                        <option value="1.1 - PAISAGISMO/ARVORES > 1.1.9 - PLANTAÇÃO DE MUDAS">1.1 - PAISAGISMO/ARVORES > 1.1.9 - PLANTAÇÃO DE MUDAS</option>
                        <option value="1.2 - PAVIMENTAÇÕES">1.2 - PAVIMENTAÇÕES</option>
                        <option value="1.2 - PAVIMENTAÇÕES > 1.2.1 - TAPA BURACOS">1.2 - PAVIMENTAÇÕES > 1.2.1 - TAPA BURACOS</option>
                        <option value="1.2 - PAVIMENTAÇÕES > 1.2.10 - PATROL">1.2 - PAVIMENTAÇÕES > 1.2.10 - PATROL</option>
                        <option value="1.2 - PAVIMENTAÇÕES > 1.2.11 - ASFALTO">1.2 - PAVIMENTAÇÕES > 1.2.11 - ASFALTO</option>
                        <option value="1.2 - PAVIMENTAÇÕES > 1.2.12 - BURACOS / GALERIAS PLUVIAIS">1.2 - PAVIMENTAÇÕES > 1.2.12 - BURACOS / GALERIAS PLUVIAIS</option>
                        <option value="1.2 - PAVIMENTAÇÕES > 1.2.13 - RETROFIT">1.2 - PAVIMENTAÇÕES > 1.2.13 - RETROFIT</option>
                        <option value="1.2 - PAVIMENTAÇÕES > 1.2.14 - NIVELAMENTO DE TAMPAS">1.2 - PAVIMENTAÇÕES > 1.2.14 - NIVELAMENTO DE TAMPAS</option>
                        <option value="1.2 - PAVIMENTAÇÕES > 1.2.2 - RECAPEAMENTO">1.2 - PAVIMENTAÇÕES > 1.2.2 - RECAPEAMENTO</option>
                        <option value="1.2 - PAVIMENTAÇÕES > 1.2.3 - EXECUÇÃO/RECUPERAÇÃO DE CALÇADAS">1.2 - PAVIMENTAÇÕES > 1.2.3 - EXECUÇÃO/RECUPERAÇÃO DE CALÇADAS</option>
                        <option value="1.2 - PAVIMENTAÇÕES > 1.2.4 - MEIO FIO">1.2 - PAVIMENTAÇÕES > 1.2.4 - MEIO FIO</option>
                        <option value="1.2 - PAVIMENTAÇÕES > 1.2.5 - CASCALHAMENTO">1.2 - PAVIMENTAÇÕES > 1.2.5 - CASCALHAMENTO</option>
                        <option value="1.2 - PAVIMENTAÇÕES > 1.2.6 - EROSÃO">1.2 - PAVIMENTAÇÕES > 1.2.6 - EROSÃO</option>
                        <option value="1.2 - PAVIMENTAÇÕES > 1.2.7 - BOCA DE LOBOS / GRELHAS">1.2 - PAVIMENTAÇÕES > 1.2.7 - BOCA DE LOBOS / GRELHAS</option>
                        <option value="1.2 - PAVIMENTAÇÕES > 1.2.8 - MAQUINA FRESADORA">1.2 - PAVIMENTAÇÕES > 1.2.8 - MAQUINA FRESADORA</option>
                        <option value="1.2 - PAVIMENTAÇÕES > 1.2.9 - LOMBADAS">1.2 - PAVIMENTAÇÕES > 1.2.9 - LOMBADAS</option>
                        <option value="1.3 - EDIFICAÇÕES">1.3 - EDIFICAÇÕES</option>
                        <option value="1.3 - EDIFICAÇÕES > 1.3.1 - CONSTRUÇÕES">1.3 - EDIFICAÇÕES > 1.3.1 - CONSTRUÇÕES</option>
                        <option value="1.3 - EDIFICAÇÕES > 1.3.2 - EDIFÍCIOS PÚBLICOS">1.3 - EDIFICAÇÕES > 1.3.2 - EDIFÍCIOS PÚBLICOS</option>
                        <option value="1.3 - EDIFICAÇÕES > 1.3.3 - CONSERVAÇÃO DE EDIFICAÇÕES">1.3 - EDIFICAÇÕES > 1.3.3 - CONSERVAÇÃO DE EDIFICAÇÕES</option>
                        <option value="1.4 - OBRAS E URBANIZAÇÕES">1.4 - OBRAS E URBANIZAÇÕES</option>
                        <option value="1.4 - OBRAS E URBANIZAÇÕES > 1.4.1 - DRENAGEM DE AGUAS PLUVIAIS">1.4 - OBRAS E URBANIZAÇÕES > 1.4.1 - DRENAGEM DE AGUAS PLUVIAIS</option>
                        <option value="1.4 - OBRAS E URBANIZAÇÕES > 1.4.10 - REDUTORES DE VELOCIDADE">1.4 - OBRAS E URBANIZAÇÕES > 1.4.10 - REDUTORES DE VELOCIDADE</option>
                        <option value="1.4 - OBRAS E URBANIZAÇÕES > 1.4.11 - QUADRAS POLIESPORTIVAS">1.4 - OBRAS E URBANIZAÇÕES > 1.4.11 - QUADRAS POLIESPORTIVAS</option>
                        <option value="1.4 - OBRAS E URBANIZAÇÕES > 1.4.12 - PARQUES">1.4 - OBRAS E URBANIZAÇÕES > 1.4.12 - PARQUES</option>
                        <option value="1.4 - OBRAS E URBANIZAÇÕES > 1.4.13 - RESTAURANTES COMUNITÁRIOS">1.4 - OBRAS E URBANIZAÇÕES > 1.4.13 - RESTAURANTES COMUNITÁRIOS</option>
                        <option value="1.4 - OBRAS E URBANIZAÇÕES > 1.4.2 - PRAÇAS">1.4 - OBRAS E URBANIZAÇÕES > 1.4.2 - PRAÇAS</option>
                        <option value="1.4 - OBRAS E URBANIZAÇÕES > 1.4.3 - UBS">1.4 - OBRAS E URBANIZAÇÕES > 1.4.3 - UBS</option>
                        <option value="1.4 - OBRAS E URBANIZAÇÕES > 1.4.4 - ILUMINAÇÃO">1.4 - OBRAS E URBANIZAÇÕES > 1.4.4 - ILUMINAÇÃO</option>
                        <option value="1.4 - OBRAS E URBANIZAÇÕES > 1.4.6 - FEIRAS">1.4 - OBRAS E URBANIZAÇÕES > 1.4.6 - FEIRAS</option>
                        <option value="1.4 - OBRAS E URBANIZAÇÕES > 1.4.7 - REVITALIZAÇÃO">1.4 - OBRAS E URBANIZAÇÕES > 1.4.7 - REVITALIZAÇÃO</option>
                        <option value="1.4 - OBRAS E URBANIZAÇÕES > 1.4.8 - REGULARIZAÇÃO">1.4 - OBRAS E URBANIZAÇÕES > 1.4.8 - REGULARIZAÇÃO</option>
                        <option value="1.4 - OBRAS E URBANIZAÇÕES > 1.4.9 - PROJETOS">1.4 - OBRAS E URBANIZAÇÕES > 1.4.9 - PROJETOS</option>
                        <option value="1.5 - MOBILIÁRIOS URBANOS">1.5 - MOBILIÁRIOS URBANOS</option>
                        <option value="1.5 - MOBILIÁRIOS URBANOS > 1.5.1 - MANUTENÇÃO DE MOBILIÁRIOS URBANOS">1.5 - MOBILIÁRIOS URBANOS > 1.5.1 - MANUTENÇÃO DE MOBILIÁRIOS URBANOS</option>
                        <option value="1.6 - PEC">1.6 - PEC</option>
                        <option value="1.7 - DIVERSOS">1.7 - DIVERSOS</option>
                        <option value="1.7 - DIVERSOS > 1.7.1 - SOLICITAÇÃO DE CAMINHA">1.7 - DIVERSOS > 1.7.1 - SOLICITAÇÃO DE CAMINHA</option>
                        <option value="1.7 - DIVERSOS > 1.7.2 - SOLICITAÇÃO DE MAQUINA FRESADORA">1.7 - DIVERSOS > 1.7.2 - SOLICITAÇÃO DE MAQUINA FRESADORA</option>
                        <option value="1.7 - DIVERSOS > 1.7.3 - SOLICITAÇÃO DE PATROL">1.7 - DIVERSOS > 1.7.3 - SOLICITAÇÃO DE PATROL</option>
                        <option value="1.7 - DIVERSOS > 1.7.4 - VISTORIAS">1.7 - DIVERSOS > 1.7.4 - VISTORIAS</option>
                    </select>
                </div>
            </div>

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="status_demanda">Status da Demanda</label>
                <div class="col-lg-6">
                    <select  name="status_demanda" class="form-control" id="id_status_demanda" tabindex="5">
                        <option value="">Selecione um status</option>
                        <option value="1 - Em Projeto">1 - Em Projeto</option>
                        <option value="2 - Orçamento">2 - Orçamento</option>
                        <option value="3 - Termo de Referência">3 - Termo de Referência</option>
                        <option value="4 - Pronto para Licitar">4 - Pronto para Licitar</option>
                        <option value="5 - Em Licitação">5 - Em Licitação</option>
                        <option value="6 - Homologado">6 - Homologado</option>
                        <option value="7 - Em Contratação">7 - Em Contratação</option>
                        <option value="8 - Em Execução">8 - Em Execução</option>
                        <option value="9 - Concluído">9 - Concluído</option>
                        <option value="10 - Ata de Registro de Preço">10 - Ata de Registro de Preço</option>
                        <option value="11 - Suspensa - TCDF">11 - Suspensa - TCDF</option>
                        <option value="12 - Extra">12 - Extra</option>
                    </select>
                </div>
            </div>

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="demandante">Demandante</label>
                <div class="col-lg-6 input-group mb-2">
                    <input type="text" class="form-control" id="demandante" tabindex="6" name="demandante">
                </div>
            </div>

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="assessor_responsavel">Assessor Responsável</label>
                <div class="col-lg-6 input-group mb-2">
                    <input type="text" class="form-control" id="assessor_responsavel" tabindex="7" name="assessor_responsavel">
                </div>
            </div>

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="observacao">Observação</label>
                <div class="col-lg-6 input-group mb-2">
                    <textarea class="form-control" name="observacao" id="observacao" aria-label="With textarea" tabindex="8"></textarea>
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