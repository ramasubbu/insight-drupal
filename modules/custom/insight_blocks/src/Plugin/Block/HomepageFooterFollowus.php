<?php

namespace Drupal\insight_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Ajax\AlertCommand;

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
    $build['homepage_footer_followus']['#markup'] = $this->_ins_blocks_homepage_footer_followup_contents();
    return $build;
  }
  
  public function _ins_blocks_homepage_footer_followup_contents() {
  	global $base_path;
	$pagefront = \Drupal::config('system.site')->get('page.front');
  	$output = '<div class="global-footer__logo">
<h1 class="logo">
  <a href="/" class="logo__link">
    <span class="visuallyhidden">' . t("AthenaInsight") . '</span>
    <img src="modules/custom/insight_blocks/images/logo.svg" />
  </a>
</h1>
      </div>' . $this->_ins_blocks_retrieve_followup_links();

  	return $output;
  }
  
  function _ins_blocks_retrieve_followup_links() {
  	$output = '<div class="global-footer__follow-us">
        
<nav class="social-navigation">
  <p class="heading">' . t("Follow Us") . '</p>
  <ul class="list-inline social-navigation__list">
        <li class="social-navigation__list-item">
      <a href="https://linkedin.com/company/athenainsight" class="social-navigation__link icon icon-linkedin" title="Connect with us on LinkedIn" target="_blank">
        ' . t("Connect with us on LinkedIn") . '
      </a>
    </li>
        <li class="social-navigation__list-item">
      <a href="https://twitter.com/athena_insight" class="social-navigation__link icon icon-twitter" title="Follow us on Twitter" target="_blank">
        ' . t("Follow us on Twitter") . '
      </a>
    </li>
        <li class="social-navigation__list-item">
      <a href="https://facebook.com/athenaInsight" class="social-navigation__link icon icon-facebook" title="Follow us on Facebook" target="_blank">
        ' . t("Follow us on Facebook") . '
      </a>
    </li>
        <li class="social-navigation__list-item">
      <a href="https://www.youtube.com/user/athenahealth" class="social-navigation__link icon icon-youtube" title="Subscribe to our YouTube videos" target="_blank">
        ' . t("Subscribe to our YouTube videos") . '
      </a>
    </li>
        <li class="social-navigation__list-item">
      <a href="https://instagram.com/athena_insight" class="social-navigation__link icon icon-instagram" title="Follow us on Instagram" target="_blank">
        ' . t("Follow us on Instagram") . '
      </a>
    </li>
      </ul>
</nav>
      </div>';
  	return $output;
  }
}
