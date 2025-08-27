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

/* catalog/view/template/account/order_info.twig */
class __TwigTemplate_e7a25704389b9f0ec7d056096ded3af2 extends Template
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
        yield ($context["header"] ?? null);
        yield "
<div id=\"account-order\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            yield "      <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            yield "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "  </ul>
  <div class=\"row\">
    ";
        // line 9
        yield ($context["column_left"] ?? null);
        yield "
    <div id=\"content\" class=\"col\">
      ";
        // line 11
        yield ($context["content_top"] ?? null);
        yield "
      <div class=\"row\">
        <div class=\"col mb-3\">
          <div class=\"form-control\" style=\"min-height: 64px;\">
            <strong class=\"lead\">";
        // line 15
        yield ($context["text_invoice_no"] ?? null);
        yield "</strong>
            <br/>
            ";
        // line 17
        if (($context["invoice_no"] ?? null)) {
            yield ($context["invoice_no"] ?? null);
        } else {
            yield ($context["text_tbc"] ?? null);
        }
        // line 18
        yield "          </div>
        </div>
        <div class=\"col mb-3\">
          <div class=\"form-control\" style=\"min-height: 64px;\">
            <strong class=\"lead\">";
        // line 22
        yield ($context["text_order_id"] ?? null);
        yield "</strong>
            <br/>
            ";
        // line 24
        yield ($context["order_id"] ?? null);
        yield "
          </div>
        </div>
      </div>
      ";
        // line 28
        if ((($context["payment_address"] ?? null) || ($context["shipping_address"] ?? null))) {
            // line 29
            yield "        <div class=\"row\">
          ";
            // line 30
            if (($context["payment_address"] ?? null)) {
                // line 31
                yield "            <div class=\"col mb-3\">
              <div class=\"form-control\" style=\"min-height: 128px;\">
                <strong class=\"lead\">";
                // line 33
                yield ($context["text_payment_address"] ?? null);
                yield "</strong>
                <br/>
                ";
                // line 35
                yield ($context["payment_address"] ?? null);
                yield "
              </div>
            </div>
          ";
            }
            // line 39
            yield "          ";
            if (($context["shipping_address"] ?? null)) {
                // line 40
                yield "            <div class=\"col mb-3\">
              <div class=\"form-control\" style=\"min-height: 128px;\">
                <strong class=\"lead\">";
                // line 42
                yield ($context["text_shipping_address"] ?? null);
                yield "</strong>
                <br/>
                ";
                // line 44
                yield ($context["shipping_address"] ?? null);
                yield "
              </div>
            </div>
          ";
            }
            // line 48
            yield "        </div>
      ";
        }
        // line 50
        yield "      <div class=\"row\">
        ";
        // line 51
        if (($context["shipping_method"] ?? null)) {
            // line 52
            yield "          <div class=\"col mb-3\">
            <div class=\"form-control\" style=\"min-height: 64px;\">
              <strong class=\"lead\">";
            // line 54
            yield ($context["text_shipping_method"] ?? null);
            yield "</strong>
              <br/>
              ";
            // line 56
            yield ($context["shipping_method"] ?? null);
            yield "
            </div>
          </div>
        ";
        }
        // line 60
        yield "        <div class=\"col mb-3\">
          <div class=\"form-control\" style=\"min-height: 64px;\">
            <strong class=\"lead\">";
        // line 62
        yield ($context["text_payment_method"] ?? null);
        yield "</strong>
            <br/>
            ";
        // line 64
        yield ($context["payment_method"] ?? null);
        yield "
          </div>
        </div>
      </div>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <th>";
        // line 72
        yield ($context["column_product"] ?? null);
        yield "</th>
              <th class=\"text-end\">";
        // line 73
        yield ($context["column_quantity"] ?? null);
        yield "</th>
              <th class=\"text-end\">";
        // line 74
        yield ($context["column_price"] ?? null);
        yield "</th>
              <th class=\"text-end\">";
        // line 75
        yield ($context["column_total"] ?? null);
        yield "</th>
              <th class=\"text-end\">";
        // line 76
        yield ($context["column_action"] ?? null);
        yield "</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 80
        $context["product_row"] = 0;
        // line 81
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 82
            yield "              <tr id=\"product-row-";
            yield ($context["product_row"] ?? null);
            yield "\">
                <td><a href=\"";
            // line 83
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "view", [], "any", false, false, false, 83);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 83);
            yield "</a>
                  <div id=\"error-";
            // line 84
            yield ($context["product_row"] ?? null);
            yield "-product\" class=\"invalid-feedback mt-0\"></div>
                  <ul class=\"list-unstyled mb-0\">
                    <li>
                      <small> - ";
            // line 87
            yield ($context["text_model"] ?? null);
            yield ": ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 87);
            yield "</small>
                    </li>
                    ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 89));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 90
                yield "                      <li>
                        <small> - ";
                // line 91
                yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 91);
                yield ": ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 91);
                yield "</small>
                        <div id=\"error-";
                // line 92
                yield ($context["product_row"] ?? null);
                yield "-option-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 92);
                yield "\" class=\"invalid-feedback mt-0\"></div>
                      </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            yield "                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 95)) {
                // line 96
                yield "                      <li>
                        <small> - ";
                // line 97
                yield ($context["text_subscription"] ?? null);
                yield ": ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 97)) {
                    yield "<a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 97);
                    yield "\" target=\"_blank\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription_plan", [], "any", false, false, false, 97);
                    yield "</a>";
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription_plan", [], "any", false, false, false, 97);
                }
                yield "</small>
                        <div id=\"error-";
                // line 98
                yield ($context["product_row"] ?? null);
                yield "-subscription\" class=\"invalid-feedback mt-0\"></div>
                      </li>
                    ";
            }
            // line 101
            yield "                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 101)) {
                // line 102
                yield "                      <li>
                        <small> - ";
                // line 103
                yield ($context["text_points"] ?? null);
                yield ": ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 103);
                yield "</small>
                      </li>
                    ";
            }
            // line 106
            yield "                  </ul>
                  <form id=\"form-product-";
            // line 107
            yield ($context["product_row"] ?? null);
            yield "\">
                    <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 108
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 108);
            yield "\"/> <input type=\"hidden\" name=\"quantity\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 108);
            yield "\"/>
                    ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 109));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 110
                yield "                      ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 110) == "select") || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 110) == "radio"))) {
                    // line 111
                    yield "                        <input type=\"hidden\" name=\"option[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 111);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value_id", [], "any", false, false, false, 111);
                    yield "\"/>
                      ";
                }
                // line 113
                yield "                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 113) == "checkbox")) {
                    // line 114
                    yield "                        <input type=\"hidden\" name=\"option[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 114);
                    yield "][]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value_id", [], "any", false, false, false, 114);
                    yield "\"/>
                      ";
                }
                // line 116
                yield "                      ";
                if (((((((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 116) == "text") || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 116) == "textarea")) || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 116) == "file")) || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 116) == "date")) || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 116) == "datetime")) || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 116) == "time"))) {
                    // line 117
                    yield "                        <input type=\"hidden\" name=\"option[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 117);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 117);
                    yield "\"/>
                      ";
                }
                // line 119
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            yield "                    <input type=\"hidden\" name=\"subscription_plan_id\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription_plan_id", [], "any", false, false, false, 120);
            yield "\"/>
                  </form>
                </td>
                <td class=\"text-end\">";
            // line 123
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 123);
            yield "</td>
                <td class=\"text-end\">";
            // line 124
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 124);
            yield "</td>
                <td class=\"text-end\">";
            // line 125
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 125);
            yield "</td>
                <td class=\"text-end text-nowrap\" style=\"width: 1px;\">
                  <div class=\"d-grid\">
                    <button type=\"submit\" form=\"form-product-";
            // line 128
            yield ($context["product_row"] ?? null);
            yield "\" class=\"btn btn-primary mb-1\">";
            yield ($context["button_reorder"] ?? null);
            yield "</button>
                    <a href=\"";
            // line 129
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "return", [], "any", false, false, false, 129);
            yield "\" class=\"btn btn-danger\">";
            yield ($context["button_return"] ?? null);
            yield "</a>
                  </div>
                </td>
              </tr>
              ";
            // line 133
            $context["product_row"] = (($context["product_row"] ?? null) + 1);
            // line 134
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 136
            yield "              <tr>
                <td colspan=\"2\"></td>
                <td class=\"text-end\"><strong>";
            // line 138
            yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 138);
            yield "</strong></td>
                <td class=\"text-end\">";
            // line 139
            yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 139);
            yield "</td>
                <td></td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['total'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        yield "          </tbody>
        </table>
      </div>
      ";
        // line 146
        if (($context["comment"] ?? null)) {
            // line 147
            yield "        <div class=\"form-control mb-3\" style=\"min-height: 64px;\">
          <strong class=\"lead\">";
            // line 148
            yield ($context["text_comment"] ?? null);
            yield "</strong>
          <br/>
          ";
            // line 150
            yield ($context["comment"] ?? null);
            yield "
        </div>
      ";
        }
        // line 153
        yield "      <h2>";
        yield ($context["text_history"] ?? null);
        yield "</h2>
      <div id=\"history\">";
        // line 154
        yield ($context["history"] ?? null);
        yield "</div>
      <div class=\"text-end mt-3\"><a href=\"";
        // line 155
        yield ($context["continue"] ?? null);
        yield "\" class=\"btn btn-primary\">";
        yield ($context["button_continue"] ?? null);
        yield "</a></div>
      ";
        // line 156
        yield ($context["content_bottom"] ?? null);
        yield "
    </div>
    ";
        // line 158
        yield ($context["column_right"] ?? null);
        yield "
  </div>
</div>
<script type=\"text/javascript\"><!--
var product_row = 0;

\$('form').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    if (e.originalEvent !== undefined && e.originalEvent.submitter !== undefined) {
        var button = e.originalEvent.submitter;
    } else {
        var button = '';
    }

    \$.ajax({
        url: 'index.php?route=checkout/cart.add&language=";
        // line 176
        yield ($context["language"] ?? null);
        yield "',
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        cache: false,
        processData: false,
        beforeSend: function() {
            \$(button).button('loading');
        },
        complete: function() {
            \$(button).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('form').find('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
        // line 194
        yield ($context["error_reorder"] ?? null);
        yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                product_row = \$(element).attr('id').substr(13);

                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    delete json['error']['warning'];
                }

                for (key in json['error']) {
                    \$('#error-' + product_row + '-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#cart').load('index.php?route=common/cart.info&language=";
        // line 212
        yield ($context["language"] ?? null);
        yield "');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#history').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
});
//--></script>
";
        // line 227
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/account/order_info.twig";
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
        return array (  558 => 227,  540 => 212,  519 => 194,  498 => 176,  477 => 158,  472 => 156,  466 => 155,  462 => 154,  457 => 153,  451 => 150,  446 => 148,  443 => 147,  441 => 146,  436 => 143,  426 => 139,  422 => 138,  418 => 136,  413 => 135,  407 => 134,  405 => 133,  396 => 129,  390 => 128,  384 => 125,  380 => 124,  376 => 123,  369 => 120,  363 => 119,  355 => 117,  352 => 116,  344 => 114,  341 => 113,  333 => 111,  330 => 110,  326 => 109,  320 => 108,  316 => 107,  313 => 106,  305 => 103,  302 => 102,  299 => 101,  293 => 98,  279 => 97,  276 => 96,  273 => 95,  262 => 92,  256 => 91,  253 => 90,  249 => 89,  242 => 87,  236 => 84,  230 => 83,  225 => 82,  220 => 81,  218 => 80,  211 => 76,  207 => 75,  203 => 74,  199 => 73,  195 => 72,  184 => 64,  179 => 62,  175 => 60,  168 => 56,  163 => 54,  159 => 52,  157 => 51,  154 => 50,  150 => 48,  143 => 44,  138 => 42,  134 => 40,  131 => 39,  124 => 35,  119 => 33,  115 => 31,  113 => 30,  110 => 29,  108 => 28,  101 => 24,  96 => 22,  90 => 18,  84 => 17,  79 => 15,  72 => 11,  67 => 9,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-order\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  <div class=\"row\">
    {{ column_left }}
    <div id=\"content\" class=\"col\">
      {{ content_top }}
      <div class=\"row\">
        <div class=\"col mb-3\">
          <div class=\"form-control\" style=\"min-height: 64px;\">
            <strong class=\"lead\">{{ text_invoice_no }}</strong>
            <br/>
            {% if invoice_no %}{{ invoice_no }}{% else %}{{ text_tbc }}{% endif %}
          </div>
        </div>
        <div class=\"col mb-3\">
          <div class=\"form-control\" style=\"min-height: 64px;\">
            <strong class=\"lead\">{{ text_order_id }}</strong>
            <br/>
            {{ order_id }}
          </div>
        </div>
      </div>
      {% if payment_address or shipping_address %}
        <div class=\"row\">
          {% if payment_address %}
            <div class=\"col mb-3\">
              <div class=\"form-control\" style=\"min-height: 128px;\">
                <strong class=\"lead\">{{ text_payment_address }}</strong>
                <br/>
                {{ payment_address }}
              </div>
            </div>
          {% endif %}
          {% if shipping_address %}
            <div class=\"col mb-3\">
              <div class=\"form-control\" style=\"min-height: 128px;\">
                <strong class=\"lead\">{{ text_shipping_address }}</strong>
                <br/>
                {{ shipping_address }}
              </div>
            </div>
          {% endif %}
        </div>
      {% endif %}
      <div class=\"row\">
        {% if shipping_method %}
          <div class=\"col mb-3\">
            <div class=\"form-control\" style=\"min-height: 64px;\">
              <strong class=\"lead\">{{ text_shipping_method }}</strong>
              <br/>
              {{ shipping_method }}
            </div>
          </div>
        {% endif %}
        <div class=\"col mb-3\">
          <div class=\"form-control\" style=\"min-height: 64px;\">
            <strong class=\"lead\">{{ text_payment_method }}</strong>
            <br/>
            {{ payment_method }}
          </div>
        </div>
      </div>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <th>{{ column_product }}</th>
              <th class=\"text-end\">{{ column_quantity }}</th>
              <th class=\"text-end\">{{ column_price }}</th>
              <th class=\"text-end\">{{ column_total }}</th>
              <th class=\"text-end\">{{ column_action }}</th>
            </tr>
          </thead>
          <tbody>
            {% set product_row = 0 %}
            {% for product in products %}
              <tr id=\"product-row-{{ product_row }}\">
                <td><a href=\"{{ product.view }}\">{{ product.name }}</a>
                  <div id=\"error-{{ product_row }}-product\" class=\"invalid-feedback mt-0\"></div>
                  <ul class=\"list-unstyled mb-0\">
                    <li>
                      <small> - {{ text_model }}: {{ product.model }}</small>
                    </li>
                    {% for option in product.option %}
                      <li>
                        <small> - {{ option.name }}: {{ option.value }}</small>
                        <div id=\"error-{{ product_row }}-option-{{ option.product_option_id }}\" class=\"invalid-feedback mt-0\"></div>
                      </li>
                    {% endfor %}
                    {% if product.subscription %}
                      <li>
                        <small> - {{ text_subscription }}: {% if product.subscription %}<a href=\"{{ product.subscription }}\" target=\"_blank\">{{ product.subscription_plan }}</a>{% else %}{{ product.subscription_plan }}{% endif %}</small>
                        <div id=\"error-{{ product_row }}-subscription\" class=\"invalid-feedback mt-0\"></div>
                      </li>
                    {% endif %}
                    {% if product.reward %}
                      <li>
                        <small> - {{ text_points }}: {{ product.reward }}</small>
                      </li>
                    {% endif %}
                  </ul>
                  <form id=\"form-product-{{ product_row }}\">
                    <input type=\"hidden\" name=\"product_id\" value=\"{{ product.product_id }}\"/> <input type=\"hidden\" name=\"quantity\" value=\"{{ product.quantity }}\"/>
                    {% for option in product.option %}
                      {% if option.type == 'select' or option.type == 'radio' %}
                        <input type=\"hidden\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option.product_option_value_id }}\"/>
                      {% endif %}
                      {% if option.type == 'checkbox' %}
                        <input type=\"hidden\" name=\"option[{{ option.product_option_id }}][]\" value=\"{{ option.product_option_value_id }}\"/>
                      {% endif %}
                      {% if option.type == 'text' or option.type == 'textarea' or option.type == 'file' or option.type == 'date' or option.type == 'datetime' or option.type == 'time' %}
                        <input type=\"hidden\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option.value }}\"/>
                      {% endif %}
                    {% endfor %}
                    <input type=\"hidden\" name=\"subscription_plan_id\" value=\"{{ product.subscription_plan_id }}\"/>
                  </form>
                </td>
                <td class=\"text-end\">{{ product.quantity }}</td>
                <td class=\"text-end\">{{ product.price }}</td>
                <td class=\"text-end\">{{ product.total }}</td>
                <td class=\"text-end text-nowrap\" style=\"width: 1px;\">
                  <div class=\"d-grid\">
                    <button type=\"submit\" form=\"form-product-{{ product_row }}\" class=\"btn btn-primary mb-1\">{{ button_reorder }}</button>
                    <a href=\"{{ product.return }}\" class=\"btn btn-danger\">{{ button_return }}</a>
                  </div>
                </td>
              </tr>
              {% set product_row = product_row + 1 %}
            {% endfor %}
            {% for total in totals %}
              <tr>
                <td colspan=\"2\"></td>
                <td class=\"text-end\"><strong>{{ total.title }}</strong></td>
                <td class=\"text-end\">{{ total.text }}</td>
                <td></td>
              </tr>
            {% endfor %}
          </tbody>
        </table>
      </div>
      {% if comment %}
        <div class=\"form-control mb-3\" style=\"min-height: 64px;\">
          <strong class=\"lead\">{{ text_comment }}</strong>
          <br/>
          {{ comment }}
        </div>
      {% endif %}
      <h2>{{ text_history }}</h2>
      <div id=\"history\">{{ history }}</div>
      <div class=\"text-end mt-3\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
      {{ content_bottom }}
    </div>
    {{ column_right }}
  </div>
</div>
<script type=\"text/javascript\"><!--
var product_row = 0;

\$('form').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    if (e.originalEvent !== undefined && e.originalEvent.submitter !== undefined) {
        var button = e.originalEvent.submitter;
    } else {
        var button = '';
    }

    \$.ajax({
        url: 'index.php?route=checkout/cart.add&language={{ language }}',
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        cache: false,
        processData: false,
        beforeSend: function() {
            \$(button).button('loading');
        },
        complete: function() {
            \$(button).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('form').find('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> {{ error_reorder }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                product_row = \$(element).attr('id').substr(13);

                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    delete json['error']['warning'];
                }

                for (key in json['error']) {
                    \$('#error-' + product_row + '-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#cart').load('index.php?route=common/cart.info&language={{ language }}');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#history').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
});
//--></script>
{{ footer }}
", "catalog/view/template/account/order_info.twig", "C:\\xampp\\htdocs\\opencart4\\upload\\catalog\\view\\template\\account\\order_info.twig");
    }
}
