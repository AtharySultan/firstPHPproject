@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header" style="background-color: rgb(25, 25, 104);">
                    <h3 style="color: aliceblue;">إضافة فئة </h3>
                </div>
                <div class="card-body">
                    <form action="{{route('categories.create')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label class=''>اسم الفئة</label>
                                <input type="text" name="categ_name"  class="form-control" placeholder="أدخل الاسم" >
                                <!-- اذا ابغى رسالة الخطأ تظهر لازم اشيل الريكوايرد لأنها حقت البوتستراب-->

                                @error('categ_name')
                                <small class="text-danger">({ $message })</small>
                                @enderror


                                <label class=''>وصف الفئة</label>
                                <input type="text" name="categ_description" class="form-control" placeholder="أدخل الوصف" required>


                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <button type="submit" class='btn btn-primary'>save</button>
                            </div>
                        </div>


                    </form>
                </div>

             </div>   
                         <!-- كارد يحتوي على جدول الفئات -->
            <div class="card mt-5">
                <div class="card-header" style="background-color: rgb(25, 25, 104);">
                    <h3 style="color: aliceblue;">جدول الفئات</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead class="table-dark">
                            <tr>
                                <th style="background-color: rgb(68, 68, 80);">رقم الفئة</th>
                                <th style="background-color: rgb(68, 68, 80);">اسم الفئة</th>
                                <th style="background-color: rgb(68, 68, 80);">وصف الفئة</th>
                                <th colspan="2" style="background-color: rgb(68, 68, 80);">إجراء</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach($catitems as $item)
                            <tr>
                                <td class="text-center">{{$item->id}}</td>
                                <td class="text-center">{{$item->name}}</td>
                                <td class="text-center">{{$item->Description}}</td>
                                <td class="text-center"> <a href="{{route('categories.Edit',['id' => $item->id])}}"><i class="bi bi-pencil-fill text-success"></i></a></td>
<!-- حذف تصنيف (Category) -->
                                <td class="text-center">
                                    <a href="{{ route('categories.delet', ['id' => $item->id]) }}" class="delete-button" style="background: none; border: none; cursor: pointer;">
                                        <i class="bi bi-trash-fill text-danger"></i>
                                    </a>
                                </td>


                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- نهاية كارد الجدول -->
            
        </div>
    </div>

</div>
@endsection

