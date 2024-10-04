@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Payments Page</div>
  <div class="card-body">

    <form action="{{ url('payments') }}" method="post">
      {!! csrf_field() !!}
      
      <!-- Enrollment No. Field -->
      <label>Enrollment No.</label></br>
      <select name="enrollment_id" id="enrollment_id" class="form-control" required>
        @foreach($enrollments as $id => $enroll_no)
          <option value="{{ $id }}">{{ $enroll_no }}</option>
        @endforeach
      </select></br>

      <!-- Paid Date Field -->
      <label>Paid Date</label></br>
      <input name="paid_date" id="paid_date" class="form-control" type="date" required></br>

      <!-- Amount Field -->
      <label>Amount</label></br>
      <input type="text" name="amount" id="amount" class="form-control" required></br>
      
      <!-- Submit Button -->
      <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
