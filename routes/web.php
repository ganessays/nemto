<?php

Route::get('','HomeController@index');


Route::any('logout', 'Auth\LoginController@logout')->name('logout');
Route::group(['middleware'=>'guest'],function(){
    Route::get('login','HomeController@getLogin')->name('login');
    Route::post('login','HomeController@postLogin');
    Route::get('business/register','HomeController@get_business_register');
    Route::post('business/register','HomeController@post_business_register');
    /*manufacture*/
    Route::get('manufacture/register','HomeController@get_manufacture_register');
    Route::post('manufacture/register','HomeController@post_manufacture_register');

//    Route::get('register','HomeController@getregister')->name('register');
//    Route::post('register','HomeController@postregister');

});
/*==============================Registration =========================*/
Route::get('exhibitor-registration','Menu\RegistrationController@exhibitor_registration');
Route::get('conference-delegate-registration','Menu\RegistrationController@conference_registration');
Route::get('foreign-delegate-registration','Menu\RegistrationController@foreign_delegate_registration');
Route::get('delegate-registration','Menu\RegistrationController@delegate_registration');
/*======================The Show============================*/
Route::get('/home', 'HomeController@index')->name('home');
Route::get('about-event', 'Menu\TheShowController@about_event');
Route::get('event-features', 'Menu\TheShowController@event_features');
Route::get('medical-industry', 'Menu\TheShowController@medical_industry');
Route::get('event-activities', 'Menu\TheShowController@event_activities');
Route::get('past-show-report-2018', 'Menu\TheShowController@past_report_2018');
Route::get('about-organisers', 'Menu\TheShowController@about_organisers');
Route::get('supporting-organisations', 'Menu\TheShowController@supporting_organisations');
Route::get('strategic-organisations', 'Menu\TheShowController@strategic_organisations');
Route::get('thank-you-sponsors-2018', 'Menu\TheShowController@thank_you_sponsors_2018');
/*======================Exhibition============================*/
Route::get('exhibition', 'Menu\ExhibitionController@exhibition');
Route::get('why-exhibit', 'Menu\ExhibitionController@why_exhibit');
Route::get('who-can-exhibit', 'Menu\ExhibitionController@who_can_exhibit');
Route::get('exhibitor-profile', 'Menu\ExhibitionController@exhibitor_profile');
Route::get('layout-plan', 'Menu\ExhibitionController@layout_plan');
Route::get('visa-invitation-letter', 'Menu\ExhibitionController@visa_invitation_letter');
Route::get('venue-details', 'Menu\ExhibitionController@venue_details');
Route::get('stand-and-packages', 'Menu\ExhibitionController@stand_and_packages');
Route::get('exhibitor-list-2018', 'Menu\ExhibitionController@exhibitor_list_2018');
/*======================Conference============================*/
Route::get('why-attend', 'Menu\ConferenceController@why_attend');
Route::get('who-can-attend', 'Menu\ConferenceController@who_can_attend');
Route::get('highlights', 'Menu\ConferenceController@highlights');
Route::get('conference-speakers-2018', 'Menu\ConferenceController@conference_speakers_2018');
Route::get('agenda-programme', 'Menu\ConferenceController@agenda_programme');
Route::get('regional-forum-schedule', 'Menu\ConferenceController@regional_forum_schedule');
/*======================Visitors============================*/
Route::get('why-visit', 'Menu\VisitorsController@why_visit');
Route::get('who-can-visit', 'Menu\VisitorsController@who_can_visit');
Route::get('visitor-profile', 'Menu\VisitorsController@visitor_profile');
Route::get('admission-policy', 'Menu\VisitorsController@admission_policy');
//* ============================ Awards Controller ==================*//
Route::get('about-the-awards', 'Menu\AwardsController@about_the_awards');

//* ============================ contact-us ==================*//
Route::get('contact-us', 'HomeController@contact_us');


Route::group(['middleware'=>'admin','prefix'=>'admin','namespace'=>'Admin'],function() {
    Route::get('', 'ApplicationController@index');

});