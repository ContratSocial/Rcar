<?php
require_once "irp_library.php";
require_once "help_text_library.php";

$module = module_name_of_module_fullnameoffile (__FILE__);

entering_in_module ($module);

function item_new_create_content_form_title_text_build (){
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

function item_new_create_content_form_title_help_build (){
  $here = __FUNCTION__;
  entering_in_function ($here);

  $key_hel = 'item_new_content';
  $la_Hel = help_text_of_help_key ($key_hel);

  debug_n_check ($here , '$la_Hel',  $la_Hel);
  exiting_from_function ($here);

  return $la_Hel;
}

function item_new_create_content_form_title_n_help_build (){
  $here = __FUNCTION__;
  entering_in_function ($here);

  $la_Tit  = '';
  $la_Tit .= irp_provide ('item_new_create_content_form_title_text', $here);
  $la_Tit .= ' : ';
  $la_Tit .= irp_provide ('item_new_create_content_form_title_help', $here);

  $html_str  = comment_entering_of_function_name ($here);
  $html_str .= common_html_span_background_color_of_html ($la_Tit);
  $html_str .= comment_exiting_of_function_name ($here);

  debug_n_check ($here , '$html_str',  $html_str);
  exiting_from_function ($here);

  return $html_str;
}

function item_new_create_content_form_textarea_build (){
  $here = __FUNCTION__;
  entering_in_function ($here);

  $entity_fat = entity_name_of_build_function_name ($here);
  father_n_son_stack_entity_push_of_father_of_son ($entity_fat, "TEXTAREA_$entity_fat");

  $kin_blo = irp_provide ('entry_block_kind', $here);
  $en_pla = 'enter the text of the ' . $kin_blo;
  $la_Pla = ucfirst (language_translate_of_en_string ($en_pla));
  
  $entity_textarea = 'item_new_content';

  $row_hta = $_SESSION['parameters']['html_textarea_rows'];
  $col_hta = $_SESSION['parameters']['html_textarea_cols'];
  
  $html_str  = comment_entering_of_function_name ($here);
  $html_str .= '<textarea name="' . $entity_textarea . '" ';
  $html_str .= 'placeholder="';
  $html_str .= $la_Pla;
  $html_str .= '" ';
  $html_str .= 'rows="' . $row_hta . '" cols="' .$col_hta . '">';
  $html_str .= '</textarea> ' . "\n";
  $html_str .= comment_exiting_of_function_name ($here);
 
  debug_n_check ($here , '$html_str',  $html_str);
  exiting_from_function ($here);

  return $html_str;
}

function item_new_create_content_form_build (){
  $here = __FUNCTION__;
  entering_in_function ($here);

  $html_str  = comment_entering_of_function_name ($here);
  $html_str .= irp_provide ('item_new_create_content_form_title_n_help', $here);
  $html_str .= '<br>' . "\n";
  $html_str .= irp_provide ('item_new_create_content_form_textarea', $here);
  $html_str .= comment_exiting_of_function_name ($here);

  debug_n_check ($here , '$html_str', $html_str);

  exiting_from_function ($here);

  return $html_str;
}

exiting_from_module ($module);

?>