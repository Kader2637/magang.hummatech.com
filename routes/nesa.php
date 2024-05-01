<?php

use App\Http\Controllers\Admin\PicketController;
use App\Http\Controllers\Admin\AdminJournalController;
use App\Http\Controllers\Admin\PicketingReportController;
use App\Http\Controllers\Mentor\AssessmentController;
use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Mentor\JournalController;
use App\Http\Controllers\NotePicketController;
use App\Http\Controllers\StudentOfline\CourseOfflineController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentChallengeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentOfline\PicketOfflineController;
use App\Http\Controllers\StudentOnline\ZoomScheduleController;
use App\Http\Controllers\SubCourseController;
use App\Http\Controllers\SubCourseOfflineController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::get('journal', [AdminJournalController::class, 'index']);

Route::get('rfid', function () {
    return view('admin.page.user.rfid');
});

Route::get('reject', function (){
    return view('admin.page.rejected.index');
});

Route::get('picket' , [PicketController::class , 'index']);
Route::post('picket/store',[PicketController::class,'store'])->name('picket.store');
Route::put('picket/{picket}',[PicketController::class,'update'])->name('picket.update');
Route::post('note-picket/store',[NotePicketController::class,'store'])->name('note.store');
Route::put('note-picket/{notePicket}',[NotePicketController::class,'update'])->name('note.update');

Route::get('report' , [PicketingReportController::class , 'index']);


Route::get('report', function (){
    return view('admin.page.picket.report');
});

Route::get('product',[ProductController::class,'index']);
Route::post('product/store', [ProductController::class, 'store'])->name('product.store');
Route::put('product/{product}', [ProductController::class, 'update'])->name('product.update');
Route::delete('product/{product}', [ProductController::class, 'destroy'])->name('product.destroy');


// mentor
Route::get('student/absensi', function (){
    return view('mentor.absensi.index');
});

Route::get('student/journal', [JournalController::class,'index']);

Route::get('student', [StudentController::class,'mentorStudent']);

Route::get('mentor/challenge', [ChallengeController::class,'index']);
Route::post('mentor/challenge/store', [ChallengeController::class,'store'])->name('challenge.store');
Route::put('mentor/challenge/{challenge}', [ChallengeController::class,'update'])->name('challenge.update');
Route::delete('mentor/challenge/delete/{challenge}', [ChallengeController::class,'destroy'])->name('challenge.destroy');


Route::get('mentor/challenge/detail', function (){
    return view('mentor.challange.detail');
});
Route::get('mentor/assessment', [AssessmentController::class,'index']);
Route::get('mentor/assessment/task-detail/{task}', [AssessmentController::class,'show'])->name('task.detail');
Route::patch('mentor/assessment/update/{studentTask}', [AssessmentController::class, 'update'])->name('task-offline.assessment');
Route::get('mentor/assessment/challenge-detail/{challenge}', [AssessmentController::class,'showChallenge'])->name('challenge.detail');
Route::patch('mentor/assessment/update/challenge/{studentChallenge}', [AssessmentController::class, 'updateChallenge'])->name('challenge.assessment');


Route::get('mentor/challenge/challenge-detail/{challenge}', [AssessmentController::class,'showChallengeStudent'])->name('tantangan.detail');


// Route::get('mentor/assessment/challange-detail', function (){
//     return view('mentor.assessment.challange_detail');
// });

Route::get('timetable', [ZoomScheduleController::class,'show']);



//Admin
// Route::get('administrator/course',[CourseController::class,'index']);
// Route::post('administrator/course/store', [CourseController::class, 'store'])->name('course.store');
// Route::put('administrator/course/{course}', [CourseController::class, 'update'])->name('course.update');
// Route::delete('administrator/course/delete/{course}', [CourseController::class, 'destroy'])->name('course.destroy');


// Route::get('/administrator/course/detail/{course}', [CourseController::class, 'show'])->name('course.detail');
// Route::delete('administrator/subcourse/delete/{subCourse}', [SubCourseController::class, 'destroy'])->name('subCourse.destroy');
// Route::get('/administrator/subcourse/detail/{subCourse}', [SubCourseController::class, 'show'])->name('subCourse.detail');
// Route::put('/administrator/subcourse/edit/{subCourse}', [SubCourseController::class, 'update'])->name('subCourse.update');

// Route::post('administrator/task/store', [TaskController::class, 'store'])->name('task.store');

// Route::get('administrator/zoom-schedules',[ZoomScheduleController::class,'index']);
// Route::post('administrator/zoom-schedules/store', [ZoomScheduleController::class, 'store'])->name('zoom-schedule.store');
// Route::put('administrator/zoom-schedules/{zoomSchedule}', [ZoomScheduleController::class, 'update'])->name('zoom-schedule.update');
// Route::delete('administrator/zoom-schedules/{zoomSchedule}', [ZoomScheduleController::class, 'destroy'])->name('zoom-schedule.destroy');






// siswa offline
Route::get('siswa-offline/absensi', function (){
    return view('student_offline.absensi.index');
});

Route::get('/siswa-offline/course',[CourseOfflineController::class,'index']);
Route::get('/siswa-offline/course/detail/{course}', [CourseOfflineController::class, 'show'])->name('materi.detail');
Route::get('/siswa-offline/course/detail/learn-more/{subCourse}', [CourseOfflineController::class, 'showSub'])->name('submateri.detail');


Route::get('siswa-offline/challenge',[StudentChallengeController::class,'index']);

Route::get('/siswa-offline/course/detail/answer-detail', function (){
    return view('student_offline.course.answer-detail');
});
Route::get('siswa-offline/transaction/topUp', function (){
    return view('student_offline.transaction.topUp_history');
});
Route::get('siswa-offline/transaction/history', function (){
    return view('student_offline.transaction.transaction_history');
});
Route::get('siswa-offline/others/rules', function (){
    return view('student_offline.others.rules');
});

Route::get('siswa-offline/others/picket',[PicketOfflineController::class,'index']);

Route::get('siswa-offline/purchase', [CourseOfflineController::class , 'shopcourse']);
Route::get('siswa-offline/purchase/detail/{id}', [CourseOfflineController::class, 'shopCourseDetail'])->name('purchase.detail');

// Route::get('siswa-offline/purchase/detail', function (){
//     return view('student_offline.purchase.detail');
// });
Route::get('siswa-offline/certificate', function (){
    return view('student_offline.certificate.index');
});


//Student online
Route::get('/siswa-online/challenge',[StudentChallengeController::class,'showOnline']);
Route::post('/siswa-online/challenge/store',[StudentChallengeController::class,'store'])->name('challenge_online.store');
Route::put('/siswa-online/challenge/update/{studentChallenge}',[StudentChallengeController::class,'update'])->name('challenge_online.update');

Route::get('/siswa-online/absensi', function (){
    return view('student_online.absensi.index');
});


//Hummatask
