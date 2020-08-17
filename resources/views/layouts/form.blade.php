<div class="container">
  <div class="text-left">
    <form method="POST" action="/send-mail" accept-charset="UTF-8">
      @csrf
      <div class="form-group">
        <label for="email1">Email address</label>
          <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emai" class="text-muted">We'll never share your email with anyone else.
            </small>
    </div>
  
      <div class="form-group">
        <label for="msg">Message</label>
        <textarea type="text" rows="4" class="form-control" name="msg" placeholder="Enter your message"></textarea>
      </div>
  
      <button type="submit" value="send" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>