```php
function processData(array $data): array {
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            $data[$key] = processData($value); // Recursive call
        } else {
            // Process individual data points here
            if (is_numeric($value)) {
                $data[$key] = $value * 2; // Example processing
            } elseif (is_string($value)) {
                $data[$key] = strtoupper($value); // Example processing
            }
        }
    }
    return $data;
}

$data = [
    'a' => 1,
    'b' => ['c' => 2, 'd' => 3],
    'e' => 'hello',
    'f' => ['g' => ['h' => 4, 'i' => 'world']],
];

$processedData = processData($data);
print_r($processedData);
```