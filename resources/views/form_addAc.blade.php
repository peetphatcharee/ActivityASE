@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('เพิ่มกิจกรรม') }}</div>

                <div class="card-body">
                    <form method="POST" action="add" >
                    @csrf
                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">โครงการ/กิจกรรม</label>

                            <div class="col-md-6">
                                <input id="product_name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_Name"  value="" required autofocus>
                            </div>
                    </div>

                    <div class="form-group row">
                        <label for="price_id" class="col-md-4 col-form-label text-md-right">กิจกรรมด้าน</label>
                            <div class="col-md-6">
                                <!-- <input id="price_id" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="price_id" required> -->
                                <select class="form-control" name="Ac_Type">
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
                                <input id="product_name" type="date" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_DateStart"  value="" required autofocus>
                            </div>
                                  ถึง
                                  <div class="col-md-3">
                                <input id="product_name" type="date" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_DateFinish"  value="" required autofocus>
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">เวลาจัดกิจกรรม</label>

                            <div class="col-md-3">
                                <input id="product_name" type="time" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_TimeStart"  value="" required autofocus>
                            </div>
                                  ถึง
                                  <div class="col-md-3">
                                <input id="product_name" type="time" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_TimeFinish"  value="" required autofocus>
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">จำนวนที่รับ</label>

                            <div class="col-md-6">
                                <input id="product_name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_member"  value="" required autofocus>
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">สถานที่จัดกิจกรรม</label>

                            <div class="col-md-6">
                                <input id="product_name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_location"  value="" required autofocus>
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">ผู้รับผิดชอบกิจกรรม</label>

                            <div class="col-md-6">
                                <input id="product_name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_Organizer"  value="" required autofocus>
                            </div>
                    </div>
                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">เบอร์โทร</label>

                            <div class="col-md-6">
                                <input id="product_name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_Tel"  value="" required autofocus>
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">E-mail</label>

                            <div class="col-md-6">
                                <input id="product_name" type="Email" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_Email"  value="" required autofocus>
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Facebook</label>

                            <div class="col-md-6">
                                <input id="product_name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Ac_Facbook"  value="" required autofocus>
                            </div>
                    </div>

                    <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    บันทึก
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
