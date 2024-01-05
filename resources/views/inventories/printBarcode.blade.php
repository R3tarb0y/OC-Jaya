<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Barcode</title>
</head>
<body>
    @foreach($inventories as $inventory)
        <img src="{{ route('inventory.printBarcode', ['id' => $inventory->id]) }}" alt="{{ $inventory->nama }}" style="max-width: 200px; margin-bottom: 20px;">
    @endforeach
    <script>
        // Trigger print when the page loads
        window.onload = function() {
            window.print();
        }
    </script>
</body>
</html>
