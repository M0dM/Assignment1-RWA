<?php

/* ITBUltimateFrisbeeBundle:Contact:documentContact.html.twig */
class __TwigTemplate_0c7f0d3cb260ee6bcabd2c69b4455493 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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
    public function block_javascript($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t<script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/js/jquery.gdocsviewer.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/js/UFgoogleViewer.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "\t<a href=\"http://ultimatefrisbeeshop.netau.net/document.docx\" id=\"embedURL\"></a>
";
    }

    public function getTemplateName()
    {
        return "ITBUltimateFrisbeeBundle:Contact:documentContact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 58,  21 => 3,  84 => 34,  75 => 32,  54 => 16,  226 => 85,  206 => 67,  200 => 65,  190 => 23,  186 => 22,  172 => 18,  167 => 17,  124 => 86,  122 => 85,  95 => 54,  60 => 20,  47 => 11,  38 => 10,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 21,  175 => 58,  158 => 57,  107 => 58,  101 => 56,  80 => 46,  63 => 21,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 8,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 19,  59 => 14,  45 => 9,  103 => 24,  91 => 20,  74 => 22,  70 => 14,  66 => 22,  89 => 20,  82 => 19,  42 => 9,  223 => 96,  214 => 90,  210 => 88,  203 => 66,  199 => 83,  194 => 24,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 20,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 65,  112 => 43,  102 => 36,  98 => 33,  76 => 45,  73 => 3,  69 => 25,  56 => 13,  32 => 5,  26 => 3,  22 => 6,  25 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 49,  77 => 23,  57 => 22,  29 => 4,  24 => 2,  19 => 2,  68 => 18,  61 => 18,  44 => 7,  20 => 1,  161 => 15,  153 => 50,  150 => 49,  147 => 51,  143 => 9,  137 => 7,  129 => 42,  121 => 47,  118 => 83,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 18,  78 => 24,  72 => 19,  64 => 17,  53 => 13,  50 => 10,  48 => 10,  41 => 8,  39 => 6,  35 => 5,  33 => 6,  30 => 4,  27 => 3,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 13,  151 => 54,  149 => 11,  141 => 54,  136 => 47,  134 => 50,  131 => 6,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 40,  90 => 28,  87 => 19,  83 => 24,  79 => 23,  71 => 43,  62 => 17,  58 => 17,  55 => 14,  52 => 13,  49 => 12,  46 => 11,  43 => 10,  40 => 8,  37 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}