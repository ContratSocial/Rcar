<?php

require_once "irp_library.php";

$module = module_name_of_module_nameoffile (__FILE__);

$Documentation[$module]['what is it'] = "it is the content of the next block";
$Documentation[$module]['what for'] = "to store the modification of the current block";

entering_in_module ($module);

function block_next_content_build () {
  $here = __FUNCTION__;
  entering_in_function ($here);

  $nam_mod_cur = module_name_of_module_fullnameoffile (__FILE__);

  $con_ite_nex = irp_provide ('item_next_content', $here);
  $jus_ite_nex = irp_provide ('item_next_justification', $here);
  $nam_jus = irp_provide ('justification_name', $here);
  debug_n_check ($here , '$con_ite_nex', $con_ite_nex);
  debug_n_check ($here , '$jus_ite_nex', $jus_ite_nex);
  debug_n_check ($here , '$nam_jus', $nam_jus);

  $con_ite_jus = $nam_jus . ' : ' . $jus_ite_nex;
  debug_n_check ($here , '$con_ite_jus', $con_ite_jus);

  /* $log_str = irp_provide ('item_next_justification_checked', $here); */
  /* file_log_write ($here, $log_str); */

  $con_ite_cur = irp_provide ('item_current_content_from_block_current_content', $here);
  $blo_cur_sha = irp_provide ('block_current_sha1', $here);

  $con_blo_nex = block_current_content_of_four_elements ($con_ite_nex, $con_ite_jus, $con_ite_cur, $blo_cur_sha);

  debug_n_check ($here , '$con_blo_nex', $con_blo_nex);
  exiting_from_function ($here);

  return $con_blo_nex;

}

exiting_from_module ($module);


?>