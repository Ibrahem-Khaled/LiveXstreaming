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
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="selectAll">
                                    <label for="selectAll"></label>
                                </span>
                            </th>
                            <th>Name</th>
                            <th>image</th>
                            <th>link</th>
                            <th>Edit delete</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($channels as $item)
                            <tr>
                                <td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                        <label for="checkbox1"></label>
                                    </span>
                                </td>
                                <td>{{ $item->name }}</td>
                                <td><img src="{{ $item->image }}" width="50px" height="50px"></td>
                                <td>{{ $item->link }}</td>
                                <td>
                                    <a href="{{ route('channel', $item->id) }}" class="edit">
                                        <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>

                                    <form action="{{ route('deleteChannels', $item->id) }}" method="POST">
                                        @csrf
                                        <input type="submit" class="btn btn-success" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
