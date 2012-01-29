<?php

/* THConnectBundle:Default:topbar.html.twig */
class __TwigTemplate_b88ea74b3bdde38eb4eae41e6dfdcf2e extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"topbar-wrapper\" style=\"z-index: 5;\">
    <div class=\"topbar\" data-dropdown=\"dropdown\">
        <div class=\"topbar-inner\">
            <div class=\"container\">
                <h3><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("THConnectBundle_homepage"), "html", null, true);
        echo "\">Tongue Hackr</a></h3>
                <ul class=\"nav\">
                    <li class=\"active\"><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("THConnectBundle_homepage"), "html", null, true);
        echo "\">Home</a></li>
                    <li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("THConnectBundle_profile"), "html", null, true);
        echo "\">Browse</a></li>
                    <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("THConnectBundle_friends"), "html", null, true);
        echo "\">Friends</a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\">Interests</a>
                        <ul class=\"dropdown-menu\">
                        ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "interests"));
        foreach ($context['_seq'] as $context["_key"] => $context["interest"]) {
            // line 14
            echo "                            <li><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "interest"), "name"), "html", null, true);
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interest'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 16
        echo "                        </ul>
                    </li>
                </ul>
                <form class=\"pull-left\" action=\"\">
                    <input type=\"text\" placeholder=\"Search Tongue Hackr\">
                </form>
                <ul class=\"nav secondary-nav\">
                    ";
        // line 23
        if ($this->env->getExtension('security')->isGranted("LOGGED_IN")) {
            // line 24
            echo "                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\">Your Account</a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\">Preferences</a></li>
                            <li><a href=\"#\">Contact Us</a></li>
                            <li><a href=\"#\">Invite Friends</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#\">Logout</a></li>
                        </ul>
                    </li>
                    ";
        } else {
            // line 35
            echo "                        ";
            if ((!$this->getAttribute($this->getContext($context, "app"), "user"))) {
                // line 36
                echo "                            <li><a href=\"/\">Login</a></li>
                        ";
            } else {
                // line 38
                echo "                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_security_logout"), "html", null, true);
                echo "\">Logout</a></li>
                        ";
            }
            // line 40
            echo "                    ";
        }
        // line 41
        echo "                    <li><a href=\"#\">Help</a></li>
                </ul>
            </div>
        </div><!-- /topbar-inner -->
    </div><!-- /topbar -->
</div>

";
    }

    public function getTemplateName()
    {
        return "THConnectBundle:Default:topbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
