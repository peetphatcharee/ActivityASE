@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">แก้ไขชื่อนักศึกษา </div>

                <div class="card-body">
                    <form method="POST" action="update_st" >
                    @csrf
                    <input type="hidden" value="{{$student->id}}" name="id">
                    <input type="hidden" value="{{$act_id}}" name="act_id">
                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">ชื่อนักศึกษา</label>

                            <div class="col-md-6">
                                <input id="St_ID" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="St_Name"  value="{{$student->St_Name}}"  required autofocus>
                            </div>
                    </div>

                    

                    
                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">รหัสนักศึกษา</label>

                            <div class="col-md-6">
                                <input id="St_Name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="St_ID"  value="{{$student->St_ID}}"   required autofocus>
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
