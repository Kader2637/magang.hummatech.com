<?php

namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\DeleteInterface;
use App\Contracts\Interfaces\Eloquent\GetInterface;
use App\Contracts\Interfaces\Eloquent\StoreInterface;
use App\Contracts\Interfaces\Eloquent\UpdateInterface;

interface StudentTaskInterface extends GetInterface, StoreInterface, UpdateInterface, DeleteInterface
{
    public function getByStatus(string $status) :mixed;
}
