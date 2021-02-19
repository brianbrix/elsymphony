
<?php
use Illuminate\Support\Facades\Route;
// Route::get('/', function () { return redirect('/admin/home'); });

Route::get('/', 'Guest\EventsController@index')->name('guest.home');
Route::get('pagination/fetch_data', 'Guest\EventsController@fetch_data');
Route::get('/attend/{event}', 'Guest\EventsController@index')->name('guest.home2');
Route::get('about', 'Guest\EventsController@about')->name('guest.about');
Route::get('playlist', 'Guest\EventsController@playlist')->name('guest.playlist');

//$this->get('events', 'Guest\EventsController@index')->name('events.index');
//$this->get('events/{event}', 'Guest\EventsController@show')->name('events.show');
Route::resource('events', 'Guest\EventsController');

Route::post('payment', 'Guest\PaymentsController@store')->name('guest.payment');

// Authentication Routes...
Route::get('account', 'Auth\LoginController@showLoginForm')->name('user.login');
Route::post('login', 'Auth\LoginController@login')->name('auth.login');
Route::post('register', 'Auth\LoginController@doRegister')->name('register');
Route::post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
Route::get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_passwordview');
Route::patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.resetview');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset1');
Route::group(['middleware' => ['auth']], function () {
Route::resource('tickets', 'Guest\BookingController');
});
Route::group(['middleware' => ['admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('dashboard', 'Admin\DashboardController@index')->name('dashboard');
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('events', 'Admin\EventsController');
    Route::post('events_mass_destroy', ['uses' => 'Admin\EventsController@massDestroy', 'as' => 'events.mass_destroy']);
    Route::resource('tickets', 'Admin\TicketsController');
    Route::resource('bookings', 'Admin\BookingController');
    Route::post('tickets_mass_destroy', ['uses' => 'Admin\TicketsController@massDestroy', 'as' => 'tickets.mass_destroy']);
    Route::post('bookings_mass_destroy', ['uses' => 'Admin\BookingController@massDestroy', 'as' => 'bookings.mass_destroy']);
    Route::resource('payments', 'Admin\PaymentsController');

});