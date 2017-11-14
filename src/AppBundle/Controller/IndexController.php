<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

 /**
 * TemplateController.
 *
 * @author Badr <badrsk1x@gmail.com>
 */

class IndexController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction($template)
    {
        if ($this->container->has('templating')) {
            $response = $this->container->get('templating')->renderResponse($template);
        } elseif ($this->container->has('twig')) {
            $response = new Response($this->container->get('twig')->render($template));
        } else {
            throw new \LogicException('You can not use the TemplateController if the Templating Component or the Twig Bundle are not available.');
        }

      

        return $response;
    }
}
