<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/myStyle.css') }}" rel="stylesheet" >

    <!-- Scripts -->
    <script src="{{ asset('js/myScript.js') }}" defer></script>
</head>
<body>


    <form action="{{ @$post ? url('admin/update', @$post -> id) : url('admin/home') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="container m-5">
            <table>
                <tr>
                    <td>Upload Audio</td><td>:</td><td><input type="file" id="upload" name="filename"></td>
                </tr>
                <tr>
                    <td>Music Name</td><td>:</td><td><input type="text" name="music_name" value="{{ old('music_name', @$post -> music_name) }}"></td>
                </tr>
                <tr>
                    <td>Music Album</td><td>:</td><td><input type="text" name="music_album" value="{{ old('music_album', @$post -> music_album) }}"></td>
                </tr>
                <tr>
                    <td>Author</td><td>:</td><td><input type="text" name="music_author" value="{{ old('music_author', @$post -> music_author) }}"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Upload"></td>
                </form>
                </tr>
                <tr>
                    <form action="{{ url('admin/delete', @$post -> id) }}" method="post">
                        @csrf
                        <td><input type="submit" value=" Delete "></td>
                    </form>
                </tr>
            </table>
        </div>

    {{-- js --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</body>
</html>
