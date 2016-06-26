<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace UserBundle\Form;

use FOS\UserBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Comur\ImageBundle\Form\Type\CroppableImageType;

class EditFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // get your entity related with your form type
        $myEntity = $builder->getForm()->getData();

        $builder->add('nom')->add('prenom')->add('job', ChoiceType::class, array(
            'choices'  => array(
                'Sorceress' => 'Sorceress',
                'Tamer' => 'Tamer',
                'Valkyrie' => 'Valkyrie',
                'Berseker' => 'Berseker',
                'Warrior' => 'Warrior',
                'Wizard' => 'Wizard',
                'Witch' => 'Witch',
                'Ranger' => 'Ranger',
                'Musa' => 'Musa',
                'Maewa' => 'Maewa'
            )))->add('level')->add('AP')->add('DP')->add('HP')->add('MP')
    ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Entity\User',
            'csrf_token_id' => 'profile',
            // BC for SF < 2.8
            'intention'  => 'profile',
        ));
    }

    // BC for SF < 2.7
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $this->configureOptions($resolver);
    }

    // BC for SF < 3.0
    public function getName()
    {
        return $this->getBlockPrefix();
    }

    public function getBlockPrefix()
    {
        return 'fos_user_profile';
    }

    /**
     * Builds the embedded form representing the user.
     *
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    protected function buildUserForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle'))
            ->add('email', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\EmailType'), array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle'))
        ;
    }
}
