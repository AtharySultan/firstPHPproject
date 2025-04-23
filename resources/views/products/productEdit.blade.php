@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header" style="background-color: rgb(25, 25, 104);">
                    <h3 style="color: aliceblue;"> تعديل المنتج </h3>
                </div>
                <div class="card-body">
                <form action="{{route('ProductUpdate.index', ['id' => $products->id])}}" method="POST">
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
                                <input type="text" name="categ_name"  class="form-control"  value="{{$products->name }}"  placeholder="أدخل الاسم" >
                                <!-- اذا ابغى رسالة الخطأ تظهر لازم اشيل الريكوايرد لأنها حقت البوتستراب-->

                            </div>

                                <div class="col">
                                <label class=''>وصف المنتج</label>
                                <input type="text" name="categ_description" class="form-control" value="{{$products->Description }}" placeholder="أدخل الوصف" >
                                </div>

                                <div class="col">
                                <label class=''>الكمية</label>
                                <input type="text" name="stock" class="form-control" value="{{$products->stock }}" placeholder="أدخل الكمية" >
                                </div>

                                <div class="col">
                                    <label class=''>السعر</label>
                                    <input type="text" name="price" class="form-control" value="{{$products->price }}" placeholder="أدخل السعر" >
    
                                </div>


                        </div>

                        <div class="row mt-3">

                            <input type="file" name="image" value="{{$products->image }}" class="form-control"  >

                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <button type="تحديث" class='btn btn-primary'>save</button>
                            </div>
                        </div>


                    </form>
                </div>

             </div>   
            
        </div>
    </div>


</div>
@endsection

