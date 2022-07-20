
@extends('layouts.main')
@section('content')
<table class="table">
<h1 style="color: black; margin-left: 10px; margin-top:10px">Task Progress Report</h1>
<a href="{{route ('exporttask')}}" class="btn btn-primary"><i class="fas fa-file-excel"></i> Export Excel</a>
  <thead>
    <tr>
                <th>Nama</th>
                <th>Nama Project</th>
                <th>Nilai Project </th>
                <th>Nama Am</th>
                <th>Nama Pm</th>
                <th>Nama Tecnikal</th>
                <th>Status Pekerjaan</th>
    </tr>
  </thead>
  <tbody>

 @foreach($cb as $t)
<tr>
<td>{{$t->name}}</td>
<td>{{$t->name_pro}}</td>
<td>{{$t->nilai_pro}}</td>
<td>{{$t->name_am}}</td>
<td>{{$t->name_pm}}</td>
<td>{{$t->name_tec}}</td>
<td>{{$t->status}}</td>
</tr>
@endforeach

  </tbody>

</table>
@endsection