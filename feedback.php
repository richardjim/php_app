<?php include 'inc/header.php'; ?>
<?php
// $feedback = [
//   [
//     'id' => '1',
//     'name' => 'Beth Williams',
//     'email' => 'alex@email.com',
//     'body' => 'focus on your focus'
//   ],
//   [
//     'id' => '2',
//     'name' => 'Richie Williams',
//     'email' => 'richie@email.com',
//     'body' => 'true intentionality'
//   ],
//   [
//     'id' => '3',
//     'name' => 'Beth Grace',
//     'email' => 'ford@email.com',
//     'body' => 'focus on God'
//   ],
// ]
$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC)

?>
<h2>Feedback</h2>

<?php if (empty($feedback)) : ?>

  <p class="lead mt-3">There is not feedback</p>

<?php endif; ?>

<?php foreach ($feedback as $item) : ?>
  <div class="card my-3 w-75">
    <div class="card-body text-center">
      <?php echo $item['body']; ?>
      <div class="text-secondary-mt-3">
        By <?php echo $item['name']; ?>
      </div>
    </div>
  </div>
<?php endforeach; ?>




<?php include 'inc/footer.php'; ?>