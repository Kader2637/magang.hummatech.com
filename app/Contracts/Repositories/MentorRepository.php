<?php
namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\AdminJournalInterface;
use App\Contracts\Interfaces\AdminMentorInterface;
use App\Contracts\Interfaces\JournalInterface;
use App\Contracts\Interfaces\MentorInterface;
use App\Contracts\Interfaces\StudentInterface;
use App\Models\Journal;
use App\Models\Mentor;
use App\Models\Student;

class MentorRepository extends BaseRepository implements MentorInterface
{
    public function __construct(Mentor $mentor)
    {
        $this->model = $mentor;
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
        return $this->model->query()->where('id', $id)->update($data);
    }

    public function delete(mixed $id): mixed
    {
        return $this->model->query()->where('id', $id)->delete();
    }
}