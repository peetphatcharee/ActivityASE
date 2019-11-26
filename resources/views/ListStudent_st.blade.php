@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">รายการนักศึกษา : {{$name->Ac_Name}}</div>

                <div class="card-body">
               
            
    <div style="overflow:auto">   
                   <br> <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">ชื่อนักศึกษา</th>
                          <th>รหัสนักศึกษา</th>
                          <th>เวลาลงชื่อ</th>
                          <th></th>
                         
                          <!-- @if (auth::user() != '')
                          <th></th>
                          <th></th>
                          @endif -->

                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 0; ?>
                        @foreach($Ac as $key)
                        <?php $i++?>

                        <tr>
                          <th scope="row">{{$i}}</th>
                          <td>{{$key->St_ID}} </td>
                          <td>{{$key->St_Name}}</td>
                          <td>{{$key->created_at}}</td>
                          
                           
                           </tr>
                        @endforeach

                     </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
