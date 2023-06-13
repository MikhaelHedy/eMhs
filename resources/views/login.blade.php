<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <link href="app.css" rel="stylesheet">
    <link rel="stylesheet" href="boxicons/css/boxicons.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    {{-- <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUTExMWFRUXGBgVGRgXGBcYGhgcHRoXHx4aHx0aHSggHy
                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" alt="" width="200" height="80"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body background="https://images.unsplash.com/photo-1541753236788-b0ac1fc5009d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MjV8fHxlbnwwfHx8fHw%3D&auto=format&fit=crop&w=1900&q=1630" >
    <style>
        /* body {
	        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
	        font-size: 16px;
	        color: #090905;
            } */
    </style>
    <div class="container-fluid d-flex justify-content-center align-items-center border vh-100">
        <div class="card w-42">
            <div class="card-header d-flex bg-info justify-content-center">
                <label >FORM LOGIN
                    {{-- <span class="text-light">LOGIN</span>  --}}
                </label>
                
            </div>
            <div class="card-body">
                <form action="/cekLogin" method="POST">
                    {{-- <style>
                         .form-box {
	                                background-color: rgba(0, 0, 0, 0.5);
                                    margin: auto auto;
                                    padding: 40px;
                                    border-radius: 5px;
                                    box-shadow: 0 0 10px #000;
                                    position: absolute;
                                    top: 0;
                                    bottom: 0;
                                    left: 0;
                                    right: 0;
                                    width: 500px;
                                    height: 430px;
                                }
                    </style> --}}
                    @csrf
                    <div class="class form-group">
                        <label>E-Mail</label>
                        <input type="email" name='email' class="form-control" placeholder="Masukkan Email" required>
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="class form-group">
                        <label>Password</label>
                        <input type="password" name='password' class="form-control" placeholder="Masukkan Password" required>
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="text-center">
                        <button type="submit" Text-align: center class="btn btn-outline-info mt-4">Login</button>
                        {{-- <style>
                                    button {
                                                background-color: deepskyblue;
                                                color: #fff;
                                                border: none;
                                                border-radius: 5px;
                                                cursor: pointer;
                                                width: 100%;
                                                font-size: 18px;
                                                padding: 10px;
                                                margin: 20px 0px;
                                            }
                        </style> --}}
                        <hr>
                     <span class="d-flex contenct-justify-center pb-4" style="color:black">
                    </span>
                        <a href="/register" style="color:darkgreen">Belum ada akun??? </a>
                    </div>
                </form>

                
            </div>
        </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>