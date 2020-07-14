<!DOCTYPE html>
<html>
<head>
	<title>MYOL</title>
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
   
	<style type="text/css">
		.box-header {
		    padding: 0px;
		}
		.box-body {
			padding: 0px;
		}
		.box-header .box-title {
			display: block;
		}
		.box-title {
			text-align: center;
		}

		.input-group-addon {
		    min-width:160px;
		    /*min-width:200px;*/
		    /*min-width:220px;*/
		    /*text-align:left;*/
		}
		.alert {
            padding: 2px; 
            margin-bottom: 5px;
        }

        .greenG {
        	background-color: #28a745; color: #FFFFFF;
        }
        .blue {
        	background-color: #007bff; color: #FFFFFF;
        	/*background-color: #59a3ef; color: #FFFFFF;*/
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #3c8dbc;
            border-color: #367fa9;
            padding: 1px 10px;
            color: #fff;
        }

	</style>
</head>
<body>
	<div class="container-fluid">

	    <div class="container">
	        <div class="col-sm-8 col-sm-offset-2">
	            @include('flash::message')
	        </div>
	    </div>

		<div class="panel panel-primary">
            <div class="panel-body">
                <div class="">
                    <div class="panel-header">
                        <h3 class="box-title">DoctorKoi CRM <small>Phone Number:</small><code>{{ $phoneNumber }}</code> <small>Agent:</small> <code>{{ $agent }}</code></h3> 
                    </div>
                    <div class="box-body">
                        {!! Form::model($crmLast, ['url' => 'crm', 'method' => 'post']) !!}
        
                        {{-- {!! Form::open(['url' => 'crm', 'method' => 'post', 'class' => '']) !!} --}}
        
                        <input type="hidden" name="phone_number" value="{{ $phoneNumber }}" class="form-control">
                        <input type="hidden" name="agent" value="{{ $agent }}" class="form-control">
        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-group" style="margin-top: 5px;">
                                      <span class="input-group-addon" style="background-color: #1f6e8d; color: #FFFFFF;">Customer Name</span>
                                      {!! Form::text('customer_name', null, ['class' => 'form-control', 'placeholder' => 'Enter Customer Name', 'autocomplete' => 'off']) !!}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group" style="margin-top: 5px;">
                                      <span class="input-group-addon" style="background-color: #1f6e8d; color: #FFFFFF;">Customer Email</span>
                                      {!! Form::text('customer_email', null, ['class' => 'form-control', 'placeholder' => 'Enter Customer Email', 'autocomplete' => 'off']) !!}
                                </div>
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-group" style="margin-top: 5px;">
                                      <span class="input-group-addon" style="background-color: #1f6e8d; color: #FFFFFF;">Address</span>
                                      {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Enter Address', 'autocomplete' => 'off']) !!}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group" style="margin-top: 5px;">
                                      <span class="input-group-addon" style="background-color: #1f6e8d; color: #FFFFFF;">Query Type</span>
                                      {!! Form::select('query_type_id', $queryTypeList, null, ['class' => 'form-control select2', 'placeholder' => 'Select Query Type', 'id' => 'query_type_id','required']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group" style="margin-top: 5px;">
                                    <span class="input-group-addon" style="background-color: #1f6e8d; color: #FFFFFF;">Verbatim</span>
                                    {!! Form::textarea('verbatim', null, ['class' => 'form-control', 'placeholder' => 'Write any verbatim', 'autocomplete' => 'off', 'rows' => 4, 'cols' => 54, 'style' => 'resize:none']) !!}
                              </div>
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4">
                                {!! Form::button('Submit', ['class' => 'btn btn-primary btn-block', 'data-toggle' => 'modal', 'data-target' => '#crm_create', 'style' => 'margin-top: 10px;']) !!}
                            </div>
                            <div class="col-sm-4"></div>
        
                        </div>
                        <div class="modal modal-info fade" id="crm_create">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title">Confirmation Message</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Want to Store CRM Information?</h3>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button> -->
                                        <button type="submit" class="btn btn-outline btn-block">Submit CRM Information</button>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
	        	
	    
	</div>

	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<!-- <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script> -->
	<script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
	<script src="{{ asset('assets/js/select2.full.min.js') }}"></script>

	

	<script type="text/javascript">
		$('#follow_up_date').datepicker({
            format:'yyyy-mm-dd',
            autoclose: true
        });

        
		var masterCatId = '';
        $(function() {
            $('#master_category_id').change(function() {
                var masterCategoryId = $(this).val();
				masterCatId = masterCategoryId;
                getCategory(masterCategoryId);
            });
        });

        function getCategory(masterCategoryId) {
            
            resetField('category_id', 'Select Category Data');
            var url = '{{ url("crm/get-category")}}';
            $.get(url+'?master_category_id='+masterCategoryId, function (response) {
                $.map( response, function( name, id ) {
                    $('#category_id').append('<option value="'+ id +'">' + name + '</option>');
                });
            });
        }

		$(function() {
            $('#category_id').change(function() {
                var categoryId = $(this).val();
                getSubCategory(categoryId);
            });
        });

		function getSubCategory(categoryId) {
            
            resetField('sub_category_id', 'Select Sub Category Data');
            var url = '{{ url("crm/get-sub-category")}}';
            $.get(url+'?category_id='+categoryId, function (response) {
                $.map( response, function( name, id ) {
                    $('#sub_category_id').append('<option value="'+ id +'">' + name + '</option>');
                });
            });
        }

        function resetField(id, placeholder) {
            $('#' + id).empty();
            $('#' + id).append('<option value="">'+ placeholder +'</option>');
        }




        @if(isset($crmLast))

			var mCatId = '{{ $crmLast->master_category_id }}';
			var catId = '{{ $crmLast->category_id }}';

			jQuery.ajaxSetup({async:false});
			
			getCategory(mCatId);
			$('#category_id').val(catId);

			 jQuery.ajaxSetup({async:true});

		@endif

		$(function () {
            $('.select2').select2();
        });

		$(function() {
			$('#query_type_id').change(function(){
				if( $(this).val()==="1" || $(this).val()==="2"){ // id of those query type must be 1 and 2 to be worked
				$("#query-type-field").show()                    // if need to change any query type in the database developer need to change those condition
				}												 // based on id in the database
				else{
				$("#query-type-field").hide()
				}
			});
		});

	</script>
</body>
</html>