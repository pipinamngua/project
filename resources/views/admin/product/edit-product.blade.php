@extends('layouts.layout-admin')
@section('main')
<div class="row mt">
  <div class="col-lg-6">
   <div class="form-panel">
     <h4 class="mb"><i class="fa fa-angle-right"></i> Chỉnh sửa Sản Phẩm</h4>

     {!!  Form::model($product,['method'=>'PATCH','url'=>['admin/product/',$product->id],'class'=>'form-horizontal style-form','files'=>true])  !!}
     <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Name</label>
      <div class="col-sm-10">
        {!!  Form::text('name',$product->name,['class'=>'form-control'])  !!}
        {!! $errors->first('name','<p style="color:red">:message</p>') !!}
      </div>


    </div>

    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Price</label>
      <div class="col-sm-10">
        {!!  Form::text('price',$product->price,['class'=>'form-control'])  !!}
      </div>
      {!!  $errors->first('price','<p style="color:red">:message</p>') !!}
    </div>

    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Discount</label>
      <div class="col-sm-10">
        {!!  Form::text('discount',$product->discount,['class'=>'form-control'])  !!}
      </div>
      {!!  $errors->first('discount','<p style="color:red">:message</p>') !!}
    </div>

    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Count</label>
      <div class="col-sm-10">
        {!!  Form::text('count',$product->count,['class'=>'form-control'])  !!}
      </div>
      {!!  $errors->first('count','<p style="color:red">:message</p>') !!}
    </div>

    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Description</label>
      <div class="col-sm-10">
        {!!  Form::textarea('description',$product->description,['class'=>'form-control','style'=>'height:100px'])  !!}
      </div>
      {!!  $errors->first('description','<p style="color:red">:message</p>') !!}
    </div>

    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Content</label>
      <div class="col-sm-10">
        {!!  Form::textarea('content',$product->content,['class'=>'form-control','style'=>'height:100px'])  !!}
      </div>
      {!!  $errors->first('content','<p style="color:red">:message</p>') !!}
    </div>

    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Trạng thái sản phẩm</label>
      <div class="col-sm-10">
        {!! Form::select('status',['0'=>'Yes','1'=>'No'],$product->status, ['placeholder' => 'Pick a status...']) !!}
      </div>
      {!!  $errors->first('status','<p style="color:red">:message</p>') !!}
    </div>

    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Thumbnail</label>
      <div class="col-sm-10">
        {!!  Form::file('thumbnail',['class'=>'form-control'])  !!}
      </div>
      {!!  $errors->first('thumbnail','<p style="color:red">:message</p>') !!}
    </div>

    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Category_id</label>
      <div class="col-sm-10">
        {!! Form::select('categoryId',['1'=>'Phone','2'=>'Laptop','3'=>'TV'],$product->category_id, ['placeholder' => 'Pick a category_id...']) !!}
      </div>
      {!!  $errors->first('categoryId','<p style="color:red">:message</p>') !!}
    </div>

    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Config_id</label>
      <div class="col-sm-10">
        {!! Form::select('configId',['1'=>'Phone','2'=>'Laptop','3'=>'TV'],$product->config_id, ['placeholder' => 'Pick a config_id...']) !!}
      </div>
      {!!  $errors->first('configId','<p style="color:red">:message</p>') !!}
    </div>
    @if($product->category_id == 1)
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">ID_Config</label>
      <div class="col-sm-10">
        <input type="text" name="id_config" value="{{ $config->id }}">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Condition</label>
      <div class="col-sm-10">
        <input type="text" name="condition" value="{{ $config->condition }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Warranty Period</label>
      <div class="col-sm-10">
        <input type="text" name="warranty" value="{{ $config->warranty_period }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Network Connection</label>
      <div class="col-sm-10">
        <input type="text" name="network" value="{{ $config->network_connections }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Tablet Connection</label>
      <div class="col-sm-10">
        <input type="text" name="tablet" value="{{ $config->tablet_connection }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Color</label>
      <div class="col-sm-10">
        <input type="text" name="color" value="{{ $config->color }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Screen size</label>
      <div class="col-sm-10">
        <input type="text" name="screen" value="{{ $config->screen_size }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Model</label>
      <div class="col-sm-10">
        <input type="text" name="model" value="{{ $config->model }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Operating system version</label>
      <div class="col-sm-10">
        <input type="text" name="osv" value="{{ $config->operating_system_version }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Sim slot</label>
      <div class="col-sm-10">
        <input type="text" name="sim" value="{{ $config->sim_slots }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Ram memory</label>
      <div class="col-sm-10">
        <input type="text" name="ram" value="{{ $config->ram_memory }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Product size</label>
      <div class="col-sm-10">
        <input type="text" name="product" value="{{ $config->product_size }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Expendable Memory</label>
      <div class="col-sm-10">
        <input type="text" name="em" value="{{ $config->expandable_memory }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Phone Features</label>
      <div class="col-sm-10">
        <input type="text" name="pf" value="{{ $config->phone_features }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Storage Capacity</label>
      <div class="col-sm-10">
        <input type="text" name="sc" value="{{ $config->storage_capacity }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Screen Resolution</label>
      <div class="col-sm-10">
        <input type="text" name="sr" value="{{ $config->screen_type }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Screen type</label>
      <div class="col-sm-10">
        <input type="text" name="st" value="{{ $config->screen_type }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Core</label>
      <div class="col-sm-10">
        <input type="text" name="core" value="{{ $config->core }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Weight</label>
      <div class="col-sm-10">
        <input type="text" name="weight" value="{{ $config->weight }}">
      </div>
    </div>
    @elseif($product->category_id == 2)
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">ID_Config</label>
      <div class="col-sm-10">
        <input type="text" name="id_config" value="{{ $config->id }}">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Processor</label>
      <div class="col-sm-10">
        <input type="text" name="processor" value="{{ $config->processor }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Operating system</label>
      <div class="col-sm-10">
        <input type="text" name="os" value="{{ $config->operating_system }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Memory</label>
      <div class="col-sm-10">
        <input type="text" name="laptopmemory" value="{{ $config->memory }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Hard drive</label>
      <div class="col-sm-10">
        <input type="text" name="drive" value="{{ $config->hard_drive }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Video card</label>
      <div class="col-sm-10">
        <input type="text" name="card" value="{{ $config->video_card }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Display</label>
      <div class="col-sm-10">
        <input type="text" name="display" value="{{ $config->display }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Primary battery</label>
      <div class="col-sm-10">
        <input type="text" name="laptopbattery" value="{{ $config->primary_battery }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Warranty</label>
      <div class="col-sm-10">
        <input type="text" name="laptopwarranty" value="{{ $config->warranty }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Ports</label>
      <div class="col-sm-10">
        <input type="text" name="ports" value="{{ $config->ports }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Slots</label>
      <div class="col-sm-10">
        <input type="text" name="slots" value="{{ $config->slots }}">
      </div>
    </div>
    @elseif($product->category_id == 3)
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">ID_Config</label>
      <div class="col-sm-10">
        <input type="text" name="id_config" value="{{ $config->id }}">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Screen size</label>
      <div class="col-sm-10">
        <input type="text" name="tvscreen" value="{{ $config->screen_size }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Resolution</label>
      <div class="col-sm-10">
        <input type="text" name="tvresolution" value="{{ $config->resolution }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Processor</label>
      <div class="col-sm-10">
        <input type="text" name="tvprocessor" value="{{ $config->processor }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Wifi-built-in</label>
      <div class="col-sm-10">
        <input type="text" name="wifi" value="{{ $config->wifi_built_in }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Web browser</label>
      <div class="col-sm-10">
        <input type="text" name="web" value="{{ $config->web_browser }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Speaker System</label>
      <div class="col-sm-10">
        <input type="text" name="speaker" value="{{ $config->speaker_system }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">HDMI</label>
      <div class="col-sm-10">
        <input type="text" name="hdmi" value="{{ $config->hdmi }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">USB</label>
      <div class="col-sm-10">
        <input type="text" name="usb" value="{{ $config->usb }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Weight</label>
      <div class="col-sm-10">
        <input type="text" name="tvweight" value="{{ $config->weight }}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Warranty</label>
      <div class="col-sm-10">
        <input type="text" name="warranty" value="{{ $config->warranty }}">
      </div>
    </div>
    @endif 
    <div class="form-group">
      {!!  Form::submit('Update',['class'=>'btn btn-primary']) !!}
      {!!  Form::reset('Reset',['class'=>'btn btn-primary']) !!}
    </div>

    {!!  Form::close()  !!}
  </div> 
</div><!-- col-lg-12-->      	
</div><!-- /row -->
@endsection