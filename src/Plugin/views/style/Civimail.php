<?php
/**
 * @file
 * Definition of Drupal\views_civimail\Plugin\views\style\Civimail
 */
namespace Drupal\views_civimail\Plugin\views\style;
use Drupal\core\form\FormStateInterface;
use Drupal\views\Plugin\views\style\DefaultStyle;

/**
 * Style plugin to render listing.
 *
 * @ingroup views_style_plugins
 *
 * @ViewsStyle(
 *   id = "civimail",
 *   title = @Translation("Civimail View Style"),
 *   help = @Translation("Render a listing of views data with stripped markup."),
 *   theme = "views_view_civimail",
 *   display_types = { "normal" }
 * )
 *
 */
class Civimail extends DefaultStyle {

  /**
   * {@inheritdoc}
   */
  protected $usesRowPlugin = TRUE;

  /**
   * {@inheritdoc}
   */
  protected $usesRowClass = FALSE;


  /**
   * {@inheritdoc}
   */
  protected $usesGrouping = FALSE;

  /**
   * {@inheritdoc}
   *
   * Optionally, use fancy stuff for Mosaico
   */
  protected function defineOptions() {
    $options = parent::defineOptions();
    $options['mosaico_block'] = array('default' => '');
    foreach($this->mosaico_fields as $fid => $label) {
      $options['mosaico_'.$fid] = array('default' => '');
    }
    return $options;
  }

  protected $mosaico_blocks = ['' => 'None', 'sideArticleBlock' => 'Side Article Block','singleArticleBlock' => 'Single Article Block'];
  protected $mosaico_fields = ['image' => 'Image', 'title' => 'Title', 'longText' => 'Body', 'link' => 'Link'];

  /**
   * {@inheritdoc}
   */
  public function buildOptionsForm(&$form, FormStateInterface $form_state) {
    parent::buildOptionsForm($form, $form_state);
    $fields = $this->displayHandler->getFieldLabels(TRUE);
    $form['mosaico_block'] = array(
      '#type' => 'select',
      '#title' => $this->t('Mosaico'),
      '#description' => $this->t('Generate mosaico block output.'),
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
