<!-- resources/views/showusers.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>All Users</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        thead th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>All Users</h1>
    <table>
        <thead>
            <tr>
                <th>Institute ID</th>
                <th>Institute Name</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($institute as $field)
                <tr>
                    <td>{{ $field->institute_id }}</td>
                    <td>{{ $field->institute_name }}</td>
                    <td>{{ $field->address }}</td>
                    <td>{{ $field->contact }}</td>
                    <td>{{ $field->email }}</td>
                    <td>
<!--                         <a href="{{URL::to('delete_institute/'.$field->institute_id)}}" >Delete</a>
                        <a href="{{URL::to('edit_institute/'.$field->institute_id)}}" >Edit</a>   -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
</body>
</html>
