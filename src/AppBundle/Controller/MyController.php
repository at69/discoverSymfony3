<?php
/**
 * Created by PhpStorm.
 * User: Crocell
 * Date: 12/10/2016
 * Time: 21:20
 */

namespace AppBundle\Controller;

use AppBundle\Form\Type\MyFormType;
use Monolog\Logger;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MyController extends Controller
{
	/**
	 * @Route("/my/{param}", name="my", defaults={"param"=1})
	 */
	public function myAction (Request $request)
	{
		$form = $this->createForm(MyFormType::class);
		$form->handleRequest($request);

		if($form->isValid())
		{
			dump($form->getClickedButton()->getName());
		}

		return $this->render('myTemplate/my.html.twig', [
			'test' => $request->get('param'),
			'form' => $form->createView()
		]);
	}
}