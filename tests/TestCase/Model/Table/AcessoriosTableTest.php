<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AcessoriosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AcessoriosTable Test Case
 */
class AcessoriosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AcessoriosTable
     */
    public $Acessorios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.acessorios',
        'app.emprestimos',
        'app.emprestimos_acessorios',
        'app.equipamentos',
        'app.equipamentos_acessorios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Acessorios') ? [] : ['className' => 'App\Model\Table\AcessoriosTable'];
        $this->Acessorios = TableRegistry::get('Acessorios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Acessorios);

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
}
