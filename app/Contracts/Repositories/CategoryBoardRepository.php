<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\AttendanceInterface;
use App\Contracts\Interfaces\CategoryBoardInterface;
use App\Contracts\Interfaces\CodeOfConductInterface;
use App\Contracts\Interfaces\ThesisInterface;
use App\Models\CategoryBoard;
use App\Models\Thesis;

class CategoryBoardRepository extends BaseRepository implements CategoryBoardInterface
{
    public function __construct(CategoryBoard $categoryBoard)
    {
        $this->model = $categoryBoard;
    }

    public function get(): mixed
    {
        return $this->model->query()
            ->get();
    }

    public function update(mixed $id, array $data): mixed
    {
        return $this->model->query()
            ->where('id', $id)
            ->update($data);
    }

    /**
     * store
     *
     * @param  mixed $data
     * @return mixed
     */
    public function store(array $data): mixed
    {
        return $this->model->query()
            ->create($data);
    }
    /**
     * checkAttendanceStudent
     *
     * @param  mixed $studentId
     * @return void
     */


    public function delete(mixed $id): mixed
    {
        return $this->model->query()
            ->where('id', $id)
            ->delete();
    }
}