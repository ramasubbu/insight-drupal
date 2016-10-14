<?php

namespace Drupal\insight_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'InnerPagerefererarticlesBlock' block.
 *
 * @Block(
 *  id = "inner_pagerefererarticles_block",
 *  admin_label = @Translation("Inner pagerefererarticles block"),
 * )
 */
class InnerPagerefererarticlesBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['inner_pagerefererarticles_block']['#markup'] = 'Implement InnerPagerefererarticlesBlock.';

    return $build;
  }

}
