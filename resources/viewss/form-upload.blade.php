<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <title>Upload Your Video</title>
    <style>
        .container {
            max-width: 500px;
        }

        dl,
        ol,
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

    </style>
</head>

<body>


    <div class="container mt-5">


        <form action="{{ route('uploadform') }}" method="post" enctype="multipart/form-data">

            <h3 class="text-center mb-5">Upload Your Video</h3>
            @csrf
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group mb-2">
                <label>Video</label>
                <input type="file" name="video" id="file">

                @error('file')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label>Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label>Title</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="title" id="title">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label>Choose a Category</label>
                <select class="form-control @error('name') is-invalid @enderror" name="category" id="category"
                    required="">

                    @foreach ($categories as $category)
                        <option value='{{ $category->id }}'>{{ $category->name }}</option>
                    @endforeach

                </select>
            </div>


            <div class="form-group mb-2">
                <label>Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                    id="description" rows="4"></textarea>

                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                Upload
            </button>
        </form>
    </div>

</body>

</html>
