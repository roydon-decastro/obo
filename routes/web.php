<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'KioskController@index')->name('kiosk.index');
Route::get('thankyou/{permit}', 'KioskController@thankyou')->name('kiosks.thankyou');

// PDFs
Route::get('/downloadbuildingpdf/{permit}', 'KioskController@downloadbuildingPDF')->name('kiosk.downloadbuildingpdf');
Route::get('/downloadcivilpdf/{permit}', 'KioskController@downloadCivilPDF')->name('kiosk.downloadcivilpdf');
Route::get('/downloadmechanicalpdf/{permit}', 'KioskController@downloadMechanicalPDF')->name('kiosk.downloadmechanicalpdf');
Route::get('/downloadelectricalpdf/{permit}', 'KioskController@downloadElectricalPDF')->name('kiosk.downloadelectricalpdf');
Route::get('/downloadelectronicspdf/{permit}', 'KioskController@downloadElectronicsPDF')->name('kiosk.downloadelectronicspdf');
Route::get('/downloadplumbingpdf/{permit}', 'KioskController@downloadPlumbingPDF')->name('kiosk.downloadplumbingpdf');
Route::get('/downloadoccupancypdf/{permit}', 'KioskController@downloadOccupancyPDF')->name('kiosk.downloadoccupancypdf');
// Kiosks Creates
Route::post('kiosksearch', 'KioskController@Search')->name('kiosk.search');
Route::get('about', 'KioskController@About')->name('kiosk.about');
Route::get('faq', 'KioskController@Faq')->name('kiosk.faq');

Route::get('add-simple-permit', 'KioskController@addsimplepermit')->name('kiosk.add-simple-permit');
Route::get('add-complex-permit', 'KioskController@addcomplexpermit')->name('kiosk.add-complex-permit');
Route::post('simple-store', 'KioskController@simplestore')->name('kiosk.simple-store');

Auth::routes();

 Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home', 'KioskController@index')->name('home');
//categories
Route::resource('categories','CategoriesController')->middleware(['auth','active']);
//states
Route::resource('states','StatesController')->middleware(['auth','active']);
//barangays
Route::resource('barangays','BarangaysController')->middleware(['auth','active']);
//scopes
Route::resource('scopes','ScopesController')->middleware(['auth','active']);
//occupant
Route::resource('occupants','OccupantsController')->middleware(['auth','active']);
//admins
Route::resource('admins','AdminsController')->middleware(['auth','active']);
//permits
Route::resource('permits','PermitsController')->middleware(['auth','active']);
//trashed permits
Route::get('trashed-permits', 'PermitsController@trashed')->name('trashed-permits.index');
//restore trashed
Route::put('restore-permit/{permit}', 'PermitsController@restore')->name('restore-permits');
//
Route::get('users','UsersController@index')->name('users.index')->middleware(['auth','active']);
//make admin
Route::post('users/{user}/make-admin','UsersController@makeAdmin')->name('users.make-admin')->middleware(['auth','active']);
//make staff
Route::post('users/{user}/make-staff','UsersController@makeStaff')->name('users.make-staff')->middleware(['auth','active']);
//activate account
Route::post('users/{user}/activate-account','UsersController@activateAccount')->name('users.activate-account')->middleware(['auth','active']);
//deactivate account
Route::post('users/{user}/deactivate-account','UsersController@deactivateAccount')->name('users.deactivate-account')->middleware(['auth','active']);

//grant building access
Route::post('users/{user}/grant-building-access','UsersController@grantBuildingAccess')->name('users.grant-building-access')->middleware(['auth','active']);
//revoke building access
Route::post('users/{user}/revoke-building-access','UsersController@revokeBuildingAccess')->name('users.revoke-building-access')->middleware(['auth','active']);

//grant civil access
Route::post('users/{user}/grant-civil-access','UsersController@grantCivilAccess')->name('users.grant-civil-access')->middleware(['auth','active']);
//revoke civil access
Route::post('users/{user}/revoke-civil-access','UsersController@revokeCivilAccess')->name('users.revoke-civil-access')->middleware(['auth','active']);

