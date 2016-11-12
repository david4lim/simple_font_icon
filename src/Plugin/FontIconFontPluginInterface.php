<?php

namespace Drupal\simple_font_icon\Plugin;

use Drupal\Component\Plugin\PluginInspectionInterface;
use Drupal\simple_font_icon\FontIcon;

/**
 * Defines an interface for Font Icon Font plugins.
 */
interface FontIconFontPluginInterface extends PluginInspectionInterface {

  /**
   * Returns a list of available icons.
   *
   * @return FontIcon[]
   */
  public function getFontIcons();

  /**
   * @param string $font_icon_name
   *
   * @return FontIcon
   */
  public function getFontIcon($font_icon_name);

  /**
   * @param boolean $use_remote
   *
   * @return FontIcon
   */
  public function getLibrary($use_remote = FALSE);

}
