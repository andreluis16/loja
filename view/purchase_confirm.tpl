  <h3>Confirmar Pedido</h3>
<hr>

<!--  table listagem de itens -->
<section class="row ">
   
    <center>
    <table class="table table-bordered" style="width: 95%">
       
        <tr>
            <td colspan="6" align="right"><a href="{$PAGE_CART}" class="btn btn-info" title="">Voltar para Carrinho</a></td> 
        </tr>
        
        <tr class="text-danger bg-danger">
            <td></td> 
            <td>Produto</td> 
            <td>Valor R$</td> 
            <td>X</td> 
            <td>Sub Total R$</td> 
            
            
        </tr>
     
        
       
        
        <tr>
            {foreach from=$PRO item=P}
            
            <td> <img src="{$P.pro_img}" alt="{$P.pro_nome}"> </td>
            <td>  {$P.pro_nome} </td>
            <td>  {$P.pro_valor} </td>
            <td> {$P.pro_qtd}  </td>
            <td>  {$P.pro_subTotal}</td>
          
            
            
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

                        
                <form name="pedido_finalizar" id="pedido_finalizar" method="post" action="{$PAGE_FINISH}">        
                    <button class="btn btn-success btn-block" type="submit">  <i class="glyphicon glyphicon-ok"></i> Finalizar Pedido </button>
                </form>
                    
            </div>
        </section>
                    <br>
                    <hr>
    
       
            <div class="col-md-12" align="right">
           <!-- botão finalzar -->
           
            </div>   
           
       </form>  
       
       </div>
       
                   
                        
  </section>
       <br>
       <br>
       <br>
       <br>
