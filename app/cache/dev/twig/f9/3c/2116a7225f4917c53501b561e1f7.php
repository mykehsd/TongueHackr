<?php

/* MopaBootstrapBundle::flash.html.twig */
class __TwigTemplate_f93c2116a7225f4917c53501b561e1f7 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 15
        echo "
";
        // line 42
        echo "
";
    }

    // line 1
    public function getflash($type = null, $message = null, $close = null, $use_raw = null)
    {
        $context = array_merge($this->env->getGlobals(), array(
            "type" => $type,
            "message" => $message,
            "close" => $close,
            "use_raw" => $use_raw,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <div class=\"alert-message ";
            echo twig_escape_filter($this->env, $this->getContext($context, "type"), "html", null, true);
            echo "\" data-alert=\"alert\">
\t";
            // line 3
            if (((array_key_exists("close", $context)) ? (_twig_default_filter($this->getContext($context, "close"), false)) : (false))) {
                // line 4
                echo "            <a class=\"close\" href=\"#\">×</a>
\t";
            }
            // line 6
            echo "\t<p>
            ";
            // line 7
            if (((array_key_exists("use_raw", $context)) ? (_twig_default_filter($this->getContext($context, "use_raw"), false)) : (false))) {
                // line 8
                echo "                ";
                echo $this->env->getExtension('translator')->trans($this->getContext($context, "message"));
                echo "
            ";
            } else {
                // line 10
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "message")), "html", null, true);
                echo "
            ";
            }
            // line 12
            echo "\t</p>
    </div>
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 16
    public function getsession_flash($type = null, $close = null, $use_raw = null, $class = null)
    {
        $context = array_merge($this->env->getGlobals(), array(
            "type" => $type,
            "close" => $close,
            "use_raw" => $use_raw,
            "class" => $class,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 17
            echo "    ";
            $context["types"] = array(0 => "info", 1 => "error", 2 => "warning", 3 => "success");
            // line 18
            echo "    ";
            if ((!array_key_exists("close", $context))) {
                // line 19
                echo "        ";
                $context["close"] = false;
                // line 20
                echo "    ";
            }
            // line 21
            echo "    ";
            if ((!array_key_exists("use_raw", $context))) {
                // line 22
                echo "        ";
                $context["use_raw"] = false;
                // line 23
                echo "    ";
            }
            // line 24
            echo "    ";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "getFlashes", array(), "method")) > 0)) {
                // line 25
                echo "        <div class=\"row\">
            <div class=\"";
                // line 26
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter($this->getContext($context, "class"), "span16")) : ("span16")), "html", null, true);
                echo "\">
                ";
                // line 27
                if (((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), false)) : (false))) {
                    // line 28
                    echo "                    ";
                    if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array($this->getContext($context, "type"), ), "method")) {
                        // line 29
                        echo "                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this, "flash", array($this->getContext($context, "type"), $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array($this->getContext($context, "type"), ), "method"), $this->getContext($context, "close"), $this->getContext($context, "use_raw"), ), "method"), "html", null, true);
                        echo "
                    ";
                    }
                    // line 31
                    echo "                ";
                } else {
                    // line 32
                    echo "                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "types"));
                    foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                        // line 33
                        echo "                        ";
                        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array($this->getContext($context, "type"), ), "method")) {
                            // line 34
                            echo "                            ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this, "flash", array($this->getContext($context, "type"), $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array($this->getContext($context, "type"), ), "method"), $this->getContext($context, "close"), $this->getContext($context, "use_raw"), ), "method"), "html", null, true);
                            echo "
                        ";
                        }
                        // line 36
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 37
                    echo "                ";
                }
                // line 38
                echo "            </div>
        </div>
    ";
            }
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle::flash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
