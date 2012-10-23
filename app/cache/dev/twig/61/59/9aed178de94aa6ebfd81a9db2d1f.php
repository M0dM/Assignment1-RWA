<?php

/* ::base.html.twig */
class __TwigTemplate_61599aed178de94aa6ebfd81a9db2d1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "        ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 33
        echo "    \t<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    \t<div class=\"navbar\">
\t\t    <div class=\"navbar-inner\">
\t\t\t    <div class=\"span12 uf-nav\">
\t\t\t    <a class=\"brand\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_home"), "html", null, true);
        echo "\">Ultimate frisbee shop</a>
\t\t\t\t    <ul class=\"nav\">
\t\t\t\t    <li><a href=\"#\">The sport</a></li>
\t\t\t\t    <li><a href=\"#\">Products</a></li>
\t\t\t\t    <li><a href=\"#\">Forum</a></li>
\t\t\t\t    <li><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_contact"), "html", null, true);
        echo "\">Contact</a></li>
\t\t\t\t    ";
        // line 45
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 46
            echo "\t\t\t\t\t    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\">Logout</a></li>
\t\t\t\t\t";
        } else {
            // line 48
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\">Login</a></li>
\t\t\t\t\t";
        }
        // line 50
        echo "\t\t\t\t    </ul>
\t\t\t    </div>
\t\t    </div>
\t\t</div>
\t\t<div class=\"main span12\">
\t\t<div id=\"styleSwitcher\">
\t\t\t<h4 id=\"titleStyleSwitcher\">Style switcher: </h4>
\t\t\t<form id=\"formStyleSwitcher\" method=\"post\" class=\"form-inline\" action=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_home"), "html", null, true);
        echo "\">
\t\t\t\t<label class=\"radio\">
\t\t\t\t\t<input type=\"radio\" name=\"optionsRadioStyles\" id=\"optionsRadio2\" value=\"Standard\" checked>
\t\t\t\t\t<p>Standard</p>
\t\t\t\t</label>
\t\t\t\t<label class=\"radio\">
\t\t\t\t\t<input type=\"radio\" name=\"optionsRadioStyles\" id=\"optionsRadios1\" value=\"Amelia\">
\t\t\t\t\t<p>Amelia</p>
\t\t\t\t</label>
\t\t\t\t<label class=\"radio\">
\t\t\t\t\t<input type=\"radio\" name=\"optionsRadioStyles\" id=\"optionsRadio2\" value=\"SuperHero\">
\t\t\t\t\t<p>Superhero</p>
\t\t\t\t</label>
\t\t\t\t<input id=\"formStyleSwitcherButton\" class=\"btn btn-mini btn-info\" type=\"submit\" value=\"Switch\">
\t\t\t</form>
\t\t</div>
\t        ";
        // line 73
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "\t    </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Ultimate frisbee shop";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t        ";
        if (array_key_exists("customCss", $context)) {
            // line 8
            echo "\t        \t";
            if (($this->getContext($context, "customCss") == "Standard")) {
                // line 9
                echo "\t        \t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/css/bootstrap/css/bootstrap.min.css"), "html", null, true);
                echo "\" />
\t        \t";
            } elseif (($this->getContext($context, "customCss") == "Amelia")) {
                // line 11
                echo "\t        \t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/css/bootstrap/css/bootstrapAmelia.min.css"), "html", null, true);
                echo "\" />
\t        \t";
            } elseif (($this->getContext($context, "customCss") == "SuperHero")) {
                // line 13
                echo "\t        \t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/css/bootstrap/css/bootstrapSuperHero.min.css"), "html", null, true);
                echo "\" />
\t        \t";
            }
            // line 15
            echo "\t        ";
        } else {
            // line 16
            echo "\t        \t";
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "app", true), "session", array(), "any", false, true), "get", array(0 => "cssStyle"), "method", true, true)) {
                // line 17
                echo "\t        \t\t";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "cssStyle"), "method") == "Standard")) {
                    // line 18
                    echo "\t        \t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/css/bootstrap/css/bootstrap.min.css"), "html", null, true);
                    echo "\" />
\t        \t\t";
                } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "cssStyle"), "method") == "Amelia")) {
                    // line 20
                    echo "\t        \t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/css/bootstrap/css/bootstrapAmelia.min.css"), "html", null, true);
                    echo "\" />
\t        \t\t";
                } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "cssStyle"), "method") == "SuperHero")) {
                    // line 22
                    echo "\t        \t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/css/bootstrap/css/bootstrapSuperHero.min.css"), "html", null, true);
                    echo "\" />
\t        \t\t";
                }
                // line 24
                echo "\t        \t";
            } else {
                // line 25
                echo "\t        \t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/css/bootstrap/css/bootstrap.min.css"), "html", null, true);
                echo "\" />
\t        \t";
            }
            // line 27
            echo "\t        ";
        }
        // line 28
        echo "    \t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/css/UFgeneral.css"), "html", null, true);
        echo "\"/>
    \t";
    }

    // line 30
    public function block_javascript($context, array $blocks = array())
    {
        // line 31
        echo "       \t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/js/jquery-1.8.2.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 73
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 73,  191 => 31,  188 => 30,  172 => 25,  124 => 9,  54 => 44,  21 => 1,  60 => 46,  47 => 11,  38 => 7,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 28,  175 => 58,  158 => 57,  107 => 41,  101 => 34,  80 => 24,  63 => 16,  36 => 33,  156 => 58,  148 => 17,  142 => 15,  140 => 50,  127 => 45,  123 => 44,  115 => 6,  110 => 42,  85 => 28,  65 => 19,  59 => 16,  45 => 9,  103 => 24,  91 => 20,  74 => 22,  70 => 14,  66 => 48,  89 => 20,  82 => 19,  42 => 12,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 27,  170 => 67,  157 => 20,  152 => 59,  145 => 16,  130 => 11,  125 => 49,  119 => 45,  116 => 44,  112 => 43,  102 => 74,  98 => 33,  76 => 4,  73 => 3,  69 => 19,  56 => 15,  32 => 11,  26 => 3,  22 => 3,  25 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 27,  77 => 23,  57 => 22,  29 => 4,  24 => 6,  19 => 2,  68 => 20,  61 => 24,  44 => 7,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 8,  118 => 7,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 57,  78 => 24,  72 => 50,  64 => 15,  53 => 15,  50 => 15,  48 => 10,  41 => 8,  39 => 7,  35 => 8,  33 => 30,  30 => 3,  27 => 5,  182 => 70,  176 => 71,  169 => 24,  163 => 22,  160 => 57,  155 => 56,  151 => 18,  149 => 52,  141 => 54,  136 => 13,  134 => 50,  131 => 43,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 5,  106 => 37,  100 => 73,  96 => 34,  93 => 33,  90 => 28,  87 => 19,  83 => 24,  79 => 25,  71 => 19,  62 => 17,  58 => 45,  55 => 14,  52 => 13,  49 => 14,  46 => 39,  43 => 8,  40 => 7,  37 => 9,  34 => 5,  31 => 6,  28 => 7,);
    }
}
