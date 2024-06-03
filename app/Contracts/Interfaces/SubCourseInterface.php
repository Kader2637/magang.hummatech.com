<?php

namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\CountInterface;
use App\Contracts\Interfaces\Eloquent\DeleteInterface;
use App\Contracts\Interfaces\Eloquent\GetInterface;
use App\Contracts\Interfaces\Eloquent\GetWhereInterface;
use App\Contracts\Interfaces\Eloquent\SearchInterface;
use App\Contracts\Interfaces\Eloquent\ShowInterface;
use App\Contracts\Interfaces\Eloquent\StoreInterface;
use App\Contracts\Interfaces\Eloquent\UpdateInterface;
use App\Contracts\Interfaces\Eloquent\Whereterface;

interface SubCourseInterface extends GetInterface , StoreInterface , UpdateInterface , DeleteInterface , ShowInterface , CountInterface , Whereterface, GetWhereInterface, SearchInterface
{
    public function whereCourse(mixed $id);
    public function addToBoughtCourse(mixed $id): void;

    /**
     *
     * get latest position by course
     * @param mixed $id
     * @return mixed
     *
     */
    public function getLatestPositionByCourse(mixed $id): mixed;
}
