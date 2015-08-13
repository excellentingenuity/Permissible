<?php

namespace eig\Permissible\Scope;


interface ScopeInterface
{
    public function getUUID();

    public function getName();

    public function getScope();

    public function getRoles();

    public function getRole($roleUUID = null, $roleName = null);

    public function hasRole($roleUUID = null, $roleName = null);

    public function withRole($roleUUID = null, $roleName = null);
}