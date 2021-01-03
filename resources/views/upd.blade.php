@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2 m-auto">
        <div class="contact-form">
            <h1>Contact Us</h1>
            <p class="hint-text">We'd love to hear from you, please drop us a line if you've any query.</p>
            <form action="{{url('update')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$data['id']}}" >
               
                <div class="row">

                    
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputFirstName">First Name</label>
                            <input type="text" class="form-control"  value="{{$data['fName']}}" name="firstNameUpd" required>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputLastName">Last Name</label>
                            <input type="text" class="form-control" value="{{$data['lName']}}"  name="lastNameUpd" required>
                        </div>
                    </div>

                    <div class="col-sm-12">
                    <div class="form-group">
                        <label for="inputEmail">Email Address</label>
                        <input type="email" class="form-control"  value="{{$data['email']}}" name="emailUpd" required>
                    </div>
                     </div>
                </div>
                
                <input type="submit" class="btn btn-primary" value="update">
            </form>
        </div>
    </div>
</div>
@endsection