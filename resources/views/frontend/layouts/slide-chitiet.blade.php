<div class="carousel-inner">

    @if( is_object($post) && isset($post->id))
        <?php
        $i = 0;
        ?>

        @foreach($images as $image)
            @if ($i == 0)
                <div class="item active">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="top col-md-12 col-xs-12"><img
                                        src="{!! asset($image->path) !!}"
                                        class="img-responsive"></div>
                        </div>
                    </div>
                </div>
                <?php
                $i = 1;
                ?>
            @else
                <div class="item ">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="top col-md-12 col-xs-12"><img src="{!! asset($image->path) !!}"
                                                                      class="img-responsive"></div>
                        </div>
                    </div>
                </div>
        @endif
    @endforeach
@endif

<!-- End Item -->
</div>
<a data-slide="prev" href="#custom_carousel" class="izq carousel-control">‹</a>
<a data-slide="next" href="#custom_carousel" class="der carousel-control">›</a>
<!-- End Carousel Inner -->
<div class="controls draggable ui-widget-content col-md-12 col-xs-12">
    <ul class="nav ui-widget-header">
        <?php $j = 1; ?>
        @foreach($images as $image)
            <li data-target="#custom_carousel" data-slide-to="0" class="active"><a href="#"><img
                            src="{!! asset($image->path) !!}">
                    <small>Ảnh {!! $j !!}</small>
                    <?php $j++; ?>
                </a></li>
        @endforeach

    </ul>
</div>