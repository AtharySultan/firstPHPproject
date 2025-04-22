@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header" style="background-color: rgb(25, 25, 104);">
                    <h3>add </h3>
                </div>
                <div class="card-body">
                    <form action="{{route('categories.create')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label class=''>name of..</label>
                                <input type="text" name="categ_name"  class="form-control" placeholder="أدخل الاسم">

                                <label class=''>الوصف</label>
                                <input type="text" name="categ_description" class="form-control" placeholder="أدخل الاسم">


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
        </div>
    </div>

</div>
@endsection

