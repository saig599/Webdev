<div class="form-group">
    <label for="FormControlTextarea">Content</label>
    <form class="form" name="post_content" action="{{route('post')}}" method="POST">
        @csrf
        <textarea class="form-content" name="post_content" placeholder="Say something" required autocomplete="off" columns="25" rows="10"></textarea>
    <br>
          <button type="submit" class="btn btn-primary" />Submit</button>
    </form> 
  </div>