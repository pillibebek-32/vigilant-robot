@extends('frontend.layouts.master')

@section('title','AmbalajINGO')

@section('main-content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">Anasayfa<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0);">Kargo Takibi</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
<section class="tracking_box_area section_gap py-5">
    <div class="container">
        <div class="tracking_box_inner">
            <p>Siparişinizi takip etmek için lütfen aşağıdaki kutuya Sipariş Numaranızı girin ve "Sorgula" düğmesine basın. Bu, makbuzunuzda ve almış olmanız gereken onay e-postasında size verilmiştir.</p>
            <form class="row tracking_form my-4" action="{{route('product.track.order')}}" method="post" novalidate="novalidate">
              @csrf
                <div class="col-md-8 form-group">
                    <input type="text" class="form-control p-2"  name="order_number" placeholder="Sipariş numaranızı giriniz">
                </div>
                <div class="col-md-8 form-group">
                    <button type="submit" value="submit" class="btn submit_btn">Sorgula</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
