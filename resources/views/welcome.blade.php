<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo App</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div>
        <h1>Todo App</h1>

        <form class="inputForm" action="{{ route('saveItem') }}" method="post" accept-charset="UTF-8">
            {{ csrf_field() }}

            <input type="text" name="todoItem" id="todo" placeholder="Enter a new Todo Item" required>
            <button type="submit">Add</button>
        </form>

        <ul>
            @foreach ($listItems as $listItem)
                <li>
                    <p class="{{ $listItem->is_complete === 0 ? '' : 'isDone' }}">> {{ $listItem->name }}</p>

                    <div class="actionBtns">
                        <form action="{{ route('markComplete', $listItem->id) }}" method="post">
                            {{ csrf_field() }}

                            <input onchange="this.form.submit();" type="checkbox" name="done" id="done"
                                {{ $listItem->is_complete === 0 ? '' : 'checked' }}>
                        </form>

                        <a href="removeItem/{{ $listItem->id }}">
                            <i class="fa fa-trash-o removebtn"></i>
                        </a>
                    </div>

                </li>
            @endforeach
        </ul>
    </div>
</body>

</html>
