<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        
        <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        
        <!-- Datatable CSS -->
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
        
        <!-- Plugin "Font Awesome" CSS --> 
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"> 
        
        <style>
            #rodape {
                bottom: 0;
                left: 0;
                height: 60px;
                position: fixed;
                width: 100%;
            }
        </style>
        
    </head>
    <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="{{route('site.home')}}">Nome da Empresa</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('site.login')}}">Fazer Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="card border-light">
        <div class="card-body">
            <section id="titulo">
                <h1 class="text-center pt-4">Criar Conta</h1>
            </section>
        </div>
    </div>

    <div class="container">
        <form class="m-5" action="{{route('site.salvarusuario')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="email">E-mail</label>
                <div class="col-lg-6 input-group mb-2">
                    <input type="text" class="form-control" id="id_email" tabindex="1" name="email">
                </div>
            </div>

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="password">Senha</label>
                <div class="col-lg-6 input-group mb-2">
                    <input type="password" class="form-control" id="id_senha" tabindex="2" name="password">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-9 control-label text-lg-center pt-2">
                    <button class="btn btn-primary" tabindex="3">Entrar</button>
                    <button type="reset" class="btn btn-default" tabindex="4">Limpar</button>
                </div>
            </div>

        </form>
    </div>

     <!-- Plugin "Font Awesome" JS --> 
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- CDN Google jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Datatable JS -->
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    
    <!-- JQuery Mask -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.8/jquery.mask.js"></script>
    
    <!-- Footer -->
        <footer class="bg-secondary p-3 mt-5" id="rodape">
            <div class="container">
                <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <p class="text-light m-0 text-center pt-1">&copy; Tudo o que quiser colocar aqui</p>
                </div>
                </div>
            </div>
        </footer>

    </body>
</html>
