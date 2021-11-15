<?php

use Illuminate\Support\Facades\Route;


Route::prefix('')->group(function () {
    //view("main.main", ['data' => \App\Http\Models\Main::getPage()])->name();
    //Route::view('/', 'main.main')->name('main');
    //view("main.main", ['data' => $page = \App\Http\Models\Main::getPage()]);
    //Route::view('/', 'main.main', ["data" => \App\Http\Controllers\Main::openPage(),])->name('main');
    Route::get('{page}', 'App\Http\Controllers\Main@openPage')->name('page_url');
});

/*
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GraduatesController;
use App\Http\Controllers\PhotoalbumController;
use App\Http\Controllers\ModeratorsController;
use App\Http\Controllers\AdminPanelController;


Route::group(['middleware' => 'header'], function () {
    Route::prefix('')->group(function () {
        Route::view('/', 'main.main', [
            "desc" => "Институт информационных технологий и управления в технических системах",
            "newsRecords" => \App\Http\Models\News::getSelectedNews(),
            "photoalbumRecords" => \App\Http\Models\Photoalbum::paginate(4),
        ])->name('main');

        Route::group(['middleware' => 'admin'], function () {
            Route::view('edit', 'main.edit', [
                "newsRecords" => \App\Http\Models\News::paginate(4),
                "newsSelected" => \App\Http\Models\NewsSelected::all(),
            ])->name('main.edit');

            Route::post('edit&{id}', [NewsController::class, 'changeSelected'])->name('change-selectedNews');
        });

        Route::prefix('news')->group(function () {
            Route::view('', 'news.news', [
                "newsRecords" => \App\Http\Models\News::paginate(4)
            ])->name('news');

            Route::group(['middleware' => 'admin'], function () {
                Route::view('edit', 'news.edit', [
                    "newsRecords" => \App\Http\Models\News::paginate(4)
                ])->name('news.edit');

                Route::post('add', [NewsController::class, 'addNews'])->name('add.news');
                Route::post('edit', [NewsController::class, 'editNews'])->name('edit.news');
                Route::post('delete', [NewsController::class, 'deleteNews'])->name('delete.news');
            });

            Route::get('{id}', 'App\Http\Controllers\NewsController@showNewsContentPage')->name('news-data-one');
        });

        Route::prefix('photoalbum')->group(function () {
            Route::view('', 'photoalbum.photoalbum', [
                "photoalbumRecords" => \App\Http\Models\Photoalbum::paginate(5)
            ])->name('photoalbum');

            Route::group(['middleware' => 'admin'], function () {
                Route::view('edit', 'photoalbum.edit', [
                    "photoalbumRecords" => \App\Http\Models\Photoalbum::paginate(5)
                ])->name('photoalbum.edit');

                Route::post('add', [PhotoalbumController::class, 'addPhotoalbum'])->name('add.photoalbum');
                Route::post('edit', [PhotoalbumController::class, 'editPhotoalbum'])->name('edit.photoalbum');
                Route::post('delete', [PhotoalbumController::class, 'deletePhotoalbum'])->name('delete.photoalbum');
            });
        });

        Route::prefix('graduates')->group(function () {
            Route::view('', 'graduates.graduates', [
                "graduatesRecords" => \App\Http\Models\Graduates::paginate(15)
            ])->name('graduates');

            Route::group(['middleware' => 'admin'], function () {
                Route::view('edit', 'graduates.edit', [
                    "graduatesRecords" => \App\Http\Models\Graduates::paginate(15)
                ])->name('graduates.edit');

                Route::post('add', [GraduatesController::class, 'addGraduates'])->name('add.graduates');
                Route::post('edit', [GraduatesController::class, 'editGraduates'])->name('edit.graduates');
                Route::post('delete', [GraduatesController::class, 'deleteGraduates'])->name('delete.graduates');
            });
            Route::group(['middleware' => 'moderator'], function () {
                Route::view('edit', 'graduates.edit', [
                    "graduatesRecords" => \App\Http\Models\Graduates::paginate(15)
                ])->name('graduates.edit');

                Route::post('add', [GraduatesController::class, 'addGraduates'])->name('add.graduates');
                Route::post('edit', [GraduatesController::class, 'editGraduates'])->name('edit.graduates');
                Route::post('delete', [GraduatesController::class, 'deleteGraduates'])->name('delete.graduates');
            });
        });

        Route::group(['middleware' => 'admin'], function () {
            Route::prefix('moderators')->group(function () {
                Route::view('edit', 'moderators.edit', [
                    "moderatorsRecords" => \App\Http\Models\Moderators::paginate(10)
                ])->name('moderators.edit');

                Route::post('add', [ModeratorsController::class, 'addModerators'])->name('add.moderators');
                Route::post('edit', [ModeratorsController::class, 'editModerators'])->name('edit.moderators');
                Route::post('delete', [ModeratorsController::class, 'deleteModerators'])->name('delete.moderators');
            });
        });

        Route::prefix('plan')->group(function () {
            Route::view('', 'plan', [
                "plans" => [
                    "Бакалавриат" => [
                        "09.03.01" => "Информатика и вычислительная техника",
                        "09.03.02" => "Информационные системы и технологии",
                        "09.03.03" => "Прикладная информатика",
                        "09.03.04" => "Программная инженерия",
                        "27.03.04" => "Управление в технических системах (профиль - Интеллектуальные системы управления и обработки данных (Smart systems))",
                    ],
                    "Магистратура" => [
                        "09.04.01" => "Информатика и вычислительная техника  (профиль - Сетевая безопасность) ",
                        "09.04.02" => "Информационные системы и технологии (профиль - Интеллектуальные информационные системы)",
                        "09.04.03" => "Прикладная информатика (профиль - Геоматика)",
                        "09.04.04" => "Программная инженерия",
                        "15.04.06" => "Мехатроника и робототехника (профиль - Интеллектуальные робототехнические системы)",
                        "27.04.04" => "Управление в технических системах  (профиль - Интеллектуальные системы управления и обработки данных (Smart systems)",
                    ],
                    "Аспирантура" => [
                        "09.06.01" => "Информатика и вычислительная техника",
                        "01.06.01" => "Математика и механика",
                    ],
                ],
            ])->name('plan');
        });

        Route::prefix('scientific-work')->group(function () {
            Route::view('', 'scientific-work')->name('scientific-work');
        });

        Route::prefix('site-map')->group(function () {
            Route::view('', 'site-map')->name('site-map');
        });

        Route::prefix('admin')->group(function () {
            Route::view('login', 'admin.login')->name('admin.login');
            Route::post('login', [AdminPanelController::class, "login"]);

            Route::get('logout', [AdminPanelController::class, "logout"])->name('admin.logout');
        });
    });
});
*/
