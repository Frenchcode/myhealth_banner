<?php
declare(strict_types=1);

namespace PrestaShop\Module\MyHealthBanner\Form;

use PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface;
use PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface;

/**
 *  Provider is responsible for providing form data, in this case, it is returned from the configuration component
 * Class MyhealthbannerTextFormDataProvider
 */
class MyhealthbannerTextFormDataProvider implements FormDataProviderInterface
{
    /**
     * @var $myHealthbannerTextDataConfiguration
     */
    private $myHealthbannerTextDataConfiguration;

    public function __construct(DataConfigurationInterface $myHealthbannerTextDataConfiguration)
    {
        $this->myHealthbannerTextDataConfiguration = $myHealthbannerTextDataConfiguration;
    }

    public function getData(): array
    {
        return $this->myHealthbannerTextDataConfiguration->getConfiguration();
    }

    public function setData(array $data): array
    {
        return $this->myHealthbannerTextDataConfiguration->updateConfiguration($data);
    }
}