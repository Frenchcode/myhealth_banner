<?php
declare(strict_types=1);

namespace PrestaShop\Module\MyHealthBanner\Form;

use PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface;
use PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface;

/**
 *  Provider is responsible for providing form data, in this case, it is returned from the configuration component
 * Class MyhealthbannerConfigurationTextFormDataProvider
 */
class MyhealthbannerConfigurationTextFormDataProvider implements FormDataProviderInterface
{
    /**
     * @var DataConfigurationInterface
     */
    private $myhealthbannerConfigurationTextDataConfiguration;

    public function __construct(DataConfigurationInterface $myhealthbannerConfigurationTextDataConfiguration)
    {
        $this->myhealthbannerConfigurationTextDataConfiguration = $myhealthbannerConfigurationTextDataConfiguration;
    }

    public function getData(): array
    {
        return $this->myhealthbannerConfigurationTextDataConfiguration->getConfiguration();
    }

    public function setData(array $data): array
    {
        return $this->myhealthbannerConfigurationTextDataConfiguration->updateConfiguration($data);
    }
}