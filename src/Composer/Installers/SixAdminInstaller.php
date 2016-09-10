<?php
namespace Composer\Installers;

class SixAdminInstaller extends BaseInstaller
{
    protected $locations = array(
        'module' => 'modules/{$name}/',
    );

    /**
     * Format package name.
     *
     * For package type six-module, cut off a trailing '-module', convert "-" to "_",
     * and ucwords the name of the module.
     *
     */
    public function inflectPackageVars($vars)
    {
        if ($vars['type'] === 'six-module') {
            return $this->inflectModuleVars($vars);
        }

        return $vars;
    }
    
    protected function inflectModuleVars($vars)
    {
        $vars['name'] = preg_replace('/-module$/', '', $vars['name']);
        $vars['name'] = str_replace(array('-', '_'), ' ', $vars['name']);
        $vars['name'] = str_replace(' ', '', ucwords($vars['name']));

        return $vars;
    }
}
