<?php

namespace Drupal\hello_world\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'HelloWorld' block.
 *
 * @Block(
 *  id = "hello_world",
 *  admin_label = @Translation("Hello world"),
 * )
 */
class HelloWorld extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['hello_world']['#markup'] = 'Implement HelloWorld, its a new block by code';

    return $build;
  }

}
