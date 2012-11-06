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
            'styleswitcher' => array($this, 'block_styleswitcher'),
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
\t\t\t\t\t    <li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_sport"), "html", null, true);
        echo "\"><i class=\"icon-book icon-white\"></i> The sport</a></li>
\t\t\t\t\t    <li id=\"tournamentsMenuPlaceholder\">
\t\t\t\t\t    \t<a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_tournament"), "html", null, true);
        echo "\"><i class=\"icon-calendar icon-white\"></i> Tournaments</a>
\t\t\t\t\t\t    <div style=\"display:none;\">
\t\t\t\t\t    \t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_tournament"), "html", null, true);
        echo "\"><i class=\"icon-list\"></i> All tournaments</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_tournament_calendar"), "html", null, true);
        echo "\"><i class=\"icon-calendar\"></i> Tournaments by date</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</li>
\t\t\t\t\t    <li><a href=\"#\"><i class=\"icon-shopping-cart icon-white\"></i> Products</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_gallery"), "html", null, true);
        echo "\"><i class=\"icon-picture icon-white\"></i> Photos</a></li>
\t\t\t\t\t    <li id=\"contactMenuPlaceholder\">
\t\t\t\t\t\t    <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_contact"), "html", null, true);
        echo "\"><i class=\"icon-envelope icon-white\"></i> Contact</a>
\t\t\t\t\t\t    <div style=\"display:none;\">
\t\t\t\t\t    \t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_contact"), "html", null, true);
        echo "\"><i class=\"icon-th-list\"></i> General informations</a></li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_docView"), "html", null, true);
        echo "\"><i class=\"icon-file\"></i> Description file</a>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("doc/document.docx"), "html", null, true);
        echo "\"><i class=\"icon-download\"></i> Download</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_docView"), "html", null, true);
        echo "\"><i class=\"icon-eye-open\"></i> View</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_map"), "html", null, true);
        echo "\"><i class=\"icon-map-marker\"></i> Location</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t    </div>
\t\t\t\t\t    </li>
\t\t\t\t\t    ";
        // line 62
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 63
            echo "\t\t\t\t\t\t    <li id=\"logoutMenuPlaceholder\">
\t\t\t\t\t\t    \t<a href=\"#\"><i class=\"icon-user icon-white\"></i> Account</a>
\t\t\t\t\t\t    \t<div style=\"display:none;\">
\t\t\t\t\t\t    \t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\"><i class=\"icon-off\"></i> Logout</a></li>
\t\t\t\t\t\t    \t\t\t<li><a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_show"), "html", null, true);
            echo "\"><i class=\"icon-user\"></i> My profile</a></li>
\t\t\t\t\t\t    \t\t\t<li><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i> Edit profile</a></li>
\t\t\t\t\t\t    \t\t</ul>
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t    </li>
\t\t\t\t\t\t";
        } else {
            // line 74
            echo "\t\t\t\t\t\t\t<li id=\"loginMenuPlaceholder\">
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-user icon-white\"></i> Account</a>
\t\t\t\t\t\t\t    <div style=\"display:none;\">
\t\t\t\t\t\t    \t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\"><i class=\"icon-ok\"></i> Login</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i> Register</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    </li>
\t\t\t\t\t\t";
        }
        // line 84
        echo "\t\t\t\t\t    </ul>
\t\t\t    </div>
\t\t    </div>
\t\t</div>
\t\t<div class=\"main span12\">
\t\t<div id=\"styleSwitcher\">
\t\t\t<blockquote>
\t\t\t";
        // line 91
        $this->displayBlock('styleswitcher', $context, $blocks);
        // line 109
        echo "\t\t\t</blockquote>
\t\t</div>
\t        ";
        // line 111
        $this->displayBlock('body', $context, $blocks);
        // line 112
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
        echo "    \t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/css/jqueryUI-with-flickTheme/jquery-ui-1.9.1.min.css"), "html", null, true);
        echo "\"></script>
        \t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
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

    // line 91
    public function block_styleswitcher($context, array $blocks = array())
    {
        // line 92
        echo "\t\t\t\t<h4 id=\"titleStyleSwitcher\">Style switcher: </h4>
\t\t\t\t<form id=\"formStyleSwitcher\" method=\"post\" class=\"form-inline\" action=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_home"), "html", null, true);
        echo "\">
\t\t\t\t\t<label class=\"radio\">
\t\t\t\t\t\t<input type=\"radio\" name=\"optionsRadioStyles\" id=\"optionsRadio2\" value=\"Standard\" checked>
\t\t\t\t\t\t<p>Standard</p>
\t\t\t\t\t</label>
\t\t\t\t\t<label class=\"radio\">
\t\t\t\t\t\t<input type=\"radio\" name=\"optionsRadioStyles\" id=\"optionsRadios1\" value=\"Amelia\">
\t\t\t\t\t\t<p>Amelia</p>
\t\t\t\t\t</label>
\t\t\t\t\t<label class=\"radio\">
\t\t\t\t\t\t<input type=\"radio\" name=\"optionsRadioStyles\" id=\"optionsRadio2\" value=\"SuperHero\">
\t\t\t\t\t\t<p>Superhero</p>
\t\t\t\t\t</label>
\t\t\t\t\t<input id=\"formStyleSwitcherButton\" class=\"btn btn-mini btn-info\" type=\"submit\" value=\"Switch\">
\t\t\t\t</form>
\t\t\t";
    }

    // line 111
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
        return array (  275 => 111,  255 => 93,  252 => 92,  249 => 91,  239 => 23,  235 => 22,  230 => 21,  227 => 20,  221 => 18,  216 => 17,  204 => 13,  198 => 11,  186 => 7,  180 => 6,  173 => 112,  171 => 111,  167 => 109,  165 => 91,  144 => 78,  138 => 74,  126 => 68,  122 => 67,  97 => 54,  54 => 4,  51 => 3,  38 => 26,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 24,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 58,  101 => 55,  80 => 24,  63 => 16,  36 => 6,  156 => 84,  148 => 79,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 19,  59 => 16,  45 => 9,  103 => 24,  91 => 20,  74 => 22,  70 => 14,  66 => 12,  89 => 20,  82 => 19,  42 => 12,  223 => 96,  214 => 90,  210 => 15,  203 => 84,  199 => 83,  194 => 80,  192 => 9,  189 => 8,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 69,  125 => 49,  119 => 45,  116 => 63,  112 => 43,  102 => 36,  98 => 33,  76 => 45,  73 => 23,  69 => 19,  56 => 12,  32 => 11,  26 => 3,  22 => 1,  25 => 4,  23 => 3,  17 => 1,  92 => 52,  86 => 27,  77 => 23,  57 => 22,  29 => 6,  24 => 6,  19 => 2,  68 => 40,  61 => 24,  44 => 7,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 47,  78 => 24,  72 => 16,  64 => 39,  53 => 34,  50 => 15,  48 => 32,  41 => 7,  39 => 7,  35 => 20,  33 => 7,  30 => 3,  27 => 2,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 47,  120 => 37,  117 => 36,  114 => 62,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 33,  90 => 28,  87 => 50,  83 => 24,  79 => 25,  71 => 19,  62 => 17,  58 => 36,  55 => 14,  52 => 10,  49 => 14,  46 => 13,  43 => 8,  40 => 7,  37 => 9,  34 => 5,  31 => 4,  28 => 7,);
    }
}
