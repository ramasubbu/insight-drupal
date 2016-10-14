<?php

namespace Drupal\insight_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'ManifestoBlock' block.
 *
 * @Block(
 *  id = "manifesto_block",
 *  admin_label = @Translation("Manifesto block"),
 * )
 */
class ManifestoBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['manifesto_block']['#markup'] = 'Implement ManifestoBlock.';

    return $build;
  }

}
