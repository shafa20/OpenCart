<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* extension/opencart/admin/view/template/report/product_viewed_list.twig */
class __TwigTemplate_6facc3ba19721525005ad83d0c0aed75 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"table-responsive\">
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <td class=\"text-start\">";
        // line 5
        yield ($context["column_name"] ?? null);
        yield "</td>
        <td class=\"text-start\">";
        // line 6
        yield ($context["column_model"] ?? null);
        yield "</td>
        <td class=\"text-end\">";
        // line 7
        yield ($context["column_viewed"] ?? null);
        yield "</td>
        <td class=\"text-end\">";
        // line 8
        yield ($context["column_percent"] ?? null);
        yield "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 12
        if (($context["products"] ?? null)) {
            // line 13
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 14
                yield "          <tr>
            <td class=\"text-start\">";
                // line 15
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15);
                yield "</td>
            <td class=\"text-start\">";
                // line 16
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 16);
                yield "</td>
            <td class=\"text-end\">";
                // line 17
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "viewed", [], "any", false, false, false, 17);
                yield "</td>
            <td class=\"text-end\">";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 18);
                yield "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            yield "      ";
        } else {
            // line 22
            yield "        <tr>
          <td class=\"text-center\" colspan=\"4\">";
            // line 23
            yield ($context["text_no_results"] ?? null);
            yield "</td>
        </tr>
      ";
        }
        // line 26
        yield "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">";
        // line 30
        yield ($context["pagination"] ?? null);
        yield "</div>
  <div class=\"col-sm-6 text-end\">";
        // line 31
        yield ($context["results"] ?? null);
        yield "</div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/opencart/admin/view/template/report/product_viewed_list.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  120 => 31,  116 => 30,  110 => 26,  104 => 23,  101 => 22,  98 => 21,  89 => 18,  85 => 17,  81 => 16,  77 => 15,  74 => 14,  69 => 13,  67 => 12,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"table-responsive\">
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <td class=\"text-start\">{{ column_name }}</td>
        <td class=\"text-start\">{{ column_model }}</td>
        <td class=\"text-end\">{{ column_viewed }}</td>
        <td class=\"text-end\">{{ column_percent }}</td>
      </tr>
    </thead>
    <tbody>
      {% if products %}
        {% for product in products %}
          <tr>
            <td class=\"text-start\">{{ product.name }}</td>
            <td class=\"text-start\">{{ product.model }}</td>
            <td class=\"text-end\">{{ product.viewed }}</td>
            <td class=\"text-end\">{{ product.percent }}</td>
          </tr>
        {% endfor %}
      {% else %}
        <tr>
          <td class=\"text-center\" colspan=\"4\">{{ text_no_results }}</td>
        </tr>
      {% endif %}
    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
  <div class=\"col-sm-6 text-end\">{{ results }}</div>
</div>", "extension/opencart/admin/view/template/report/product_viewed_list.twig", "C:\\xampp\\htdocs\\opencart4\\upload\\extension\\opencart\\admin\\view\\template\\report\\product_viewed_list.twig");
    }
}
