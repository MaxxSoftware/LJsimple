<?php
namespace Acme\IndexBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class MainFormType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder 
            ->add('fname', 'text', array('label'=>'Имя'))
            ->add('lname', 'text', array('label'=>'Фамилия'))
            ->add('mname', 'text', array('label'=>'Отчество'))        
            ->add('Email', 'email')        
            ->add('bday', 'date', array('format'=>'dd.MM.yyyy','empty_value' => array('year' => 'Год', 'month' => 'Месяц', 'day' => 'День'),'label'=>'Дата рождения'));
    }

    public function getName()
    {
        return 'message';
    }
}