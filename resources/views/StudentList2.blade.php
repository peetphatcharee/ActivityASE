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
                          <th>วัน/เวลาลงชื่อ</th>
                          <th></th>
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
                          <td><a href ="edit_st{{$key->id}}_{{$Ac_ID}}" class="btn btn-secondary"><img src="<?php echo asset('img/edit.png' );  ?> " width="20" height="20" >&nbsp;</i>แก้ไข</a></td>
                          <td><a href ="st_del{{$key->id}}_{{$Ac_ID}}" class="btn btn-danger"><img src="<?php echo asset('img/delete.png' );  ?> " width="20" height="20" >&nbsp;ลบ</a></td>   
                           
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
