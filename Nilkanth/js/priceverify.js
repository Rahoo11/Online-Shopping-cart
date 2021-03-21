< script >
    function priceverify() {
        var x = document.getElementById("price");
        var msg = document.getElementById("msg");
        var value = x.value; /*x.value.toUpperCase(); */
        /*var decimal= /^[-+][0-9]+\.[0-9]+[eE][-+]?[0-9]+$/; */
        var decimal = /^[0-9]+\.[0-9]+$/;
        if (value.match(decimal)) {
            document.getElementById("msg").innerHTML = " ";
            return true;
        } else {
            document.getElementById("msg").innerHTML = "*";
            return false;
        }
    } <
    /script>