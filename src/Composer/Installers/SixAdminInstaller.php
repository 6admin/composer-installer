<?php
namespace Composer\Installers;

class SixAdminInstaller extends BaseInstaller
{
    protected $locations = array(
        'service' => '../services/{$name}/',
        'module' => '../modules/{$name}/',
    );

    /**
     * Format package name.
     *
     * For package names convert "-" to "_" and ucwords the name of the package.
     *
     */
    public function inflectPackageVars($vars)
    {
        return $this->inflectModuleVars($vars);
    }
    
    protected function inflectModuleVars($vars)
    {
        $vars['name'] = str_replace(array('-', '_'), ' ', $vars['name']);
        $vars['name'] = str_replace(' ', '', ucwords($vars['name']));

        return $vars;
    }
}
