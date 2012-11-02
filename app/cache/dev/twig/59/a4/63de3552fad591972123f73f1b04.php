<?php

/* ITBUltimateFrisbeeBundle:Home:contact.html.twig */
class __TwigTemplate_59a463de3552fad591972123f73f1b04 extends Twig_Template
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
";
    }

    // line 7
    public function block_javascript($context, array $blocks = array())
    {
        // line 8
        echo "\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "\t<h1 class=\"titleUnderAccordion\">Contacts </h1>
\t<ul class=\"nav nav-tabs\">
      <li class=\"active\"><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_contact"), "html", null, true);
        echo "\">Mail references</a></li>
      <li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_map"), "html", null, true);
        echo "\">Map</a></li>
    </ul>
    <table class=\"table\">
    \t<tbody>
    \t\t<tr>
\t          <td>Company description</td>
\t          <td>
\t          \t<a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("doc/document.docx"), "html", null, true);
        echo "\">Download</a> |
\t          \t<a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uf_docView"), "html", null, true);
        echo "\">View</a>
\t          </td>
\t        </tr>
\t\t\t<tr>
\t          <td>Address</td>
\t          <td>Ultimate frisbee shop
\t              <br />Institute of Technology Blanchardstown, 
\t              <br />Blanchardstown Road North, 
\t          \t  <br />Dublin 15
\t          </td>
\t        </tr>
\t        <tr>
\t          <td>Email address</td>
\t          <td><a href=\"mailto:info@itb.ie\">Email Us: info@itb.ie</a></td>
\t        </tr>
\t        <tr>
\t          <td>Phone number</td>
\t          <td>+353 (1) 8851000</td>
\t        </tr>
\t        <tr>
\t          <td>Fax</td>
\t          <td>+353 (1) 8851001</td>
\t        </tr>
\t      </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "ITBUltimateFrisbeeBundle:Home:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  84 => 34,  75 => 28,  54 => 16,  179 => 69,  173 => 23,  164 => 21,  144 => 15,  138 => 13,  132 => 11,  126 => 9,  105 => 69,  21 => 3,  60 => 16,  47 => 10,  38 => 7,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 70,  101 => 34,  80 => 24,  63 => 41,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 8,  115 => 42,  110 => 42,  85 => 28,  65 => 42,  59 => 15,  45 => 11,  103 => 24,  91 => 20,  74 => 22,  70 => 14,  66 => 22,  89 => 20,  82 => 19,  42 => 9,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 44,  112 => 43,  102 => 36,  98 => 33,  76 => 4,  73 => 23,  69 => 22,  56 => 13,  32 => 5,  26 => 3,  22 => 6,  25 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 36,  77 => 46,  57 => 22,  29 => 4,  24 => 2,  19 => 2,  68 => 20,  61 => 18,  44 => 7,  20 => 1,  161 => 20,  153 => 50,  150 => 17,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 18,  78 => 24,  72 => 16,  64 => 17,  53 => 13,  50 => 10,  48 => 11,  41 => 8,  39 => 10,  35 => 9,  33 => 6,  30 => 3,  27 => 2,  182 => 70,  176 => 71,  169 => 22,  163 => 58,  160 => 57,  155 => 18,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 47,  120 => 7,  117 => 36,  114 => 6,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 40,  90 => 28,  87 => 19,  83 => 24,  79 => 25,  71 => 44,  62 => 17,  58 => 17,  55 => 14,  52 => 13,  49 => 13,  46 => 9,  43 => 10,  40 => 8,  37 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
