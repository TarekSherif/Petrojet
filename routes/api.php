<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
//=========================================================================
//========================================================================
// ActionListOfusersController-urls  
//========================================================================
Route::post('ListOfusers', 'API\ActionusersController@ListOfusers');
Route::post('Createuser', 'API\ActionusersController@Createuser');
Route::post('Updateuser', 'API\ActionusersController@Updateuser');
Route::post('Deleteuser', 'API\ActionusersController@Deleteuser');
//=========================================================================


       
//========================================================================
// ActionRoleController-urls  
//========================================================================
Route::post('ListOfRoles', 'API\ActionRoleController@ListOfRoles');
Route::post('CreateRole', 'API\ActionRoleController@CreateRole');
Route::post('UpdateRole', 'API\ActionRoleController@UpdateRole');
Route::post('DeleteRole', 'API\ActionRoleController@DeleteRole');
//=========================================================================
Route::post('RoleListoptions', 'API\ActionRoleController@RoleListoptions');

//========================================================================

//========================================================================
// ActionViewNameController-urls  
//========================================================================
 

Route::post('ListOfViewNames', 'API\ActionViewNameController@ListOfViewNames');
Route::post('CreateViewName', 'API\ActionViewNameController@CreateViewName');
Route::post('UpdateViewName', 'API\ActionViewNameController@UpdateViewName');
Route::post('DeleteViewName', 'API\ActionViewNameController@DeleteViewName');
//=========================================================================
Route::post('ViewNameListoptions', 'API\ActionViewNameController@ViewNameListoptions');
       



//========================================================================
// ActionViewRolePermissionController-urls  
//========================================================================
Route::post('ListOfViewRolePermissions/{RID}', 'API\ActionViewRolePermissionController@ListOfViewRolePermissions');
Route::post('CreateViewRolePermission', 'API\ActionViewRolePermissionController@CreateViewRolePermission');
Route::post('UpdateViewRolePermission', 'API\ActionViewRolePermissionController@UpdateViewRolePermission');
Route::post('DeleteViewRolePermission', 'API\ActionViewRolePermissionController@DeleteViewRolePermission');
//=========================================================================
Route::post('ViewRolePermissionListoptions', 'API\ActionViewRolePermissionController@ViewRolePermissionListoptions');




//========================================================================
// ActionjobTitleController-urls  
//========================================================================
Route::post('ListOfjobTitles', 'API\ActionjobTitleController@ListOfjobTitles');
Route::post('CreatejobTitle', 'API\ActionjobTitleController@CreatejobTitle');
Route::post('UpdatejobTitle', 'API\ActionjobTitleController@UpdatejobTitle');
Route::post('DeletejobTitle', 'API\ActionjobTitleController@DeletejobTitle');
//=========================================================================
Route::post('jobTitleListoptions', 'API\ActionjobTitleController@jobTitleListoptions');




       
//========================================================================
// ActionLicenseTypeController-urls  
//========================================================================
Route::post('ListOfLicenseTypes', 'API\ActionLicenseTypeController@ListOfLicenseTypes');
Route::post('CreateLicenseType', 'API\ActionLicenseTypeController@CreateLicenseType');
Route::post('UpdateLicenseType', 'API\ActionLicenseTypeController@UpdateLicenseType');
Route::post('DeleteLicenseType', 'API\ActionLicenseTypeController@DeleteLicenseType');
//=========================================================================
Route::post('LicenseTypeListoptions', 'API\ActionLicenseTypeController@LicenseTypeListoptions');


//========================================================================
// ActionTUVController-urls  
//========================================================================
Route::post('ListOfTUVs', 'API\ActionTUVController@ListOfTUVs');
Route::post('CreateTUV', 'API\ActionTUVController@CreateTUV');
Route::post('UpdateTUV', 'API\ActionTUVController@UpdateTUV');
Route::post('DeleteTUV', 'API\ActionTUVController@DeleteTUV');
//=========================================================================
Route::post('TUVListoptions', 'API\ActionTUVController@TUVListoptions');


//========================================================================
// ActionNationalityController-urls  
//========================================================================
Route::post('ListOfNationalitys', 'API\ActionNationalityController@ListOfNationalitys');
Route::post('CreateNationality', 'API\ActionNationalityController@CreateNationality');
Route::post('UpdateNationality', 'API\ActionNationalityController@UpdateNationality');
Route::post('DeleteNationality', 'API\ActionNationalityController@DeleteNationality');
//=========================================================================
Route::post('NationalityListoptions', 'API\ActionNationalityController@NationalityListoptions');


//========================================================================
// ActionEducationalController-urls  
//========================================================================
Route::post('ListOfEducationals', 'API\ActionEducationalController@ListOfEducationals');
Route::post('CreateEducational', 'API\ActionEducationalController@CreateEducational');
Route::post('UpdateEducational', 'API\ActionEducationalController@UpdateEducational');
Route::post('DeleteEducational', 'API\ActionEducationalController@DeleteEducational');
//=========================================================================
Route::post('EducationalListoptions', 'API\ActionEducationalController@EducationalListoptions');



//========================================================================
// ActionAbsenceController-urls  
//========================================================================
Route::post('ListOfAbsences', 'API\ActionAbsenceController@ListOfAbsences');
Route::post('CreateAbsence', 'API\ActionAbsenceController@CreateAbsence');
Route::post('UpdateAbsence', 'API\ActionAbsenceController@UpdateAbsence');
Route::post('DeleteAbsence', 'API\ActionAbsenceController@DeleteAbsence');



Route::get('ListOfACEmp', 'API\ActionEmpController@ListOfACEmp');