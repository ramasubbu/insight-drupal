<?php

namespace Drupal\insight_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'HomepageFooterFollowus' block.
 *
 * @Block(
 *  id = "homepage_footer_followus",
 *  admin_label = @Translation("Homepage footer followus"),
 * )
 */
class HomepageFooterFollowus extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['homepage_footer_followus']['#markup'] = 'Implement HomepageFooterFollowus.';

    return $build;
  }

}
