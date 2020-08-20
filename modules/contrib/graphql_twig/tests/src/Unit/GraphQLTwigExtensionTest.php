<?php

namespace Drupal\Tests\graphql_twig\Unit;

use Drupal\graphql_twig\GraphQLTwigExtension;
use Drupal\Tests\UnitTestCase;

/**
 * @group graphql_twig
 */
class GraphQLTwigExtensionTest extends UnitTestCase {

  /**
   * The twig environment.
   *
   * @var \Twig_Environment
   */
  protected $twig;

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    $this->twig = new \Twig_Environment(new \Twig_Loader_Array([
      'query' => '{% graphql %}query ($arg: String!) { foo(id: [1, 2, 3], search: "test") { bar } }{% endgraphql %}',
      'simple' => '{% graphql %}query a { foo }{% endgraphql %}',
      'extend' => '{% extends "simple" %}',
      'dynamic_extend' => '{% extends simple %}',
      'override_extend' => '{% graphql %}query b { foo }{% endgraphql %}{% extends "simple" %}',
      'include' => '{% graphql %}query a { foo }{% endgraphql %}{% include "sub_fragment" with { foo: "bar" } %}',
      'embed' => '{% embed "embeddable" %}{% block test %} Override {% endblock %}{% endembed %}',
      'embeddable' => '{% graphql %}query a { foo }{% endgraphql %}{% block test %} Test {% endblock %}',
      'nested_include' => '{% graphql %}query a { foo }{% endgraphql %}{% include "fragment" with { foo: "bar" } %}',
      'dynamic_include' => '{% graphql %}query a { foo }{% endgraphql %}{% include sub_fragment with { foo: "bar" } %}',
      'fragment' => '{% graphql %}query b { foo }{% endgraphql %}{% include "sub_fragment" %}',
      'sub_fragment' => '{% graphql %}query c { foo }{% endgraphql %}',
      'extend_include' => '{% graphql %}query a { foo }{% endgraphql %}{% extends "fragment" %}',
      'embed_include' => '{% embed "embeddable" %}{% block test %}{% include "fragment" %}{% endblock %}{% endembed %}',
      'recursive' => '{% graphql %}query a { ... b }{% endgraphql %}{% include "recursive_include" %}',
      'recursive_include' => '{% graphql %}fragment b on foo { bar }{% endgraphql %}{% include "recursive_include" %}',
    ]));
    $this->twig->addExtension(new GraphQLTwigExtension());
  }

  /**
   * {@inheritdoc}
   */
  protected function assertGraphQLQuery($template, $query) {
    $template = $this->twig->loadTemplate($template);
    $this->assertTrue(method_exists($template, 'getGraphQLQuery'));
    $this->assertEquals($query, $template->getGraphQLQuery());
  }

  /**
   * {@inheritdoc}
   */
  public function testQuery() {
    $this->assertGraphQLQuery('query', 'query ($arg: String!) { foo(id: [1, 2, 3], search: "test") { bar } }');
  }

  /**
   * {@inheritdoc}
   */
  public function testExtend() {
    $this->assertGraphQLQuery('extend', 'query a { foo }');
  }

  /**
   * {@inheritdoc}
   */
  public function testDynamicExtend() {
    $this->assertGraphQLQuery('dynamic_extend', '');
  }

  /**
   * {@inheritdoc}
   */
  public function testInclude() {
    $this->assertGraphQLQuery('include', "query a { foo }\nquery c { foo }");
  }

  /**
   * {@inheritdoc}
   */
  public function testEmbed() {
    $this->assertGraphQLQuery('embed', "query a { foo }");
  }

  /**
   * {@inheritdoc}
   */
  public function testNestedInclude() {
    $this->assertGraphQLQuery('nested_include', "query a { foo }\nquery b { foo }\nquery c { foo }");
  }

  /**
   * {@inheritdoc}
   */
  public function testDynamicInclude() {
    $this->assertGraphQLQuery('dynamic_include', "query a { foo }");
  }

  /**
   * {@inheritdoc}
   */
  public function testExtendInclude() {
    $this->assertGraphQLQuery('extend_include', "query a { foo }\nquery c { foo }");
  }

  /**
   * {@inheritdoc}
   */
  public function testEmbedInclude() {
    $this->assertGraphQLQuery('embed_include', "query a { foo }\nquery b { foo }\nquery c { foo }");
  }

  /**
   * {@inheritdoc}
   */
  public function testRecursiveInclude() {
    $this->assertGraphQLQuery('recursive', "query a { ... b }\nfragment b on foo { bar }");
  }

}
