<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Mail</title>
</head>
<body>
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible">
            {{ $message }}
        </div>
    @endif

    <div class="card col-6 m-auto mt-5">
        <div class="card-body">
            <div class="card-title text-center h4">Sent Email</div>


            <form action="{{ route('sentMail') }}" method="POST">

                @csrf

                <div class="form-group">
                    <label for="">To</label>
                    <input type="text" placeholder="To:" name="to" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Subject</label>
                    <input type="text" name="subject" placeholder="Subject:" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Message</label>
                    <textarea name="body" class="form-control" placeholder="Message" required></textarea>
                </div>

                <button class="btn btn-success my-2" type="submit">Sent</button>

            </form>

            <a href="/check-mail">Sent Mail</a>
            
        </div>
    </div>
    
</body>
</html>