<div id="breadcrumbs-wrapper">
    <div class="container">
        <div class="row">
            <div class="col s10 m6 l6">
                <ol class="breadcrumbs">
                    <li><a href="{{ url('home') }}">Home</a></li>
                    @if(isset($breadcrumbs))
                        @foreach ($breadcrumbs as $item)
                            @if (!$loop->last)
                                <li>
                                    <a href="{{ $item['url'] }}">{{ $item['title'] }}</a>
                                </li>
                            @else
                                <li class="active">{{ $item['title'] }}</li>
                            @endif
                        @endforeach
                    @endif
                </ol>
            </div>
        </div>
    </div>
</div>
