<?php include 'inc/header.php'; ?>

<?php
// $feedbacks = [
//   [
//     'id' => '1',
//     'name' => 'John Doe',
//     'email' => 'john@gmail.com',
//     'feedback' => 'Feedback is a good web application.'
//   ],
//   [
//     'id' => '2',
//     'name' => 'Charlie Lee',
//     'email' => 'charlie@gmail.com',
//     'feedback' => 'This is simple and awesome app.'
//   ]
// ];
$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);
$feedbacks = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<h2>Past Feedback</h2>

<?php if (empty($feedbacks)) : ?>
  <p class="lead mt-3">There is no feedback</p>
<?php endif; ?>

<div class="card my-3 w-75">
  <div class="card-body text-center">
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore impedit totam porro iure reiciendis autem possimus sapiente, optio, exercitationem ipsum assumenda mollitia, recusandae expedita culpa ratione voluptatem esse quos quam?
    <div class="text-secondary mt-2">
      By Pete Mitchell on 11:30am on Sunday 26th June 2022
    </div>
  </div>
</div>

<?php foreach ($feedbacks as $item) : ?>
  <div class="card my-3 w-75">
    <div class="card-body text-center">
      <?php echo $item['feedback']; ?>
      <div class="text-secondary mt-2">
        By <?php echo $item['name']; ?> on <?php echo date_format(date_create($item['date']), 'g:ia \o\n l jS F Y'); ?>
      </div>
    </div>
  </div>
<?php endforeach; ?>

<?php include 'inc/footer.php'; ?>