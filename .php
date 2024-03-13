<?php
$amount = (float) readline("Введите сумму для конвертации: ");
$currency = strtolower(readline("Выберите валюту для конвертации (доллар, евро, фунт): "));

switch ($currency) {
    case 'доллар':
        $convertedAmount = $amount * 0.013; // Курс доллара к рублю
        echo "Сумма в долларах: \$" . number_format($convertedAmount, 2) . PHP_EOL;
        break;
    case 'евро':
        $convertedAmount = $amount * 0.011; // Курс евро к рублю
        echo "Сумма в евро: €" . number_format($convertedAmount, 2) . PHP_EOL;
        break;
    case 'фунт':
        $convertedAmount = $amount * 0.009; // Курс фунта к рублю
        echo "Сумма в фунтах: £" . number_format($convertedAmount, 2) . PHP_EOL;
        break;
    default:
        echo "Выбрана неподдерживаемая валюта.\n";
}

?>