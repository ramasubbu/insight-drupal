<?php

namespace Drupal\insight_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'CerosBlock' block.
 *
 * @Block(
 *  id = "ceros_block",
 *  admin_label = @Translation("Ceros block"),
 * )
 */
class CerosBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['ceros_block']['#markup'] = 'Implement CerosBlock.';

    return $build;
  }

}
