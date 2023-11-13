<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
    <form id ="inputForm">
        {{ csrf_field()}}
        Input Angka : </br/>
        <input type="number" id="inputNumber" name="inputNumber" placeholder= "masukkan angka"><br/>

        <br/>
        <br/>
        <button type="button" onclick="generateSegitiga();"> generateSegitiga </button>
        <button type="button" onclick="generateGanjil();"> generateGanjil </button>
        <button type="button" onclick="generatePrima();"> generatePrima </button>
    </form>
    <div id = "result"></div>
</body>
</html>

<script>
    function generateSegitiga() {
        var inputNumber = document.getElemenById('inputNumber').value();
        console.log(inputNumber)
    }
</script>
