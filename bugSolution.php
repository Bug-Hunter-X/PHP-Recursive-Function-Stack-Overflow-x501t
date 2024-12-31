```php
function processDataIterative(array $data): array {
    $stack = [$data];
    while (!empty($stack)) {
        $current = array_pop($stack);
        foreach ($current as $key => $value) {
            if (is_array($value)) {
                $stack[] = $value; // Push nested array onto stack
            } else {
                // Process individual data points here
                if (is_numeric($value)) {
                    $current[$key] = $value * 2; // Example processing
                } elseif (is_string($value)) {
                    $current[$key] = strtoupper($value); // Example processing
                }
            }
        }
    }
    return $data; // Use original array to avoid unnecessary copies
}

$data = [
    'a' => 1,
    'b' => ['c' => 2, 'd' => 3],
    'e' => 'hello',
    'f' => ['g' => ['h' => 4, 'i' => 'world']],
];

$processedData = processDataIterative($data);
print_r($processedData);
```