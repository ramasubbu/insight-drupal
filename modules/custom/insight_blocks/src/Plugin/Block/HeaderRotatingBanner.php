<?php

namespace Drupal\insight_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'HeaderRotatingBanner' block.
 *
 * @Block(
 *  id = "header_rotating_banner",
 *  admin_label = @Translation("Header rotating banner"),
 * )
 */
class HeaderRotatingBanner extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['header_rotating_banner']['#markup'] = 'Implement HeaderRotatingBanner.';

    return $build;
  }

}
