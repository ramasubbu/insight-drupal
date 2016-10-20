<?php

namespace Drupal\insight_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'SiteFooterBlock' block.
 *
 * @Block(
 *  id = "site_footer_block",
 *  admin_label = @Translation("Site footer block"),
 * )
 */
class SiteFooterBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['site_footer_block']['#markup'] = $this->_ins_blocks_site_footer_block_contents();
    $build['site_footer_block']['#cache'] = array(
    	'contexts' => array(
    		'url.path',
   		),
    );

    return $build;
  }
 
  /**
   * Setup the Site global footer block contents
   *
   * @return string
   */
  public function _ins_blocks_site_footer_block_contents() {
  	return "&copy; Copyright " . date ( "Y" ) . ", " . \Drupal::config('system.site')->get('name') . ", Inc. All Rights Reserved.";
  }

}
