<!DOCTYPE html>
  <html>
    <div class = "comment">
      <p>Leave your comment and rating below!</p>

      <?php
        function valid_input($data) {
          $data = trim($data);
          $data = trim(preg_replace('/\s\s+/', ' ', $data));
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          $data = substr($data, 0, 150);
          return $data;
        }

        $rateErr = $commentErr= "";
        $rate = $comment = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

          if (empty(trim($_POST["comment"]))) {
            $commentErr = "Commet is required";
          } else {
            $comment = valid_input($_POST["comment"]);
          }

          if (empty($_POST["rate"])) {
            $rateErr = "Rate is required";
          } else {
            $rate = valid_input($_POST["rate"]);
          }

          if(!empty($_POST["rate"]) && !empty(trim($_POST["comment"]))){
            echo $comment . " and " . $rate;
            header("Location: ../../rate.php?name=" . $include_name. "&rating=" . $rate. "&comment=" . $comment);
          }
        }
      ?>

      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <center>
          <textarea name="comment" rows="4" cols="80"><?php echo $comment;?></textarea>
          <span class="error"><?php echo $commentErr;?></span>
        </center>
        <br>
        Rate:
        <input type="radio" name="rate" <?php if (isset($rate) && $rate=="1") $rating = 1;?> value="1">1
        <input type="radio" name="rate" <?php if (isset($rate) && $rate=="2") $rating = 2;?> value="2">2
        <input type="radio" name="rate" <?php if (isset($rate) && $rate=="3") $rating = 3;?> value="3">3
        <input type="radio" name="rate" <?php if (isset($rate) && $rate=="4") $rating = 4;?> value="4">4
        <input type="radio" name="rate" <?php if (isset($rate) && $rate=="5") $rating = 5;?> value="5">5

        <span class="error"><?php echo $rateErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
      </form>

      <br>
        <center>
          <?php include "$path/displayRatingReviews.php";
          ?>
        </center>
    </div>
    </html>
