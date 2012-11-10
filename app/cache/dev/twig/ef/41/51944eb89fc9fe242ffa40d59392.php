<?php

/* ITBUltimateFrisbeeBundle:Gallery:gallery.html.twig */
class __TwigTemplate_ef4151944eb89fc9fe242ffa40d59392 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/jquery-lib/FancyBox/source/jquery.fancybox.css?v=2.1.2"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/jquery-lib/FancyBox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5"), "html", null, true);
        echo "\" />
";
    }

    // line 9
    public function block_javascript($context, array $blocks = array())
    {
        // line 10
        echo "\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/jquery-lib/FancyBox/lib/jquery.mousewheel-3.0.6.pack.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/jquery-lib/FancyBox/source/jquery.fancybox.js?v=2.1.3"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/jquery-lib/FancyBox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/js/UFgallery.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "<h1>Gallery</h1>
\t<p class=\"alert alert-info\"> Click on a picture to display the full size</p>
\t<p style=\"margin-left:80px;\">
\t\t<a class=\"fancybox\" rel=\"gallery1\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/gallery/1.jpg"), "html", null, true);
        echo "\">
\t\t\t<img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/gallery/1Small.jpg"), "html", null, true);
        echo "\" alt=\"Frisbee image\">
\t\t</a>
\t\t<a class=\"fancybox\" rel=\"gallery1\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/gallery/2.jpg"), "html", null, true);
        echo "\">
\t\t\t<img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/gallery/2Small.jpg"), "html", null, true);
        echo "\" alt=\"Frisbee image\">
\t\t</a>
\t\t<a class=\"fancybox\" rel=\"gallery1\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/gallery/3.jpg"), "html", null, true);
        echo "\">
\t\t\t<img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/gallery/3Small.jpg"), "html", null, true);
        echo "\" alt=\"Frisbee image\">
\t\t</a>
\t\t<a class=\"fancybox\" rel=\"gallery1\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/gallery/4.jpg"), "html", null, true);
        echo "\">
\t\t\t<img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/gallery/4Small.jpg"), "html", null, true);
        echo "\" alt=\"Frisbee image\">
\t\t</a>
\t\t<a class=\"fancybox\" rel=\"gallery1\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/gallery/5.jpg"), "html", null, true);
        echo "\">
\t\t\t<img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/gallery/5Small.jpg"), "html", null, true);
        echo "\" alt=\"Frisbee image\">
\t\t</a>
\t</p>
";
    }

    public function getTemplateName()
    {
        return "ITBUltimateFrisbeeBundle:Gallery:gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 22,  75 => 18,  111 => 31,  95 => 30,  67 => 16,  51 => 15,  47 => 14,  105 => 58,  21 => 3,  60 => 19,  54 => 11,  298 => 121,  278 => 103,  275 => 102,  272 => 101,  262 => 23,  258 => 22,  253 => 21,  250 => 20,  244 => 18,  239 => 17,  233 => 15,  227 => 13,  221 => 11,  215 => 9,  212 => 8,  190 => 119,  188 => 101,  179 => 94,  171 => 89,  167 => 88,  139 => 73,  124 => 65,  88 => 50,  38 => 10,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 24,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 7,  202 => 66,  196 => 122,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 30,  101 => 34,  80 => 21,  63 => 16,  36 => 5,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 62,  110 => 60,  85 => 28,  65 => 19,  59 => 14,  45 => 9,  103 => 24,  91 => 25,  74 => 22,  70 => 14,  66 => 14,  89 => 24,  82 => 48,  42 => 9,  223 => 96,  214 => 90,  210 => 88,  203 => 6,  199 => 83,  194 => 121,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 77,  130 => 68,  125 => 49,  119 => 46,  116 => 33,  112 => 43,  102 => 28,  98 => 27,  76 => 20,  73 => 19,  69 => 25,  56 => 13,  32 => 5,  26 => 3,  22 => 6,  25 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 33,  77 => 20,  57 => 22,  29 => 4,  24 => 2,  19 => 2,  68 => 40,  61 => 18,  44 => 7,  20 => 1,  161 => 84,  153 => 79,  150 => 49,  147 => 51,  143 => 46,  137 => 72,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 57,  99 => 55,  94 => 52,  81 => 38,  78 => 31,  72 => 17,  64 => 15,  53 => 13,  50 => 10,  48 => 10,  41 => 11,  39 => 6,  35 => 5,  33 => 6,  30 => 4,  27 => 3,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 78,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 47,  120 => 34,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 25,  90 => 34,  87 => 37,  83 => 24,  79 => 25,  71 => 19,  62 => 13,  58 => 12,  55 => 14,  52 => 10,  49 => 10,  46 => 9,  43 => 10,  40 => 6,  37 => 7,  34 => 8,  31 => 4,  28 => 3,);
    }
}
