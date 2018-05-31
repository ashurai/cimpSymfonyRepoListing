<?php

/* *
 * This file Basic/ Initial controller to the AppBundle section
 *
 * @author Ashutosh Rai <dev.ashurai@gmail.com>
 */
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/* *
 * DefaultController Class
 */
class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {
        /**@var Load/initiate Github Client**/
        $client = new \Github\Client();

        $symfonyRepos = $client->api('user')->repositories('symfony');// Variable with all listed Symfony repositories
        
        return $this->render('AppBundle:Default:index.html.twig', [
           'repos' => $symfonyRepos
        ]);
    }
}
