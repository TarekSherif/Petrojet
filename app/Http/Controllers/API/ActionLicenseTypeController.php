<?php

namespace App\Http\Controllers\API;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActionLicenseTypeController extends Controller
{

   

    // {{url("/")}}/api/LicenseTypeListoptions
    public function LicenseTypeListoptions()
    {
      $jTableResult =  array();
    
          try
          {
              $SQL ='SELECT `LicenseID` as "Value",`LicenseType` as "DisplayText" FROM `LicenseType` order by SOrder';
              $Data= DB::select($SQL);
              $jTableResult['Result'] = "OK";
              $jTableResult['Options'] =$Data;
             
          }
          catch(Exception $ex)
          {
              //Return error Message
              $jTableResult['Result'] = "ERROR";
              $jTableResult['Message'] = $ex->getMessage();
             
          }
          return response()->json($jTableResult);
          }

        //Getting records (listAction)
        public function ListOfLicenseTypes()
        {
          $jTableResult =  array();
        
              try
              {
                  $SQL ="SELECT * FROM LicenseType  order by SOrder  ";
                  
                  
                  $Data= DB::select($SQL);
                  $jTableResult['Result'] = "OK";
                  $jTableResult['Records'] =$Data;
                 
              }
              catch(Exception $ex)
              {
                  //Return error Message
                  $jTableResult['Result'] = "ERROR";
                  $jTableResult['Message'] = $ex->getMessage();
                 
              }
              return response()->json($jTableResult);
              }
      //Creating a new record (createAction)
        public function CreateLicenseType()
        {
            
          $jTableResult =  array();
                  try 
                  {
                          //Insert record into database
                          $SQL="INSERT INTO LicenseType(LicenseType,SOrder) VALUES('" . $_POST["LicenseType"] . "' ,'" . $_POST["SOrder"] . "');";
                          DB::insert( $SQL);
                          //Get last inserted record (to return to jTable)
                         
                          $SQL ="SELECT * FROM LicenseType WHERE LicenseID = LAST_INSERT_ID();";
                          $Data= DB::select($SQL)[0];

                     

                          $jTableResult['Result'] = "OK";
                          $jTableResult['Record'] =$Data;
                          
                     

                          
                  }
                  catch(Exception $ex)
                  {
                      //Return error Message
                      
                      $jTableResult['Result'] = "ERROR";
                      $jTableResult['Message'] = $ex->getMessage();
                    
                  }
                  return response()->json($jTableResult);
              }
      
      
              public function UpdateLicenseType()
              {
                  $jTableResult =  array();
              
                      try
                      {
      
                          //Update record in database
                          $SQL="UPDATE LicenseType SET
                             LicenseType = '" . $_POST["LicenseType"] . "',
                             SOrder= '" . $_POST["SOrder"] . "'
                            WHERE LicenseID = " . $_POST["LicenseID"];
                         DB::update($SQL);
       
                          //Return result to jTable
                          
                          $jTableResult['Result'] = "OK";
          
                         
                      }
                      catch(Exception $ex)
                      {
                          //Return error Message
                          
                          $jTableResult['Result'] = "ERROR";
                          $jTableResult['Message'] = $ex->getMessage();
                      }
                      return response()->json($jTableResult);
            
              }
      
                  //Deleting a record (deleteAction)
                    public function DeleteLicenseType()
                    {
                      $jTableResult =  array();
                          try
                          {
                                  //Delete from database
                                  $SQL="DELETE FROM LicenseType WHERE LicenseID = " . $_POST["LicenseID"] . ";";
                                  DB::update($SQL);
                                  //Return result to jTable
                                  $jTableResult['Result'] = "OK";
                               
                          }
                          catch(Exception $ex)
                          {
                              //Return error Message
                              $jTableResult['Result'] = "ERROR";
                              $jTableResult['Message'] = $ex->getMessage();
                         }
                      return response()->json($jTableResult);
              }
      }
      