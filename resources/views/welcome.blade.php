<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management System</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container mx-auto mt-10">
            <task-form @taskCreated="fetchTasks" @taskUpdated="fetchTasks"></task-form>
            <task-list></task-list>
        </div>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
