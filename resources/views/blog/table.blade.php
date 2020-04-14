<table id="Data_Table" class="table table-bordered">
    <thead>
    <tr>
        <th>Action</th>
        <th>Date</th>
        <th>Title</th>
        <th>Body</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($blogs as $key => $blog)
        <tr>
            <td>
    <a data-toggle="tooltip" data-placement="top" title="Edit"
    href="{{ route('backend.blogs.edit',$blog->slug)}}" class="btn btn-sm  btn-outline-success">
                   Edit
                </a>
            </td>
             <td>{{$blog->created_at->toFormattedDateString() }}</td>
            <td>{{$blog->title}}</td>
            <td>{{$blog->body}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

<!-- Modal -->
