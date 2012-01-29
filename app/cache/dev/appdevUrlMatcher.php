<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // _assetic_2f6aa75
        if ($pathinfo === '/css/2f6aa75.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '2f6aa75',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_2f6aa75',);
        }

        // _assetic_2f6aa75_0
        if ($pathinfo === '/css/2f6aa75_mopabootstrapbundle_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '2f6aa75',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_2f6aa75_0',);
        }

        // _assetic_2f6aa75_1
        if ($pathinfo === '/css/2f6aa75_base_2.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '2f6aa75',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_2f6aa75_1',);
        }

        // _assetic_d13992d
        if ($pathinfo === '/js/d13992d.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd13992d',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_d13992d',);
        }

        // _assetic_d13992d_0
        if ($pathinfo === '/js/d13992d_part_1_jquery-1.7.1.min_1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd13992d',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_d13992d_0',);
        }

        // _assetic_d13992d_1
        if ($pathinfo === '/js/d13992d_part_1_modals_2.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd13992d',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_d13992d_1',);
        }

        // _assetic_d13992d_2
        if ($pathinfo === '/js/d13992d_part_2_bootstrap-alerts_1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd13992d',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_d13992d_2',);
        }

        // _assetic_d13992d_3
        if ($pathinfo === '/js/d13992d_part_2_bootstrap-buttons_2.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd13992d',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_d13992d_3',);
        }

        // _assetic_d13992d_4
        if ($pathinfo === '/js/d13992d_part_2_bootstrap-dropdown_3.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd13992d',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_d13992d_4',);
        }

        // _assetic_d13992d_5
        if ($pathinfo === '/js/d13992d_part_2_bootstrap-modal_4.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd13992d',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_d13992d_5',);
        }

        // _assetic_d13992d_6
        if ($pathinfo === '/js/d13992d_part_2_bootstrap-popover_5.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd13992d',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_d13992d_6',);
        }

        // _assetic_d13992d_7
        if ($pathinfo === '/js/d13992d_part_2_bootstrap-scrollspy_6.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd13992d',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_d13992d_7',);
        }

        // _assetic_d13992d_8
        if ($pathinfo === '/js/d13992d_part_2_bootstrap-tabs_7.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd13992d',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_d13992d_8',);
        }

        // _assetic_d13992d_9
        if ($pathinfo === '/js/d13992d_part_2_bootstrap-twipsy_8.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd13992d',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_d13992d_9',);
        }

        // _assetic_d13992d_10
        if ($pathinfo === '/js/d13992d_part_2_tests_9.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd13992d',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_d13992d_10',);
        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // THConnectBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'THConnectBundle_homepage');
            }
            return array (  '_controller' => 'TH\\ConnectBundle\\Controller\\DefaultController::indexAction',  '_route' => 'THConnectBundle_homepage',);
        }

        // THConnectBundle_random
        if ($pathinfo === '/my/random') {
            return array (  '_controller' => 'TH\\ConnectBundle\\Controller\\UserController::randomAction',  '_route' => 'THConnectBundle_random',);
        }

        // THConnectBundle_notlike
        if (0 === strpos($pathinfo, '/my/notlike') && preg_match('#^/my/notlike/(?P<slug>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'TH\\ConnectBundle\\Controller\\UserController::notlikeAction',)), array('_route' => 'THConnectBundle_notlike'));
        }

        // THConnectBundle_like
        if (0 === strpos($pathinfo, '/my/like') && preg_match('#^/my/like/(?P<slug>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'TH\\ConnectBundle\\Controller\\UserController::likeAction',)), array('_route' => 'THConnectBundle_like'));
        }

        // THConnectBundle_item
        if (0 === strpos($pathinfo, '/my/item') && preg_match('#^/my/item/(?P<slug>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'TH\\ConnectBundle\\Controller\\UserController::itemAction',)), array('_route' => 'THConnectBundle_item'));
        }

        // THConnectBundle_profile
        if ($pathinfo === '/my/profile') {
            return array (  '_controller' => 'TH\\ConnectBundle\\Controller\\UserController::profileAction',  '_route' => 'THConnectBundle_profile',);
        }

        // THConnectBundle_profileUpdate
        if ($pathinfo === '/my/profileUpdate') {
            return array (  '_controller' => 'TH\\ConnectBundle\\Controller\\UserController::profileUpdateAction',  '_route' => 'THConnectBundle_profileUpdate',);
        }

        // THConnectBundle_loadstream
        if ($pathinfo === '/my/loadstream') {
            return array (  '_controller' => 'TH\\ConnectBundle\\Controller\\UserController::loadstreamAction',  '_route' => 'THConnectBundle_loadstream',);
        }

        // THConnectBundle_streamComments
        if (0 === strpos($pathinfo, '/my/streamComments') && preg_match('#^/my/streamComments/(?P<slug>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'TH\\ConnectBundle\\Controller\\UserController::streamCommentsAction',)), array('_route' => 'THConnectBundle_streamComments'));
        }

        // THConnectBundle_streamCommentsNew
        if ($pathinfo === '/my/streamCommentsNew') {
            return array (  '_controller' => 'TH\\ConnectBundle\\Controller\\UserController::streamCommentsNewAction',  '_route' => 'THConnectBundle_streamCommentsNew',);
        }

        // THConnectBundle_friends
        if ($pathinfo === '/friends') {
            return array (  '_controller' => 'TH\\ConnectBundle\\Controller\\FriendsController::indexAction',  '_route' => 'THConnectBundle_friends',);
        }

        // fos_user_security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
        }

        // fos_user_security_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
        }

        // fos_user_security_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

            // fos_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            // fos_user_registration_check_email
            if ($pathinfo === '/register/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_check_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            // fos_user_registration_confirm
            if (0 === strpos($pathinfo, '/register/confirm') && preg_match('#^/register/confirm/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirm;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',)), array('_route' => 'fos_user_registration_confirm'));
            }
            not_fos_user_registration_confirm:

            // fos_user_registration_confirmed
            if ($pathinfo === '/register/confirmed') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirmed;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
            }
            not_fos_user_registration_confirmed:

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
            }
            not_fos_user_resetting_reset:

        }

        // _security_check
        if ($pathinfo === '/login_check') {
            return array('_route' => '_security_check');
        }

        // _security_logout
        if ($pathinfo === '/logout') {
            return array('_route' => '_security_logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
