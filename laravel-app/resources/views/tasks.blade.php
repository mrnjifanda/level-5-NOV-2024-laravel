<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks</title>
</head>
<body>
    <div class="form">

        <form action="/tasks/create" method="post">
            @csrf
            <input type="text" name="name" placeholder="Enter task name">
            <input type="text" name="author" placeholder="Enter task author">
            <textarea name="description" placeholder="Enter task description"></textarea>
            <input type="submit" value="Add">
        </form>
        <br><br><br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Author</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->name }}</td>
                        <td>{{ $task->author }}</td>
                        <td>{{ $task->description }}</td>
                        <td><a href="/tasks/edit/{{ $task->id }}">Edit</a> | <a href="#">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>
</html>