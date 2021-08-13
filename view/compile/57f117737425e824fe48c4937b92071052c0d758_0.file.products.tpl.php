<?php
/* Smarty version 3.1.39, created on 2021-08-11 21:01:01
  from '/var/www/html/view/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61143a8d5c46f2_33606592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57f117737425e824fe48c4937b92071052c0d758' => 
    array (
      0 => '/var/www/html/view/products.tpl',
      1 => 1628715658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61143a8d5c46f2_33606592 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Lista de produtos</h3>
<hr>

 
    <section id="pagincao" class="row">
       <center>
          PAGINAS
       </center>
    </section>
  
       
    <!--  começa lista de produtos  ---->   
  <section id="produtos" class="row">  
 
<ul style="list-style: none" >
    
    
  
                  <div class="row" id="pularliha">
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
           
           
        <li class="col-md-4">

            <div class="thumbnail">

                <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
">


                    <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="" > 

                    <div class="caption">

                        <h4 class="text-center"> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h4> 

                        <h3 class="text-center text-danger"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h3>

                    </div>

                </a>

            </div>


        </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
         </div>
         
    
</ul>
    
    </section>
    
    
     <!--  paginação inferior   -->  
    <section id="pagincao" class="row">
    <center>
    PAGINAS
    </center>
    </section><?php }
}
