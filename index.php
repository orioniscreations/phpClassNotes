<?php
    // set default value of variables on page load
    // isset — Determine if a variable is declared and is different than NULL
    if (!isset($investment)) {$investment = '';}
    if (!isset($interest_rate)) {$interest_rate = '';}
    if (!isset($years)) {$years = '';}
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Value Calculator</title>
</head>
<body>
    <h1>Future Value Calculator</h1>

    <?php
        // empty — Determine whether a variable is empty
        if (!empty($error_message)){ ?>
            <p class="error">
            <!-- htmlspecialchars — Convert special characters to HTML entities -->
            <?php echo htmlspecialchars($error_message); ?>
            </p>

        <?php } ?>

    <form action="display_results.php" method="post">
            <div id="data">
                <label for="investment">Investment Amount:</label>
                <input type="text" name="investment" value="<?php echo htmlspecialchars($investment); ?>">
                <br>
                <label for="interest_rate">Interest Rate</label>
                <input type="text" name="interest_rate" value="<?php echo htmlspecialchars($interest_rate); ?>">
                <br>
                <label for="years">Number of Years:</label>
                <input type="text" name="years" value="<?php echo htmlspecialchars($years); ?>">
                <br>
            </div>
            <div id="buttons">
                <label for="submit">&nbsp;</label>
                <input type="submit" value="Calculate">
                <br>
            </div>
    </form>
</body>
</html>