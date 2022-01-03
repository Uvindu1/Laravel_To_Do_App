<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h2>Daily Tasks<h2>
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="/tasks/saveTask">
                        @csrf    
                        <input type="text" class="form-control" name="task" placeholder="enter your task here">
                        <input type="submit" class="btn btn-primary" name="SAVE" value="SAVE">
                        <input type="button" class="btn btn-warning" value="CLEAR">
                    </form>
                    <table class="table table-dark">
                        <th>ID</th>
                        <th>Task</th>
                        <th>Completed</th>
                        <tr>
                            <td>1</td>
                            <td>I have lering larvel Today</td>
                            <td>not yet</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>    
    </div>
</body>
</html>