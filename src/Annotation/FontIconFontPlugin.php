<?php

namespace Drupal\simple_font_icon\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a Font Icon Font item annotation object.
 *
 * @see \Drupal\simple_font_icon\Plugin\FontIconFontPluginManager
 * @see plugin_api
 *
 * @Annotation
 */
class FontIconFontPlugin extends Plugin {


  /**
   * The plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The label of the plugin.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $label;

}
