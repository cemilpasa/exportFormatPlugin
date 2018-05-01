<?php

namespace exportFormatPlugin;

use Plenty\Modules\DataExchange\Services\ExportPresetContainer;
use Plenty\Plugin\ServiceProvider;

/**
 * Class ExportFormatServiceProvider
 * @package exportFormatPlugin
 */
class ExportFormatServiceProvider extends ServiceProvider
{
    /**
     * Abstract function for registering the service provider.
     */
    public function register()
    {

    }

    /**
     * Adds the export format to the export container.
     *
     * @param ExportPresetContainer $container
     */
    public function boot(ExportPresetContainer $container)
    {
        $container->add(
            'ExportFormat',
            'exportFormatPlugin\ResultField\ExportFormatResultFields',
            'exportFormatPlugin\Generator\ExportFormatGenerator',
            '',
            true,
            true,
            'item'
        );
    }
}
