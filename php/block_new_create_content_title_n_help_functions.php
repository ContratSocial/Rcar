<?php

require_once "irp_library.php";
require_once "entry_information_functions.php";
require_once "entry_current_display_functions.php";

$module = module_name_of_module_fullnameoffile (__FILE__);

entering_in_module ($module);

function block_new_create_content_title_text_build (){
  $here = __FUNCTION__;
  entering_in_function ($here);

  $kin_blo = irp_provide ('entry_block_kind', $here);

  if ($kin_blo == 'question') {  /* Improve Ugly */
      $en_tit = 'answer to the ' . $kin_blo;  
  }
  else {
      $en_tit = 'content of the ' . $kin_blo;  
  }

  $la_bub_tit = bubble_bubbled_la_text_of_en_text ($en_tit);
  $la_bub_Tit = string_html_capitalized_of_string ($la_bub_tit);
  $la_bub_Tit = '<b>' . $la_bub_Tit . '</b>';

  debug_n_check ($here , '$la_bub_Tit',  $la_bub_Tit);
  exiting_from_function ($here);

  return $la_bub_Tit;
}

function block_new_create_content_title_help_build (){
  $here = __FUNCTION__;
  entering_in_function ($here);


  $key_hel = 'block_new_create_content';
  $la_Hel = help_text_of_help_key ($key_hel);

  debug_n_check ($here , '$la_Hel',  $la_Hel);
  exiting_from_function ($here);

  return $la_Hel;
}

function block_new_create_content_title_n_help_build (){
  $here = __FUNCTION__;
  entering_in_function ($here);

  $la_Tit .= irp_provide ('block_new_create_content_title_text', $here);
  $la_Tit .= ' : ';
  $la_Tit .= irp_provide ('block_new_create_content_title_help', $here);

  $html_str  = comment_entering_of_function_name ($here);
  $html_str .= common_html_div_background_color_of_html ($la_Tit);
  $html_str .= comment_exiting_of_function_name ($here);

  debug_n_check ($here , '$html_str',  $html_str);
  exiting_from_function ($here);

  return $html_str;
}

exiting_from_module ($module);

?>