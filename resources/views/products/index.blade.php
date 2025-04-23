@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header" style="background-color: rgb(25, 25, 104);">
                    <h3 style="color: aliceblue;">إضافة منتج </h3>
                </div>
                <div class="card-body">
                    <form action="{{route('CreateProuduct.index')}}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col">
                                <select name="categorises_id" class="form-select">
                                    @foreach($categorise as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach

                                </select>

                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label class=''>اسم المنتج</label>
                                <input type="text" name="categ_name"  class="form-control" placeholder="أدخل الاسم" >
                                <!-- اذا ابغى رسالة الخطأ تظهر لازم اشيل الريكوايرد لأنها حقت البوتستراب-->

                                @error('categ_name')
                                <small class="text-danger">({ $message })</small>
                                @enderror
                            </div>

                                <div class="col">
                                <label class=''>وصف المنتج</label>
                                <input type="text" name="categ_description" class="form-control" placeholder="أدخل الوصف" required>
                                </div>

                                <div class="col">
                                <label class=''>الكمية</label>
                                <input type="text" name="stock" class="form-control" placeholder="أدخل الكمية" required>
                                </div>

                                <div class="col">
                                    <label class=''>السعر</label>
                                    <input type="text" name="price" class="form-control" placeholder="أدخل السعر" required>
    
                                </div>


                        </div>

                        <div class="row mt-3">

                            <input type="file" name="image" class="form-control"  required>

                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <button type="submit" class='btn btn-primary'>save</button>
                            </div>
                        </div>


                    </form>
                </div>

             </div>   
            
        </div>
    </div>

                             <!-- كارد يحتوي على جدول الفئات -->
                             <div class="card mt-5">
                                <div class="card-header" style="background-color: rgb(25, 25, 104);">
                                    <h3 style="color: aliceblue;">جدول المنتجات</h3>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered text-center">
                                        <thead class="table-dark">
                                            <tr>
                                                <th style="background-color: rgb(68, 68, 80);">رقم الفئة</th>
                                                <th style="background-color: rgb(68, 68, 80);">رقم المنتج</th>
                                                <th style="background-color: rgb(68, 68, 80);">اسم المنتج</th>
                                                <th style="background-color: rgb(68, 68, 80);">وصف المنتج</th>
                                                <th style="background-color: rgb(68, 68, 80);"> الكمية</th>
                                                <th style="background-color: rgb(68, 68, 80);"> السعر</th>
                                                <th style="background-color: rgb(68, 68, 80);"> صورة المنتج</th>
                                                <th colspan="2" style="background-color: rgb(68, 68, 80);">إجراء</th>
                
                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($products as $item)
                                            <tr>
                                                <td class="text-center">{{$item->categorises_id}}</td>
                                                <td class="text-center">{{$item->id}}</td>
                                                <td class="text-center">{{$item->name}}</td>
                                                <td class="text-center">{{$item->Description}}</td>
                                                <td class="text-center">{{$item->stock}}</td>
                                                <td class="text-center">{{$item->price}}</td>
                                                <td class="text-center">{{$item->image}}</td>
                                                <td class="text-center"> <a href="{{route('ProductEdit.index',['id' => $item->id])}}"><i class="bi bi-pencil-fill text-success"></i></a></th>
                                                <td class="text-center"> <a href="{{route('ProductDelete.index',['id' => $item->id])}}"><i class="bi bi-trash-fill text-danger"></i></a></th>
                
                
                
                                            </tr>
                                            @endforeach
                
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- نهاية كارد الجدول -->

</div>
@endsection

