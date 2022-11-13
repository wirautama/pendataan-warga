<?php
$url = request()->getPathInfo();
$items = explode('/', $url);
unset($items[0]);
?>

<ol class="breadcrumb">
    <li class="breadcumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    @foreach($items as $key => $item)
        @if($key == count($items))
            <li class="breadcumb-item active" aria-current="page">{{ Str::ucfirst($item) }}</li>
        @else
            <li class="breadcumb-item"><a href="/{{ $item }}">{{ Str::ucfirst($item) }}</a></li>
        @endif
    @endforeach
  </ol>