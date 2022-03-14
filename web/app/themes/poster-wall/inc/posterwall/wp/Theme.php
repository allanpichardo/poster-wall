<?php

namespace Posterwall\Wp;

use WPackio\Enqueue;

class Theme
{
    private string $version;
    private Enqueue $enqueue;

    public function __construct(string $version)
    {
        $this->version = $version;
    }

    public function initialize()
    {
        $this->enqueue = new Enqueue('posterWall', 'dist', $this->version, 'theme', false);

        add_action('wp_enqueue_scripts', [ $this, 'enqueueScripts' ]);
    }

    public function enqueueScripts()
    {
        $this->enqueue->enqueue('app', 'main', []);
    }
}
