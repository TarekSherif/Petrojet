<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li class="active"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">

        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane active" id="control-sidebar-settings-tab">
            <form method="post">
                <h3 class="control-sidebar-heading"> @lang("messages.GeneralSettings") </h3>

                <div class="form-group">
                    <label class="control-sidebar-subheading">
              @lang("messages.ShowAllBranchs") 
              <input type="checkbox" class="pull-right" id="ChkBranch" checked>
            </label>
                </div>
                <div class="form-group ">
                    <label>@lang("messages.Branchs") </label>
                    <select class=" form-control " disabled id="selectBranch" name="Branch">
                    <option  selected=selected value=0> @lang("messages.SelectBranch")</option>
                </select>

                </div>

            </form>
        </div>
        <!-- /.tab-pane -->
    </div>
</aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>



<!-- jQuery 3 -->
<script src="{{asset('js/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('js/jquery-ui-1.9.2.min.js')}}" type="text/javascript"></script>


<script src="{{url('/')}}/Template/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="{{url('/')}}/Template/AdminLTE/dist/js/adminlte.js"></script>
@if($jtable)
<script src="{{asset('js/validationEngine/jquery.validationEngine-en.js')}}"></script>
<script src="{{asset('js/validationEngine/jquery.validationEngine.js')}}"></script>
<script src="{{asset('js/datepicker-ar.js')}}"></script>
<script src="{{asset('js/MultiSelect/jquery.multiselect.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.table2excel.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jtable/jquery.jtable.js')}}"></script>
@if(session("lang")=="ar")
<script type="text/javascript" src="{{asset('js/jtable/localization/jquery.jtable.AR.js')}}"></script>
@endif

<script>
    var promptPosition="";
              @if (session("lang")=="ar" )
                  promptPosition=',{promptPosition: "topLeft"}' ;
              @endif

</script>
@endif

<script type="text/javascript">



    $(function () {

              

  
      $('[data-toggle="push-menu"]').on('click', function (e) {
          e.preventDefault();
         
          if ($("body").hasClass('sidebar-collapse')) {
              $(".content,.content-header>h1,.main-header>.navbar").removeClass('margin-50');
          } else {
              $(".content,.content-header>h1,.main-header>.navbar").addClass('margin-50');
          }
          
 
          });

   
       
   });



</script>