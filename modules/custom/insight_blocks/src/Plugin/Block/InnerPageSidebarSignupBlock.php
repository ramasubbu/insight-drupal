<?php

namespace Drupal\insight_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'InnerPageSidebarSignupBlock' block.
 *
 * @Block(
 *  id = "inner_page_sidebar_signup_block",
 *  admin_label = @Translation("Inner page sidebar signup block"),
 * )
 */
class InnerPageSidebarSignupBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $form = \Drupal::formBuilder()->getForm('Drupal\insight_blocks\Form\SiderbarSignupForm');
    return $form;
  }
}