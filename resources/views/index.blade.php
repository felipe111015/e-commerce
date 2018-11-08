 @extends('template.appTemplate')
 
 @Section('conteudo')
 <!--Section Produto Em Destaque-->
        <section class="ProdDestaque img-fluid" id="ProdDestaque">
            <!--- Imagem retirada do site: <a href='https://br.freepik.com/fotos-gratis/creme-de-pastelaria-doce-branco-saboroso_1089959.htm'>Designed by Mrsiraphol</a>-->
            <div class="container">
                <div class="row col-md-12">
                    <div class="mx-auto subTituloDestaque">
                        <h1 class="tituloDestaque animated zoomIn"> Produto em Destaque </h1>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <ul class="listaDestaque">
                            <li>
                                <h2 class="tituloDestaque espacamentoDestaqueTitulo">Experimente Nosso Delicioso Bolo de Chocolate!</h2>
                            </li>
                            <li>
                                <h4 class="textoDestaque espacamentoDestaque">Delecioso bolo de chocolate com cobertura de chantily e
                                    raspas de chocolate!</h4>
                            </li>
                            <a href="{{ route('bolosDecorados') }}"
                            <li>
                                <button class="btnSaibaMais">Saiba Mais</button>
                            </li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="Cardapios">
            <div class="container">
                <div class="row">
                    <div class="mx-auto">
                        <h1 class="tituloCardapios">Cardápios !</h1>
                    </div>
                </div>
            </div>

            <div id="prods" class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul style="list-style: none;">
                            <a href="{{ route('bolosDecorados') }}"
                            <li><img src="./imagens/bolos.jpg" class="cardapios-imagens grow" alt=""></li>
                            </a>
                            <li>
                                <h4 class="titulosCardapios">Bolos Decorados!</h4>
                            </li>
                            <li class="textCardapios">Bolos Decorados para sua festa!</li>
                            <a href="{{ route('bolosDecorados') }}"
                            <li><Button class="btnCardapio">Confira!</Button></li>
                            </a>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul style="list-style: none;">
                            <a href="{{ route('docesGourmet') }}"
                            <li><img src="./imagens/secaodoces.jpg" class="cardapios-imagens grow" alt=""></li>
                            </a>
                            <li>
                                <h4 class="titulosCardapios">Doces Gourmet!</h4>
                            </li>
                            <li class="textCardapios">Deliciosos Doces gourmet para sua festa ou evento!</li>
                            <a href="{{ route('docesGourmet') }}"
                            <li><Button class="btnCardapio">Confira!</Button></li>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <ul style="list-style: none;">
                            <a href="{{ route('kits') }}"
                            <li><img src="./imagens/Kits/kits.jpg" class="cardapios-imagens grow" alt=""></li>
                            </a>
                            <li>
                                <h4 class="titulosCardapios">Kits para sua festa!</h4>
                            </li>
                            <li class="textCardapios">Venha conferir nossos deliciosos kits para sua festa, ótimas opções!</li>
                            <a href="{{ route('kits') }}"
                            <li><Button class="btnCardapio">Confira!</Button></li>
                            </a>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul style="list-style: none;">
                            <a href="{{ route('salgados') }}"
                            <li><img src="./imagens/salgados.jpg" class="cardapios-imagens grow" alt=""></li>
                            </a>
                            <li>
                                <h4 class="titulosCardapios">Salgadinhos quentinhos e crocantes!</h4>
                            </li>
                            <li class="textCardapios">Nossos salgados estão quentinhos aguardando pela sua boca!</li>
                            <a href="{{ route('salgados') }}"
                            <li><Button  class="btnCardapio">Confira!</Button></li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <!----------------------Sessão Valores---------------->
        <section>
            <div id="valores"  class="jumbotrom" style="background-color: #CDBE70">
                <div class="container">
                    <div class="row">
                        <div class="mx-auto subtitleValores">
                            <h1>Quem somos nós!</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <ul class="ulJumbo">
                                <li>
                                    <h2 class="subTitlesValores">Nossos Valores!</h2>
                                </li>
                                <li class="conteudoValores">
                                    O que fazemos para tornar cada um de nossos produtos especial!
                                </li>
                              
                            </ul>
                        </div>

                        <div class="col-md-4">
                            <ul class="ulJumbo">
                                <li>
                                    <h2 class="subTitlesValores"> Nossa Visão!</h2>
                                </li>
                                <li class="conteudoValores">
                                    O que fazemos para tornar cada um de nossos produtos especial!
                                </li>
                                
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="ulJumbo">
                                <li>
                                    <h2 class="subTitlesValores">Nossa Missão!</h2>
                                </li>
                                <li class="conteudoValores">
                                    O que fazemos para tornar cada um de nossos produtos especial!
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-------------------Rodapé--------------------------------->
        <footer class="rodape">
            <div class="container">
                <div class="row">
                    <div class="mx-auto">
                        <h4 class="endereco">Rua José da Luz,71 - Jardim Gabriela - Guarulhos</h4>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-3">
                        <a href="http://www.google.com.br" target="_blank">
                            <i class="fab fa-facebook iconFace"></i>
                            <label class="face">facebook.com/vivipatisserie</label>
                        </a>
                    </div>

                    <div class="col-md-3">
                        <a href="https://www.instagram.com/vivipatisserie_/?hl=pt-br" target="_blank">
                            <i class="fab fa-instagram iconInsta"></i>
                            <label class="instagram">@vivipatisserie</label>
                        </a>
                    </div>

                    <div class="col-md-3">
                        <i class="fas fa-at iconEmail"></i>
                        <label class="email">vivi.patisserie@gmail.com</label>
                    </div>

                    <div class="col-md-3">
                        <i class="fas fa-phone iconTel"></i>
                        <label class="tel">11-9.4238-2076</label>
                    </div>
                </div>
            </div>
        </footer>
        @endsection
        
        
        
       

