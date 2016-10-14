<?php

namespace Drupal\insight_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'InnerPageFeaturedarticlesBlock' block.
 *
 * @Block(
 *  id = "inner_page_featuredarticles_block",
 *  admin_label = @Translation("Inner page featuredarticles block"),
 * )
 */
class InnerPageFeaturedarticlesBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['inner_page_featuredarticles_block']['#markup'] = 'Implement InnerPageFeaturedarticlesBlock.';

    return $build;
  }

}
