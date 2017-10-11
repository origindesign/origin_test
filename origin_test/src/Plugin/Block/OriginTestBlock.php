<?php

namespace Drupal\origin_test\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;



/**
 * Provides a block for test.
 *
 * @Block(
 *   id = "origin_test_block",
 *   admin_label = @Translation("Origin Test Block"),
 * )
 */

class OriginTestBlock extends BlockBase implements ContainerFactoryPluginInterface {
  


    /**
     * @param array $configuration
     * @param string $plugin_id
     * @param mixed $plugin_definition
     * @param \Drupal\efq\EfqQueryEntities $EfqQueryEntities
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition) {
        
        // Call parent construct method.
        parent::__construct($configuration, $plugin_id, $plugin_definition);
        
    }

    
    /**
     * @param \Symfony\Component\DependencyInjection\ContainerInterface $container
     * @param array $configuration
     * @param string $plugin_id
     * @param mixed $plugin_definition
     * @return static
     */
    public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {

        return new static(
            $configuration,
            $plugin_id,
            $plugin_definition
        );
        
    }

    
    

    
    /**
     * {@inheritdoc}
     */
    public function build() {
        
        // Get Configuration of the block
        $config = $this->getConfiguration();

        return [
            '#type' => 'markup',
            '#markup' => '<p>' . $this->t("This Block is empty") . '</p>',
        ];


    } 

  
  
}
