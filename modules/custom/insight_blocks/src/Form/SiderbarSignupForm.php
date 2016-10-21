<?php

/**
 * @file
 * Contains \Drupal\insight_blocks\Form\SiderbarSignupForm.
 */

namespace Drupal\insight_blocks\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class FAQBulkImport.
 *
 * @package Drupal\slc_custom\Form
 */
class SiderbarSignupForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'sidebar_signup_form';
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
  			'#attributes' => array('id' => 'flyoutMenuEmail'),
  	);
  	$form['elqSiteID'] = array(
  			'#type' => 'hidden',
  			'#default_value' => '1227305179',
  			'#attributes' => array('id' => 'flyoutMenuEmail'),
  	);
  	$form['faq_import']['faq_submit'] = array(
  		'#type' => 'submit',
  		'#value' => t("Sign Up"),
  		'#attributes' => array('class' => array('button')),
  		'#suffix' => '</div>',
  	);
  	$form['#prefix'] = '<div class="email-signup email-signup--flyout" data-module="emailSignUp">
    <p class="email-signup__description"><strong>' . t("Stay in the know") . '</strong><br> ' . t("Sign up for weekly updates") . '</p>';
    $form['#suffix'] = '</div>';
    $form['#action'] = 'https://s1227305179.t.eloqua.com/e/f2';
  	return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
  
  }
}