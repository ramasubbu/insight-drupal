<?php

namespace Drupal\insight_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'CategoryLeftMenu' block.
 *
 * @Block(
 *  id = "category_left_menu",
 *  admin_label = @Translation("Category left menu"),
 * )
 */
class CategoryLeftMenu extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['category_left_menu']['#markup'] = 'Implement CategoryLeftMenu.';

    return $build;
  }

}
