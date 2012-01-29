<?php

/* MopaBootstrapBundle:Form:fields.html.twig */
class __TwigTemplate_907f387ea8bf799cafbeb396c768a089 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'form_legend' => array($this, 'block_form_legend'),
            'generic_label' => array($this, 'block_generic_label'),
            'field_label_attr_aware_label' => array($this, 'block_field_label_attr_aware_label'),
            'field_help' => array($this, 'block_field_help'),
            'field_widget_remove_btn' => array($this, 'block_field_widget_remove_btn'),
            'form_errors' => array($this, 'block_form_errors'),
            'field_errors' => array($this, 'block_field_errors'),
            'error_type' => array($this, 'block_error_type'),
            'form_widget' => array($this, 'block_form_widget'),
            'field_row' => array($this, 'block_field_row'),
            'field_message' => array($this, 'block_field_message'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'field_widget' => array($this, 'block_field_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["__internal_907f387ea8bf799cafbeb396c768a089_1"] = $this->env->loadTemplate("MopaBootstrapBundle::flash.html.twig");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_form_legend($context, array $blocks = array())
    {
        // line 7
        echo "          <legend>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label")), "html", null, true);
        echo "</legend>
";
    }

    // line 10
    public function block_generic_label($context, array $blocks = array())
    {
        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ($this->getContext($context, "required")) {
            // line 13
            echo "        ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("class" => ((($this->getAttribute($this->getContext($context, "attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "class"), "")) : ("")) . " required")));
            // line 14
            echo "    ";
        }
        // line 15
        echo "    <label";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo ">
    ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label")), "html", null, true);
        echo "
    ";
        // line 17
        if ($this->getContext($context, "required")) {
            echo "*";
        }
        // line 18
        echo "    ";
        if ($this->getContext($context, "help_label")) {
            // line 19
            echo "        <span class=\"help-block\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "help_label")), "html", null, true);
            echo "</span>
    ";
        }
        // line 21
        echo "    </label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 27
    public function block_field_label_attr_aware_label($context, array $blocks = array())
    {
        // line 28
        ob_start();
        // line 29
        echo "    ";
        if ($this->getContext($context, "label_render")) {
            // line 30
            echo "    ";
            $context["attr"] = twig_array_merge($this->getContext($context, "label_attr"), array("for" => $this->getContext($context, "id")));
            // line 31
            echo "    ";
            $this->displayBlock("field_label", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 38
    public function block_field_help($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        if ($this->getContext($context, "help_inline")) {
            echo "<span class=\"help-inline\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "help_inline")), "html", null, true);
            echo "</span>";
        }
        // line 40
        echo "    ";
        if ($this->getContext($context, "help_block")) {
            echo "<span class=\"help-block\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "help_block")), "html", null, true);
            echo "</span>";
        }
    }

    // line 43
    public function block_field_widget_remove_btn($context, array $blocks = array())
    {
        // line 44
        echo "    ";
        if ($this->getContext($context, "widget_remove_btn")) {
            // line 45
            echo "    <input type=\"button\" class=\"removebtn\" value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "widget_remove_btn"), "html", null, true);
            echo "\">
    ";
        }
    }

    // line 51
    public function block_form_errors($context, array $blocks = array())
    {
        // line 52
        ob_start();
        // line 53
        if ($this->getContext($context, "error_delay")) {
            // line 54
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 55
                echo "        ";
                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                    // line 56
                    echo "            ";
                    if ($this->getAttribute($this->getContext($context, "child"), "set", array("errors", $this->getContext($context, "errors"), ), "method")) {
                    }
                    // line 57
                    echo "        ";
                }
                // line 58
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        } else {
            // line 61
            $context["__internal_907f387ea8bf799cafbeb396c768a089_2"] = $this->env->loadTemplate("MopaBootstrapBundle::flash.html.twig");
            // line 62
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 63
                echo "\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["__internal_907f387ea8bf799cafbeb396c768a089_2"], "flash", array("error", $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators"), ), "method"), "html", null, true);
                echo "
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 69
    public function block_field_errors($context, array $blocks = array())
    {
        // line 70
        ob_start();
        // line 71
        echo "    ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 72
            echo "    <span class=\"help-";
            $this->displayBlock("error_type", $context, $blocks);
            echo "\">
            ";
            // line 73
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 74
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators"), "html", null, true);
                echo " <br>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 76
            echo "    </span>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 82
    public function block_error_type($context, array $blocks = array())
    {
        // line 83
        ob_start();
        // line 84
        if ($this->getContext($context, "field_error_type")) {
            // line 85
            echo twig_escape_filter($this->env, $this->getContext($context, "field_error_type"), "html", null, true);
            echo "
";
        } elseif (($this->getAttribute($this->getContext($context, "form"), "hasParent", array(), "method") != 0)) {
            // line 87
            echo "    ";
            $context["form"] = $this->getAttribute($this->getContext($context, "form"), "parent");
            // line 88
            echo "    ";
            $this->displayBlock("error_type", $context, $blocks);
            echo "
";
        } elseif (($this->getAttribute($this->getContext($context, "form"), "hasParent", array(), "method") == 0)) {
            // line 90
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "form"), "get", array("error_type", ), "method"), "html", null, true);
            echo "
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 97
    public function block_form_widget($context, array $blocks = array())
    {
        // line 98
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 99
            echo "    <script type=\"text/html\" ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
        ";
            // line 100
            echo $this->env->getExtension('form')->renderRow($this->getContext($context, "prototype"));
            echo "
    </script>
    ";
        }
        // line 103
        echo "    ";
        if ((twig_in_filter("form", $this->getAttribute($this->getContext($context, "form"), "get", array("types", ), "method")) && ($this->getAttribute($this->getContext($context, "form"), "hasParent", array(), "method") == 0))) {
            // line 104
            echo "    <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
    \t<fieldset>
    \t";
            // line 106
            if ($this->getContext($context, "show_legend")) {
                $this->displayBlock("form_legend", $context, $blocks);
            }
            // line 107
            echo "    ";
        }
        // line 108
        echo "        ";
        $this->displayBlock("field_rows", $context, $blocks);
        echo "
        ";
        // line 109
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
    ";
        // line 110
        if ((twig_in_filter("form", $this->getAttribute($this->getContext($context, "form"), "get", array("types", ), "method")) && ($this->getAttribute($this->getContext($context, "form"), "hasParent", array(), "method") == 0))) {
            // line 111
            echo "        </fieldset>
    </div>
    ";
        }
    }

    // line 116
    public function block_field_row($context, array $blocks = array())
    {
        // line 117
        echo "    ";
        if ((!twig_in_filter("form", $this->getAttribute($this->getContext($context, "form"), "get", array("types", ), "method")))) {
            // line 118
            echo "    <div class=\"clearfix ";
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                echo "error";
            }
            echo "\">
    ";
        }
        // line 120
        echo "        ";
        if ((twig_in_filter("form", $this->getAttribute($this->getContext($context, "form"), "get", array("types", ), "method")) && ($this->getAttribute($this->getContext($context, "form"), "hasParent", array(), "method") != 0))) {
            // line 121
            echo "            ";
            if ($this->getContext($context, "show_child_legend")) {
                // line 122
                echo "                ";
                $this->displayBlock("form_legend", $context, $blocks);
                echo "
            ";
            }
            // line 124
            echo "    \t";
        } else {
            // line 125
            echo "        \t";
            $this->displayBlock("field_label_attr_aware_label", $context, $blocks);
            echo "
        ";
        }
        // line 127
        echo "    ";
        if ((!twig_in_filter("form", $this->getAttribute($this->getContext($context, "form"), "get", array("types", ), "method")))) {
            // line 128
            echo "        <div class=\"input\">
    ";
        }
        // line 130
        echo "            ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 131
            echo "                ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("class" => ((($this->getAttribute($this->getContext($context, "attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "class"), "")) : ("")) . " error")));
            // line 132
            echo "            ";
        }
        // line 133
        echo "            ";
        echo twig_escape_filter($this->env, $this->getContext($context, "widget_prefix"), "html", null, true);
        echo "
            ";
        // line 134
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
            ";
        // line 135
        echo twig_escape_filter($this->env, $this->getContext($context, "widget_suffix"), "html", null, true);
        echo "
    ";
        // line 136
        if ((!twig_in_filter("form", $this->getAttribute($this->getContext($context, "form"), "get", array("types", ), "method")))) {
            // line 137
            echo "            ";
            $this->displayBlock("field_message", $context, $blocks);
            echo "
        </div>
    </div>
    ";
        }
    }

    // line 143
    public function block_field_message($context, array $blocks = array())
    {
        // line 144
        echo "    ";
        if (array_key_exists("widget_remove_btn", $context)) {
            // line 145
            echo "        ";
            $this->displayBlock("field_widget_remove_btn", $context, $blocks);
            echo "
    ";
        }
        // line 147
        echo "        ";
        $this->displayBlock("field_help", $context, $blocks);
        echo "
    ";
        // line 148
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
";
    }

    // line 151
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 152
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
";
    }

    // line 157
    public function block_date_widget($context, array $blocks = array())
    {
        // line 158
        ob_start();
        // line 159
        echo "    ";
        if (($this->getContext($context, "widget") == "single_text")) {
            // line 160
            echo "        ";
            $this->displayBlock("field_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 162
            echo "    <div class=\"clearfix ";
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                echo "error";
            }
            echo "\">
    \t";
            // line 163
            echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "form"), $this->getContext($context, "label"));
            echo "
        <div class=\"input\">
            ";
            // line 165
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("class" => ((($this->getAttribute($this->getContext($context, "attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "class"), "")) : ("")) . " inline-inputs")));
            // line 166
            echo "\t        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
\t            ";
            // line 167
            echo strtr($this->getContext($context, "date_pattern"), array("{{ year }}" => $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "year"), array("attr" => array("class" => (($this->getAttribute($this->getContext($context, "attr", true), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "widget_class"), "")) : (""))))), "{{ month }}" => $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "month"), array("attr" => array("class" => (($this->getAttribute($this->getContext($context, "attr", true), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "widget_class"), "")) : (""))))), "{{ day }}" => $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "day"), array("attr" => array("class" => (($this->getAttribute($this->getContext($context, "attr", true), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "widget_class"), "")) : ("")))))));
            // line 171
            echo "
