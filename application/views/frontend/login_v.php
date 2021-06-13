<section class="pt-5 pb-5">
  <div class="container">
    <div class="row">
      <form action="<?= site_url('login') ?>" method="POST">
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" required="required">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
        <button type="submit" class="btn btn-outline-danger">Login</button>
      </form>
    </div>
  </div>
</section>

