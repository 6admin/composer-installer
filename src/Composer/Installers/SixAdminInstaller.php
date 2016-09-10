<?php
namespace Composer\Installers;

class SixAdminInstaller extends BaseInstaller
{
    protected $locations = array(
        'module' => 'modules/{$name}/',
    );
}
