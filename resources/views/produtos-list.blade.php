@extends('template.appTemplate')
@section('conteudo')

    <section class="estiloSections">
        <div class="container">
            <div class="row estiloRows">

            @foreach($produtos as $produto)
                <div class="col-md-4">
                    <ul class="estiloListas">
                        <li>
                            <img src="imagens/Bolos Decorados/kitkat.JPG" />
                        </li>
                        <li>
                            <h3 class="estiloTitulos">{{$produto->nome}}</h3>
                        </li>
                        <li>
                            <p class="estiloParagrafo">{{$produto->descricao}}</p>
                        </li>
                        <li>
                            <label class="estiloLabelValor">Valor:</label> {{$produto->preco}}
                        </li>
                        <li>
                            <label class="estiloLabelQtde">Qtde.</label>
                            <input id="qtdeProds1" class="estiloInputs" type="number">
                        </li>
                        <li>
                            <button id="enviarCarrinho1" class="btn estiloBtns">Adicionar ao Carrinho</button>
                        </li>
                    </ul>
                </div>
            @endforeach
            </div>
        </div>
    </section>

            <footer class="footer">
                    <div class="container rodape">
                            <div class="row">
                              <div class="mx-auto">
                                <h4 class="endereco">Rua José da Luz,71 - Jardim Gabriela - Guarulhos</h4>
                              </div>
                      
                            </div>
                            <div class="row rodape">
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



 
 
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="{{ url('js/scriptsBolosSimples.js')}}"> type="text/javascript"</script>

@endSection