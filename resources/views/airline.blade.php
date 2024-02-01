<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Airlines- Laravel 9 CRUD</title>

</head>

<body>
    <div>

    
        <form action="/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div style="padding: 10px">
                    <div class="form-group">
                        <label>Flight Number:</strong>
                        <input type="text" name="flight_no" class="form-control" placeholder="Flight Number">
                    
                    </div>
                </div>
                <div style="padding:10px">
                    <div class="form-group">
                        <label>Airline</strong>
                        <input type="text" name="airline" class="form-control" placeholder="Airline">
                    
                    </div>
                </div>

                <input type="submit">
            </div>
        </form>
    </div>
</body>
</html>
