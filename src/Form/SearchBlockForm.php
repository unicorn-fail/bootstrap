<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Form\SearchBlockForm.
 */

namespace Drupal\bootstrap\Form;

use Drupal\Core\Form\FormStateInterface;

/**
 * Implements hook_form_FORM_ID_alter().
 */
class SearchBlockForm extends FormAlterBase {

  /**
   * {@inheritdoc}
   */
  public static function alter(array &$form, FormStateInterface &$form_state) {
    $form['#attributes']['class'][] = 'form-search';

    $form['keys']['#title'] = '';
    $form['keys']['#placeholder'] = (string) t('Search');

    // Hide the default button from display and implement a theme wrapper
    // to add a submit button containing a search icon directly after the
    // input element.
    $form['actions']['submit']['#attributes']['class'][] = 'visually-hidden';

    // Apply a clearfix so the results don't overflow onto the form.
    $form['#attributes']['class'][] = 'content-search';
  }

}
