<?php
function MYMODULE_views_pre_view(&$view) {
  if ($view->name == 'node_gallery_gallery_item_views' && $view->current_display == 'embed_7') {
      $pager_options = $view->display_handler->get_option('pager');
      $pager_options['options']['id'] = MYMODULE_get_gallery_pager_id();
      $view->display_handler->set_option('pager', $pager_options);
  }
}
?>