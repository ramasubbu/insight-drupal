<?php

namespace Drupal\features_test\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'DefaultBlock' block.
 *
 * @Block(
 *  id = "features_test",
 *  admin_label = @Translation("features_test"),
 * )
 */
class DefaultBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['features_test']['#markup'] = 'Implement DefaultBlock.';

    return $build;
  }

}
