<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Auth\RegisterController;
use app\Http\Controllers\Auth;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

// Auth::routes();
// Route::get('/register/{type}', [RegisterController::class, 'create'])->middleware('guest')
// ->name('register');

// Route::get('register', [RegisterController::class, 'create']);

//Route::get('/', 'HomeController@index')->name('selection');

Route::group(['namespace' => 'Auth'], function () {

    Route::get('/', 'LoginController@loginForm')->middleware('guest')->name('login.show');
    Route::post('/login', 'LoginController@login')->name('login');
    Route::get('/logout', 'LoginController@logout')->name('logout');


});
//==============================Translate all pages============================
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth']
    ], function () {

    //==============================dashboard============================
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

    //==============================Grades============================
    Route::group(['namespace' => 'Grades'], function () {
        Route::resource('Grades', 'GradeController');
    });

    //==============================Classrooms============================
    Route::group(['namespace' => 'Classrooms'], function () {
        Route::resource('Classrooms', 'ClassroomController');
        Route::post('delete_all', 'ClassroomController@delete_all')->name('delete_all');

        Route::post('Filter_Classes', 'ClassroomController@Filter_Classes')->name('Filter_Classes');

    });


    //==============================Sections============================

    Route::group(['namespace' => 'Sections'], function () {

        Route::resource('Sections', 'SectionController');

        Route::get('/classes/{id}', 'SectionController@getclasses');
        Route::get('/Get_sections/{id}', 'SectionController@getsection');
        Route::get('/Get_branches/{id}', 'SectionController@getbranches');

    });


    //==============================Branche============================

    Route::group(['namespace' => 'Branches'], function () {

        Route::resource('Branche', 'BrancheController');

        Route::get('/Branches/{id}', 'BrancheController@getclasses');

    });

    //==============================parents============================
    Route::group(['namespace' => 'My_Parent'], function () {

    Route::resource('add_parent', 'my_ParentController');
    });

    // Route::view('add_parent', 'pages.my__parents.my__parents')->name('add_parent');

    //==============================my__parents============================
    // Route::group(['namespace' => 'Teachers'], function () {
    //     Route::resource('my__parents', 'TeacherController');
    // });

    //==============================Teachers============================
    Route::group(['namespace' => 'Teachers'], function () {
        Route::resource('Teachers', 'TeacherController');
    });


    //==============================Students============================
    Route::group(['namespace' => 'Students'], function () {
        // Route::get('/Get_classrooms/{id}', 'StudentController@Get_classrooms');
        // Route::get('/Get_Sections/{id}', 'StudentController@Get_Sections');
        Route::resource('Students', 'StudentController');
        Route::resource('online_classes', 'OnlineClasseController');
        Route::get('indirect_admin', 'OnlineClasseController@indirectCreate')->name('indirect.create.admin');
        Route::post('indirect_admin', 'OnlineClasseController@storeIndirect')->name('indirect.store.admin');
        Route::resource('Graduated', 'GraduatedController');
        Route::resource('Promotion', 'PromotionController');
        Route::resource('Fees_Invoices', 'FeesInvoicesController');
        Route::resource('Fees', 'FeesController');
        Route::resource('receipt_students', 'ReceiptStudentsController');
        Route::resource('ProcessingFee', 'ProcessingFeeController');
        Route::resource('Payment_students', 'PaymentController');
        Route::resource('Attendance', 'AttendanceController');
        Route::get('download_file/{filename}', 'LibraryController@downloadAttachment')->name('downloadAttachment');
        Route::resource('library', 'LibraryController');
        Route::post('Upload_attachment', 'StudentController@Upload_attachment')->name('Upload_attachment');
        Route::get('Download_attachment/{studentsname}/{filename}', 'StudentController@Download_attachment')->name('Download_attachment');
        Route::post('Delete_attachment', 'StudentController@Delete_attachment')->name('Delete_attachment');
    });

    //==============================subjects============================
    Route::group(['namespace' => 'Subjects'], function () {
        Route::resource('subjects', 'SubjectController');
    });

    //==============================Quizzes============================
    Route::group(['namespace' => 'Quizzes'], function () {
        Route::resource('Quizzes', 'QuizzController');
    });

    //==============================questions============================
    Route::group(['namespace' => 'questions'], function () {
        Route::resource('questions', 'QuestionController');
    });

    //==============================Setting============================
    Route::resource('settings', 'SettingController');
});
