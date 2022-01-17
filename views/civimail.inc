<?php

/**
 * @file
 * Definition of views_plugin_style_civimail.
 */

/**
 * Style plugin to render each item in a civimail compatible output
 *
 * @ingroup views_style_plugins
 */
class views_plugin_style_civimail extends views_plugin_style {

  protected $mosaico_blocks = ['' => 'None', 'sideArticleBlock' => 'Side Article Block','singleArticleBlock' => 'Single Article Block'];
  protected $mosaico_fields = ['image' => 'Image', 'title' => 'Title', 'longText' => 'Body', 'link' => 'Link'];

  /**
   * Set default options.
   */

  public function option_definition() {
    $options = parent::option_definition();
    $options['mosaico_block'] = array('default' => '');
    foreach($this->mosaico_fields as $fid => $label) {
      $options['mosaico_'.$fid] = array('default' => '');
    }
    return $options;
  }

  public function options_form(&$form, &$form_state) {
    parent::options_form($form, $form_state);
    $fields = $this->display->handler->get_field_labels();
    $form['mosaico_block'] = array(
      '#type' => 'select',
      '#title' => t('Mosaico'),
      '#description' => t('Generate mosaico block output.'),
      '#default_value' => $this->options['mosaico_block'],
      '#required' => FALSE,
      '#options' => $this->mosaico_blocks,
    ); 
    foreach($this->mosaico_fields as $fid => $label) {
      $form['mosaico_'.$fid] = array(
        '#type' => 'select',
        '#title' => $label,
        '#default_value' => $this->options['mosaico_'.$fid],
        '#required' => FALSE,
        '#options' => $fields,
      ); 
    }
  }

}
