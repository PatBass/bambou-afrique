<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/index')) {
            // index
            if ($pathinfo === '/index') {
                return array (  '_controller' => 'MainBundle\\Controller\\MainController::indexAction',  '_route' => 'index',);
            }

            if (0 === strpos($pathinfo, '/index-')) {
                // index-1
                if ($pathinfo === '/index-1') {
                    return array (  '_controller' => 'MainBundle\\Controller\\MainController::index1Action',  '_route' => 'index-1',);
                }

                // index-2
                if ($pathinfo === '/index-2') {
                    return array (  '_controller' => 'MainBundle\\Controller\\MainController::index2Action',  '_route' => 'index-2',);
                }

            }

        }

        // event
        if ($pathinfo === '/event') {
            return array (  '_controller' => 'MainBundle\\Controller\\MainController::eventAction',  '_route' => 'event',);
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

        // contact_new
        if ($pathinfo === '/contact') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_contact_new;
            }

            return array (  '_controller' => 'MainBundle\\Controller\\MainController::newContactAction',  '_route' => 'contact_new',);
        }
        not_contact_new:

        // keyword_search
        if ($pathinfo === '/keyword-search') {
            return array (  '_controller' => 'MainBundle\\Controller\\MainController::searchAction',  '_route' => 'keyword_search',);
        }

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_home;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'MainBundle\\Controller\\ExtraController::indexAction',  '_route' => 'home',);
        }
        not_home:

        // translation
        if (0 === strpos($pathinfo, '/translation') && preg_match('#^/translation/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'translation')), array (  '_controller' => 'MainBundle\\Controller\\ExtraController::translationAction',));
        }

        // choose_language
        if (0 === strpos($pathinfo, '/choose-language') && preg_match('#^/choose\\-language(?:/(?P<language>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'choose_language')), array (  'language' => NULL,  '_controller' => 'MainBundle\\Controller\\ExtraController::chooseLanguageAction',));
        }

        // nakevote
        if ($pathinfo === '/nakevote') {
            return array (  '_controller' => 'MainBundle\\Controller\\ExtraController::nakevoteAction',  '_route' => 'nakevote',);
        }

        // tokevote
        if ($pathinfo === '/tokevote') {
            return array (  '_controller' => 'MainBundle\\Controller\\ExtraController::tokevoteAction',  '_route' => 'tokevote',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/_console')) {
            // console
            if ($pathinfo === '/_console') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_console;
                }

                return array (  '_controller' => 'coresphere_console.controller:consoleAction',  '_route' => 'console',);
            }
            not_console:

            // console_exec
            if (0 === strpos($pathinfo, '/_console/commands') && preg_match('#^/_console/commands(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_console_exec;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'console_exec')), array (  '_controller' => 'coresphere_console.controller:execAction',  '_format' => 'json',));
            }
            not_console_exec:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
