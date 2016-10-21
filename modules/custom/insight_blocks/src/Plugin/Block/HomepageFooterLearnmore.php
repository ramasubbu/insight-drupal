<?php

namespace Drupal\insight_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Url;

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
    $build['homepage_footer_learnmore']['#markup'] = $this->getLearnMoreBlockContent();

    return $build;
  }
  
  /**
   * Setup the Homepage footer Learnmore block contents
   *
   * @return string
   */
  function getLearnMoreBlockContent() {
  	$output = '<div class="global-footer__learn-more">
        <h2 class="heading">' . t( "Learn more" ) . '</h2>
        <p>' . t( "To learn how network insight can help drive performance for your organization, visit" ) . '&nbsp;
        <a href="http://www.athenahealth.com/enterprise" target="_blank" title="' . t('athenahealth website') . '">' . t( "athenahealth.com" ) . '</a></p>
<p><a href="mailto:athenainsight@athenahealth.com?subject=athenaInsight%20Inquiry" target="_blank">' . t( "Contact Us" ) . '</a></p>
<p> <a href="/privacy-policy">' . t( "Privacy Policy" ) . '</a></p>
<p><a href="/terms-of-use">' . t( "Terms of Use" ) . '</a></p>
      </div>';
  		return $output;
  }
}
