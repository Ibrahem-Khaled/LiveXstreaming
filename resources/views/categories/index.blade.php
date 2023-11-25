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
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Add Categories <a href="#addChannel" class="btn btn-success" data-toggle="modal"><i
                                        class="material-icons">&#xE147;</i> <span>Add New
                                        Channel</span></a></h2>
                        </div>

                        <div class="col-sm-6">
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i
                                    class="material-icons">&#xE147;</i> <span>Add New Categories</span></a>
                        </div>
                    </div>
                </div>
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
                            <th>Edit delete</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($categories as $item)
                            <tr>
                                <td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                        <label for="checkbox1"></label>
                                    </span>
                                </td>

                                <td> <a href="{{ url('channels/' . $item->id) }}" class="edit">
                                        {{ $item->name }}</a>
                                </td>
                                <td><img src="{{ $item->image }}" width="50px" height="50px" ></td>
                                <td>
                                    <a href="{{ url('edit/' . $item->id) }}" class="edit">
                                        <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>

                                    <form action="{{ route('destroyCategories', $item->id) }}" method="POST">
                                        @csrf
                                        <input type="submit" class="btn btn-success" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="clearfix">
                    <ul class="pagination">
                        {{ $categories->links() }}
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- add Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('createCategories') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Add Categories</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Categories Name" required>
                        </div>
                        <div class="form-group">
                            <label>image</label>
                            <input type="url" name="image" class="form-control" placeholder="image url" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div id="addChannel" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('createChannels') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Add Channles</h4>
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>link IPTV</label>
                            <input type="text" class="form-control" name="link" required>
                        </div>
                        <div class="form-group">
                            <label>image</label>
                            <input type="   " name="image" class="form-control" placeholder="image">
                        </div>
                        <label>Categories</label>
                        <select name="categorie_id" required class="form-select" aria-label="Default select example">
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
