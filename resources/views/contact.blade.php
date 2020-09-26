@extends("layouts.app")
@section("title","contact")
@section("content")
<h1>Contact</h1>
<form action="/contact" method="post">
    <div class="form-group">
        @csrf
      <label>Name</label>
      <input type="text" name="name"class="form-control" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" name=email class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea class="form-control" name="message"id="exampleFormControlTextarea1"  placeholder="Enter message" rows="3"></textarea>
      </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
