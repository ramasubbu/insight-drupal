<?php

namespace Drupal\insight_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'InnerPageRelatedarticlesBlock' block.
 *
 * @Block(
 *  id = "inner_page_relatedarticles_block",
 *  admin_label = @Translation("Inner page relatedarticles block"),
 * )
 */
class InnerPageRelatedarticlesBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['inner_page_relatedarticles_block']['#markup'] = 'Implement InnerPageRelatedarticlesBlock.';

    return $build;
  }

}
