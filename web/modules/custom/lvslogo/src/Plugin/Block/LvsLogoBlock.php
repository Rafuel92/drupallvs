<?php

namespace Drupal\lvslogo\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'LvsLogoBlock' block.
 *
 * @Block(
 *  id = "lvs_logo_block",
 *  admin_label = @Translation("Lvs logo block"),
 * )
 */
class LvsLogoBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $settings = theme_get_setting('logo.url');
    $build['lvs_logo_block'] =  array(
      '#theme' => 'lvslogo',
      '#data' => $settings
    );

    return $build;
  }

}
