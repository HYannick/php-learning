<?php require 'partials/head.php' ?>
  <header>
    <?php foreach ($users as $user) :?>
      <p><?= $user->username ?></p>
    <?php endforeach ?>
    <h1>Task for the day</h1>
    <!--    <ul>-->
    <!--        --><?php //foreach ($tasks as $task) : ?>
    <!--          <li>-->
    <!--              --><?php //if ($task->completed) : ?>
    <!--                <del>--><? //= $task->description; ?><!--</del>-->
    <!--              --><?php //else: ?>
    <!--                  --><? //= $task->description; ?>
    <!--              --><?php //endif ?>
    <!--          </li>-->
    <!--        --><?php //endforeach; ?>
    <!--    </ul>-->

    <p>Submit your name :3</p>
    <form method="POST" action="/add-name">
      <input name="username" placeholder="username"/>
      <button type="submit">Submit</button>
    </form>
  </header>
<?php require 'partials/footer.php' ?>