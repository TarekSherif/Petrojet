<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emp extends Model
{
    //
    protected $table = 'Emp';
    protected $fillable = [  'EName', 'BDate', 'Socialstatus', 'passportID', 'passportEDate', 'FinancialNumber', 'ResidencyNumber', 'ExpiryDate', 'RenewalDate', 'ActualJob', 'ContractJob', 'TuvType', 'TuvID', 'TuvEDate', 'LicenseType', 'LicenseID', 'LicenseEDate', 'NID', 'EID'];
}
