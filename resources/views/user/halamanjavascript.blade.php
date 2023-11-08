<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="style.css">
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- navbar start -->
    @include('components.navigation')
    <!-- end navbar -->

    <!-- recent laravel start  -->
    <div class="container">
        <div class="row ">
            <div class="col-md-12 mt-5">
                <h5>Recent JavaScript</h5>
                <hr />
            </div>
            @foreach ($javascripts as $data)
                <div class="col-md-4 mt-5">
                    <div class="card">
                        <a href="{{ route('user.detailjavascript', $data->id) }}"><img
                                src="{{ asset('/storage/javascript/' . $data->image) }}" alt=""
                                class="d-block w-100 image-cover-post"></a>
                        <div class="card-body">
                            <a href="{{ route('user.detailjavascript', $data->id) }}"
                                class="card-title link-underline link-underline-opacity-0 fs-5 fw-semibold">{{ $data->title }}</a>
                            <p class="card-title">{{ $data->deskripsi }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex">
            <div class="mx-auto mt-5">
                {{ $javascripts->links() }}
            </div>
        </div>
    </div>
    @include('components.footer')
    <!-- end recent post -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
