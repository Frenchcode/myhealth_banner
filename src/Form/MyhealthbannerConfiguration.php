<?php

declare(strict_types=1);

namespace naslim\modules\myhealthbanner\Form;

use Doctrine\DBAL\Types\TextType;
use PrestaShopBundle\Form\Admin\Type\TranslatorAwareType;
use Symfony\Component\Form\FormBuilderInterface;

class MyhealthbannerConfiguration extends TranslatorAwareType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('config_text', TextType::class, [
                'label' => $this->trans('Configuration text', 'Modules.Myhealthbanner.Admin'),
                'help' => $this->trans('Maximum 32 characters', 'Modules.Myhealthbanner.Admin'),
            ]);
    }
}