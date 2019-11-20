<?php
/* Smarty version 3.1.30-dev/18, created on 2016-01-22 19:54:26
  from "C:\xampp\htdocs\musicCloud\views\default\index.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.30-dev/18',
  'unifunc' => 'content_56a27ae2131cb5_07466134',
  'file_dependency' => 
  array (
    '5d54c003bd98930690a7644e0c77f41d2b14b9fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\musicCloud\\views\\default\\index.tpl',
      1 => 1453488864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56a27ae2131cb5_07466134 ($_smarty_tpl) {
?>


<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <div class="starter-template">
            <div class="songs">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['songs']->value, 'song');
foreach ($_from as $_smarty_tpl->tpl_vars['song']->value) {
$_smarty_tpl->tpl_vars['song']->_loop = true;
$__foreach_song_0_saved = $_smarty_tpl->tpl_vars['song'];
?>
                    <div class="song">
                        <p><?php echo $_smarty_tpl->tpl_vars['song']->value['name'];?>
 <button>Listing</button></p>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['song'] = $__foreach_song_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
            </div>
    </div>
</div>
<?php }
}
