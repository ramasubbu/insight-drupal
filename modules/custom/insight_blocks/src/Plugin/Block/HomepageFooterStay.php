<?php

namespace Drupal\insight_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'HomepageFooterStay' block.
 *
 * @Block(
 *  id = "homepage_footer_stay",
 *  admin_label = @Translation("Homepage footer stay"),
 * )
 */
class HomepageFooterStay extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $form = \Drupal::formBuilder()->getForm('Drupal\insight_blocks\Form\StayInKnowForm');
    return $form;
  }
}