\t        </div>
\t        ";
            // line 173
            $this->displayBlock("help", $context, $blocks);
            echo "
        </div>
    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 180
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 181
        ob_start();
        // line 182
        echo "    ";
        if (($this->getContext($context, "widget") == "single_text")) {
            // line 183
            echo "        ";
            $this->displayBlock("field_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 185
            echo "    <div class=\"clearfix ";
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                echo "error";
            }
            echo "\">
    \t";
            // line 186
            echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "form"), $this->getContext($context, "label"));
            echo "
        <div class=\"input\">
            ";
            // line 188
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("class" => ((($this->getAttribute($this->getContext($context, "attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "class"), "")) : ("")) . " inline-inputs")));
            // line 189
            echo "\t        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
\t            ";
            // line 190
            echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "date"));
            echo "
\t            ";
            // line 191
            echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "time"));
            echo "
\t            ";
            // line 192
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "date"), array("attr" => array("class" => (($this->getAttribute($this->getContext($context, "attr", true), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "widget_class"), "")) : ("")))));
            echo "
\t            ";
            // line 193
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "time"), array("attr" => array("class" => (($this->getAttribute($this->getContext($context, "attr", true), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "widget_class"), "")) : ("")))));
            echo "
\t        </div>
\t        ";
            // line 195
            $this->displayBlock("field_help", $context, $blocks);
            echo "
        </div>
    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 205
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 206
        ob_start();
        // line 207
        echo "    <input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
            echo "\"";
        }
        if ($this->getContext($context, "checked")) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 211
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 212
        ob_start();
        // line 213
        echo "    ";
        if ($this->getContext($context, "expanded")) {
            // line 214
            echo "    <div class=\"clearfix\">
    \t";
            // line 215
            echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "form"), $this->getContext($context, "label"));
            echo "
