<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Betsawerlive</title>
    <link rel="icon" type="image/x-icon" href="/icons/icon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link href="{{ URL::asset('Crudstyles/styles.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ URL::asset('Crudstyles/javascript.js') }}"></script>

</head>

<body>
    <div id="editEmployeeModal">
        <div>
            <div>
                <form action="{{ route('updateCategories', $cate->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" value="{{ $cate->name }}" name="name"
                                required>
                        </div>
                        <div class="form-group">
                            <label>image</label>
                            <input type="url" name="image" value="{{ $cate->image }}" class="form-control" placeholder="image url">
                            <img src="{{ $cate->image }}" width="50px" height="50px">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" value="edit">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
