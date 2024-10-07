<?php

declare(strict_types=1);

namespace PrestaShop\Module\MyHealthBanner\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use PrestaShopBundle\Form\Admin\Type\TranslatorAwareType;
use Symfony\Component\Form\FormBuilderInterface;

class MyhealthbannerConfigurationFormType extends TranslatorAwareType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('config_text', TextType::class, [
                'label' => $this->trans('Delivery Text', 'Modules.Myhealthbanner.Admin'),
                'help' => $this->trans('Maximum 32 characters', 'Modules.Myhealthbanner.Admin'),
            ])
            ->add('payment_text', TextType::class, [
                'label' => $this->trans('Payment Text', 'Modules.Myhealthbanner.Admin'),
                'help' => $this->trans('Maximum 32 characters', 'Modules.Myhealthbanner.Admin'),
            ])
            ->add('client_text', TextType::class, [
                'label' => $this->trans('Client Text', 'Modules.Myhealthbanner.Admin'),
                'help' => $this->trans('Maximum 32 characters', 'Modules.Myhealthbanner.Admin'),
            ])
            ->add('sold_text', TextType::class, [
                'label' => $this->trans('Sold Text', 'Modules.Myhealthbanner.Admin'),
                'help' => $this->trans('Maximum 32 characters', 'Modules.Myhealthbanner.Admin'),
            ]);
    }
}