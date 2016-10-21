<?php

namespace Drupal\insight_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Entity\Sql\SqlContentEntityStorage;
use Drupal\Core\Entity\EntityInterface;
use Drupal\taxonomy\TermStorage;
use Drupal\Core\Url;

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
    $build['category_left_menu']['#markup'] = '<nav class="primary-navigation" role="navigation">
  <ul class="primary-navigation__list">
      <li class="primary-navigation__list-item performance-insight">
      <a class="primary-navigation__link" href="/category/performance-insight" >Performance Insight</a>
    </li>
      <li class="primary-navigation__list-item data-insight">
      <a class="primary-navigation__link" href="/category/data-insight" >Data Insight</a>
    </li>
      <li class="primary-navigation__list-item leadership-insight">
      <a class="primary-navigation__link" href="/category/leadership-insight" >Leadership Insight</a>
    </li>
      <li class="primary-navigation__list-item opinion">
      <a class="primary-navigation__link" href="/category/opinion" >Opinion</a>
    </li>
      <li class="primary-navigation__list-item about-athena-insight">
      <a class="primary-navigation__link" href="/about">About athenaInsight</a>
      <ul class="sub-menu">
        <li class="menu-about-the-research primary-navigation__list-item"><a href="/about/research" class="primary-navigation__link">About the Research</a></li>
        <li class="menu-about-the-data primary-navigation__list-item"><a href="/about/data" class="primary-navigation__link">About the Data</a></li>
      </ul>
    </li>
  </ul>
</nav>';//$this->getCategoryLeftMenu();
    return $build;
  }
  
  public function getCategoryLeftMenu() {
  	global $base_path;
  	$output = '';
	/* $terms = \Drupal\taxonomy\TermStorage::loadTree('category');
  	echo "sadfsa";
  	echo "<pre>"; print_r($terms); exit;
  	$output = '<nav class="primary-navigation" role="navigation">
      <ul id="menu-primary-navigation" class="primary-navigation__list">';
  	$inc = 0;
  	foreach ( $terms as $key => $term ) {
  		$term_name = $term->name;
  		$output .= '<li class="menu-' . str_replace ( " ", "-", $term_name ) . ' primary-navigation__list-item"><a
          href="' . $base_path . drupal_get_path_alias ( "taxonomy/term/" . $term->tid ) . '"
          class="primary-navigation__link">' . $term_name . '</a>';
  		$child = taxonomy_get_children ( $term->tid );
  		if (count( $child ) == 0) {
  			$output .= '</li>';
  			$inc = 0;
  		} else {
  			if ($inc == 0) {
  				$output .= '<ul class="sub-menu">';
  			}
  			if ($term->parents [0] > 0) {
  				$inc ++;
  				$output .= '<li class="menu-' . str_replace ( " ", "-", $term_name ) . ' primary-navigation__list-item"><a
                href="' . $base_path . drupal_get_path_alias ( "taxonomy/term/" . $term->tid ) . '"
                class="primary-navigation__link">' . $term_name . '</a></li>';
  				if ($inc == count( $child )) {
  					$output .= '</ul></li>';
  				}
  			}
  		}
  	}
  	$output .= '</ul>
    </nav>';
  	$sign_up_weekly_form = drupal_get_form ( '_ins_blocks_sign_up_weekly_updates_form' );
  	$output .= '<div class="email-signup email-signup--flyout" data-module="emailSignUp">
      <p class="email-signup__description">
        <strong>' . t( "Stay in the know" ) . '</strong><br> ' . t( "Sign up for weekly updates" ) . '
      </p> ' . render ( $sign_up_weekly_form ) . '</div>';
  	$output .= _ins_blocks_retrieve_followup_links ();
  	*/
  	return $output;
  }
}