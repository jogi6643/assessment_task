<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>create Task!</title>
</head>

<body>
    <h1 class="m-auto">create Task!</h1>
    <div class="container">
        <form method="post" action="{{ route('store') }}">
        @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Add Task</label>
                <input type="text" class="form-control" name="task">
            </div>
            <div class="mb-3">
                <select class="form-select" name="users[]" multiple aria-label="multiple select example">
                  @foreach($users as $key => $value)
                    <option value="{{ $value->id }}">{{ $value->email }}</option>
                  @endforeach
                  
                </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Time and Schedule </label>
                <input type="datetime-local" class="form-control" name="date">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
