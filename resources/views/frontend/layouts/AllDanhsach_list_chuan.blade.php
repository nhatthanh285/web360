@foreach($posts as $post)
    @if( is_object($post) && isset($post->id))
        <?php
        $image = DB::table('images')->where('post_id', $post->id)->first();
        if (isset($post->district))
            $address = DB::table('districts')->where('id', $post->district)->first();
        else
            $address = DB::table('cities')->where('id', $post->city)->first();

        ?>
        <div class="row  item-list">
            <div class="col-md-3 item-img">
                <a href="{!! route('onepost.show', $post->id) !!}"><img class="item_litt" src="{!! $image->path !!}"></a>
            </div>
            <div class="col-md-8 ">
                <a><p class="title"><b>{!! $post->title !!}</b></p></a>
                <p class="giatien">{!! number_format($post->price) !!} VNĐ</p>
                <p class="thoigian">{!! $post->updated_at->format('d-M-Y - H:i:s')!!} | {!! $address->name !!}</p>

            </div>
        </div>
    @endif
@endforeach

{{--<div class="row item-list">--}}
{{--<div class="col-md-3 item-img ">--}}
{{--<a href=""><img class="item_litt" src="public/images/android.png"></a>--}}
{{--</div>--}}
{{--<div class="col-md-8 hhh">--}}
{{--<a><p class="title"><b>Lorem adipisicing elit, sed do eiusmod</b></p></a>--}}
{{--<p class="giatien">17.000.000</p>--}}
{{--<p class="thoigian">Hôm nay 17:05 | Huyện Củ CHi</p>--}}

{{--</div>--}}
{{--</div>--}}

{{--<div class="row item-list">--}}
{{--<div class="col-md-3 item-img ">--}}
{{--<a href=""><img class="item_litt" src="public/images/android.png"></a>--}}
{{--</div>--}}
{{--<div class="col-md-8">--}}
{{--<a><p class="title"><b>Lorem adipisicing elit, sed do eiusmod</b></p></a>--}}
{{--<p class="giatien">17.000.000</p>--}}
{{--<p class="thoigian">Hôm nay 17:05 | Huyện Củ CHi</p>--}}

{{--</div>--}}
{{--</div>--}}
{{--<div class="row  item-list">--}}
{{--<div class="col-md-3 item-img">--}}
{{--<a href=""><img class="item_litt" src="public/images/android.png"></a>--}}
{{--</div>--}}
{{--<div class="col-md-8 ">--}}
{{--<a><p class="title"><b>Lorem adipisicing elit, sed do eiusmod</b></p></a>--}}
{{--<p class="giatien">17.000.000</p>--}}
{{--<p class="thoigian">Hôm nay 17:05 | Huyện Củ CHi</p>--}}

{{--</div>--}}
{{--</div>  --}}

{{--<div class="row item-list">--}}
{{--<div class="col-md-3 item-img ">--}}
{{--<a href=""><img class="item_litt" src="public/images/android.png"></a>--}}
{{--</div>--}}
{{--<div class="col-md-8 hhh">--}}
{{--<a><p class="title"><b>Lorem adipisicing elit, sed do eiusmod</b></p></a>--}}
{{--<p class="giatien">17.000.000</p>--}}
{{--<p class="thoigian">Hôm nay 17:05 | Huyện Củ CHi</p>--}}

{{--</div>--}}
{{--</div>--}}

{{--<div class="row item-list" style="margin-bottom: 150px ">--}}
{{--<div class="col-md-3 item-img ">--}}
{{--<a href=""><img alt="" class="item_litt" src="{!! asset("public/images/android.png") !!}"></a>--}}
{{--</div>--}}
{{--<div class="col-md-8">--}}
{{--<a><p class="title"><b>Trần Nhật Thành</b></p></a>--}}
{{--<p class="giatien">17.000.000</p>--}}
{{--<p class="thoigian">Hôm nay 17:05 | Huyện Củ CHi</p>--}}

{{--</div>--}}
{{--</div>--}}