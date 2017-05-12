<div class="row">
    @foreach($posts as $post)
        @if( is_object($post) && isset($post->id))
            <?php
            $image = DB::table('images')->where('post_id', $post->id)->first();
            if (isset($post->district))
                $address = DB::table('districts')->where('id', $post->district)->first();
            else
                $address = DB::table('cities')->where('id', $post->city)->first();

            ?>
            <div class="col-md-3 item">
                <img src="{!! $image->path !!}" alt="">
                <p class="descripton"><b><a href="{!! route('onepost.show', $post->id) !!}" target="_blank">{!! $post->title !!}</a></b></p>
                <p class="giatien">{!! number_format($post->price) !!}</p>
                <p class="thoigian">{!! $post->updated_at->format('d-M-Y - H:i:s')!!} | {!! $address->name !!}</p>
            </div>
        @endif
    @endforeach
    {{--<div class="col-md-3 item">--}}
    {{--<img src="public/images/anh.jpg" alt="">--}}
    {{--<p class="descripton"><b><a href="index.jsp" target="_blank">Lorem ipsum dolor sit amet asaddad, consectetur--}}
    {{--adipisicing elit, sed do eiusmod</a></b></p>--}}
    {{--<p class="giatien">17.000.000</p>--}}
    {{--<p class="thoigian">Hôm nay 17:05</p>--}}
    {{--</div>--}}
    {{--<div class="col-md-3 item">--}}
    {{--<img src="public/images/android.png" alt="">--}}
    {{--<p class="descripton"><b><a href="index.jsp" target="_blank">Lorem ipsum dolor sit amet asaddad, consectetur--}}
    {{--adipisicing elit, sed do eiusmod</a></b></p>--}}
    {{--<p class="giatien">17.000.000</p>--}}
    {{--<p class="thoigian">Hôm nay 17:05</p>--}}
    {{--</div>--}}
    {{--<div class="col-md-3 item">--}}
    {{--<img src="public/images/android.png" alt="">--}}
    {{--<p class="descripton"><b><a href="index.jsp" target="_blank">Lorem ipsum dolor sit amet asaddad, consectetur--}}
    {{--adipisicing elit, sed do eiusmod</a></b></p>--}}
    {{--<p class="giatien">17.000.000</p>--}}
    {{--<p class="thoigian">Hôm nay 17:05</p>--}}
    {{--</div>--}}
</div>
