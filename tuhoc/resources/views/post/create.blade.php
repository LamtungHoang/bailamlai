<form action="{{route('post.store')}}" method="POST">
       @csrf
       <input type="text" name="title">
       <textarea name="content" id="" cols="30" rows="10"></textarea>
       <input type="text" name="user_id" value="{{Auth::user()->id}}" hidden>
       <button>create</button>
</form>