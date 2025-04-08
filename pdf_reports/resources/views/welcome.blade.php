<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
        <div class="row justify-content-center">
         <div class="col-md-4">
            <div class="card">
                <h3 class="card-header text-center">Home Page</h3>
                <div class="card-body">
                    <form>
                        <div class="form-group mb-3">
                        <a href="{{url('pdf_generator')}}" class="btn btn-primary">
                        <b>Download PDF</b></a> 
                        </div>
                        <div class="form-group mb-3">
                        <a href="{{url('generateemail')}}" class="btn btn-primary">
                        <b>Generate Email</b></a>
                        </div>
                        <div class="form-group mb-3">
                        <a href="{{url('JobQueue')}}" class="btn btn-primary">
                        <b>Laravel Queues</b></a>      
                        </div>
                        <div class="form-group mb-3">
                        <a href="{{url('log')}}" class="btn btn-primary">
                        <b>Custom Logging</b></a>      
                        </div>
                        <div class="d-grid mx-auto">
                            <a class="btn btn-dark btn-block" href="{{url('logout')}}"> Log Out </a>   
                            </form>  
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 

  </body>
</html>