<?php

namespace eig\Permissible\Scope;

use DataLibrary\Validator\ValidatorFacade as Validator;

class Scope implements ScopeInterface
{

    private $uuid;

    private $name;

    private $scope;

    private $roles = array();


    public function __construct($uuid, $name, $scope, array $roles)
    {
        if (Validator::isValid('string', $uuid)) {
            $this->uuid = $uuid;
        }
        if (Validator::isValid('string', $name)) {
            $this->name = $name;
        }
        if (Validator::isValid('string', $scope)) {
            $this->scope = $scope;
        }
        if (Validator::isValid('array', $roles)){
            $this->roles = $roles;
        }
    }

    use ScopeTrait;


}