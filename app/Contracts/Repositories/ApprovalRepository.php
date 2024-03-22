<?php
namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\ApprovalInterface;
use App\Contracts\Interfaces\LimitInterface;
use App\Contracts\Interfaces\StudentInterface;
use App\Enum\InternshipTypeEnum;
use App\Models\Student;

class ApprovalRepository extends BaseRepository implements ApprovalInterface
{
    private StudentInterface $student;
    private LimitInterface $limit;
    public function __construct(Student $student, StudentInterface $studentInterface, LimitInterface $limit)
    {
        $this->model = $student;
        $this->student = $studentInterface;
        $this->limit = $limit;

    }

    public function where(): mixed
    {
        return $this->model->query()->where('status' , 'pending')->get();
    }

    public function update(mixed $id, array $data): mixed
    {
        $studentcount = $this->student->listStudentOffline();
        if (!empty($this->limit->first())) {
            $limit =  $this->limit->first()->limits;
            if ($studentcount >= $limit) {
                return redirect()->back()->with('error', 'Jumlah Siswa Offline Telah Penuh');
            }
        }
        return $this->model->query()->findOrFail($id)->update($data);
    }

    public function ListStudentOffline(): mixed
    {
        return $this->model->query()->where('status' , 'pending')->where('internship_type', InternshipTypeEnum::OFFLINE->value)->get();
    }

    public function ListStudentOnline(): mixed
    {
        return $this->model->query()->where('status' , 'pending')->where('internship_type', InternshipTypeEnum::ONLINE->value)->get();
    }

}
