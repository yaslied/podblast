<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PodcastsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PodcastsTable Test Case
 */
class PodcastsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PodcastsTable
     */
    public $Podcasts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Podcasts',
        'app.Canals',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Podcasts') ? [] : ['className' => PodcastsTable::class];
        $this->Podcasts = TableRegistry::getTableLocator()->get('Podcasts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Podcasts);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
