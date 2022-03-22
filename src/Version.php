<?php

namespace Ateitiesit\Version;

class Version
{
    public function compact(): string
    {
        return $this->major() . '.' . $this->minor() . '.' . $this->patch();
    }

    public function major(): string
    {
        return (string)config('version.major');
    }

    public function minor(): string
    {
        return (string)config('version.minor');
    }

    public function patch(): string
    {
        return (string)config('version.patch');
    }
}
