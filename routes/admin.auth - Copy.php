<?php
Route::get('login', function () {
    return view('admin.auth.login');
});


 /*
// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.auth.password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.auth.password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('admin.auth.password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('admin.auth.password.update');

// Password Confirmation Routes...
Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('admin.auth.password.confirm');
Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

// Email Verification Routes...
Route::get('email/verify', 'Auth\VerificationController@show')->name('admin.auth.verification.notice');
Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('admin.auth.verification.verify');
Route::post('email/resend', 'Auth\VerificationController@resend')->name('admin.auth.verification.resend');
*/