<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OnlineApplicationController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', [App\Http\Controllers\Dashboard::class, 'index']);
    Route::group(['prefix' => 'applications'], function () {
        Route::get('applicants', [App\Http\Controllers\OnlineApplicationController::class, 'index'])->name('applicants');
        Route::get('approved', [App\Http\Controllers\OnlineApplicationController::class, 'approved_students'])->name('approved_students');
        Route::get('applicants_detail/{id}', [App\Http\Controllers\OnlineApplicationController::class, 'show'])->name('applicants_detail');
    });

    Route::get('approve_applicant/{id}', [App\Http\Controllers\OnlineApplicationController::class, 'approve'])->name('approve');

    Route::get('download/result_slip/{result_slip}', [App\Http\Controllers\OnlineApplicationController::class, 'result_slip']);
    Route::get('download/birth_cert/{birth_cert}', [App\Http\Controllers\OnlineApplicationController::class, 'birth_cert']);
    Route::get('download/bank_slip/{bank_slip}', [App\Http\Controllers\OnlineApplicationController::class, 'bank_slip']);
});

Auth::routes();


//About Us Routes
Route::get('/videos', [App\Http\Controllers\FrontController::class, 'videos'])->name('videos');
Route::get('/gallery', [App\Http\Controllers\FrontController::class, 'gallery'])->name('gallery');
Route::get('/newsletter', [App\Http\Controllers\FrontController::class, 'newsletter'])->name('newsletter');
Route::get('/vacancies', [App\Http\Controllers\FrontController::class, 'vacancies'])->name('vacancies');
Route::get('/tenders', [App\Http\Controllers\FrontController::class, 'tenders'])->name('tenders');
Route::get('/applicationforms', [App\Http\Controllers\FrontController::class, 'applicationforms'])->name('applicationforms');
Route::get('/modeofapplication', [App\Http\Controllers\FrontController::class, 'modeofapplication'])->name('modeofapplication');
Route::get('/contacts', [App\Http\Controllers\FrontController::class, 'contacts'])->name('contacts');
Route::get('/courses', [App\Http\Controllers\FrontController::class, 'courses'])->name('courses');
Route::get('/readmore', [App\Http\Controllers\FrontController::class, 'readmore'])->name('readmore');
Route::get('/briefhistory', [App\Http\Controllers\FrontController::class, 'Aboutbriefhistory'])->name('briefhistory');
Route::get('/vissionmission', [App\Http\Controllers\FrontController::class, 'AboutMissionVission'])->name('vissionmission');
Route::get('/csr', [App\Http\Controllers\FrontController::class, 'AboutbrieCsr'])->name('csr');
Route::get('/national_anthem', [App\Http\Controllers\FrontController::class, 'AboutNationalAnthem'])->name('national_anthem');
Route::get('/nac_anthem', [App\Http\Controllers\FrontController::class, 'AboutNacanthem'])->name('nac_anthem');
Route::get('/chetti_anthem', [App\Http\Controllers\FrontController::class, 'AboutCHettiAnthem'])->name('chetti_anthem');
Route::get('/organogram', [App\Http\Controllers\FrontController::class, 'AboutOrganogram'])->name('organogram');
Route::get('/strategic_plan', [App\Http\Controllers\FrontController::class, 'AboutStrategicPlan'])->name('strategic_plan');
Route::get('/service_delivery', [App\Http\Controllers\FrontController::class, 'Aboutservice_delivery'])->name('service_delivery');
Route::get('/quality_policy', [App\Http\Controllers\FrontController::class, 'AboutQualityPolicy'])->name('quality_policy');
Route::get('/iso_cert', [App\Http\Controllers\FrontController::class, 'AboutIsoCert'])->name('iso_cert');
Route::get('/enviroment', [App\Http\Controllers\FrontController::class, 'AboutEnviroment'])->name('enviroment');
Route::get('/rdi', [App\Http\Controllers\FrontController::class, 'AboutRDI'])->name('rdi');
//Administration
Route::get('/principal', [App\Http\Controllers\FrontController::class, 'Principal'])->name('principal');
Route::get('/registrar', [App\Http\Controllers\FrontController::class, 'RegistrarAdministration'])->name('registrar');
Route::get('/bog', [App\Http\Controllers\FrontController::class, 'Bog'])->name('bog');
Route::get('/deputyprincipal', [App\Http\Controllers\FrontController::class, 'DeputyPrincipal'])->name('deputyprincipal');
//Academics
Route::group(['prefix' => 'academics'], function () {
    Route::group(['prefix' => 'registrar'], function () {
        Route::get('examination', [App\Http\Controllers\FrontController::class, 'RegistrarExaminations'])->name('examination');
        Route::get('career_service', [App\Http\Controllers\FrontController::class, 'career_service'])->name('career_service');
        Route::get('industrial_office', [App\Http\Controllers\FrontController::class, 'industrial_office'])->name('industrial_office');
    });

    Route::group(['prefix' => 'departments'], function () {
        Route::get('acd_engineering', [App\Http\Controllers\FrontController::class, 'acd_engineering'])->name('acd_engineering');
        Route::get('acd_hospitality', [App\Http\Controllers\FrontController::class, 'acd_hospitality'])->name('acd_hospitality');
        Route::get('acd_business', [App\Http\Controllers\FrontController::class, 'acd_business'])->name('acd_business');
        Route::get('acd_ict', [App\Http\Controllers\FrontController::class, 'acd_ict'])->name('acd_ict');
    });

    Route::get('adm_procedure', [App\Http\Controllers\FrontController::class, 'adm_procedure'])->name('adm_procedure');
    Route::get('application_forms', [App\Http\Controllers\FrontController::class, 'application_forms'])->name('application_forms');
    Route::get('online_application', [App\Http\Controllers\FrontController::class, 'online_application'])->name('online_application');
    Route::get('e_learning', [App\Http\Controllers\FrontController::class, 'e_learning'])->name('e_learning');
    Route::get('brochure', [App\Http\Controllers\FrontController::class, 'brochure'])->name('brochure');
});
//Students Welfare
Route::group(['prefix' => 'student_welfare'], function () {

    Route::get('dean_student', [App\Http\Controllers\FrontController::class, 'dean_student'])->name('dean_student');
    Route::get('student_login', [App\Http\Controllers\FrontController::class, 'student_login'])->name('student_login');
    Route::get('student_leadership', [App\Http\Controllers\FrontController::class, 'student_leadership'])->name('student_leadership');

    Route::group(['prefix' => 'student_activities'], function () {
        Route::get('athletics', [App\Http\Controllers\FrontController::class, 'athletics'])->name('athletics');
        Route::get('ball_games', [App\Http\Controllers\FrontController::class, 'ball_games'])->name('ball_games');
        Route::get('club_societies', [App\Http\Controllers\FrontController::class, 'club_societies'])->name('club_societies');
        Route::get('drama_music', [App\Http\Controllers\FrontController::class, 'drama_music'])->name('drama_music');
    });

    Route::get('student_attire', [App\Http\Controllers\FrontController::class, 'student_attire'])->name('student_attire');
    Route::get('meal_accomodation', [App\Http\Controllers\FrontController::class, 'meal_accomodation'])->name('meal_accomodation');
    
    Route::group(['prefix' => 'student_financing'], function () {
        Route::get('kuccps', [App\Http\Controllers\FrontController::class, 'kuccps'])->name('kuccps');
        Route::get('helb', [App\Http\Controllers\FrontController::class, 'helb'])->name('helb');
        Route::get('others', [App\Http\Controllers\FrontController::class, 'others'])->name('others');
    });
});
//Staff Welfare
Route::get('/dean_staff', [App\Http\Controllers\FrontController::class, 'dean_staff'])->name('dean_staff');
Route::get('/staff_welfare', [App\Http\Controllers\FrontController::class, 'staff_welfare'])->name('staff_welfare');
//Milestones
Route::get('/mentorship', [App\Http\Controllers\FrontController::class, 'mentorship'])->name('mentorship');
Route::get('/dedication', [App\Http\Controllers\FrontController::class, 'dedication'])->name('dedication');
Route::get('/pioneer_group', [App\Http\Controllers\FrontController::class, 'pioneer_group'])->name('pioneer_group');


Route::post('online_application', [App\Http\Controllers\OnlineApplicationController::class, 'store']);
Route::post('contact_us', [App\Http\Controllers\contactController::class, 'store']);
