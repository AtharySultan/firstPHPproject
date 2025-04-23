@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header" style="background-color: rgb(25, 25, 104);">
                    <h3 style="color: aliceblue;">تحرير الفئة </h3>
                </div>
                <div class="card-body">
                <form action="{{ route('categories.update', $category->id) }}" method="POST">
                @csrf                        
                        <div class="row">
                            <div class="col">
                                <label class=''>اسم الفئة</label>
                                <input type="text" name="categ_name"  value="{{ $category->name }}"  class="form-control" placeholder="أدخل الاسم" >
                                <!-- اذا ابغى رسالة الخطأ تظهر لازم اشيل الريكوايرد لأنها حقت البوتستراب-->

                                @error('categ_name')
                                <small class="text-danger">({ $message })</small>
                                @enderror


                                <label class=''>وصف الفئة</label>
                                <input type="text" name="categ_description" value="{{ $category->Description }}" class="form-control" placeholder="أدخل الوصف" required>


                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <button type="submit" class='btn btn-primary'>تحديث</button>
                            </div>
                        </div>


                    </form>
                </div>

             </div>  
             @endsection
            