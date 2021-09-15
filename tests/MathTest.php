<?php
namespace App;

use PHPUnit\Framework\TestCase;
use App\Math;
class MathTest extends TestCase
{
    private $math;

    public function setUp(): void
    {
        $this->math = new Math();
    }

    public function tearDown(): void
    {
        $this->math = null;
    }

    /**
     * @dataProvider dataProviderForAddMethod
     * */
    public function testAddMethod($a, $b, $expected): void
    {
        $dummy = $this->createMock(Math::class);

        $dummy->add();

        $output = $this->math->add($a, $b);

        $this->assertEquals($expected, $output);
    }

    public function dataProviderForAddMethod(): array
    {
        return [
            'Adds two number' => [2, 5, 7],
            'Adds two negative number' => [-2, -5, -7],
        ];
    }
}