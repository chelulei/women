<table id="Data_Table" class="table table-bordered">
    <thead>
    <tr>
        <th>Action</th>
        <th>Date</th>
        <th>Name</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($categories as $key => $category)
        <tr>
            <td>

                <a data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route('backend.categories.edit',$category->id)}}" class="btn btn-sm  btn-outline-success">
                   Edit
                </a>

                <!-- /.btn  btn-default -->

                    <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$category->id}})"
              data-target="#DeleteModal" class="btn   btn-sm  btn-outline-danger">
             Delete
                </a>

            </td>
             <td>{{$category->created_at->toFormattedDateString() }}</td>
            <td>{{$category->name}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@include('categories.script')
<!-- Modal -->
