<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_efb8b1b8f60151d767c60f8b8f2d361f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->env->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 3,  60 => 19,  54 => 14,  279 => 103,  276 => 102,  273 => 101,  267 => 24,  263 => 23,  259 => 22,  254 => 21,  251 => 20,  245 => 18,  240 => 17,  234 => 15,  222 => 11,  216 => 9,  204 => 6,  197 => 122,  195 => 121,  191 => 119,  180 => 94,  172 => 89,  168 => 88,  162 => 84,  154 => 79,  146 => 77,  138 => 72,  111 => 60,  105 => 57,  97 => 54,  38 => 10,  299 => 121,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 13,  220 => 73,  218 => 72,  213 => 8,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 41,  101 => 34,  80 => 46,  63 => 20,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 73,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 19,  59 => 16,  45 => 13,  103 => 24,  91 => 20,  74 => 22,  70 => 14,  66 => 12,  89 => 20,  82 => 47,  42 => 9,  223 => 96,  214 => 90,  210 => 7,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 101,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 65,  119 => 45,  116 => 62,  112 => 43,  102 => 36,  98 => 33,  76 => 45,  73 => 23,  69 => 25,  56 => 16,  32 => 5,  26 => 3,  22 => 6,  25 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 49,  77 => 23,  57 => 22,  29 => 4,  24 => 11,  19 => 2,  68 => 40,  61 => 18,  44 => 7,  20 => 1,  161 => 63,  153 => 50,  150 => 78,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 64,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 32,  78 => 31,  72 => 26,  64 => 39,  53 => 15,  50 => 15,  48 => 32,  41 => 11,  39 => 7,  35 => 9,  33 => 6,  30 => 3,  27 => 5,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 68,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 55,  96 => 34,  93 => 33,  90 => 50,  87 => 37,  83 => 24,  79 => 25,  71 => 19,  62 => 17,  58 => 36,  55 => 14,  52 => 10,  49 => 15,  46 => 11,  43 => 10,  40 => 8,  37 => 6,  34 => 8,  31 => 3,  28 => 1,);
    }
}
