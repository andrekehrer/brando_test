@extends('layouts.principal')

@section('content')


<div class="bgimg-1">
  <!-- <div class="caption"> -->
  <div class="l50">
    <div class="content_red">
     <div class="t_brando">Brando Travel</div>
     <div class="red_content">
       <form id="search-form" class="form_search">
         <div class="control-group">
          <label class="control-label" for="name">Starting postcode</label>
          <div class="controls">
           <input type="text" class="form-control" name="from" id="from">
         </div>
       </div>

       <div class="control-group">
        <label class="control-label" for="subject">Destination postcode</label>
        <div class="controls">
         <input type="text" class="form-control" name="to" id="to" >
       </div>
     </div>
   </div>
   <div class="form-actions" style="margin:20px 0 0 0;">
    <button class="search_btn" id="search" name="search_btn" >Search</button>
  </div>
</div>
</form>
</div>
<div class="r50">
  <div class="inside_content">
    <div>Your walk to <span class="ywt" ></span></div>
    <div class="row">
      <div class="date"></div>
      <div class="start_time"></div>
      <div class="end_time"></div>
      <div class="duration"></div>
    </div><br>
    <div class="row"><br>
      <div class="direct">Directions</div>
      <div class="table">
        <table id="table_result">
        </table>
      </div>
    </div>
  </div>


</div>
</div>
<!-- </div> -->



@stop