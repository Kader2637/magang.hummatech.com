<?php
namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\StudentInterface;
use App\Contracts\Interfaces\TaskInterface;
use App\Models\Student;
use App\Models\Task;

class TaskRepository extends BaseRepository implements TaskInterface
{
    public function __construct(Task $task)
    {
        $this->model = $task;
    }

    public function getId(int $id): mixed
    {
        return $this->model->query()->findOrFail($id);
    }

    public function get(): mixed
    {
        return $this->model->query()->get();
    }
    public function store(array $data): mixed
    {
        return $this->model->query()->create($data);
    }
    public function update(mixed $id, array $data): mixed
    {
        return $this->model->query()->findOrFail($id)->update($data);
    }
    public function delete(mixed $id): mixed
    {
        return $this->model->query()->findOrFail($id)->delete($id);
    }
}
