<?php
/* Smarty version 3.1.39, created on 2021-08-24 20:20:27
  from '/var/www/html/view/purchase_finish.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6125548b416b86_47631861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40c03ba1830041e45a91a32b85c5fb08e5f1441d' => 
    array (
      0 => '/var/www/html/view/purchase_finish.tpl',
      1 => 1629836401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6125548b416b86_47631861 (Smarty_Internal_Template $_smarty_tpl) {
?>  <h3>Finalizar Pedido</h3>
<hr>

<!--  table listagem de itens -->
<section class="row ">
   
    <center>
    <table class="table table-bordered" style="width: 95%">
           
        
        <tr class="text-danger bg-danger">
            
            <td>Produto</td> 
            <td>Valor R$</td> 
            <td>X</td> 
            <td>Sub Total R$</td> 
            
            
        </tr>
     
        
       
        
        <tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
            
          
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
 </td>
            <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
  </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
</td>
          
            
            
        </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
       
        
    </table>
  
    </center>
        
           
</section><!-- fim da listagem itens -->
        
        <!-- botoes de baixo e valor total -->
        <section class="row" id="total">
                      
            <div class="col-md-4 text-right">
           
            </div>
            
            <div class="col-md-12 text-right text-danger bg-warning" align="right"> 
            <h4>
               Total : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>

            </h4>
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
  
   <section class="row">
            <h3 class="text-center"> Formas de pagamento </h3>     
            
            <div class="col-md-4">
              
            </div>
            <!-- botao de pagamento  -->
            <div class="col-md-4">
                
            <img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/logo-pagseguro.png"  alt=""> 
            
                   <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PS_SCRIPT']->value;?>
"><?php echo '</script'; ?>
>
                
            </div>
            <div class="col-md-4">
                <img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/deposito.gif"  alt=""> 
            </div>
            
            <div class="col-md-4">
              
            </div>
         
            
  
       <br>
       <br>
       <br>
       <br>
<?php }
}
