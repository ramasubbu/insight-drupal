<?php

namespace Drupal\insight_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'HomepageFooterLearnmore' block.
 *
 * @Block(
 *  id = "homepage_footer_learnmore",
 *  admin_label = @Translation("Homepage footer learnmore"),
 * )
 */
class HomepageFooterLearnmore extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['homepage_footer_learnmore']['#markup'] = 'Implement HomepageFooterLearnmore.';

    return $build;
  }

}
