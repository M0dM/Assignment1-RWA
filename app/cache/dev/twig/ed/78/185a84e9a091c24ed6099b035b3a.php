<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_ed78185a84e9a091c24ed6099b035b3a extends Twig_Template
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
        $this->env->loadTemplate("FOSUserBundle:Profile:show_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 34,  75 => 28,  198 => 73,  191 => 31,  188 => 30,  172 => 25,  124 => 9,  54 => 16,  21 => 3,  60 => 17,  47 => 11,  38 => 11,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 28,  175 => 58,  158 => 57,  107 => 41,  101 => 34,  80 => 24,  63 => 16,  36 => 6,  156 => 58,  148 => 17,  142 => 15,  140 => 50,  127 => 45,  123 => 44,  115 => 6,  110 => 42,  85 => 28,  65 => 19,  59 => 16,  45 => 9,  103 => 24,  91 => 20,  74 => 22,  70 => 14,  66 => 22,  89 => 20,  82 => 19,  42 => 9,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 27,  170 => 67,  157 => 20,  152 => 59,  145 => 16,  130 => 11,  125 => 49,  119 => 45,  116 => 44,  112 => 43,  102 => 74,  98 => 33,  76 => 4,  73 => 3,  69 => 19,  56 => 15,  32 => 11,  26 => 3,  22 => 6,  25 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 27,  77 => 23,  57 => 22,  29 => 4,  24 => 2,  19 => 2,  68 => 20,  61 => 24,  44 => 11,  20 => 1,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 8,  118 => 7,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 57,  78 => 24,  72 => 50,  64 => 15,  53 => 13,  50 => 14,  48 => 12,  41 => 8,  39 => 8,  35 => 9,  33 => 6,  30 => 3,  27 => 5,  182 => 70,  176 => 71,  169 => 24,  163 => 22,  160 => 57,  155 => 56,  151 => 18,  149 => 52,  141 => 54,  136 => 13,  134 => 50,  131 => 43,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 5,  106 => 37,  100 => 73,  96 => 34,  93 => 40,  90 => 28,  87 => 19,  83 => 24,  79 => 25,  71 => 19,  62 => 17,  58 => 17,  55 => 14,  52 => 13,  49 => 14,  46 => 14,  43 => 13,  40 => 12,  37 => 7,  34 => 5,  31 => 3,  28 => 1,);
    }
}
