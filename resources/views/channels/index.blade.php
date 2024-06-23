<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TimeTV</title>
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
                            <th>Image</th>
                            <th>Link</th>
                            <th>actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($channels as $item)
                            <tr>
                                <td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="checkbox{{ $loop->index + 1 }}" name="options[]"
                                            value="{{ $loop->index + 1 }}">
                                        <label for="checkbox{{ $loop->index + 1 }}"></label>
                                    </span>
                                </td>
                                <td>{{ $item->name }}</td>
                                <td><img src="{{ $item->image }}" width="50px" height="50px"
                                        alt="{{ $item->name }}"></td>
                                <td><a href="{{ $item->link }}" target="_blank">{{ $item->link }}</a></td>
                                <td>
                                    <a href="{{ route('channel', $item->id) }}" class="edit" data-toggle="tooltip"
                                        title="Edit"><i class="material-icons">&#xE254;</i></a>
                                    <form action="{{ route('deleteChannels', $item->id) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this channel?')"><i
                                                class="material-icons">&#xE872;</i></button>
                                    </form>
                                    <form action="{{ route('changeStatus', $item->id) }}" method="POST">
                                        @csrf
                                        <button type="submit"
                                            class="btn btn-{{ $item->is_active == 1 ? 'success' : 'danger' }}"
                                            onclick="return confirm('Are you sure you want to disable this channel?')">
                                            {{ $item->is_active !== 1 ? 'غير فعال' : 'فعال' }}
                                        </button>
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
