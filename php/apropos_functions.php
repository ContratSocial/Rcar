<?php

require_once "irp_library.php";
require_once "bubble_library.php";

$module = module_name_of_module_nameoffile (__FILE__);

$Documentation[$module]['what is it'] = "it is ...";
$Documentation[$module]['what for'] = "to ...";

entering_in_module ($module);

function apropos_version_build (){
  $here = __FUNCTION__;
  entering_in_function ($here);

  $num_ver = $_SESSION['parameters']['version_number'];
  $tit_ver = $_SESSION['parameters']['version_title'];
  $nam_pro = $_SESSION['parameters']['program_name'];
  $NAM_PRO = strtoupper ($nam_pro);

  $html_str  = comment_entering_of_function_name ($here);
  $html_str .= "$NAM_PRO Version # $num_ver [$tit_ver]<br>"; 
  $html_str .= 'Contact : <a href="mailto:rcar@willforge.fr?subject=A propos de Rcar">rcar@willforge.fr</a><br>'; 
  $html_str .= 'Copyright : Creative Commons'; 
  $html_str .= comment_exiting_of_function_name ($here);

  debug_n_check ($here , '$html_str', $html_str);

  exiting_from_function ($here);

  return $html_str;
}

function apropos_build (){
  $here = __FUNCTION__;
  entering_in_function ($here);

  $html_str  = comment_entering_of_function_name ($here);
  $html_str .= irp_provide ('pervasive_page_header', $here);
  $html_str .= '<br><br>' . "\n";
  $html_str .= irp_provide ('apropos_version', $here);
  $html_str .= irp_provide ('pervasive_page_footer', $here);
  $html_str .= comment_exiting_of_function_name ($here);

  exiting_from_function ($here);

  return $html_str;
}

exiting_from_module ($module);

?>