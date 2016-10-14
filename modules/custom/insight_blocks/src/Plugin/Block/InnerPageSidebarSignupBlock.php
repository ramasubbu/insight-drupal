<?php

namespace Drupal\insight_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'InnerPageSidebarSignupBlock' block.
 *
 * @Block(
 *  id = "inner_page_sidebar_signup_block",
 *  admin_label = @Translation("Inner page sidebar signup block"),
 * )
 */
class InnerPageSidebarSignupBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['inner_page_sidebar_signup_block']['#markup'] = 'Implement InnerPageSidebarSignupBlock.';

    return $build;
  }

}
