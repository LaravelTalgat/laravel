@extends('admin.layouts.layout',['title'=>'Update Private Person'])

@section('content')

<form   action="{{route('people.update',['person'=>$person->id])}}" method='POST'>
    @csrf
    @method('PUT')
    <div class="card-body">
      <div class="form-group">
        <label for="number">Telephone number</label>
        <input type="text" class="form-control" id="number"  name='number' placeholder="Enter telephone number"
        value="{{ $person->number }}">
      </div>
      <div class="form-group">
        <label for="first_name">First name</label>
        <input type="text" class="form-control" id="first_name" name='first_name' placeholder="Enter first name"
        value="{{ $person->first_name }}">
      </div>
      <div class="form-group">
        <label for="middle_name">Middle name</label>
        <input type="text" class="form-control" id="middle_name" name='middle_name' placeholder="Enter middle number"
        value="{{ $person->middle_name }}">
      </div>
      <div class="form-group">
        <label for="last_name">Last name</label>
        <input type="text" class="form-control" id="last_name" name='last_name' placeholder="Enter last number"
        value="{{ $person->last_name }}">
      </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection
