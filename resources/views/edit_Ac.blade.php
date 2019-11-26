@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('แก้ไขกิจกรรม') }}</div>

                <div class="card-body">
                    <form method="POST" action="update" >
                    <input type="hidden" name ="Ac_ID" value="{{$activity->Ac_ID}}" >
                    @csrf
                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">โครงการ/กิจกรรม</label>

                            <div class="col-md-6">
                                <input id="Ac_Name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_Name"  value="{{$activity->Ac_Name}}"  required autofocus>
                            </div>
                    </div>

                    <div class="form-group row">
                        <label for="price_id" class="col-md-4 col-form-label text-md-right">กิจกรรมด้าน</label>
                            <div class="col-md-6">
                                <!-- <input id="price_id" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="price_id" required> -->
                                <select class="form-control" name="Ac_Type" value="{{$activity->Ac_Type}}">
                                <option value="ด้านที่ 1 การพัฒนาศักยภาพตนเอง">ด้านที่ 1 การพัฒนาศักยภาพตนเอง</option>
                                <option value="ด้านที่ 2 การธำรงไว้ซึ่งสถาบันชาติ ศาสนา พระมหากษัตริย์ เสริมสร้างจิตสำนึกความภาคภูมิใจในมหาวิทยาลัยและคณะ">ด้านที่ 2 การธำรงไว้ซึ่งสถาบันชาติ ศาสนา พระมหากษัตริย์ เสริมสร้างจิตสำนึกความภาคภูมิใจในมหาวิทยาลัยและคณะ</option>
                                <option value="ด้านที่ 3 การเสริมสร้างจิตอาสา และจิตสาธารณะ">ด้านที่ 3 การเสริมสร้างจิตอาสา และจิตสาธารณะ</option>
                                <option value="ด้านที่ 4 การสร้างคุณธรรมจริยธรรมและศีลธรรม">ด้านที่ 4 การสร้างคุณธรรมจริยธรรมและศีลธรรม</option>
                                <option value="ด้านที่ 5 การอนุรักษ์ศิลปวัฒนธรรมไทยและภูมิปัญญาท้องถิ่น">ด้านที่ 5 การอนุรักษ์ศิลปวัฒนธรรมไทยและภูมิปัญญาท้องถิ่น</option>
                               
                                </select>

                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">วันที่จัดกิจกรรม</label>

                            <div class="col-md-3">
                                <input id="product_name" type="date" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_DateStart"  value="{{$activity->Ac_DateStart}}" required autofocus>
                            </div>
                                  ถึง
                                  <div class="col-md-3">
                                <input id="product_name" type="date" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_DateFinish"  value="{{$activity->Ac_DateFinish}}" required autofocus>
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">เวลาจัดกิจกรรม</label>

                            <div class="col-md-3">
                                <input id="product_name" type="time" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_TimeStart"  value="{{$activity->Ac_TimeStart}}"  required autofocus>
                            </div>
                                  ถึง
                                  <div class="col-md-3">
                                <input id="product_name" type="time" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_TimeFinish"  value="{{$activity->Ac_TimeFinish}}" required autofocus>
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">จำนวนที่รับ</label>

                            <div class="col-md-6">
                                <input id="product_name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_member"  value="{{$activity->Ac_member}}" required autofocus>
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">สถานที่จัดกิจกรรม</label>

                            <div class="col-md-6">
                                <input id="product_name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_location"  value="{{$activity->Ac_location}}" required autofocus>
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">ผู้รับผิดชอบกิจกรรม</label>

                            <div class="col-md-6">
                                <input id="product_name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_Organizer"  value="{{$activity->Ac_Organizer}}" required autofocus>
                            </div>
                    </div>
                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">เบอร์โทร</label>

                            <div class="col-md-6">
                                <input id="product_name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_Tel"  value="{{$activity->Ac_Tel}}" required autofocus>
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">E-mail</label>

                            <div class="col-md-6">
                                <input id="product_name" type="Email" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_Email"  value="{{$activity->Ac_Email}}" required autofocus>
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Facebook</label>

                            <div class="col-md-6">
                                <input id="product_name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_Facbook"  value="{{$activity->Ac_Facbook}}" required autofocus>
                            </div>
                    </div>

                    <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                {{ __('บันทึก') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
