@extends ('layout/layout')

@section ('content')
<h2>Please leave your review here : </h2>

<form action="/action_page.php">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" value=""><br>
    <label for="comment">Comment:</label><br>
    <textarea name="comment" rows="10" cols="30"></textarea><br>
    <input type="submit" value="Submit">
</form>

@endsection