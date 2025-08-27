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

/* adminstat/view/template/sale/returns_history.twig */
class __TwigTemplate_6835ddb1612244f4d0981614ec189809 extends Template
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
        yield "<table class=\"table table-bordered\">
  <thead>
    <tr>
      <th>";
        // line 4
        yield ($context["column_date_added"] ?? null);
        yield "</th>
      <th>";
        // line 5
        yield ($context["column_comment"] ?? null);
        yield "</th>
      <th>";
        // line 6
        yield ($context["column_status"] ?? null);
        yield "</th>
      <th>";
        // line 7
        yield ($context["column_notify"] ?? null);
        yield "</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 11
        if (($context["histories"] ?? null)) {
            // line 12
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["histories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 13
                yield "        <tr>
          <td>";
                // line 14
                yield CoreExtension::getAttribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 14);
                yield "</td>
          <td>";
                // line 15
                yield CoreExtension::getAttribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 15);
                yield "</td>
          <td>";
                // line 16
                yield CoreExtension::getAttribute($this->env, $this->source, $context["history"], "return_status", [], "any", false, false, false, 16);
                yield "</td>
          <td>";
                // line 17
                yield CoreExtension::getAttribute($this->env, $this->source, $context["history"], "notify", [], "any", false, false, false, 17);
                yield "</td>
        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['history'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "    ";
        } else {
            // line 21
            yield "      <tr>
        <td class=\"text-center\" colspan=\"4\">";
            // line 22
            yield ($context["text_no_results"] ?? null);
            yield "</td>
      </tr>
    ";
        }
        // line 25
        yield "  </tbody>
</table>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">";
        // line 28
        yield ($context["pagination"] ?? null);
        yield "</div>
  <div class=\"col-sm-6 text-end\">";
        // line 29
        yield ($context["results"] ?? null);
        yield "</div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "adminstat/view/template/sale/returns_history.twig";
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
        return array (  118 => 29,  114 => 28,  109 => 25,  103 => 22,  100 => 21,  97 => 20,  88 => 17,  84 => 16,  80 => 15,  76 => 14,  73 => 13,  68 => 12,  66 => 11,  59 => 7,  55 => 6,  51 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<table class=\"table table-bordered\">
  <thead>
    <tr>
      <th>{{ column_date_added }}</th>
      <th>{{ column_comment }}</th>
      <th>{{ column_status }}</th>
      <th>{{ column_notify }}</th>
    </tr>
  </thead>
  <tbody>
    {% if histories %}
      {% for history in histories %}
        <tr>
          <td>{{ history.date_added }}</td>
          <td>{{ history.comment }}</td>
          <td>{{ history.return_status }}</td>
          <td>{{ history.notify }}</td>
        </tr>
      {% endfor %}
    {% else %}
      <tr>
        <td class=\"text-center\" colspan=\"4\">{{ text_no_results }}</td>
      </tr>
    {% endif %}
  </tbody>
</table>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
  <div class=\"col-sm-6 text-end\">{{ results }}</div>
</div>
", "adminstat/view/template/sale/returns_history.twig", "C:\\xampp\\htdocs\\opencart4\\upload\\adminstat\\view\\template\\sale\\returns_history.twig");
    }
}
