<?php

namespace GuildBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class UserAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('isMember', 'choice',  array(
            'choices' => array(
                'Non' => 0,
                'Oui' => 1,
            ), 'label' => 'Membre'))->add('party', 'sonata_type_model', array('label' => 'Groupe'));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('username')->add('isMember', null, array('label' => 'Membre'))->add('party', null, array('label' => 'Groupe'));
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('username')->addIdentifier('nom')->addIdentifier('prenom')->add('isMember', null, array('label' => 'Membre'))->add('party', null, array('label' => 'Groupe'));
    }
}