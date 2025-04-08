@extends("layouts.default")
@section("title","Login")
@section("content")
<main class="mt-5">
    <div class="container">
        <div class="row justify-content-center">
         <div class="col-md-4">
            <div class="card">
                <h3 class="card-header text-center">PHP DEMO APPLICATION</h3>
                <div class="card-body">
                        <div class="d-grid mx-auto">
                        <li><a href="{{url('register')}}" class="btn btn-primary">
                         New User Registration </a> </li> <br/>
                         <li><a href="{{url('login')}}" class="btn btn-primary">
                         Login </a> </li> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
</main>     
@endsection