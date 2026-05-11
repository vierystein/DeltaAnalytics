<?php
/**
 * Tests for DeltaAnalytics
 */

use PHPUnit\Framework\TestCase;
use Deltaanalytics\Deltaanalytics;

class DeltaanalyticsTest extends TestCase {
    private Deltaanalytics $instance;

    protected function setUp(): void {
        $this->instance = new Deltaanalytics(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Deltaanalytics::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
