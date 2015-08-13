<?php namespace eig\Permissible\tests;


use eig\Permissible\Scope\Scope;
use Mockery;

class TestScope extends \PHPUnit_Framework_TestCase
{

    protected $roles = array();

    public function setUp()
    {
        for($i = 0; $i <= 10; $i++)
        {
            array_push($this->roles, Mockery::mock('eig\Permissible\Role\RoleInterface'));
        }
    }

    public function tearDown()
    {
        Mockery::close();
        parent::tearDown();
    }

    public function testConstructor()
    {
        $this->assertInstanceOf('eig\Permissible\Scope\Scope', new Scope('1243', 'testScope', 'www.scope.com/scope', $this->roles));
    }

}
