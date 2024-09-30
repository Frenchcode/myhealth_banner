<?php
declare(strict_types=1);


namespace PrestaShop\Module\MyHealthBanner\Controller;


use PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MyhealthbannerConfigurationController extends FrameworkBundleAdminController
{
    public function index(Request $request): Response
    {
        $textFormDataHandler = $this->get('prestashop.module.myhealthbanner.form.myhealthbanner_configuration_text_form_data_handler');

        $textForm = $textFormDataHandler->getForm();
        $textForm->handleRequest($request);

        if ($textForm->isSubmitted() && $textForm->isValid()) {
            $errors = $textFormDataHandler->save($textForm->getData());

            if (empty($errors)) {
                $this->addFlash('success', $this->trans('Successfull updated.', 'Admin.Notifications.Success'));
                return $this->redirectToRoute('myhealthbanner_configuration_form_simple');
            }
            $this->flashErrors($errors);
        }
        return $this->render('@Modules/myhealthbanner/views/templates/admin/form.html.twig', [
            'myhealthbannerConfigurationForm' => $textForm->createView()
        ]);
    }
}