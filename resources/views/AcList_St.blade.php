@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">รายการกิจกรรม</div>

                <div class="card-body">
                
                
    <div style="overflow:auto">   
                   <br> <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">รายละเอียดกิจกรรม</th>
                          <th></th>
                          
                          
                         
                          @if (auth::user() != '')
                          <th></th>
                          <th></th>
                          @endif

                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 0; ?>
                        @foreach($Ac as $key)
                        <?php $i++?>

                        <tr>
                          <th scope="row">{{$i}}</th>
                          <td>
                          โครงการ/กิจกรรม :&nbsp;{{$key->Ac_Name}} 
                          <br>วันที่จัดกิจกรรม :&nbsp;{{$key->Ac_DateStart}} &nbspถึง&nbsp {{$key->Ac_DateFinish}}
                          <br> 
                          </td>
                         <td><a href="./St_AcList2{{$key->Ac_ID}}" class="btn btn-outline-info">รายละเอียดเพิ่มเติม</a></td>
                         
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
