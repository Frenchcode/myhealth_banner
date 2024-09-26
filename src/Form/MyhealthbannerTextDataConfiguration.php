<?php
declare(strict_types=1);

namespace PrestaShop\Module\MyHealthBanner\Form;

use PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface;
use PrestaShop\PrestaShop\Core\ConfigurationInterface;

/**
 * Configuration is used to save data to configuration table and retrieve from it.
 */
final class MyhealthbannerTextDataConfiguration implements DataConfigurationInterface
{
    public const MY_HEALTHBANNER_FORM_TEXT_TYPE = 'MY_HEALTHBANNER_FORM_TEXT_TYPE';
    public const CONFIG_MAXLENGTH = '32';

    /**
     * @var configurationInterface
     */
    private $configuration;

    public function __construct(ConfigurationInterface $configuration)
    {
        $this->configuration = $configuration;
    }

    public function getConfiguration(): array
    {
        $return = [];
        $return['config_text'] = $this->configuration->get(self::MY_HEALTHBANNER_FORM_TEXT_TYPE);

        return $return;
    }

    /**
     * @param array $configuration
     * @return array
     */
    public function updateConfiguration(array $configuration): array
    {
        $errors = [];

        if ($this->validateConfiguration($configuration)) {
            if (strlen($configuration['config_text']) > static::CONFIG_MAXLENGTH) {
                $this->configuration->set(self::MY_HEALTHBANNER_FORM_TEXT_TYPE, $configuration['config_text']);
            } else {
                $errors[] = 'MY_HEALTHBANNER_FORM_TEXT_TYPE value is too long';
            }
        }
        /* Errors are returned here. */
        return $errors;
    }

    /**
     * Ensure the parameters passed are valid
     * @param array $configuration
     * @return bool true if no exception are thrown
     */
    public function validateConfiguration(array $configuration): bool
    {
        return isset($configuration['config_text']);
    }
}