<!doctype html>
<html lang="en">
    <head>
        <title>Age is not just a number</title>
    <meta charset="utf-8">
    </head>
    <body>
        <?php echo "<h1>Did you know?</h1>" ?>
        <?php echo "<p>Your age is not just a number</p>" ?>
            <?php
// for($i=0; $i<50; $i++){
// echo "<p>Your age is not just a number</p>";
// }
?>
            <form method="post">
                <label for='age'>Enter your age to find it's meaning...</label>
                <br>
                <input type='text' id='age' name='age'>
                <br>
                <input type="submit" name="submit" value="Find out">
            </form>

            <?php
if (isset($_POST['submit'])) {
    $age = $_POST['age'];

    if ($age == '') {
        echo "<script>alert('Please enter your age')</script>";
        exit();
    }
    if ($age < 10) {
        echo "<script>alert('You're a true gift to the people in your life.')</script>";
        exit();
    }
    if ($age < 20) {
        echo "<script>alert('You have a remarkable sense of humor.')</script>";
        exit();
    }
    if ($age < 30) {
        echo "<script>alert('Tarki B is the bestest!')</script>";
        exit();
    }
    if ($age < 40) {
        echo "<script>alert('You set a great example for everyone around you.')</script>";
        exit();
    }
    if ($age < 50) {
        echo "<script>alert('You have such a great heart.')</script>";
        exit();
    }
    if ($age < 60) {
        echo "<script>alert('The world would be a better place if more people were like you!')</script>";
        exit();
    }
    if ($age < 70) {
        echo "<script>alert('You’ve accomplished so many incredible things')</script>";
        exit();
    }
    if ($age < 80) {
        echo "<script>alert('You deserve everything you’ve achieved.')</script>";
        exit();
    }
    if ($age < 90) {
        echo "<script>alert('You’re worthy of all the good things that come to you.')</script>";
        exit();
    }
    if ($age < 100) {
        echo "<script>alert('You’re the person that everyone wants on their team.')</script>";
        exit();
    }
    if ($age < 110) {
        echo "<script>alert('Wow, the Queen sends congratulatory messages to those celebrating these years!')</script>";
        exit();
    }
}
?>
    </body>
</html>