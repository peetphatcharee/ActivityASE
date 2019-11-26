@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">ลงชื่อนักศึกษา : {{$name->Ac_Name}}</div>

                <div class="card-body">
                    <form method="POST" action="add_st" >
                    @csrf
                    <input type="hidden" value={{$id}} name="Ac_ID">
                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">ชื่อนักศึกษา</label>

                            <div class="col-md-6">
                                <input id="St_ID" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="St_ID"  value="" required autofocus>
                            </div>
                    </div>

                    

                    
                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">รหัสนักศึกษา</label>

                            <div class="col-md-6">
                                <input id="St_Name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="St_Name"  value="" required autofocus>
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
