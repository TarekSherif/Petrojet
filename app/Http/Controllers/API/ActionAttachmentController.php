<?php

namespace App\Http\Controllers\API;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActionAttachmentController extends Controller
{

   

    // {{url("/")}}/api/AttachmentListoptions
    public function AttachmentListoptions()
    {
      $jTableResult =  array();
    
          try
          {
              $SQL ='SELECT `AID` as "Value",`Attachment` as "DisplayText" FROM `Attachment` order by SOrder';
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
        public function ListOfAttachments()
        {
          $jTableResult =  array();
        
              try
              {
                  $SQL ="SELECT * FROM Attachment  order by SOrder  ";
                  
                  
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
        public function CreateAttachment()
        {
            
          $jTableResult =  array();
                  try 
                  {
                          //Insert record into database
                          $SQL="INSERT INTO Attachment(Attachment,SOrder) VALUES('" . $_POST["Attachment"] . "' ,'" . $_POST["SOrder"] . "');";
                          DB::insert( $SQL);
                          //Get last inserted record (to return to jTable)
                         
                          $SQL ="SELECT * FROM Attachment WHERE AID = LAST_INSERT_ID();";
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
      
      
              public function UpdateAttachment()
              {
                  $jTableResult =  array();
              
                      try
                      {
      
                          //Update record in database
                          $SQL="UPDATE Attachment SET
                             Attachment = '" . $_POST["Attachment"] . "',
                             SOrder= '" . $_POST["SOrder"] . "'
                            WHERE AID = " . $_POST["AID"];
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
                    public function DeleteAttachment()
                    {
                      $jTableResult =  array();
                          try
                          {
                                  //Delete from database
                                  $SQL="DELETE FROM Attachment WHERE AID = " . $_POST["AID"] . ";";
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
      