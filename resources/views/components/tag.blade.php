@props(['tag', 'size' => 'base'])


@php
  $classes = "bg-white/10 hover:bg-white/25 rounded-xl font-bold";
  if ($size === 'base'){
    $classes .= " px-5 py-2 text-md";
  }
  if ($size === 'small'){
    $classes .= " px-3 py-1 text-xs";
  }
@endphp


<a href="/tags{{strtolower($tag->name)}}" class="{{$classes}}">{{$tag->name}}</a>
