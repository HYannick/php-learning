<?php require 'partials/head.php' ?>
  <header>
    <h1>All users</h1>
      <?php foreach ($users as $user) :?>
        <p><?= $user->username ?></p>
      <?php endforeach ?>
    <p>Submit your name :3</p>
    <form method="POST" action="/users">
      <input name="username" placeholder="username"/>
      <button type="submit">Submit</button>
    </form>
  </header>
<?php require 'partials/footer.php' ?>