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
        <meta name=\"viewport\" content=\"initial-scale=1.0, user-scalable=no\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 25
        echo "    \t<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    \t<div class=\"navbar\">
\t\t    <div class=\"navbar-inner\">
\t\t\t    <div class=\"span12 uf-nav\">
\t\t\t    <a class=\"brand\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_home"), "html", null, true);
        echo "\">Ultimate frisbee shop</a>
\t\t\t\t\t    <ul class=\"nav\">
\t\t\t\t\t    <li><a href=\"#\">The sport</a></li>
\t\t\t\t\t    <li><a href=\"#\">Products</a></li>
\t\t\t\t\t    <li><a href=\"#\">Forum</a></li>
\t\t\t\t\t    <li id=\"navItemContact\" style=\"position:relative\">
\t\t\t\t\t\t    <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_contact"), "html", null, true);
        echo "\">Contact</a>
\t\t\t\t\t    </li>
\t\t\t\t\t    ";
        // line 39
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 40
            echo "\t\t\t\t\t\t    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\">Logout</a></li>
\t\t\t\t\t\t";
        } else {
            // line 42
            echo "\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\">Login</a></li>
\t\t\t\t\t\t";
        }
        // line 44
        echo "\t\t\t\t\t    </ul>
\t\t\t    </div>
\t\t    </div>
\t\t</div>
\t\t<div class=\"main span12\">
\t\t<div id=\"styleSwitcher\">
\t\t\t<h4 id=\"titleStyleSwitcher\">Style switcher: </h4>
\t\t\t<form id=\"formStyleSwitcher\" method=\"post\" class=\"form-inline\" action=\"";
        // line 51
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
        // line 67
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "\t    </div>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Ultimate frisbee shop";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    \t\t";
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "cssStyle"), "method") == "Standard")) {
            // line 9
            echo "    \t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/css/bootstrap/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
    \t\t";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "cssStyle"), "method") == "Amelia")) {
            // line 11
            echo "    \t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/css/bootstrap/css/bootstrapAmelia.min.css"), "html", null, true);
            echo "\" />
    \t\t";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "cssStyle"), "method") == "SuperHero")) {
            // line 13
            echo "    \t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/css/bootstrap/css/bootstrapSuperHero.min.css"), "html", null, true);
            echo "\" />
    \t\t";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "cssStyle"), "method") == "")) {
            // line 15
            echo "    \t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/css/bootstrap/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
    \t\t";
        }
        // line 17
        echo "\t       \t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/css/jqueryUI-with-flickTheme/jquery-ui-1.9.1.min.css"), "html", null, true);
        echo "\"></script>
    \t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/css/UFgeneral.css"), "html", null, true);
        echo "\"/>
    \t";
    }

    // line 20
    public function block_javascript($context, array $blocks = array())
    {
        // line 21
        echo "       \t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/js/jquery-1.8.2.js"), "html", null, true);
        echo "\"></script>
        \t<script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/js/jquery-ui-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
        \t<script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/js/UFnavSubmenu.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 67
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
        return array (  177 => 67,  171 => 23,  167 => 22,  162 => 21,  159 => 20,  124 => 9,  105 => 68,  84 => 51,  75 => 44,  21 => 1,  60 => 16,  47 => 31,  38 => 7,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 41,  101 => 34,  80 => 24,  63 => 40,  36 => 6,  156 => 58,  148 => 17,  142 => 15,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 19,  59 => 16,  45 => 9,  103 => 67,  91 => 20,  74 => 22,  70 => 14,  66 => 12,  89 => 20,  82 => 19,  42 => 12,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 11,  125 => 49,  119 => 45,  116 => 44,  112 => 6,  102 => 36,  98 => 33,  76 => 4,  73 => 3,  69 => 42,  56 => 37,  32 => 7,  26 => 3,  22 => 3,  25 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 27,  77 => 23,  57 => 22,  29 => 4,  24 => 6,  19 => 2,  68 => 20,  61 => 39,  44 => 7,  20 => 2,  161 => 63,  153 => 18,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 8,  118 => 7,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 18,  78 => 24,  72 => 16,  64 => 15,  53 => 15,  50 => 15,  48 => 10,  41 => 8,  39 => 7,  35 => 8,  33 => 5,  30 => 3,  27 => 2,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 13,  134 => 50,  131 => 43,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 33,  90 => 28,  87 => 19,  83 => 24,  79 => 25,  71 => 19,  62 => 17,  58 => 23,  55 => 14,  52 => 13,  49 => 14,  46 => 13,  43 => 8,  40 => 7,  37 => 25,  34 => 20,  31 => 4,  28 => 6,);
    }
}
