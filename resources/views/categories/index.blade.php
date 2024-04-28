<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>heroTV</title>
    <link rel="icon" type="image/x-icon" href="/icons/icon.png">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ URL::asset('Crudstyles/styles.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Categories <a href="#addChannel" class="btn btn-success" data-toggle="modal"><i
                                        class="material-icons">&#xE147;</i> <span>Add Channel</span></a></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i
                                    class="material-icons">&#xE147;</i> <span>Add Category</span></a>
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
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $item)
                            <tr>
                                <td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="checkbox{{ $loop->index + 1 }}" name="options[]"
                                            value="{{ $loop->index + 1 }}">
                                        <label for="checkbox{{ $loop->index + 1 }}"></label>
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route('addchannels', $item->id) }}"
                                        class="edit">{{ $item->name }}</a>
                                </td>
                                <td>
                                    <img src="{{ $item->image }}" width="50" height="50"
                                        alt="{{ $item->name }}">
                                </td>
                                <td>
                                    <a href="{{ route('showCategories', $item->id) }}" class="edit"
                                        data-toggle="tooltip" title="Edit"><i class="material-icons">&#xE254;</i></a>
                                    <form action="{{ route('destroyCategories', $item->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this category?')"><i
                                                class="material-icons">&#xE872;</i></button>
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

    <!-- Add Category Modal -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('createCategories') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Add Category</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="categoryName">Name</label>
                            <input type="text" class="form-control" id="categoryName" name="name"
                                placeholder="Enter category name" required>
                        </div>
                        <div class="form-group">
                            <label for="categoryImage">Image URL</label>
                            <input type="url" class="form-control" id="categoryImage" name="image"
                                placeholder="Enter image URL" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Channel Modal -->
    <div id="addChannel" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('createChannels') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Add Channel</h4>
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="channelName">Name</label>
                            <input type="text" class="form-control" id="channelName" name="name"
                                placeholder="Enter channel name" required>
                        </div>
                        <div class="form-group">
                            <label for="channelLink">Link IPTV</label>
                            <input type="text" class="form-control" id="channelLink" name="link"
                                placeholder="Enter IPTV link" required>
                        </div>
                        <div class="form-group">
                            <label for="channelImage">Image URL</label>
                            <input type="url" class="form-control" id="channelImage" name="image"
                                placeholder="Enter image URL">
                        </div>
                        <div class="form-group">
                            <label for="categorySelect">Category</label>
                            <select id="categorySelect" name="categorie_id" class="form-control" required>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('Crudstyles/javascript.js') }}"></script>
</body>

</html>
