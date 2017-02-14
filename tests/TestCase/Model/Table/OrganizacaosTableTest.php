<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrganizacaosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrganizacaosTable Test Case
 */
class OrganizacaosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrganizacaosTable
     */
    public $Organizacaos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.organizacaos',
        'app.pessoas',
        'app.liderancas',
        'app.membros'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Organizacaos') ? [] : ['className' => 'App\Model\Table\OrganizacaosTable'];
        $this->Organizacaos = TableRegistry::get('Organizacaos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Organizacaos);

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
