
<div class="form-group row">
    <label for='EName' class="col-md-4 col-form-label text-md-right"> @lang('messages.EName') </label>
    
    <div class="col-md-6">
        <input id='EName' type="text" class="form-control{{ $errors->has('EName') ? ' is-invalid' : '' }}" name='EName' value="{{ old('EName') }}"   autofocus>
    
        @if ($errors->has('EName'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('EName') }}</strong>
            </span>
        @endif
    </div>
    </div>
    
    
    <div class="form-group row">
        <label for='BDate' class="col-md-4 col-form-label text-md-right">@lang('messages.BDate') </label>
        
        <div class="col-md-6">
            <input id='BDate' type='date' class="form-control{{ $errors->has('BDate') ? ' is-invalid' : '' }}" name='BDate'  >
        
            @if ($errors->has('BDate'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('BDate') }}</strong>
                </span>
            @endif
        </div>
        </div>
    
    
        <div class="form-group row">
            <label for='Socialstatus' class="col-md-4 col-form-label text-md-right">@lang('messages.Socialstatus') </label>
        
            <div class="col-md-6">
                <select id='Socialstatus'  class="form-control{{ $errors->has('Socialstatus') ? ' is-invalid' : '' }}" name='Socialstatus' >
                    <option value="3" selected> --@lang('messages.select')  @lang('messages.Socialstatus')--</option>
                    <option value="1">أعزب</option>
                    <option value="2">متزوجل</option>
                    <option value="3">مطلق </option>
                    <option value="4">مترمل</option>
                </select>
                @if ($errors->has('Socialstatus'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('Socialstatus') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        
    
        
    
    
        <div class="form-group row">
            <label for='passportID' class="col-md-4 col-form-label text-md-right">@lang('messages.passportID') </label>
            
            <div class="col-md-6">
                <input id='passportID' type="text" class="form-control{{ $errors->has('passportID') ? ' is-invalid' : '' }}" name='passportID' value="{{ old('passportID') }}"   autofocus>
            
                @if ($errors->has('passportID'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('passportID') }}</strong>
                    </span>
                @endif
            </div>
            </div>   
        
    <div class="form-group row">
        <label for='passportEDate' class="col-md-4 col-form-label text-md-right">@lang('messages.passportEDate') </label>
        
        <div class="col-md-6">
            <input id='passportEDate' type='date' class="form-control{{ $errors->has('passportEDate') ? ' is-invalid' : '' }}" name='passportEDate'  >
        
            @if ($errors->has('passportEDate'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('passportEDate') }}</strong>
                </span>
            @endif
        </div>
        </div>
        <div class="form-group row">
            <label for='FinancialNumber' class="col-md-4 col-form-label text-md-right">@lang('messages.FinancialNumber') </label>
            
            <div class="col-md-6">
                <input id='FinancialNumber' type="number" class="form-control{{ $errors->has('FinancialNumber') ? ' is-invalid' : '' }}" name='FinancialNumber' value="{{ old('FinancialNumber') }}"  >
            
                @if ($errors->has('FinancialNumber'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('FinancialNumber') }}</strong>
                    </span>
                @endif
            </div>
            </div>
    
    <div class="form-group row">
    <label for='ResidencyNumber' class="col-md-4 col-form-label text-md-right">@lang('messages.ResidencyNumber') </label>
    
    <div class="col-md-6">
        <input id='ResidencyNumber' type="number" class="form-control{{ $errors->has('ResidencyNumber') ? ' is-invalid' : '' }}" name='ResidencyNumber' value="{{ old('ResidencyNumber') }}"  >
    
        @if ($errors->has('ResidencyNumber'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('ResidencyNumber') }}</strong>
            </span>
        @endif
    </div>
    </div>
    
    <div class="form-group row">
    <label for='ExpiryDate' class="col-md-4 col-form-label text-md-right">@lang('messages.ExpiryDate') </label>
    
    <div class="col-md-6">
        <input id='ExpiryDate' type='date' class="form-control{{ $errors->has('ExpiryDate') ? ' is-invalid' : '' }}" name='ExpiryDate'  >
    
        @if ($errors->has('ExpiryDate'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('ExpiryDate') }}</strong>
            </span>
        @endif
    </div>
    </div>
    
    
    
    <div class="form-group row">
        <label for='RenewalDate' class="col-md-4 col-form-label text-md-right">@lang('messages.RenewalDate') </label>
        
        <div class="col-md-6">
            <input id='RenewalDate' type='date' class="form-control{{ $errors->has('RenewalDate') ? ' is-invalid' : '' }}" name='RenewalDate'  >
        
            @if ($errors->has('RenewalDate'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('RenewalDate') }}</strong>
                </span>
            @endif
        </div>
        </div>
    
        
     
    
    
    <div class="form-group row">
        <label for='ActualJob' class="col-md-4 col-form-label text-md-right">@lang('messages.ActualJob') </label>
    
        <div class="col-md-6">
            <select id='ActualJob'  class="form-control{{ $errors->has('ActualJob') ? ' is-invalid' : '' }}" name='ActualJob' >
                <option value="3" selected> --@lang('messages.select')  @lang('messages.ActualJob')--</option>
                @foreach ($Jobs as $Job)
                  <option value="{{$Job->jID}}">{{$Job->jobTitle}}</option>
                @endforeach
            </select>
            @if ($errors->has('ActualJob'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('ActualJob') }}</strong>
                </span>
            @endif
        </div>
    </div>
    
    
    
    <div class="form-group row">
        <label for='ContractJob' class="col-md-4 col-form-label text-md-right">@lang('messages.ContractJob') </label>
    
        <div class="col-md-6">
            <select id='ContractJob'  class="form-control{{ $errors->has('ContractJob') ? ' is-invalid' : '' }}" name='ContractJob' >
                <option value="3" selected> --@lang('messages.select')  @lang('messages.ContractJob')--</option>
                @foreach ($Jobs as $Job)
                  <option value="{{$Job->jID}}">{{$Job->jobTitle}}</option>
                @endforeach
            </select>
            @if ($errors->has('ContractJob'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('ContractJob') }}</strong>
                </span>
            @endif
        </div>
    </div>
    
    
    
    
    
    <div class="form-group row">
        <label for='NID' class="col-md-4 col-form-label text-md-right">@lang('messages.NID') </label>
    
        <div class="col-md-6">
            <select id='NID'  class="form-control{{ $errors->has('NID') ? ' is-invalid' : '' }}" name='NID' >
                <option value="3" selected> --@lang('messages.select')  @lang('messages.NID')--</option>
                @foreach ($Nationalitys as $Nationality)
                  <option value="{{$Nationality->NID}}">{{$Nationality->Nationality}}</option>
                @endforeach
            </select>
            @if ($errors->has('NID'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('NID') }}</strong>
                </span>
            @endif
        </div>
    </div>
    
    <div class="form-group row">
        <label for='EID' class="col-md-4 col-form-label text-md-right">@lang('messages.EID') </label>
    
        <div class="col-md-6">
            <select id='EID'  class="form-control{{ $errors->has('EID') ? ' is-invalid' : '' }}" name='EID' >
                <option value="3" selected> --@lang('messages.select')  @lang('messages.EID')--</option>
                @foreach ($Educationals as $Educational)
                  <option value="{{$Educational->EID}}">{{$Educational->Educational}}</option>
                @endforeach
            </select>
            @if ($errors->has('EID'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('EID') }}</strong>
                </span>
            @endif
        </div>
    </div>
    
    <div class="form-group row">
        <label for='LicenseType' class="col-md-4 col-form-label text-md-right">@lang('messages.LicenseType') </label>
    
        <div class="col-md-6">
            <select id='LicenseType'  class="form-control{{ $errors->has('LicenseType') ? ' is-invalid' : '' }}" name='LicenseType' >
                <option value="3" selected> --@lang('messages.select')  @lang('messages.LicenseType')--</option>
                @foreach ($LicenseTypes as $LicenseType)
                  <option value="{{$LicenseType->LicenseID}}">{{$LicenseType->LicenseType}}</option>
                @endforeach
            </select>
            @if ($errors->has('LicenseType'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('LicenseType') }}</strong>
                </span>
            @endif
        </div>
    </div>
    
    
    <div class="form-group row">
        <label for='LicenseID' class="col-md-4 col-form-label text-md-right">@lang('messages.LicenseID') </label>
    
        <div class="col-md-6">
            <input id='LicenseID' type="number" class="form-control{{ $errors->has('LicenseID') ? ' is-invalid' : '' }}" name='LicenseID' value="{{ old('LicenseID') }}"  >
            @if ($errors->has('LicenseID'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('LicenseID') }}</strong>
                </span>
            @endif
        </div>
    </div>
    
    
    
    <div class="form-group row">
        <label for='LicenseEDate' class="col-md-4 col-form-label text-md-right">@lang('messages.LicenseEDate') </label>
        
        <div class="col-md-6">
            <input id='LicenseEDate' type='date' class="form-control{{ $errors->has('LicenseEDate') ? ' is-invalid' : '' }}" name='LicenseEDate'  >
        
            @if ($errors->has('LicenseEDate'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('LicenseEDate') }}</strong>
                </span>
            @endif
        </div>
        </div>
    
        <div class="form-group row">
            <label for='TuvType' class="col-md-4 col-form-label text-md-right">@lang('messages.TuvType') </label>
        
            <div class="col-md-6">
                <select id='TuvType'  class="form-control{{ $errors->has('TuvType') ? ' is-invalid' : '' }}" name='TuvType' >
                    <option value="3" selected> --@lang('messages.select')  @lang('messages.TuvType')--</option>
                    @foreach ($TUVs as $TUV)
                      <option value="{{$TUV->TID}}">{{$TUV->TUV}}</option>
                    @endforeach
                </select>
                @if ($errors->has('TuvType'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('TuvType') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        
        
    <div class="form-group row">
        <label for='TuvID' class="col-md-4 col-form-label text-md-right">@lang('messages.TuvID') </label>
    
        <div class="col-md-6">
            <input id='TuvID' type="number" class="form-control{{ $errors->has('TuvID') ? ' is-invalid' : '' }}" name='TuvID' value="{{ old('TuvID') }}"  >
            @if ($errors->has('TuvID'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('TuvID') }}</strong>
                </span>
            @endif
        </div>
    </div>
    
    
    
        <div class="form-group row">
            <label for='TuvEDate' class="col-md-4 col-form-label text-md-right">@lang('messages.TuvEDate') </label>
            
            <div class="col-md-6">
                <input id='TuvEDate' type='date' class="form-control{{ $errors->has('TuvEDate') ? ' is-invalid' : '' }}" name='TuvEDate'  >
            
                @if ($errors->has('TuvEDate'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('TuvEDate') }}</strong>
                    </span>
                @endif
            </div>
            </div>
        
    
    <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    @lang('messages.Save')  
                </button>
            </div>
        </div>
    