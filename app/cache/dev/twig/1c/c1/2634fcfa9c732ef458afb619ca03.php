<?php

/* FOSUserBundle:Group:edit_content.html.twig */
class __TwigTemplate_1cc12634fcfa9c732ef458afb619ca03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_edit", array("groupname" => $this->getContext($context, "groupname"))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_edit\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"Submit\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 6,  21 => 3,  60 => 30,  47 => 11,  38 => 11,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 41,  101 => 34,  80 => 24,  63 => 16,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 19,  59 => 16,  45 => 9,  103 => 24,  91 => 20,  74 => 22,  70 => 14,  66 => 12,  89 => 10,  82 => 19,  42 => 9,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 44,  112 => 43,  102 => 36,  98 => 33,  76 => 4,  73 => 3,  69 => 5,  56 => 15,  32 => 11,  26 => 3,  22 => 6,  25 => 4,  23 => 3,  17 => 1,  92 => 11,  86 => 27,  77 => 23,  57 => 22,  29 => 4,  24 => 2,  19 => 2,  68 => 20,  61 => 24,  44 => 11,  20 => 1,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 30,  94 => 21,  81 => 18,  78 => 7,  72 => 16,  64 => 27,  53 => 14,  50 => 14,  48 => 10,  41 => 8,  39 => 8,  35 => 7,  33 => 10,  30 => 3,  27 => 5,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 33,  90 => 28,  87 => 19,  83 => 8,  79 => 25,  71 => 19,  62 => 31,  58 => 23,  55 => 21,  52 => 13,  49 => 14,  46 => 15,  43 => 13,  40 => 12,  37 => 9,  34 => 5,  31 => 3,  28 => 1,);
    }
}
