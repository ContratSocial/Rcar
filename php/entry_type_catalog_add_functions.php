<?php

require_once "management_library.php";
require_once "irp_library.php";
require_once "array_library.php";

$module = module_name_of_module_fullnameoffile (__FILE__);

$Documentation[$module]['what is it'] = "it is ...";
$Documentation[$module]['what for'] = "to ...";

entering_in_module ($module);

function entry_type_catalog_add_page_title_build (){
  $here = __FUNCTION__;
  entering_in_function ($here);

  $nam_wos = irp_provide ('entry_name_without_entry_type', $here);
  debug_n_check ($here , '$nam_wos',  $nam_wos);
  /* $kin_blo = irp_provide ('entry_block_kind', $here); */
  /* $en_tit = 'add surname for ' . $kin_blo;   */

  $en_tit = 'add surname for name';  
  $la_bub_tit = bubble_bubbled_la_text_of_en_text ($en_tit);
  $la_bub_Tit  = string_html_capitalized_of_string ($la_bub_tit);
  $la_bub_Tit .= ' <i><b>' . $nam_wos . '</b></i>' . "\n"; 

  $html_str  = comment_entering_of_function_name ($here);
  $html_str .= common_html_span_background_color_of_html ($la_bub_Tit);
  $html_str .= comment_exiting_of_function_name ($here);

  debug_n_check ($here , '$html_str',  $html_str);
  exiting_from_function ($here);

  return $html_str;
}

/* Second Section Surname Create */
/* Second Section Surname Create Title */

function entry_type_catalog_add_name_modify_title_build (){
  $here = __FUNCTION__;
  entering_in_function ($here);

  $en_tit = 'enter the surname below';

  $la_bub_tit = bubble_bubbled_la_text_of_en_text ($en_tit);
  $la_Tit  = string_html_capitalized_of_string ($la_bub_tit);
 
  $html_str  = comment_entering_of_function_name ($here);
  $html_str .= common_html_div_background_color_of_html ($la_Tit);
  $html_str .= comment_exiting_of_function_name ($here);

  debug_n_check ($here , '$html_str',  $html_str);
  exiting_from_function ($here);

  return $html_str;
}

/* Second Section Name Modify Inputtype */

function entry_type_catalog_add_name_modify_inputtype_build (){
  $here = __FUNCTION__;
  entering_in_function ($here);

  $nam = irp_provide ('entry_name_without_entry_type', $here);
  $nam_nun = str_replace('_', ' ', $nam);

  $html_str  = '';
  $html_str .= '<input type="text" name="surname_of_entry_name_without_entry_type" size="50" value="' . $nam_nun . '"/> ';

  debug_n_check ($here , '$html_str',  $html_str);
  exiting_from_function ($here);

  return $html_str;
}

function entry_type_catalog_add_name_modify_build (){
  $here = __FUNCTION__;
  entering_in_function ($here);

  $html_str  = '';
  $html_str .= irp_provide ('entry_type_catalog_add_name_modify_title', $here);
  $html_str .= '<br>';
  $html_str .= irp_provide ('entry_type_catalog_add_name_modify_inputtype', $here);

  debug_n_check ($here , '$html_str',  $html_str);
  exiting_from_function ($here);

  return $html_str;
}

function entry_type_catalog_add_build () {
    $here = __FUNCTION__;
    entering_in_function ($here);
    
    $script_action = 'entry_type_catalog_add_save_script.php';
    
    $html_str  = comment_entering_of_function_name ($here);
    $html_str .= irp_provide ('pervasive_page_header', $here);
    
    $html_str .= '<form action="' . $script_action. '" method="get"> ' . "\n";
    
    $html_str .= irp_provide ('entry_type_catalog_add_page_title', $here);
    $html_str .= '<br><br>' . "\n";
    
    $html_str .= irp_provide ('entry_type_catalog_add_name_modify', $here);
    $html_str .= '<br><br>' . "\n";

    $html_str .= inputtypesubmit_of_en_action_name ('save');
    $html_str .= '</form>' . "\n";

    $html_str .= irp_provide ('pervasive_page_footer', $here);
    $html_str .= comment_exiting_of_function_name ($here);
    
    debug_n_check ($here , '$html_str', $html_str);
    exiting_from_function ($here);
    
    return $html_str;
}

exiting_from_module ($module);

?>