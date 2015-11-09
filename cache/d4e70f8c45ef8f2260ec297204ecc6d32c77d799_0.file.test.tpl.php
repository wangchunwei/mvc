<?php /* Smarty version 3.1.27, created on 2015-11-09 04:34:56
         compiled from "D:\wamp\www\mvc\app\views\index\test.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:109925640227027d119_21266639%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4e70f8c45ef8f2260ec297204ecc6d32c77d799' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\app\\views\\index\\test.tpl',
      1 => 1447043607,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109925640227027d119_21266639',
  'variables' => 
  array (
    'name' => 0,
    'mail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5640227053a502_34349673',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5640227053a502_34349673')) {
function content_5640227053a502_34349673 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '109925640227027d119_21266639';
?>
<html>
<title>
this is a test html;
</title>

<body>
my name is : <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

</br>
my mail is : <?php echo $_smarty_tpl->tpl_vars['mail']->value;?>


</body>

</html><?php }
}
?>