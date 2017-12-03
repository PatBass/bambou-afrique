<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\MainController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\MainController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'index-1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\MainController::index1Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/index-1',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'index-2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\MainController::index2Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/index-2',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'event' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\MainController::eventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/event',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\MainController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'application' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\MainController::applicationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/adhesion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'equipe' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\MainController::equipeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mot' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\MainController::motAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'index-5' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\MainController::index5Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/index-5',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contact_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\MainController::newContactAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'choose_language' => array (  0 =>   array (    0 => 'language',  ),  1 =>   array (    'language' => NULL,    '_controller' => 'MainBundle\\Controller\\MainController::chooseLanguageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'language',    ),    1 =>     array (      0 => 'text',      1 => '/choose-language',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'keyword_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\MainController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/keyword-search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'translation' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'MainBundle\\Controller\\MainController::translationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/translation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
