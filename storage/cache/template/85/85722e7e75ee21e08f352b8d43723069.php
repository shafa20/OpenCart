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

/* adminstat/view/template/cms/comment_list.twig */
class __TwigTemplate_c70af11a3afefed6660340bd3615b6bc extends Template
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
        yield "<form id=\"form-comment\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#comment\">
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
        <th>";
        // line 6
        yield ($context["column_comment"] ?? null);
        yield "</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 10
        if (($context["comments"] ?? null)) {
            // line 11
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["comments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 12
                yield "          <tr>
            <td class=\"text-center\" rowspan=\"2\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 13
                yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "article_comment_id", [], "any", false, false, false, 13);
                yield "\" class=\"form-check-input\"/></td>
            <td><a href=\"";
                // line 14
                yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "article_edit", [], "any", false, false, false, 14);
                yield "\" target=\"_blank\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "article", [], "any", false, false, false, 14);
                yield "</a>
              <p>
                ";
                // line 16
                if (CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "status", [], "any", false, false, false, 16)) {
                    // line 17
                    yield "                  <small class=\"text-success\">";
                    yield ($context["text_enabled"] ?? null);
                    yield "</small>
                ";
                } else {
                    // line 19
                    yield "                  <small class=\"text-danger\">";
                    yield ($context["text_disabled"] ?? null);
                    yield "</small>
                ";
                }
                // line 21
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "customer_edit", [], "any", false, false, false, 21)) {
                    // line 22
                    yield "                  <small> - ";
                    yield ($context["text_by"] ?? null);
                    yield " <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "customer_edit", [], "any", false, false, false, 22);
                    yield "\" target=\"_blank\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 22);
                    yield "</a></small>
                ";
                } else {
                    // line 24
                    yield "                  <small> - ";
                    yield ($context["text_by"] ?? null);
                    yield " ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 24);
                    yield "</small>
                ";
                }
                // line 26
                yield "                <small> - ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "date_added", [], "any", false, false, false, 26);
                yield "</small>
                <br/>
                <small>";
                // line 28
                yield ($context["text_rating"] ?? null);
                yield " ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "rating", [], "any", false, false, false, 28);
                yield "</small>
              </p>
              <p>";
                // line 30
                yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 30);
                yield "</p>
            </td>
          </tr>
          <tr>
            <td class=\"text-end\">
              ";
                // line 35
                if (CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "approve", [], "any", false, false, false, 35)) {
                    // line 36
                    yield "                <button type=\"button\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "approve", [], "any", false, false, false, 36);
                    yield "\" data-bs-toggle=\"tooltip\" title=\"";
                    yield ($context["button_approve"] ?? null);
                    yield "\" class=\"btn btn-success\"><i class=\"fa-solid fa-check\"></i></button>
              ";
                } else {
                    // line 38
                    yield "                <button type=\"button\" class=\"btn btn-success\" disabled><i class=\"fa-solid fa-check\"></i></button>
              ";
                }
                // line 40
                yield "              <button type=\"button\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "spam", [], "any", false, false, false, 40);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_spam"] ?? null);
                yield "\" class=\"btn btn-warning\"><i class=\"fa-solid fa-ban\"></i></button>
              <button type=\"button\" value=\"";
                // line 41
                yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "delete", [], "any", false, false, false, 41);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_delete"] ?? null);
                yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-trash-can\"></i></button>
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            yield "      ";
        } else {
            // line 46
            yield "        <tr>
          <td class=\"text-center\" colspan=\"2\">";
            // line 47
            yield ($context["text_no_results"] ?? null);
            yield "</td>
        </tr>
      ";
        }
        // line 50
        yield "    </tbody>
  </table>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 53
        yield ($context["pagination"] ?? null);
        yield "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 54
        yield ($context["results"] ?? null);
        yield "</div>
  </div>
</form>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "adminstat/view/template/cms/comment_list.twig";
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
        return array (  189 => 54,  185 => 53,  180 => 50,  174 => 47,  171 => 46,  168 => 45,  156 => 41,  149 => 40,  145 => 38,  137 => 36,  135 => 35,  127 => 30,  120 => 28,  114 => 26,  106 => 24,  96 => 22,  93 => 21,  87 => 19,  81 => 17,  79 => 16,  72 => 14,  68 => 13,  65 => 12,  60 => 11,  58 => 10,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-comment\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#comment\">
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
        <th>{{ column_comment }}</th>
      </tr>
    </thead>
    <tbody>
      {% if comments %}
        {% for comment in comments %}
          <tr>
            <td class=\"text-center\" rowspan=\"2\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ comment.article_comment_id }}\" class=\"form-check-input\"/></td>
            <td><a href=\"{{ comment.article_edit }}\" target=\"_blank\">{{ comment.article }}</a>
              <p>
                {% if comment.status %}
                  <small class=\"text-success\">{{ text_enabled }}</small>
                {% else %}
                  <small class=\"text-danger\">{{ text_disabled }}</small>
                {% endif %}
                {% if comment.customer_edit %}
                  <small> - {{ text_by }} <a href=\"{{ comment.customer_edit }}\" target=\"_blank\">{{ comment.author }}</a></small>
                {% else %}
                  <small> - {{ text_by }} {{ comment.author }}</small>
                {% endif %}
                <small> - {{ comment.date_added }}</small>
                <br/>
                <small>{{ text_rating }} {{ comment.rating }}</small>
              </p>
              <p>{{ comment.comment }}</p>
            </td>
          </tr>
          <tr>
            <td class=\"text-end\">
              {% if comment.approve %}
                <button type=\"button\" value=\"{{ comment.approve }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_approve }}\" class=\"btn btn-success\"><i class=\"fa-solid fa-check\"></i></button>
              {% else %}
                <button type=\"button\" class=\"btn btn-success\" disabled><i class=\"fa-solid fa-check\"></i></button>
              {% endif %}
              <button type=\"button\" value=\"{{ comment.spam }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_spam }}\" class=\"btn btn-warning\"><i class=\"fa-solid fa-ban\"></i></button>
              <button type=\"button\" value=\"{{ comment.delete }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_delete }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-trash-can\"></i></button>
            </td>
          </tr>
        {% endfor %}
      {% else %}
        <tr>
          <td class=\"text-center\" colspan=\"2\">{{ text_no_results }}</td>
        </tr>
      {% endif %}
    </tbody>
  </table>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
    <div class=\"col-sm-6 text-end\">{{ results }}</div>
  </div>
</form>", "adminstat/view/template/cms/comment_list.twig", "C:\\xampp\\htdocs\\opencart4\\upload\\adminstat\\view\\template\\cms\\comment_list.twig");
    }
}
