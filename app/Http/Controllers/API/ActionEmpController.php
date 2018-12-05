<?php

namespace App\Http\Controllers\API;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActionEmpController extends Controller
{

    public function ListOfACEmp()
    {
      $Result =  array();
    
          try
          {
            

            $where="'".((isset($_GET['term']))?$_GET['term']:"")."%'";
                // $whereBID=((isset($_GET['BID']) && $_GET['BID']!=0  )?" and BID='".$_GET['BID']."'":"");
                $whereBID="";
                $SQL="SELECT  `EmpID` , `EName` as label , `EName`  ,`passportID` , `ResidencyNumber`
                       FROM `Emp`
                       where `EName` like $where  $whereBID
                 UNION 
                 SELECT  `EmpID` ,  `EName` as label , `EName` ,`passportID` , `ResidencyNumber`
                       FROM `Emp`
                       where `passportID` like $where  $whereBID
                 UNION 
                 SELECT  `EmpID` , `EName` as label , `EName` ,`passportID` , `ResidencyNumber`
                       FROM `Emp`
                       where `ResidencyNumber` like $where  $whereBID";
                     



              $Data= DB::select($SQL);
             
              $Result =$Data;
             
          }
          catch(Exception $ex)
          {
              //Return error Message
              $Result['Result'] = "ERROR";
              $Result['Message'] = $ex->getMessage();
             
          }
          return response()->json($Result);
          }

      }
      