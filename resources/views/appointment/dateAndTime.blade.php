@extends('../master')
@section('title')
    Date And Time
@endsection
@section('custom-css')
    <link rel="stylesheet" href="css/dateAndTime.css">
@endsection
@section('content')
    <div class="container">
<div class="row">
     <div class="col-sm-10 col-md-offset-1">
        <h3>Date and Time</h3>
        <ul class="pagination">
            <li><a href="#" disabled>Site Location</a></li>
            <li  class="active"><a href="#" disabled>Date and Time</a></li>
            <li><a href="#" disabled>Personal Information</a></li>
            <li><a href="#" disabled>Family Location</a></li>
            <li><a href="#" disabled>Applicant's Information</a></li>
        </ul>

<div class="form-group row">
<div class="col-sm-4">
    <label for="datepicker">Select Date:</label>
<input type="date" name="date" id="datepicker" class="form-control" onchange="showVacant(this.value)">
</div>

<div class="col-sm-6 col-md-offset-2">
   <label for="">Select Date: </label>
   <div class="radio">
    <label id="space"><input type="radio" name="op" id="9-10">09:00 - 10:00</label> <label id="9-10l" for="">Select Date</label>
  </div>
  <div class="radio">
    <label id="space"><input type="radio" name="op" id="10-11">10:00 - 11:00</label> <label id="10-11" for="">Select Date</label>
  </div>
  <div class="radio">
    <label id="space"><input type="radio" name="op" id="11-12">11:00 - 12:00</label> <label id="11-12" for="">Select Date</label>
  </div>
  <div class="radio">
    <label id="space"><input type="radio" name="op" id="13-14">13:00 - 14:00</label> <label id="13-14" for="">Select Date</label>
  </div>
  <div class="radio">
    <label id="space"><input type="radio" name="op" id="14-15">14:00 - 15:00</label> <label id="14-15" for="">Select Date</label>
  </div>
  <div class="radio">
    <label id="space"><input type="radio" name="op" id="15-16">15:00 - 16:00</label> <label id="15-16" for="">Select Date</label>
  </div>
  <div class="radio">
    <label id="space"><input type="radio" name="op" id="16-17">16:00 - 17:00</label> <label id="16-17" for="">Select Date</label>
  </div>
  <div class="radio">
    <label id="space"><input type="radio" name="op" id="17-18">17:00 - 18:00</label> <label id="17-18" for="">Select Date</label>
  </div>
</div>
</div>

     </div>
</div>
    </div>
<?php $slot = DB::table('reservation')->get();?>

<script type="text/javascript">
function showVacant(str) {
  var v = str;
  var rarray = <?php echo json_encode($slot); ?>
 for (let index = 0; index < rarray.length; index++)
 {
      if (str === rarray[index].dateChosen && rarray[index]) {
          // for (let j = 0; j < rarray[index].length; j++) {
          // }


      }

 }


}
</script>
    
@endsection