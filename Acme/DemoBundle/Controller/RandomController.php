// src/Acme/DemoBundle/Controller/RandomController.php



namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RandomController extends Controller
{
    public function indexAction($limit)
    {
        $number = rand(1, $limit);

        return $this->render(
            'AcmeDemoBundle:Random:index.html.twig',
            array('number' => $number)
        );

        // render a PHP template instead
        // return $this->render(
        //     'AcmeDemoBundle:Random:index.html.php',
        //     array('number' => $number)
        // );
    }
}