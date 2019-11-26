@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <?php $i = 0; ?>
                        @foreach($Ac as $key)
                <div class="card-header">รายการกิจกรรม :{{$key->Ac_Name}}</div>

                <div class="card-body">
               
                <input type="hidden" value="{{$key->Ac_ID}}" name="Ac_ID">
    <div style="overflow:auto">   
                   <br> <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">รายละเอียดกิจกรรม</th>
                          <th >นักศึกษาที่เข้าร่วม</th>
                          <th></th>
                          <th></th>
                         
                          @if (auth::user() != '')
                          <th></th>
                          <th></th>
                          @endif

                        </tr>
                      </thead>
                      <tbody>
                        
                        <?php $i++?>

                        <tr>
                          <th scope="row">{{$i}}</th>
                          <td>
                          โครงการ/กิจกรรม &nbsp;:&nbsp;{{$key->Ac_Name}} 
                          <br>กิจกรรมด้าน &nbsp;:&nbsp;{{$key->Ac_Type}} 
                          <br>สถานที่จัดกิจกรรม &nbsp;:&nbsp;{{$key->Ac_location}} 
                          <br>วันที่จัดกิจกรรม &nbsp;:&nbsp;{{$key->Ac_DateStart}} &nbspถึง&nbsp {{$key->Ac_DateFinish}}
                          <br>เวลาจัดกิจกรรม &nbsp;:&nbsp;{{$key->Ac_TimeStart}} &nbspถึง&nbsp {{$key->Ac_TimeFinish}}
                          <br>จำนวนที่รับ &nbsp;:&nbsp;{{$key->Ac_member}} 
                          <br>ผู้รับผิดชอบกิจกรรม &nbsp;:&nbsp;{{$key->Ac_Organizer}} 
                          <br>เบอร์โทร &nbsp;:&nbsp;{{$key->Ac_Tel}} 
                          <br>E-mail &nbsp;:&nbsp;{{$key->Ac_Email}} 
                          <br>Facebook &nbsp;:&nbsp;{{$key->Ac_Facbook}}  
                          </td>
                         
                         <td><a href="./StudentList{{$key->Ac_ID}}" class="btn btn-outline-info">รายชื่อนักศึกษา</a></td>
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
