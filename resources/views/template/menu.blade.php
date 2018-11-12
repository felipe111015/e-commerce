 <!-- Cabeçalho -->

@include('template.modalCadastro')

@include('template.modalRecuperarSenha')

 <header class="cabecalho">
            <div class="container">
         
                <div class="row">
               
                    <div class="col-md-2">
                    
                        <img class="logo"  src="imagens/logo.png" >
                        
                    </div>
                   
                    <div class="col-md-4 camposAlinha">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('index')}}">Home</a>
                            </li>
                            @php($categoria = 'Bolos Simples')
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Produtos</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('bolosSimples')}}">Bolos Simples</a>
                                    <a class="dropdown-item" href="{{ route('bolosDecorados') }}">Bolos Decorados</a>
                                    <a class="dropdown-item" href="{{ route('docesSimples') }}">Doces Simples</a>
                                    <a class="dropdown-item" href="{{ route('docesGourmet') }}">Doces Gourmet</a>
                                    <a class="dropdown-item" href="{{ route('salgados') }}">Salgados</a>
                                    <a class="dropdown-item" href="{{ route('kits') }}">Kits Festa</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#valores">Quem Somos nós</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('carrinho')}}">Carrinho</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 ">
                        <!---------------Acesso a área restrita---------------->
                        <form class="form-inline camposAlinha">
                            <div class="form-group labelLogin">
                                <label for="usuario" class="sr-only">Login</label>
                                <input maxlength="15" type="text" name="inputUser"  class="form-control" id="usuario" placeholder="email">
                            </div>
                            <div class="form-group">
                                <label for="senha" class="sr-only">Password</label>
                                <input type="password" name="inputSenha" class="form-control" id="senha" placeholder="senha">
                            </div>
                            <button type="submit" class="btn btnLogar">Entrar</button>
                        </form>
                        <!--Acesso ao Modal de Cadastro -->
                        <button type="button" class="btnAreaRest" data-toggle="modal" data-target="#exampleModalCenter">
                            Registre-se
                        </button>
                         <button type="button" class="btnAreaRest" data-toggle="modal" data-target="#exampleModalCenter2">
                            Esqueci a Senha!
                        </button>
                    </div>
                </div>
            </div>
        </header>