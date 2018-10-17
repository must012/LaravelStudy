@extends('layouts.master')

@section('content')
    <ul>
        @forelse($items as $item)
            <li>{{ $item }}</li>
        @empty
            <li>ㅅㄱ</li>
        @endforelse
    </ul>
    @include('partials.footer')
@endsection

@section('script')
    <script>
        alert("자식 뷰의 script");
    </script>
@endsection