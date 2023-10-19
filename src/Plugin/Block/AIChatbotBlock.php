<?php

namespace Drupal\yale_ai_drupal_chat\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Block for interfacing with the Yale AI chatbot.
 *
 * @Block(
 *   id = "yale_ai_drupal_chat_block",
 *   admin_label = @Translation("Yale AI Chatbot"),
 *   category = @Translation("YaleSites AI Chatbot"),
 * )
 */
class AIChatbotBlock extends BlockBase implements ContainerFactoryPluginInterface {

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
    );
  }

  /**
   * {@inheritdoc}
   */
  public function build() {

    return [
      '#theme' => 'yale_ai_drupal_chat_block',
      '#attached' => [
        'library' => [
          'yale_ai_drupal_chat/react_app',
        ],
      ],
    ];
  }

}
