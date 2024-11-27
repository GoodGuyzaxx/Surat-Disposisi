<h1>
Word
</h1>
<form method="post" action="{{route("get.word")}}">
    @csrf
    @method("post")
    <input type="text" name="nama" id="nama">

    <input type="submit" name="submit">
</form>

