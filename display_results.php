<?php
// get the data from the form

// filter_input — Gets a specific external variable by name and optionally filters it


$investment =  filter_input(INPUT_POST, 'investment', FILTER_VALIDATE_FLOAT);
$interest_rate =  filter_input(INPUT_POST, 'interest_rate', FILTER_VALIDATE_FLOAT);
$years =  filter_input(INPUT_POST, 'years', FILTER_VALIDATE_INT);

// validate
if ($investment === FALSE){
    $error_message = 'Investment must be a valid number.';
} else if ($investment <= 0){
    $error_message = 'Investment must be greater than zero.';
} else if ($interest_rate === FALSE){
    $error_message = 'Interest Rate must be a valid number.';
} else if ($interest_rate <= 0){
    $error_message = 'Interest Rate must be greater than zero.';
} else if ($years === FALSE){
    $error_message = 'Years must be a valid, whole number.';
} else if ($years <= 0){
    $error_message = 'Years must be greater than zero.';
} else if ($years >= 30){
    $error_message = 'Years must be less than 31.';
} else {
    $error_message = '';
}


// if error message exists, go to the index page

if ($error_message != ''){
    include('index.php');
    exit();
}

// calculate the future value 

$future_value = $investment;

for ($i = 1; $i <= $years; $i++){
    $future_value += $future_value * $interest_rate * .01;
}

// apply currency and percent formatting
// number_format — Format a number with grouped thousands
$investment_f = '$'.number_format($investment, 2);
$yearly_rate_f = $interest_rate.'%';
$future_value_f = '$'.number_format($future_value, 2);

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

    <label for="investment">Investment Amount:</label>
    <span><?php echo $investment_f; ?></span>
    <br>
    <label for="interest_rate">Yearly Interest Rate:</label>
    <span><?php echo $yearly_rate_f; ?></span>
    <br>
    <label for="years">Number of Years:</label>
    <span><?php echo $years; ?></span>
    <br>
    <label for="future_value">Future Value:</label>
    <span><?php echo $future_value_f; ?></span>
</body>
</html>