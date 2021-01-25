<html>
<head>
<script>
    var x = 5;// Global Variable

    function getData() {
       // var x = 0; // Local variable
        //alert("Value of x in method: "+x); // Output 0
        console.log("Value of x in method: "+x);
        //document.write("Value of x in method: "+x);
    }

    getData();

    alert("Value of x in method: "+x); // Output 5
</script>
</head>
<body>

</body>
</html>