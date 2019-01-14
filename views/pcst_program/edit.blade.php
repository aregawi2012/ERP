@extends('includes.master_layout');

@section('content')
<div class="panel panel-primary">
        <div class="panel-heading">
        Edit Program
        <a class="pull-right btn btn-success btn-sm" href="{{route('pcst_program.index')}}">
          
          Back to List
        </a>
      </div>

          <div class="panel-body">
         	<form method="POST" action="{{route('pcst_program.update',[$pcst_program->id])}}">
         		 {{ csrf_field() }}
          		<input type="hidden" name="_method" value="PUT">
          		
          		   <div class="form-group row {{$errors->has('name') ? 'has-error':''}}">
                    <label for="name" class="col-sm-3 col-form-label">Program Name<span class="required">*</span></label>
                    <div class="col-sm-9">
                       <input 
                        placeholder="Enter program Name" 
                        required 
                        name="name"
                        id="name"
                        spellcheck="false"
                        class="form-control"
                    	value="{{$pcst_program->name}}"
                           value="{{old('name')}}" 
                        /> 
                             <span class="text-danger">{{$errors->first('name')}}</span>
                    </div>
                    
                </div>


          		 <div class="form-group row {{$errors->has('years') ? 'has-error':''}}">
                    <label for="years" class="
                    col-sm-3 col-form-label">Program's Duration<span class="required">*</span></label>
                    <div class="col-sm-9">
                        <input 
                        placeholder="Enter program's duration" 
                        required 
                        name="years"
                        id="years"
                        spellcheck="false"
                        class="form-control"
                        value="{{$pcst_program->years}}"
                            value="{{old('years')}}" 
                        />
                          <span class="text-danger">{{$errors->first('years')}}</span>
                    </div>  
                </div>

                <div class="form-group row {{$errors->has('credit_hours') ? 'has-error':''}}">
                    <label for="credit_hours" class="
                    col-sm-3 col-form-label">Program's Credit Hours<span class="required">*</span></label>
                    <div class="col-sm-9">
                        <input 
                        placeholder="Enter program's credit hour" 
                        required 
                        name="credit_hours"
                        id="credit_hours"
                        spellcheck="false"
                        class="form-control"
                        value="{{$pcst_program->credit_hours}}"
                            value="{{old('credit_hours')}}" 
                        />
                          <span class="text-danger">{{$errors->first('credit_hours')}}</span>
                    </div>
                  </div>

                  <div class="form-group row {{$errors->has('pcst_department_id') ? 'has-error':''}}">
                    <label for="pcst_department_id" class="
                    col-sm-3 col-form-label">Program's Department<span class="required">*</span></label>
                    <div class="col-sm-9">
                          <select name="pcst_department_id" id="pcst_department_id" class="form-control"  value="{{old('pcst_department_id')}}"  >
                              @foreach($pcst_department_list as $department)
                                    <option value="{{$department->id}} @if($department->id==$pcst_program->pcst_department->id) selected @endif ">
                                      {{$department->department_name}}
                                    </option>
                              @endforeach
                          </select>
                        
                             <span class="text-danger">{{$errors->first('pcst_department_id')}}</span>
                    </div>
                    
                </div

          		<div class="form-group">
          			<div class=" col-lg-5 offset-lg-5 col-sm-8 col-sm-offset-4">
          			<input type="submit" class="btn btn-primary" value="Edit Program">
          		</div>
          		</div>

          	</form>

          </div>
          		
      </div>

      @endsection
