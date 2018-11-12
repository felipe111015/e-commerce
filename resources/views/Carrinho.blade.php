@extends('template.appTemplate')
@section('conteudo')
        <div class="geral">
            <!-- Title -->
            <div class="tituloCarrinho">
                Carrinho
            </div>
            @foreach($cart->getCardItem() as $item)
                <div class="item">
                    <div class="bt_carrinho">
                        <a href="{{route('cart.remove', $item->getId() )}}"><span class="bt_excluir"></span></a>
                    </div>

                    <div class="img_produto">
                        <img src="imagens/Bolos Simples/Bolo1.jpg" alt="" width="100%"/>
                    </div>

                    <div class="descricao_produto">
                        <span><strong>{{$item->getNome()}}</strong></span>
                    </div>

                    <div class="quantidade">
                        <button class="bt_aumenta" type="button" name="button">
                            <img src="imagens/plus.svg" alt="" />
                        </button>
                        <input type="text" name="name" value="1">
                        <button class="bt_diminui" type="button" name="button">
                            <img src="imagens/minus.svg" alt="" />
                        </button>
                    </div>

                    <div class="valor_total">{{$item->getPreco()}}</div>
                </div>
            @endforeach


        </div>
        
        <div class="container">
            <button id="bt_finalizar" class="btn estiloBtns">Finalizar Carrinho</button>
        </div>
        
        <script type="text/javascript">
            $('.bt_diminui').on('click', function (e) {
                e.preventDefault();
                var $this = $(this);
                var $input = $this.closest('div').find('input');
                var aux = parseInt($input.val());

                if (aux > 1) {
                    aux = aux - 1;
                } else {
                    aux = 0;
                }

                $input.val(aux);

            });

            $('.bt_aumenta').on('click', function (e) {
                e.preventDefault();
                var $this = $(this);
                var $input = $this.closest('div').find('input');
                var aux = parseInt($input.val());

                if (aux < 100) {
                    aux = aux + 1;
                } else {
                    aux = 100;
                }

                $input.val(aux);
            });
        </script>
        
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="Scripts/scriptBolosDecorados.js" type="text/javascript"></script>

  @endSection