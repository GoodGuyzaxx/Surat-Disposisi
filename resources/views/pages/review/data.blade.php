<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Vertical 1 Column - Mazer</title>
    @include('include.admin.style')
</head>

<body>
<nav class="navbar navbar-light">
    <div class="container d-block">
        <a href="{{url('dashboard/disposisi')}}"><i class="bi bi-chevron-left"></i></a>
        <a class="navbar-brand ms-4" href="{{url('dashboard/disposisi')}}">
            Preview
        </a>
    </div>
</nav>

<div class="container">
    <div class="card mt-2">
        <div class="card-header">
{{--            <h4 class="card-title">Single Layout</h4>--}}
        </div>
        <div class="card-body">
            <div>
                <iframe src="{{ asset($fileUrlPDF) }}" width="100%" height="600px"></iframe>

                <!-- Tombol Download -->
                <a href="{{ asset($fileUrlPDF) }}" class="btn btn-primary" download>
                    Download PDF
                </a>
                <a href="{{ asset($fileUrlWord) }}" class="btn btn-primary" download>
                    Download Word
                </a>
            </div>
        </div>
    </div>
</div>

@include('include.admin.script')

</body>

</html>
