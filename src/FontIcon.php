<?php

namespace Drupal\simple_font_icon;

class FontIcon {
  /**
   * The CSS class.
   *
   * @var string
   */
  protected $cssClass;

  /**
   * The icon name.
   *
   * @var string
   */
  protected $name;

  /**
   * The font icon font library prefix.
   *
   * @var string
   */
  protected $prefix;

  /**
   * FontIcon constructor.
   *
   * @param string $cssClass
   *
   * @param string $name
   *
   * @param string $prefix
   */
  public function __construct($name, $cssClass, $prefix) {
    $this->name = $name;
    $this->cssClass = $cssClass;
    $this->prefix = $prefix;
  }

  /**
   * @return string
   */
  public function getCssClass() {
    return $this->cssClass;
  }

  /**
   * @return string
   */
  public function getName() {
    return $this->name;
  }

  /**
   * @return string
   */
  public function getPrefix() {
    return $this->prefix;
  }



}

