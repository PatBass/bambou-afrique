<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // nakevote
        if ($pathinfo === '/nakevote') {
            return array (  '_controller' => 'MainBundle\\Controller\\ExtraController::nakevoteAction',  '_route' => 'nakevote',);
        }

        // tokevote
        if ($pathinfo === '/tokevote') {
            return array (  '_controller' => 'MainBundle\\Controller\\ExtraController::tokevoteAction',  '_route' => 'tokevote',);
        }

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'MainBundle\\Controller\\MainController::homeAction',  '_route' => 'home',);
        }

        // index
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'MainBundle\\Controller\\MainController::indexAction',  '_route' => 'index',);
        }

        // index1
        if ($pathinfo === '/Bamboudafrique-Casablanca') {
            return array (  '_controller' => 'MainBundle\\Controller\\MainController::index1Action',  '_route' => 'index1',);
        }

        // index-2
        if ($pathinfo === '/index-2') {
            return array (  '_controller' => 'MainBundle\\Controller\\MainController::index2Action',  '_route' => 'index-2',);
        }

        // speciality
        if (0 === strpos($pathinfo, '/Specialite') && preg_match('#^/Specialite/(?P<item>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'speciality')), array (  '_controller' => 'MainBundle\\Controller\\MainController::specialityAction',));
        }

        // contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'MainBundle\\Controller\\MainController::contactAction',  '_route' => 'contact',);
        }

        // application
        if ($pathinfo === '/adhesion') {
            return array (  '_controller' => 'MainBundle\\Controller\\MainController::applicationAction',  '_route' => 'application',);
        }

        if (0 === strpos($pathinfo, '/index')) {
            // equipe
            if ($pathinfo === '/index') {
                return array (  '_controller' => 'MainBundle\\Controller\\MainController::equipeAction',  '_route' => 'equipe',);
            }

            // mot
            if ($pathinfo === '/index') {
                return array (  '_controller' => 'MainBundle\\Controller\\MainController::motAction',  '_route' => 'mot',);
            }

            // index-5
            if ($pathinfo === '/index-5') {
                return array (  '_controller' => 'MainBundle\\Controller\\MainController::index5Action',  '_route' => 'index-5',);
            }

        }

        if (0 === strpos($pathinfo, '/c')) {
            // contact_new
            if ($pathinfo === '/contact') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_contact_new;
                }

                return array (  '_controller' => 'MainBundle\\Controller\\MainController::newContactAction',  '_route' => 'contact_new',);
            }
            not_contact_new:

            // choose_language
            if (0 === strpos($pathinfo, '/choose-language') && preg_match('#^/choose\\-language(?:/(?P<language>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'choose_language')), array (  'language' => NULL,  '_controller' => 'MainBundle\\Controller\\MainController::chooseLanguageAction',));
            }

        }

        // keyword_search
        if ($pathinfo === '/keyword-search') {
            return array (  '_controller' => 'MainBundle\\Controller\\MainController::searchAction',  '_route' => 'keyword_search',);
        }

        if (0 === strpos($pathinfo, '/t')) {
            // translation
            if (0 === strpos($pathinfo, '/translation') && preg_match('#^/translation/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'translation')), array (  '_controller' => 'MainBundle\\Controller\\MainController::translationAction',));
            }

            // test_add
            if ($pathinfo === '/test/add') {
                return array (  '_controller' => 'MainBundle\\Controller\\TestController::addProductAction',  '_route' => 'test_add',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
