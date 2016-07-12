<?php
/**
 * Created by PhpStorm.
 * User: ngayrard
 * Date: 11/07/16
 * Time: 17:36
 */

namespace Admin\BabyFootBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->remove('username')
                ->add('username', null, array('label' => 'Pseudo :'))
                ->add('firstName', null, array('label' => 'Prénom :'))
                ->add('name', null, array('label' => 'Nom :'))
                ->add('avatarPath', null, array('label' => 'Url avatar :'));
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'app_user_registration';
    }
}