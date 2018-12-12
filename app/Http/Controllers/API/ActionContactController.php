<?php

namespace App\Http\Controllers\API;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActionContactController extends Controller
{

   

    // {{url("/")}}/api/ContactListoptions
    public function ContactListoptions()
    {
      $jTableResult =  array();
    
          try
          {
              $SQL ='SELECT `CID` as "Value",`Contact` as "DisplayText" FROM `Contact` order by SOrder';
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
        public function ListOfContacts()
        {
          $jTableResult =  array();
        
              try
              {
                  $SQL ="SELECT * FROM Contact  order by SOrder  ";
                  
                  
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
        public function CreateContact()
        {
            
          $jTableResult =  array();
                  try 
                  {
                          //Insert record into database
                          $SQL="INSERT INTO Contact(Contact,SOrder) VALUES('" . $_POST["Contact"] . "' ,'" . $_POST["SOrder"] . "');";
                          DB::insert( $SQL);
                          //Get last inserted record (to return to jTable)
                         
                          $SQL ="SELECT * FROM Contact WHERE CID = LAST_INSERT_ID();";
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
      
      
              public function UpdateContact()
              {
                  $jTableResult =  array();
              
                      try
                      {
      
                          //Update record in database
                          $SQL="UPDATE Contact SET
                             Contact = '" . $_POST["Contact"] . "',
                             SOrder= '" . $_POST["SOrder"] . "'
                            WHERE CID = " . $_POST["CID"];
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
                    public function DeleteContact()
                    {
                      $jTableResult =  array();
                          try
                          {
                                  //Delete from database
                                  $SQL="DELETE FROM Contact WHERE CID = " . $_POST["CID"] . ";";
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
      