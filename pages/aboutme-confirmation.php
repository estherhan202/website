<?php $confirm = 'active_page';

$form_name = $_POST['name']; // untrusted
$form_company = $_POST['company']; // untrusted
$form_email = $_POST['email']; // untrusted
$form_number = $_POST['number']; // untrusted
$form_message = $_POST['message']; // untrusted
?>
<!DOCTYPE html>
<html lang="en">

<?php include('includes/font.php'); ?>

<body>
<?php include('includes/heading.php'); ?>

<?php include('includes/topic.php'); ?>

    <h3 id="request-title">Course Request Details</h3>
  <div class="confirm-body">
  <div class = "confirm-top">
    <dl>
      <dt id="request-label">Name:</dt>
      <dd id="request"><?php echo htmlspecialchars($form_name); ?></dd>

      <dt id="request-label">Company:</dt>
      <dd id="request"><?php echo htmlspecialchars($form_company); ?></dd>

      <dt id="request-label">Email:</dt>
      <dd id="request"><?php echo htmlspecialchars($form_email); ?></dd>

      <dt id="request-label">Number:</dt>
      <dd id="request"><?php echo htmlspecialchars($form_number); ?></dd>
  </div>

  <div class="confirm-bottom">
      <dt id="request-label">Message:</dt>
      <dd id="request"><?php echo htmlspecialchars($form_message); ?></dd>
    </dl>
  </div>
</div>


</body>

</html>
