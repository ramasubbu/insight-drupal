<?php

/**
 * @file
 * Contains \Drupal\insight_blocks\Form\SignUpCTA.
 */

namespace Drupal\insight_blocks\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class FAQBulkImport.
 *
 * @package Drupal\slc_custom\Form
 */
class SignUpCTA extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'sign_up_cta';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
  	$form['emailAddress'] = array(
  		'#type' => 'textfield',
  		'#required' => TRUE,
  		'#attributes' => array('placeholder' => 'Your Email', 'id' => 'CTAemailSignup'),
  		'#prefix' => '<div class="form-group email">',
  	);
  	$form['elqFormName'] = array(
  			'#type' => 'hidden',
  			'#default_value' => 'athenainsightnews',
  	);
  	$form['elqSiteID'] = array(
  			'#type' => 'hidden',
  			'#default_value' => '1227305179',
  	);
  	$form['faq_import']['faq_submit'] = array(
  		'#type' => 'submit',
  		'#value' => t("Sign Up"),
  		'#attributes' => array('class' => array('button')),
  		'#suffix' => '</div>',
  	);
  	$form['#prefix'] = '<div class="email-signup email-signup--cta-full" data-module="emailSignUp">
        <div class="wrapper row">
          <div class="span-1of1 span-1of3@desktop">
            <h3>' . t('Stay in the know') . '</h3>
          </div>
          <div class="span-1of1 span-1of2@desktop">
            <p class="email-signup--description">' . t("Sign up for weekly data and news from athenaInsight.") . '</p>';
    $form['#suffix'] = '
          </div>
        </div>
      </div>';
    $form['#action'] = 'https://s1227305179.t.eloqua.com/e/f2';
  	return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
  
  }
}