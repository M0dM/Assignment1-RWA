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
        // line 26
        echo "    \t<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    \t<div class=\"navbar\">
\t\t    <div class=\"navbar-inner\">
\t\t\t    <div class=\"span12 uf-nav\">
\t\t\t    <a class=\"brand\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_home"), "html", null, true);
        echo "\">Ultimate frisbee shop</a>
\t\t\t\t\t    <ul class=\"nav\">
\t\t\t\t\t    <li><a href=\"#\">The sport</a></li>
\t\t\t\t\t    <li><a href=\"#\">Products</a></li>
\t\t\t\t\t    <li><a href=\"#\">Forum</a></li>
\t\t\t\t\t    <li id=\"contactMenuPlaceholder\" style=\"position:relative\">
\t\t\t\t\t\t    <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_contact"), "html", null, true);
        echo "\">Contact</a>
\t\t\t\t\t\t    <div>
\t\t\t\t\t    \t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_contact"), "html", null, true);
        echo "\">General informations</a></li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_docView"), "html", null, true);
        echo "\">Description file</a>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("doc/document.docx"), "html", null, true);
        echo "\">Download</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_docView"), "html", null, true);
        echo "\">View</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_map"), "html", null, true);
        echo "\">Map</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t    </div>
\t\t\t\t\t    </li>
\t\t\t\t\t    ";
        // line 53
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 54
            echo "\t\t\t\t\t\t    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\">Logout</a></li>
\t\t\t\t\t\t";
        } else {
            // line 56
            echo "\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\">Login</a></li>
\t\t\t\t\t\t";
        }
        // line 58
        echo "\t\t\t\t\t    </ul>
\t\t\t    </div>
\t\t    </div>
\t\t</div>
\t\t<div class=\"main span12\">
\t\t<div id=\"styleSwitcher\">
\t\t\t<h4 id=\"titleStyleSwitcher\">Style switcher: </h4>
\t\t\t<form id=\"formStyleSwitcher\" method=\"post\" class=\"form-inline\" action=\"";
        // line 65
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
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 82
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/js/UFnavSubmenuPlugin.js"), "html", null, true);
        echo "\"></script>
        \t<script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/js/UFnavSubmenu.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 81
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
        return array (  195 => 22,  190 => 21,  164 => 13,  146 => 7,  133 => 82,  97 => 56,  67 => 43,  21 => 1,  60 => 16,  47 => 32,  38 => 7,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 81,  202 => 66,  196 => 63,  183 => 61,  181 => 18,  175 => 58,  158 => 11,  107 => 41,  101 => 34,  80 => 24,  63 => 16,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 6,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 19,  59 => 16,  45 => 9,  103 => 58,  91 => 54,  74 => 22,  70 => 14,  66 => 12,  89 => 53,  82 => 49,  42 => 12,  223 => 96,  214 => 90,  210 => 88,  203 => 24,  199 => 23,  194 => 80,  192 => 62,  189 => 78,  187 => 20,  184 => 76,  178 => 72,  170 => 15,  157 => 61,  152 => 9,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 44,  112 => 65,  102 => 36,  98 => 33,  76 => 46,  73 => 3,  69 => 19,  56 => 38,  32 => 7,  26 => 3,  22 => 3,  25 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 27,  77 => 23,  57 => 22,  29 => 4,  24 => 6,  19 => 2,  68 => 20,  61 => 24,  44 => 7,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 18,  78 => 24,  72 => 45,  64 => 15,  53 => 15,  50 => 15,  48 => 10,  41 => 8,  39 => 7,  35 => 8,  33 => 5,  30 => 3,  27 => 2,  182 => 70,  176 => 17,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 8,  141 => 54,  136 => 47,  134 => 50,  131 => 81,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 33,  90 => 28,  87 => 19,  83 => 24,  79 => 25,  71 => 19,  62 => 41,  58 => 23,  55 => 14,  52 => 13,  49 => 14,  46 => 13,  43 => 8,  40 => 7,  37 => 26,  34 => 20,  31 => 4,  28 => 6,);
    }
}
