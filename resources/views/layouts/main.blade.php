<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/myStyle.css') }}" rel="stylesheet" >
</head>
<body>
    @include('layouts.partials.popup')

    <div class="container mt-3">
        @if ( Auth::user() -> is_admin == 1)
            {{-- btn tambah --}}
            <a href="{{ url('admin/add') }}" class="btn btn-primary pe-5 ps-5 pt-1 pb-1">Upload</a>
        @endif

        <h6>Selamat Datang: {{ Auth::user() -> name }}</h6>
        <table>
            {{-- Menampilkan musik --}}
            @foreach ($posts as $item)
                <tr>
                    <td>
                        <strong>{{ $item -> music_name }}</strong>
                        <p>Name: {{ $item -> music_author }} - {{ $item -> music_album }} | <a href="/">lyrics</a> @if (Auth::user() -> is_admin == 1)
                            - <a href="{{ url('admin/update', $item -> id) }}">Update</a>
                        @endif</p>
                        <audio controls id="music" class="mb-3">
                            <source src="{{ asset('/storage/audio/'.$item -> filename) }}" type="audio/ogg">
                            <source src="{{ asset('/storage/audio/'.$item -> filename) }}" type="audio/mpeg">
                            Your browser does not support the audio tag.
                        </audio>
                    </td>
                </tr>
            @endforeach
        </table>
        </div>
</body>
</html>
