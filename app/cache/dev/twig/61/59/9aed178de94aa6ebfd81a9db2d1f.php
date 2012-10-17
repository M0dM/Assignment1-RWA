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
        // line 10
        echo "        ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 13
        echo "    \t<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    \t<div class=\"navbar\">
\t\t    <div class=\"navbar-inner\">
\t\t\t    <div class=\"span12 uf-nav\">
\t\t\t    <a class=\"brand\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_home"), "html", null, true);
        echo "\">Ultimate frisbee shop</a>
\t\t\t\t    <ul class=\"nav\">
\t\t\t\t    <li><a href=\"#\">The sport</a></li>
\t\t\t\t    <li><a href=\"#\">Products</a></li>
\t\t\t\t    <li><a href=\"#\">Forum</a></li>
\t\t\t\t    <li><a href=\"#\">Contact</a></li>
\t\t\t\t    </ul>
\t\t\t    </div>
\t\t    </div>
\t\t</div>
\t\t<div class=\"main span12\">
\t        ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 31
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
        echo "        \t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/css/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" />
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/css/ultimateFrisbee.css"), "html", null, true);
        echo "\" />
    \t";
    }

    // line 10
    public function block_javascript($context, array $blocks = array())
    {
        // line 11
        echo "       \t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/js/jquery-1.8.2.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 30
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
        return array (  75 => 6,  21 => 1,  60 => 30,  47 => 11,  38 => 7,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 41,  101 => 34,  80 => 24,  63 => 16,  36 => 13,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 19,  59 => 16,  45 => 9,  103 => 24,  91 => 20,  74 => 22,  70 => 14,  66 => 12,  89 => 10,  82 => 19,  42 => 12,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 44,  112 => 43,  102 => 36,  98 => 33,  76 => 4,  73 => 3,  69 => 5,  56 => 15,  32 => 11,  26 => 3,  22 => 3,  25 => 4,  23 => 3,  17 => 1,  92 => 11,  86 => 27,  77 => 23,  57 => 22,  29 => 4,  24 => 6,  19 => 2,  68 => 20,  61 => 24,  44 => 7,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 30,  94 => 21,  81 => 18,  78 => 7,  72 => 16,  64 => 15,  53 => 15,  50 => 15,  48 => 10,  41 => 8,  39 => 7,  35 => 8,  33 => 10,  30 => 3,  27 => 5,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 33,  90 => 28,  87 => 19,  83 => 8,  79 => 25,  71 => 19,  62 => 31,  58 => 23,  55 => 14,  52 => 13,  49 => 14,  46 => 19,  43 => 8,  40 => 7,  37 => 9,  34 => 5,  31 => 6,  28 => 7,);
    }
}
