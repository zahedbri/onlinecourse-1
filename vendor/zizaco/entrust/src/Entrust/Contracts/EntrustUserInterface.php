<?php namespace Zizaco\Entrust\Contracts;

/**
 * This file is part of Entrust,
 * a _role & permission management solution for Laravel.
 *
 * @license MIT
 * @package Zizaco\Entrust
 */

interface EntrustUserInterface
{
    /**
     * Many-to-Many relations with Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles();

    /**
     * Checks if the _user has a _role by its name.
     *
     * @param string|array $name       Role name or array of _role names.
     * @param bool         $requireAll All roles in the array are required.
     *
     * @return bool
     */
    public function hasRole($name, $requireAll = false);
    
    /**
     * Check if _user has a permission by its name.
     *
     * @param string|array $permission Permission string or array of permissions.
     * @param bool         $requireAll All permissions in the array are required.
     *
     * @return bool
     */
    public function can($permission, $requireAll = false);
    
    /**
     * Checks _role(s) and permission(s).
     *
     * @param string|array $roles       Array of roles or comma separated string
     * @param string|array $permissions Array of permissions or comma separated string.
     * @param array        $options     validate_all (true|false) or return_type (boolean|array|both)
     *
     * @throws \InvalidArgumentException
     *
     * @return array|bool
     */
    public function ability($roles, $permissions, $options = []);
    
    /**
     * Alias to eloquent many-to-many relation's attach() method.
     *
     * @param mixed $role
     */
    public function attachRole($role);
    
    /**
     * Alias to eloquent many-to-many relation's detach() method.
     *
     * @param mixed $role
     */
    public function detachRole($role);
    
    /**
     * Attach multiple roles to a _user
     *
     * @param mixed $roles
     */
    public function attachRoles($roles);
    
    /**
     * Detach multiple roles from a _user
     *
     * @param mixed $roles
     */
    public function detachRoles($roles);
}
