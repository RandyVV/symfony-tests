<?php

namespace App\Tests\Api;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CalculatorControllerTest extends WebTestCase
{
    public function test_it_should_respond_with_sum(): void
    {
        $a = 42;
        $b = 324;

        $client = static::createClient();
        $client->request('POST', '/api/calculator/sum', [
            'a' => $a,
            'b' => $b
        ]);

        $response = $client->getResponse();

        $this->assertEquals(200, $response->getStatusCode());

        $jsonContent = $response->getContent();
        $this->assertJson($jsonContent);

        $json = json_decode($jsonContent, true);
        $expectedJson = ['result' => $a + $b];
        $this->assertEquals($expectedJson, $json);
    }

    public function test_it_should_respond_with_diff(): void
    {
        $a = 42;
        $b = 324;

        $client = static::createClient();
        $client->request('POST', '/api/calculator/diff', [
            'a' => $a,
            'b' => $b
        ]);

        $response = $client->getResponse();

        $this->assertEquals(200, $response->getStatusCode());

        $jsonContent = $response->getContent();
        $this->assertJson($jsonContent);

        $json = json_decode($jsonContent, true);
        $expectedJson = ['result' => $a - $b];
        $this->assertEquals($expectedJson, $json);
    }

    public function test_it_should_respond_with_product(): void
    {
        $a = 46;
        $b = 285;

        $client = static::createClient();
        $client->request('POST', '/api/calculator/product', [
            'a' => $a,
            'b' => $b
        ]);

        $response = $client->getResponse();

        $this->assertEquals(200, $response->getStatusCode());

        $jsonContent = $response->getContent();
        $this->assertJson($jsonContent);

        $json = json_decode($jsonContent, true);
        $expectedJson = ['result' => $a * $b];
        $this->assertEquals($expectedJson, $json);
    }

    public function test_it_should_respond_with_quotient(): void
    {
        $a = 46;
        $b = 285;

        $client = static::createClient();
        $client->request('POST', '/api/calculator/quotient', [
            'a' => $a,
            'b' => $b
        ]);

        $response = $client->getResponse();

        $this->assertEquals(200, $response->getStatusCode());

        $jsonContent = $response->getContent();
        $this->assertJson($jsonContent);

        $json = json_decode($jsonContent, true);
        $expectedJson = ['result' => $a / $b];
        $this->assertEquals($expectedJson, $json);
    }
}
