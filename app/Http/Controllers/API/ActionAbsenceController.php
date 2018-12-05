<?php

namespace App\Http\Controllers\API;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActionAbsenceController extends Controller
{

   

   
    
        //Getting records (listAction)
        public function ListOfAbsences()
        {
          $jTableResult =  array();
        
              try
              {
                  $SQL ="SELECT * FROM Absence  where EmpID='" . $_GET["EmpID"] . "'";
                  
                  
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
        public function CreateAbsence()
        {
            
          $jTableResult =  array();
                  try 
                  {
                          //Insert record into database
                          $SQL="INSERT INTO Absence(EmpID,absenceDate) VALUES('" . $_POST["EmpID"] . "' ,'" . $_POST["absenceDate"] . "');";
                          DB::insert( $SQL);
                          //Get last inserted record (to return to jTable)
                         
                          $SQL ="SELECT * FROM Absence WHERE ID = LAST_INSERT_ID();";
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
      
      
              public function UpdateAbsence()
              {
                  $jTableResult =  array();
              
                      try
                      {
      
                          //Update record in database
                          $SQL="UPDATE Absence SET
                             EmpID = '" . $_POST["EmpID"] . "',
                             absenceDate= '" . $_POST["absenceDate"] . "'
                            WHERE ID = " . $_POST["ID"];
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
                    public function DeleteAbsence()
                    {
                      $jTableResult =  array();
                          try
                          {
                                  //Delete from database
                                  $SQL="DELETE FROM Absence WHERE ID = " . $_POST["ID"] . ";";
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
      