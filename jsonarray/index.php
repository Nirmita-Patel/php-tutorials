<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <button onclick="getJson()">Get</button>
    <div id='demo'>

    </div>
</body>
<script src="../jquery-3.2.1.min.js"></script>
<script>
    const getJson = function() {
        $.ajax({
                //url: 'https://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&key=AIzaSyB4JizYu52_4feQZfvuBvZGGqQC8hqf_oA',
                url: 'http://localhost/php-tutorials/jsonarray/paytmsuccess.php',
                method: 'get'
            })
            .done(function(result) {
                result = JSON.parse(result);
                console.log(result);
                let temp = '<p><b>' + result.status + '</b></p>';
                temp += '<p><b>' + result.message + '</b></p>'
                $('#demo').html(temp);
            })
            .fail();
    };
</script>

</html>