\t\t\t<div class=\"input\">
\t\t\t";
            // line 217
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("class" => ((($this->getAttribute($this->getContext($context, "attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "class"), "")) : ("")) . " inputs-list")));
            // line 218
            echo "        \t<ul ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
\t        ";
            // line 219
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 220
                echo "                <li>
                \t<label>
\t\t            \t";
                // line 222
                echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "child"), array("attr" => array("class" => (($this->getAttribute($this->getContext($context, "attr", true), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "widget_class"), "")) : ("")))));
                echo "
\t\t            \t<span>";
                // line 223
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "child"), "get", array("label", ), "method")), "html", null, true);
                echo "</span>
\t                </label>
                </li>
\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 227
            echo "\t\t\t</ul>
\t\t</div>
\t</div>
    ";
        } else {
            // line 231
            echo "   <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ($this->getContext($context, "multiple")) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 232
            if ((!(null === $this->getContext($context, "empty_value")))) {
                // line 233
                echo "            <option value=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "empty_value")), "html", null, true);
                echo "</option>
        ";
            }
            // line 235
            echo "        ";
            if ((twig_length_filter($this->env, $this->getContext($context, "preferred_choices")) > 0)) {
                // line 236
                echo "            ";
                $context["options"] = $this->getContext($context, "preferred_choices");
                // line 237
                echo "            ";
                $this->displayBlock("widget_choice_options", $context, $blocks);
                echo "
            ";
                // line 238
                if ((twig_length_filter($this->env, $this->getContext($context, "choices")) > 0)) {
                    // line 239
                    echo "                <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "separator"), "html", null, true);
                    echo "</option>
            ";
                }
                // line 241
                echo "        ";
            }
            // line 242
            echo "        ";
            $context["options"] = $this->getContext($context, "choices");
            // line 243
            echo "        ";
            $this->displayBlock("widget_choice_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 249
    public function block_field_widget($context, array $blocks = array())
    {
        // line 250
        ob_start();
        // line 251
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "text")) : ("text"));
        // line 252
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "type"), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
        echo "\" />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 256
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 257
        ob_start();
        // line 258
        echo "\t";
        $context["attr"] = $this->getContext($context, "attr");
        // line 259
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
        echo "</textarea>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 265
    public function block_widget_attributes($context, array $blocks = array())
    {
        // line 266
        ob_start();
        // line 267
        echo "    id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "full_name"), "html", null, true);
        echo "\"";
        if ($this->getContext($context, "read_only")) {
            echo " disabled=\"disabled\"";
        }
        if ($this->getContext($context, "required")) {
            echo " required=\"required\"";
        }
        if ($this->getContext($context, "max_length")) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "max_length"), "html", null, true);
            echo "\"";
        }
        if ($this->getContext($context, "pattern")) {
            echo " pattern=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "pattern"), "html", null, true);
            echo "\"";
        }
        // line 268
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "attrvalue")), "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
