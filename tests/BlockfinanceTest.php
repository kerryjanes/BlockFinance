<?php
/**
 * Tests for BlockFinance
 */

use PHPUnit\Framework\TestCase;
use Blockfinance\Blockfinance;

class BlockfinanceTest extends TestCase {
    private Blockfinance $instance;

    protected function setUp(): void {
        $this->instance = new Blockfinance(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockfinance::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
