<?php

namespace App\Providers;

use App\Contracts\Interfaces\AttendanceDetailInterface;
use App\Contracts\Interfaces\AttendanceInterface;
use App\Contracts\Interfaces\AttendanceRuleInterface;
use App\Contracts\Interfaces\MaxLateInterface;
use App\Contracts\Repositories\AttendanceDetailRepository;
use App\Contracts\Repositories\AttendanceRepository;
use App\Contracts\Repositories\AttendanceRuleRepository;
use App\Contracts\Repositories\MaxLateRepository;
use Illuminate\Support\ServiceProvider;
use App\Contracts\Interfaces\CourseInterface;
use App\Contracts\Interfaces\PicketInterface;
use App\Contracts\Interfaces\JournalInterface;
use App\Contracts\Interfaces\PaymentInterface;
use App\Contracts\Interfaces\StudentInterface;
use App\Contracts\Interfaces\ApprovalInterface;
use App\Contracts\Interfaces\DivisionInterface;
use App\Contracts\Repositories\CourseRepository;
use App\Contracts\Repositories\PicketRepository;
use App\Contracts\Repositories\JournalRepository;
use App\Contracts\Repositories\PaymentRepository;
use App\Contracts\Repositories\StudentRepository;
use App\Contracts\Interfaces\LetterheadsInterface;
use App\Contracts\Repositories\ApprovalRepository;
use App\Contracts\Repositories\DivisionRepository;
use App\Contracts\Interfaces\CodeOfConductInterface;
use App\Contracts\Interfaces\AbsenteePermitInterface;
use App\Contracts\Interfaces\AdminJournalInterface;
use App\Contracts\Interfaces\ReportStudenttInterface;
use App\Contracts\Interfaces\ResponseLetterInterface;
use App\Contracts\Repositories\LetterheadsRepository;
use App\Contracts\Interfaces\PicketingReportInterface;
use App\Contracts\Interfaces\ProductInterface;
use App\Contracts\Repositories\CodeOfConductRepository;
use App\Contracts\Repositories\ReportStudentRepository;
use App\Contracts\Repositories\AbsenteePermitRepository;
use App\Contracts\Repositories\AdminJournalRepository;
use App\Contracts\Repositories\ResponseLetterRepository;
use App\Contracts\Repositories\PicketingReportRepository;
use App\Contracts\Repositories\ProductRepository;

class AppServiceProvider extends ServiceProvider
{
    private array $register = [
        StudentInterface::class => StudentRepository::class,
        DivisionInterface::class => DivisionRepository::class,
        JournalInterface::class => JournalRepository::class,
        PicketInterface::class => PicketRepository::class,
        CodeOfConductInterface::class => CodeOfConductRepository::class,
        ReportStudenttInterface::class => ReportStudentRepository::class,
        LetterheadsInterface::class => LetterheadsRepository::class,
        CourseInterface::class => CourseRepository::class,
        AbsenteePermitInterface::class => AbsenteePermitRepository::class,
        PicketingReportInterface::class => PicketingReportRepository::class,
        ApprovalInterface::class => ApprovalRepository::class,
        PaymentInterface::class => PaymentRepository::class,
        ResponseLetterInterface::class => ResponseLetterRepository::class,
        AttendanceRuleInterface::class => AttendanceRuleRepository::class,
        MaxLateInterface::class => MaxLateRepository::class,
        AttendanceInterface::class => AttendanceRepository::class,
        AttendanceDetailInterface::class => AttendanceDetailRepository::class,
        AdminJournalInterface::class => AdminJournalRepository::class,
        ProductInterface::class => ProductRepository::class
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        foreach ($this->register as $index => $value) {
            $this->app->bind($index, $value);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
