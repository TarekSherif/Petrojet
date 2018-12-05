

@extends('layouts.index')



@section('CoreContent')
          

<div class="form-group row">
    <label for='EName' class="col-md-4 col-form-label text-md-right"> @lang('messages.EName') </label>
    
    <div class="col-md-6">
        <input id='EName' type="text" class="form-control{{ $errors->has('EName') ? ' is-invalid' : '' }}" name='EName' value="{{old('EName')}}"   autofocus>
    
        @if ($errors->has('EName'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('EName') }}</strong>
            </span>
        @endif
    </div>
    </div>
    
@endsection
@section('ScriptContent')
     


<script type="text/javascript">
$(function () {

      $('#EName').autocomplete({
           source: '{{url("/")}}/api/ListOfACEmp?_token={{ csrf_token() }}',
           "position": { my: "center top", at: "center bottom"},
           select: function (e, ui) {
               
                LoadEmpAbsence(ui.item.EmpID);
               
           }
       }).data("autocomplete")._renderItem = function (ul, item) {
      
                  return $( "<li></li>" )
                      .append(
                        `<a >
                          <div class="row" > 
                            <div class="col-xs-6"> 
                                  <strong> <i class="fa fa-address-card-o"></i>:</strong>`+item.EmpID+`
                              </div>
                              <div class="col-xs-6"> 
                                    <strong><i class="fa fa-address-card-o"></i> :</strong>`+item.EName+`
                              </div>
                            <div class="col-xs-6"> 
                                  <strong> <i class="fa fa-address-card-o"></i>:</strong>`+item.passportID+`
                              </div>
                              <div class="col-xs-6"> 
                                    <strong><i class="fa  fa-address-card-o"></i> :</strong>`+item.ResidencyNumber+`
                              </div>
                       
                            </div>
                          </a>       ` )
                      .appendTo( ul );
                  };
       
    
    });
 
function LoadEmpAbsence(EmpID) {
    
    $('#jtableContainer').jtable({
            title: '<i class="fa fa-file-text  " style="color: orange;" aria-hidden="true"></i>	 @lang("messages.Absence")',
            paging: true,
            pageSize: 10,
            sorting: true,
            defaultSorting: 'ID ASC',
            columnResizable: true,
            columnSelectable: true,
            saveUserPreferences: true,
            //openChildAsAccordion: true, //Enable this line to show child tabes as accordion style
            actions: {
                listAction:   '{{url("/")}}/api/ListOfAbsences?_token={{ csrf_token() }}&EmpID='+EmpID,
                createAction: '{{url("/")}}/api/CreateAbsence?_token={{ csrf_token() }}',
                updateAction: '{{url("/")}}/api/UpdateAbsence?_token={{ csrf_token() }}',
                deleteAction: '{{url("/")}}/api/DeleteAbsence?_token={{ csrf_token() }}'
            }
            ,@include('layouts.inc.JtableToolbar'),
            fields: {
                
                ID: {
                    key: true,
                    list: false
				},
				absenceDate: {
						title:'@lang("messages.absenceDate")',
							visibility: 'visible',
							width: '10%',
						input: function (data) {
								if (data.record) {
									return '<input type="date"  placeholder=" @lang("messages.absenceDate")"   class=" form-control validate[required]"   autocomplete="off"   name="absenceDate"   value="' + data.record.absenceDate + '" />';
								} else {
									return '<input type="date"  placeholder=" @lang("messages.absenceDate")"     class="form-control validate[required]"  autocomplete="off"   name="absenceDate"     />';
								}
							}  
					},

                EmpID: {
                    type: 'hidden',
					defaultValue: EmpID,
					
				},
				
            }
            @include('layouts.inc.JtableEvent')
        });
 
        //Load student list from server
        $('#jtableContainer').jtable('load');
 
}

</script>


@endsection


{{-- 
listAction:   '{{url("/")}}/api/ListOfAbsences?_token={{ csrf_token() }}&EmpID='+EmpID,
                @if ($Permission["InsertData"])
                createAction: '{{url("/")}}/api/CreateAbsence?_token={{ csrf_token() }}',
                @endif
                @if ($Permission["UpdateData"])
                updateAction: '{{url("/")}}/api/UpdateAbsence?_token={{ csrf_token() }}',
				@endif
                @if ($Permission["DeleteData"])
                deleteAction: '{{url("/")}}/api/DeleteAbsence?_token={{ csrf_token() }}'
                @endif --}}
