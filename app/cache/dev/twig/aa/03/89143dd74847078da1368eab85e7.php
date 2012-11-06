<?php

/* ITBUltimateFrisbeeBundle:Home:index.html.twig */
class __TwigTemplate_aa0389143dd74847078da1368eab85e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/css/UFimageRotator.css"), "html", null, true);
        echo "\" />
";
    }

    // line 8
    public function block_javascript($context, array $blocks = array())
    {
        // line 9
        echo "\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/js/UFimageRotator.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "\t<div class=\"imageRotatorPlaceholder\">
\t\t<ul>
\t\t\t<!-- TODO: add routing path('') -->
\t\t\t<li><a href=\"#\"><img name=\"ultimatePresentationImage\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image1.jpg"), "html", null, true);
        echo "\" alt=\"image accordion ultimate\"/></a></li>
\t\t\t<li><a href=\"#\"><img name=\"productsImage\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image2.jpg"), "html", null, true);
        echo "\" alt=\"image accordion products\"/></a></li>
\t\t\t<li><a href=\"#\"><img name=\"forumImage\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image3.jpg"), "html", null, true);
        echo "\" alt=\"image accordion forum\"/></a></li>
\t\t</ul>
\t</div>
\t<h1 class=\"titleUnderAccordion\">TestPage : Test bootstrap</h1>
\t<a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_home"), "html", null, true);
        echo "\">Home Page</a>
";
    }

    public function getTemplateName()
    {
        return "ITBUltimateFrisbeeBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 58,  60 => 20,  21 => 3,  84 => 34,  75 => 28,  275 => 111,  255 => 93,  252 => 92,  249 => 91,  239 => 23,  235 => 22,  230 => 21,  227 => 20,  221 => 18,  216 => 17,  204 => 13,  198 => 11,  186 => 7,  180 => 6,  173 => 112,  171 => 111,  167 => 109,  165 => 91,  144 => 78,  138 => 74,  126 => 68,  122 => 67,  97 => 54,  54 => 16,  51 => 3,  38 => 10,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 24,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 58,  101 => 55,  80 => 24,  63 => 21,  36 => 5,  156 => 84,  148 => 79,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 19,  59 => 14,  45 => 9,  103 => 24,  91 => 20,  74 => 22,  70 => 14,  66 => 22,  89 => 20,  82 => 19,  42 => 8,  223 => 96,  214 => 90,  210 => 15,  203 => 84,  199 => 83,  194 => 80,  192 => 9,  189 => 8,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 69,  125 => 49,  119 => 45,  116 => 63,  112 => 43,  102 => 36,  98 => 33,  76 => 45,  73 => 23,  69 => 25,  56 => 13,  32 => 5,  26 => 3,  22 => 6,  25 => 4,  23 => 3,  17 => 1,  92 => 52,  86 => 27,  77 => 23,  57 => 22,  29 => 4,  24 => 2,  19 => 2,  68 => 18,  61 => 18,  44 => 7,  20 => 1,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 47,  78 => 24,  72 => 19,  64 => 17,  53 => 34,  50 => 10,  48 => 8,  41 => 7,  39 => 10,  35 => 9,  33 => 6,  30 => 3,  27 => 2,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 47,  120 => 37,  117 => 36,  114 => 62,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 40,  90 => 28,  87 => 50,  83 => 24,  79 => 23,  71 => 19,  62 => 17,  58 => 17,  55 => 14,  52 => 10,  49 => 13,  46 => 11,  43 => 10,  40 => 8,  37 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
