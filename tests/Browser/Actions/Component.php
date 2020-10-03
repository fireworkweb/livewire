<?php

namespace Tests\Browser\Actions;

use Illuminate\Support\Facades\View;
use Livewire\Component as BaseComponent;

class Component extends BaseComponent
{
    public $output = '';
    public $showButtonsWithClick = false;

    public function setOutputToFoo()
    {
        $this->output = 'foo';
    }

    public function setOutputTo(...$params)
    {
        $this->output = implode('', $params);
    }

    public function setShowButtonsWithClick($toggle = true)
    {
        $this->showButtonsWithClick = $toggle;
    }

    public function appendToOutput(...$params)
    {
        $this->output .= implode('', $params);
    }

    public function pause()
    {
        usleep(1000 * 50);
    }

    public function throwError()
    {
        usleep(1000 * 50);
        throw new \Exception;
    }

    public function render()
    {
        return View::file(__DIR__.'/view.blade.php');
    }
}
