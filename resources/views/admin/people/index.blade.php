@extends('admin.layouts.layout',['title'=>'Person'])
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Записи</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('logout')}}">Logout</a></li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
<div class="card-body">
    <a href="{{ route('people.create') }}" class="btn btn-primary mb-3">Добавить запись</a>
    @if (count($people))
    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12">
    <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
      <thead>
      <tr>
        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" >Номер телефона</th>
        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" >Фамилия</th>
        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" >Имя</th>
        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" >Отчество</th>
        <th>Actions</th>
      </tr>
      </thead>
      <tbody>
        @foreach($people as $person)
        <tr class="odd">
            <td>{{$person['number']}}</td>
            <td>{{$person['first_name']}}</td>
            <td>{{$person['middle_name']}}</td>
            <td>{{$person['last_name']}}</td>
            <td>
                <a href="{{ route('people.edit', ['person' => $person->id]) }}"
                   class="btn btn-info btn-sm float-left mr-1">
                    <i class="fas fa-pencil-alt"></i>
                </a>

                <form
                    action="{{ route('people.destroy', ['person' => $person->id]) }}"
                    method="post" class="float-left">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Подтвердите удаление')">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </form>
            </td>
        </tr></tbody>
        @endforeach
    </table>
  </div>
  @else
    <p>Записей пока нет...</p>
  @endif
</section>
@endsection