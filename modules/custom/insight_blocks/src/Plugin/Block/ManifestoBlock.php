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
    $build['manifesto_block']['#markup'] = $this->_ins_blocks_manifesto_block_contents();
    $build['manifesto_block']['#cache'] = array(
    		'contexts' => array(
    				'url.path',
    		),
    );

    return $build;
  }

	/**
	* Setup the Manifesto block contents
	*
	* @return string
	*/
	public function _ins_blocks_manifesto_block_contents() {
		$output = '<div id="manifesto" data-module="manifesto">
		<div class="wrapper text-center">
			<h1 class="page-hero__title">
				<span class="thin">' . t( "Today's data." ) . '</span> ' . t( "Tomorrow's healthcare." ) . '
			</h1>
			<p>' . t( "athenaInsight is a daily news hub reporting from the heart of the healthcare internet. Come here for surprising data, performance 
	strategies, and sparks of inspiration to make healthcare work as it should – all powered by data from athenahealth’s national network." ) . '</p>
			<a role="button" href="https://www.youtube.com/embed/PN5mWoZX6Nw?rel=0&amp;autoplay=1" class="button page-hero__button" id="learnMore" 
	aria-label="Watch video" target="_blank">' . t( "Watch video" ) . '</a><a role="button" href="#" class="button page-hero__button"
	 id="startExploring" aria-label="Start exploring">' . t( "Start exploring" ) . '</a>
		</div></div>';
	
	  	return $output;
	}

}
