<?php

namespace AppBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class MyFormType extends AbstractType
{
	public function BuildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
		     ->add('name', TextType::class, [
			     'data' => 'abscef',
			     'required' => false
		     ])
			->add('submit', SubmitType::class)
			->add('delete', ButtonType::class)
		;
	}
}