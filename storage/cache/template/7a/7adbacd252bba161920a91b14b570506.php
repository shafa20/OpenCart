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

/* extension/opencart/admin/view/template/report/sale_order_list.twig */
class __TwigTemplate_65a80d00945d7664b13c34b340a81c21 extends Template
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
        yield ($context["column_date_start"] ?? null);
        yield "</td>
        <td class=\"text-start\">";
        // line 6
        yield ($context["column_date_end"] ?? null);
        yield "</td>
        <td class=\"text-end\">";
        // line 7
        yield ($context["column_orders"] ?? null);
        yield "</td>
        <td class=\"text-end\">";
        // line 8
        yield ($context["column_products"] ?? null);
        yield "</td>
        <td class=\"text-end\">";
        // line 9
        yield ($context["column_tax"] ?? null);
        yield "</td>
        <td class=\"text-end\">";
        // line 10
        yield ($context["column_total"] ?? null);
        yield "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 14
        if (($context["orders"] ?? null)) {
            // line 15
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 16
                yield "          <tr>
            <td class=\"text-start\">";
                // line 17
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "date_start", [], "any", false, false, false, 17);
                yield "</td>
            <td class=\"text-start\">";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "date_end", [], "any", false, false, false, 18);
                yield "</td>
            <td class=\"text-end\">";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orders", [], "any", false, false, false, 19);
                yield "</td>
            <td class=\"text-end\">";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "products", [], "any", false, false, false, 20);
                yield "</td>
            <td class=\"text-end\">";
                // line 21
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "tax", [], "any", false, false, false, 21);
                yield "</td>
            <td class=\"text-end\">";
                // line 22
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 22);
                yield "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            yield "      ";
        } else {
            // line 26
            yield "        <tr>
          <td class=\"text-center\" colspan=\"6\">";
            // line 27
            yield ($context["text_no_results"] ?? null);
            yield "</td>
        </tr>
      ";
        }
        // line 30
        yield "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">";
        // line 34
        yield ($context["pagination"] ?? null);
        yield "</div>
  <div class=\"col-sm-6 text-end\">";
        // line 35
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
        return "extension/opencart/admin/view/template/report/sale_order_list.twig";
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
        return array (  136 => 35,  132 => 34,  126 => 30,  120 => 27,  117 => 26,  114 => 25,  105 => 22,  101 => 21,  97 => 20,  93 => 19,  89 => 18,  85 => 17,  82 => 16,  77 => 15,  75 => 14,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"table-responsive\">
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <td class=\"text-start\">{{ column_date_start }}</td>
        <td class=\"text-start\">{{ column_date_end }}</td>
        <td class=\"text-end\">{{ column_orders }}</td>
        <td class=\"text-end\">{{ column_products }}</td>
        <td class=\"text-end\">{{ column_tax }}</td>
        <td class=\"text-end\">{{ column_total }}</td>
      </tr>
    </thead>
    <tbody>
      {% if orders %}
        {% for order in orders %}
          <tr>
            <td class=\"text-start\">{{ order.date_start }}</td>
            <td class=\"text-start\">{{ order.date_end }}</td>
            <td class=\"text-end\">{{ order.orders }}</td>
            <td class=\"text-end\">{{ order.products }}</td>
            <td class=\"text-end\">{{ order.tax }}</td>
            <td class=\"text-end\">{{ order.total }}</td>
          </tr>
        {% endfor %}
      {% else %}
        <tr>
          <td class=\"text-center\" colspan=\"6\">{{ text_no_results }}</td>
        </tr>
      {% endif %}
    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
  <div class=\"col-sm-6 text-end\">{{ results }}</div>
</div>", "extension/opencart/admin/view/template/report/sale_order_list.twig", "C:\\xampp\\htdocs\\opencart4\\upload\\extension\\opencart\\admin\\view\\template\\report\\sale_order_list.twig");
    }
}
