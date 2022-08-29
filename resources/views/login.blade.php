
<!DOCTYPE html>
<html>
    <head>
        <title>Test Riza</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    </head>
    <body >
        <br><br><br>
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 50rem;">
            <div class="card-header" style="background-color: white;">
                <div class="row">
                    <div class="col-2">
                        <img src="https://www.smkn11bdg.sch.id/src/images/11.png" alt="" style="width:100px; height:130px">
                    </div>
                    <div class="col-8 text-center"><br><br>
                        <h3>APLIKASI KIM<br>KARTU INDONESIA MAJU</h3>
                    </div>
                    <div class="col-2">
                        <img src="https://www.smkn11bdg.sch.id/src/images/11.png"  alt="" style="width:100px; height:130px;">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('actionlogin')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">USERNAME</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="">PASSWORD</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <label for="">STATUS</label>
                        <select class="form-control">
                            <option selected>Administrator</option>
                            <option value="">User</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>     
</body>
</html>




    