//grant electrical access
Route::post('users/{user}/grant-electrical-access','UsersController@grantElectricalAccess')->name('users.grant-electrical-access')->middleware(['auth','active']);
//revoke electrical access
Route::post('users/{user}/revoke-electrical-access','UsersController@revokeElectricalAccess')->name('users.revoke-electrical-access')->middleware(['auth','active']);


//grant electronics access
Route::post('users/{user}/grant-electronics-access','UsersController@grantElectronicsAccess')->name('users.grant-electronics-access')->middleware(['auth','active']);
//revoke electronics access
Route::post('users/{user}/revoke-electronics-access','UsersController@revokeElectronicsAccess')->name('users.revoke-electronics-access')->middleware(['auth','active']);


//grant mechanical access
Route::post('users/{user}/grant-mechanical-access','UsersController@grantMechanicalAccess')->name('users.grant-mechanical-access')->middleware(['auth','active']);
//revoke mechanical access
Route::post('users/{user}/revoke-mechanical-access','UsersController@revokeMechanicalAccess')->name('users.revoke-mechanical-access')->middleware(['auth','active']);

//grant plumbing access
Route::post('users/{user}/grant-plumbing-access','UsersController@grantPlumbingAccess')->name('users.grant-plumbing-access')->middleware(['auth','active']);
//revoke plumbing access
Route::post('users/{user}/revoke-plumbing-access','UsersController@revokePlumbingAccess')->name('users.revoke-plumbing-access')->middleware(['auth','active']);


//grant update access
Route::post('users/{user}/grant-update-access','UsersController@grantUpdateAccess')->name('users.grant-update-access')->middleware(['auth','active']);
//revoke update access
Route::post('users/{user}/revoke-update-access','UsersController@revokeUpdateAccess')->name('users.revoke-update-access')->middleware(['auth','active']);




//display permit
Route::get('admins/{permit}/displaypermit', 'AdminsController@displayPermit')->name('admins.displaypermit')->middleware(['auth','active']);
//add permit remarks
Route::post('admins/{permit}/addpermitremarks', 'AdminsController@addPermitRemarks')->name('admins.addpermitremarks')->middleware(['auth','active']);
//Search
Route::get('search', 'AdminsController@searchPermits')->name('admins.searchpermits')->middleware(['auth','active']);
Route::post('search-results', 'AdminsController@searchResults')->name('admins.searchresults')->middleware(['auth','active']);
//Emails
Route::post('mail/{permit}/send', 'MailController@send')->name('mail.send')->middleware(['auth','active']);

//PDF
Route::get('print-pdf', 'PermitsController@printpdf')->name('permits.printpdf');
//Mechanical
Route::get('print-mechanical', 'PermitsController@printMechanical')->name('permits.printmechanical');
//Civil Structural
Route::get('print-civil', 'PermitsController@printCivil')->name('permits.printcivil');
//Accept Permit
Route::post('permits/{permit}/acceptpermit', 'PermitsController@acceptPermit')->name('permits.acceptpermit');
//Revoke Accept Permit
Route::post('permits/{permit}/revokeacceptpermit', 'PermitsController@revokeacceptPermit')->name('permits.revokeacceptpermit');
//Approve Plumbing Permit
Route::post('permits/{permit}/approveplumbing', 'PermitsController@approvePlumbing')->name('permits.approveplumbing');
//Approve mechanical Permit
Route::post('permits/{permit}/approvemechanical', 'PermitsController@approveMechanical')->name('permits.approvemechanical');
//Approve electronics Permit
Route::post('permits/{permit}/approveelectronics', 'PermitsController@approveElectronics')->name('permits.approveelectronics');
//Approve electrical Permit
Route::post('permits/{permit}/approveelectrical', 'PermitsController@approveElectrical')->name('permits.approveelectrical');
//Approve civil Permit
Route::post('permits/{permit}/approvecivil', 'PermitsController@approveCivil')->name('permits.approvecivil');
//Approve building Permit
Route::post('permits/{permit}/approvebuilding', 'PermitsController@approveBuilding')->name('permits.approvebuilding');







//Admin
Route::get('permits-admin', 'PermitsController@admin')->name('permits.admin')->middleware(['auth','active']);
//Types
Route::resource('types','TypesController')->middleware('auth')->middleware(['auth','active']);


// Route::get('/customer/print-pdf', [ 'as' => 'customer.printpdf, 'exam' => 'CustomerController@printPDF']);
