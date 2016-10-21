<?php

/**
 * @file
 * Contains \Drupal\insight_blocks\Form\StayInKnowForm.
 */

namespace Drupal\insight_blocks\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class FAQBulkImport.
 *
 * @package Drupal\slc_custom\Form
 */
class StayInKnowForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'stay_in_know';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
  	$form['emailAddress'] = array(
  		'#type' => 'textfield',
  		'#required' => TRUE,
  		'#attributes' => array('placeholder' => 'Your Email', 'id' => 'emailSignup'),
  		'#prefix' => '<div class="form-group email">',
  	);
  	$form['elqFormName'] = array(
  			'#type' => 'hidden',
  			'#default_value' => 'athenainsightnews',
  			'#attributes' => array('id' => 'footerEmail'),
  	);
  	$form['elqSiteID'] = array(
  			'#type' => 'hidden',
  			'#default_value' => '1227305179',
  			'#attributes' => array('id' => 'footerEmail'),
  	);
  	$form['faq_import']['faq_submit'] = array(
  		'#type' => 'submit',
  		'#value' => t("Sign Up"),
  		'#attributes' => array('class' => array('button')),
  		'#suffix' => '</div>',
  	);
  	$form['#prefix'] = '<div class="global-footer__email-signup">
        <h2 class="heading">' . t("Stay in the know") . '</h2>
	<div class="email-signup email-signup--footer" data-module="emailSignUp">
    <p class="email-signup__description">' . t("Sign up for weekly data and news from athenaInsight.") . '</p>';
  	$form['#suffix'] = '</div>
      </div>';
  	$form['#action'] = 'https://s1227305179.t.eloqua.com/e/f2';
  	$form['#attributes'] = array('data-module' => 'formValidation');
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
  
  }
}