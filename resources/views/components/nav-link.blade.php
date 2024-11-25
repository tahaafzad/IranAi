@props(['active' => false])
<a {{$attributes}} style="color: {{$active ? 'red' : 'green'}} ;">{{$slot}}</a>
