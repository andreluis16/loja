  <h3>Meu Carrinho</h3>
<hr>
<!-- botoes e opções de cima -->
<section class="row">
    
    <div class="col-md-4 ">
        <a href="" class="btn btn-geral" title="">Comprar Mais</a>
    </div>
    <div class="col-md-4">
        
    </div>
    <div class="col-md-4 text-right">
         
    </div>
    
</section>
    <br>

<!--  table listagem de itens -->
<section class="row ">
   
    <center>
    <table class="table table-bordered" style="width: 95%">
       
        <tr class="text-danger bg-danger">
            <td></td> 
            <td>Produto</td> 
            <td>Valor R$</td> 
            <td>X</td> 
            <td>Sub Total R$</td> 
            <td></td> 
            
        </tr>
     
        
       
        
        <tr>
            {foreach from=$PRO item=P}
            
            <td> <img src="{$P.pro_img}" alt="{$P.pro_nome}"> </td>
            <td>  {$P.pro_nome} </td>
            <td>  {$P.pro_valor} </td>
            <td> {$P.pro_qtd}  </td>
            <td>  {$P.pro_subTotal}</td>
            <td> 
                <form name="carrinho_dell" method="post" action="">
                  
                    <input type="hidden" name="pro_id" value="">    
                    <input type="hidden" name="acao" value="del">    
                    
                    <button class="btn btn-danger btn-sm"> <i class="glyphicon glyphicon-minus"></i> </button>
                </form>
            </td>
            
            
        </tr>
            {/foreach}
        
       
        
    </table>
  
    </center>
        
           
</section><!-- fim da listagem itens -->
        
        <!-- botoes de baixo e valor total -->
        <section class="row" id="total">
                      
            <div class="col-md-4 text-right">
           
            </div>
            
            <div class="col-md-4 text-right text-danger bg-warning">
            <h4>
               Total : R$ {$TOTAL}
            </h4>
            </div>
            
            <!-- botão de limpar-->
            <div class="col-md-4 ">

                <form name="limpar" method="post" action="">
                    <input type="hidden" name="acao" value="limpar">
                    <input type="hidden" name="pro_id" value="1">

                    <button class="btn btn-danger btn-block"> <i class="glyphicon glyphicon-trash"></i> Limpar Tudo</button>

                </form>

            </div>
        </section>
                    <br>
                    <hr>
    
                   
           
           <!-- botão finalzar -->
           <button class="btn btn-geral btn-block btn-lg" type="submit" >  <i class="glyphicon glyphicon-ok"></i> Confirmar Pedido </button>
           
           
       </form>  
       
       </div>
       
                   
                        
  </section>
       <br>
       <br>
       <br>
       <br>
