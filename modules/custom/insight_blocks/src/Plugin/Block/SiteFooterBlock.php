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
    $build['site_footer_block']['#markup'] = 'Implement SiteFooterBlock.';

    return $build;
  }

}
