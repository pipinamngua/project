@extends('layouts.layout-admin')
@section('main')
<div class="row mt site-min-height">
              <div class="col-lg-6">
                   <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i>Edit {!! $cate->title !!}</h4>
                  
                      {!!  Form::model($cate,['method'=>'PATCH','url'=>['admin/category',$cate->id],'class'=>'form-horizontal style-form','files'=>true]) !!}
                            <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Title</label>
                              <div class="col-sm-10">
                                  {!!  Form::text('name',$cate->name,['class'=>'form-control','placeholder'=>'Input name category...'])  !!}
                                   {!! $errors->first('name','<p style="color:red">:message</p>') !!}
                              </div>
                            </div>

                            <div class="form-group">
                                  {!!  Form::submit('Update',['class'=>'btn btn-primary']) !!}
                                  {!!  Form::reset('Reset',['class'=>'btn btn-primary']) !!}
                            </div>
                          
                      {!!  Form::close()  !!}
                  </div> 
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
@endsection