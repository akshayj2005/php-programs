<?php
$inputIncome = "12lakh"; // user input (string or number)

/* Step 1: Validate input */
if (!is_numeric($inputIncome)) {
    echo "❌ Error: Invalid income. Please enter a numeric value.";
    exit;
}

/* Step 2: Convert safely */
$grossIncome = (float) $inputIncome;
$tax = 0;

/* Step 3: Switch-based tax calculation */
switch (true) {
    case ($grossIncome <= 500000):
        $tax = 0;
        break;

    case ($grossIncome > 500000 && $grossIncome < 1000000):
        $tax = $grossIncome * 0.10;
        break;

    case ($grossIncome >= 1000000 && $grossIncome < 1500000):
        $tax = $grossIncome * 0.15;
        break;

    case ($grossIncome >= 1500000 && $grossIncome < 2000000):
        $tax = $grossIncome * 0.20;
        break;

    default:
        $tax = $grossIncome * 0.25;
}

/* Step 4: Output */
echo "Gross Income: ₹" . number_format($grossIncome) . "<br>";
echo "Tax Amount: ₹" . number_format($tax);
?>
