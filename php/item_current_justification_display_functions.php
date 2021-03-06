<?php

require_once "common_html_library.php";
require_once "language_translate_library.php";
require_once "irp_library.php";

$module = "item_current_justification_display_functions";
entering_in_module ($module);

function item_current_justification_display_title_build () {
  $here = __FUNCTION__;
  entering_in_function ($here);

  $entity = entity_name_of_build_function_name ($here);
  father_n_son_stack_entity_push_of_father_of_son ($entity, 'CONSTANT_' . $entity);

  $en_tit = "item current justification";

  $la_bub_tit = bubble_bubbled_la_text_of_en_text ($en_tit);
  $la_bub_Tit = string_html_capitalized_of_string ($la_bub_tit);
  $la_bub_Tit = '<b>' . $la_bub_Tit . '</b>';

  $html_str  = comment_entering_of_function_name ($here);
  $html_str .= common_html_span_background_color_of_html ($la_bub_Tit);
  $html_str .= comment_exiting_of_function_name ($here);
  
  debug_n_check ($here , '$html_str',  $html_str);
  exiting_from_function ($here);

  return $html_str;
}

function item_current_justification_display_content_build () {
    $here = __FUNCTION__;
    entering_in_function ($here);
    
    $jus_ite_cur_lin = irp_provide ('item_current_justification_linked', $here);
    $jus_ite_cur_lin = string_replace_if_exists ($here, "  ", '<br><br>', $jus_ite_cur_lin);

    $html_str  = comment_entering_of_function_name ($here);
    $html_str .= '<i>';
    $html_str .= $jus_ite_cur_lin;
    $html_str .= '</i>';
    $html_str .= comment_exiting_of_function_name ($here);
    
  debug_n_check ($here , '$html_str',  $html_str);
  exiting_from_function ($here);

  return $html_str;
}

function item_current_justification_display_build () {
  $here = __FUNCTION__;
  entering_in_function ($here);

  $html_str  = comment_entering_of_function_name ($here);
  $html_str .= irp_provide ('item_current_justification_display_title', $here);
  $html_str .= '<br>';
  $html_str .= irp_provide ('item_current_justification_display_content', $here);
  $html_str .= comment_exiting_of_function_name ($here);

  debug_n_check ($here , '$html_str',  $html_str);
  exiting_from_function ($here);

  return $html_str;
}

exiting_from_module ($module);

?>