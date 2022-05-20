<?php

namespace Tests\Jobs;

use App\Jobs\HealthChecker;
use Tests\TestCase;

class HealthCheckerTest extends TestCase
{
    private $record = [
        'id' => 'id',
        'fields' => [
            'Website URL' => "https://civictech.guide"
        ]
    ];

    /**
     * Test that a given url is available.
     *
     * @test
     */
    public function handlesSuccess()
    {
        $testee = $this->getMockBuilder(HealthChecker::class)
            ->setConstructorArgs([$this->record])->onlyMethods(
            [
                'statusCheck',
                'isBrokenStatus',
                'updateAirtableRecord',
                'logToCheckManually'
            ]
        )->getMock();

        $testee->expects($this->once())->method('statusCheck')->willReturn(200);
        $testee->expects($this->never())->method('isBrokenStatus');
        $testee->expects($this->never())->method('updateAirtableRecord');
        $testee->expects($this->never())->method('logToCheckManually');
        $testee->handle();
    }

    /**
     * Test that a given url is no longer available.
     *
     * @test
     */
    public function handlesFailureNoURLProvided()
    {
        $record = [
            'id'=>'id',
            'fields' => [
                'Website URL' => ""
            ]
        ];
        $testee = $this->getMockBuilder(HealthChecker::class)
            ->setConstructorArgs([$record])->onlyMethods(
            [
                'statusCheck',
                'isSuccessfulStatus',
                'isBrokenStatus',
                'updateAirtableRecord',
                'logToCheckManually'
            ]
        )->getMock();

        $testee->expects($this->never())->method('statusCheck')->willReturn(
            false
        );
        $testee->expects($this->once())->method('isSuccessfulStatus')->willReturn(
            false
        );
        $testee->expects($this->once())->method('isBrokenStatus')->willReturn(
            false
        );
        $testee->expects($this->never())->method('updateAirtableRecord');
        $testee->expects($this->once())->method('logToCheckManually');
        $testee->handle();
    }

    /**
     * Test that a given url is no longer available and fixes.
     *
     * @test
     */
    public function handlesFailure400AndFixes()
    {
        $testee = $this->getMockBuilder(HealthChecker::class)
            ->setConstructorArgs([$this->record])->onlyMethods(
            [
                'statusCheck',
                'isSuccessfulStatus',
                'isBrokenStatus',
                'updateAirtableRecord',
                'findWaybackLink',
                'logToCheckManually'
            ]
        )->getMock();

        $testee->expects($this->once())->method('statusCheck')->willReturn(400);
        $testee->expects($this->once())->method('isSuccessfulStatus')->willReturn(
            false
        );
        $testee->expects($this->once())->method('isBrokenStatus')->willReturn(
            true
        );
        $testee->expects($this->once())->method('findWaybackLink')->willReturn(
            "archive:https://civictech.guide"
        );
        $testee->expects($this->once())->method('updateAirtableRecord');
        $testee->expects($this->never())->method('logToCheckManually');
        $testee->handle();
    }

    /**
     * Test that a given url is no longer available and logs.
     *
     * @test
     */
    public function handlesFailure400AndLogs()
    {
        $testee = $this->getMockBuilder(HealthChecker::class)
            ->setConstructorArgs([$this->record])->onlyMethods(
            [
                'statusCheck',
                'isSuccessfulStatus',
                'isBrokenStatus',
                'updateAirtableRecord',
                'findWaybackLink',
                'logToCheckManually'
            ]
        )->getMock();

        $testee->expects($this->once())->method('statusCheck')->willReturn(400);
        $testee->expects($this->once())->method('isSuccessfulStatus')->willReturn(
            false
        );
        $testee->expects($this->once())->method('isBrokenStatus')->willReturn(
            true
        );
        $testee->expects($this->once())->method('findWaybackLink')->willReturn(
            null
        );
        $testee->expects($this->never())->method('updateAirtableRecord');
        $testee->expects($this->once())->method('logToCheckManually');
        $testee->handle();
    }

    /**
     * Test that a given url is no longer available.
     *
     * @test
     */
    public function handlesFailure300AndLogs()
    {
        $testee = $this->getMockBuilder(HealthChecker::class)
            ->setConstructorArgs([$this->record])->onlyMethods(
            [
                'statusCheck',
                'isSuccessfulStatus',
                'isBrokenStatus',
                'updateAirtableRecord',
                'findWaybackLink',
                'logToCheckManually'
            ]
        )->getMock();

        $testee->expects($this->once())->method('statusCheck')->willReturn(400);
        $testee->expects($this->once())->method('isSuccessfulStatus')->willReturn(
            false
        );
        $testee->expects($this->once())->method('isBrokenStatus')->willReturn(
            true
        );
        $testee->expects($this->once())->method('findWaybackLink')->willReturn(
            null
        );
        $testee->expects($this->never())->method('updateAirtableRecord');
        $testee->expects($this->once())->method('logToCheckManually');
        $testee->handle();
    }

    /**
     * Test that will return the archived url if the site exists.
     *
     * @test
     */
    public function findWaybackLink()
    {
        $record = [
            'fields' => [
                'Website URL' => "http://google.com"
            ]
        ];
        $testee = new HealthChecker($record);
        $expectedLink = 'http://web.archive.org/web/';

        self::assertStringStartsWith(
            $expectedLink,
            $testee->findWaybackLink(
                $record['fields']['Website URL']
            )
        );
    }

    /**
     * Test that will return null if there is no archived site.
     *
     * @test
     */
    public function noWaybackLink()
    {
        $record = [
            'fields' => [
                'Website URL' => "http://this_does_not_exist.com"
            ]
        ];
        $testee = new HealthChecker($record);
        $expectedLink = null;

        self::assertEquals(
            $expectedLink,
            $testee->findWaybackLink(
                $record['fields']['Website URL']
            )
        );
    }
}
