<?php

namespace Drupal\insight_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'EmailSignupCTA' block.
 *
 * @Block(
 *  id = "email_signup_cta",
 *  admin_label = @Translation("Email signup cta"),
 * )
 */
class EmailSignupCTA extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['email_signup_cta']['#markup'] = 'Implement EmailSignupCTA.';

    return $build;
  }

}
