<?php

/* ITBUltimateFrisbeeBundle:Shop:index.html.twig */
class __TwigTemplate_a9ae0b09c6cb52933d01ac9ae55e4e5b extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/css/UFhorizontalList.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/itbultimatefrisbee/js/UFhorizontalList.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "<h1>Shop</h1>
<ul id=\"selected-product\">
  ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "products"));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 17
            echo "        <li><p class=\"productName\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "name"), "html", null, true);
            echo "</p>
\t\t\t<ul>
\t\t    \t<li>Price: ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "price"), "html", null, true);
            echo "€</li>
\t\t    \t<li>Description: ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "description"), "html", null, true);
            echo "</li>
\t\t    \t<li class=\"image\">Image: <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/" . $this->getAttribute($this->getContext($context, "product"), "image"))), "html", null, true);
            echo "\">image</a></li>
\t\t    </ul>
        </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 25
        echo "</ul>

\t
";
    }

    public function getTemplateName()
    {
        return "ITBUltimateFrisbeeBundle:Shop:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 17,  51 => 13,  47 => 12,  21 => 3,  60 => 19,  54 => 14,  279 => 103,  276 => 102,  273 => 101,  267 => 24,  263 => 23,  259 => 22,  254 => 21,  251 => 20,  245 => 18,  240 => 17,  234 => 15,  222 => 11,  216 => 9,  204 => 6,  197 => 122,  195 => 121,  191 => 119,  180 => 94,  172 => 89,  168 => 88,  162 => 84,  154 => 79,  146 => 77,  138 => 72,  111 => 60,  105 => 58,  97 => 54,  38 => 10,  299 => 121,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 13,  220 => 73,  218 => 72,  213 => 8,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 41,  101 => 34,  80 => 46,  63 => 16,  36 => 5,  156 => 58,  148 => 55,  142 => 50,  140 => 73,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 19,  59 => 14,  45 => 9,  103 => 24,  91 => 25,  74 => 22,  70 => 14,  66 => 12,  89 => 20,  82 => 47,  42 => 8,  223 => 96,  214 => 90,  210 => 7,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 101,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 65,  119 => 45,  116 => 62,  112 => 43,  102 => 36,  98 => 33,  76 => 45,  73 => 19,  69 => 25,  56 => 13,  32 => 5,  26 => 3,  22 => 6,  25 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 33,  77 => 20,  57 => 22,  29 => 4,  24 => 2,  19 => 2,  68 => 40,  61 => 18,  44 => 7,  20 => 1,  161 => 63,  153 => 50,  150 => 78,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 64,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 21,  78 => 31,  72 => 26,  64 => 20,  53 => 15,  50 => 10,  48 => 32,  41 => 11,  39 => 7,  35 => 9,  33 => 6,  30 => 3,  27 => 5,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 68,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 55,  96 => 34,  93 => 33,  90 => 34,  87 => 37,  83 => 24,  79 => 25,  71 => 19,  62 => 17,  58 => 36,  55 => 14,  52 => 10,  49 => 15,  46 => 11,  43 => 10,  40 => 8,  37 => 6,  34 => 8,  31 => 4,  28 => 3,);
    }
}
