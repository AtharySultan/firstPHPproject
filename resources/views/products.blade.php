@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">منتجاتنا</h2>
    <div class="row">

        <!-- المنتج الأول -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://m.media-amazon.com/images/I/81y6VsM5upL.jpg" class="card-img-top" alt="منتج 1">
                <div class="card-body">
                    <h5 class="card-title">منتج 1</h5>
                    <p class="card-text">هذا وصف مختصر للمنتج الأول يوضح المميزات بشكل بسيط.</p>
                    <a href="#" class="btn btn-primary">شراء</a>
                </div>
            </div>
        </div>

        <!-- المنتج الثاني -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://cdn.salla.sa/KAdxD/QKmYUdpZ7bHES1TsMdSyfBbLcRESS35NJgkcUjxr.jpg" class="card-img-top" alt="منتج 2">
                <div class="card-body">
                    <h5 class="card-title">منتج 2</h5>
                    <p class="card-text">وصف بسيط للمنتج الثاني مع تسليط الضوء على جودته.</p>
                    <a href="#" class="btn btn-primary">شراء</a>
                </div>
            </div>
        </div>

        <!-- المنتج الثالث -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTsyIjqDJaGtzE3SGXHUOZ6JK6ZrVzq41I_4xbcQUU5VxiQvAdg" class="card-img-top" alt="منتج 3">
                <div class="card-body">
                    <h5 class="card-title">منتج 3</h5>
                    <p class="card-text">تعرف على مزايا المنتج الثالث الرائعة والخلابه في لمحة سريعة.</p>
                    <a href="#" class="btn btn-primary">شراء</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
