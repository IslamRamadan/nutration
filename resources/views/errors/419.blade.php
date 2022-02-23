<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
   <style>
       @import url("https://fonts.googleapis.com/css?family=Bevan");

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
    background: rgb(40,40,40);
    overflow: hidden;
}

p {
    font-family: "Bevan", cursive;
    font-size: 130px;
    margin: 10vh 0 0;
    text-align: center;
    letter-spacing: 5px;
    background-color: black;
    color: transparent;
    text-shadow: 2px 2px 3px rgba(255, 255, 255, 0.1);
    -webkit-background-clip: text;
    -moz-background-clip: text;
    background-clip: text;

    span {
        font-size: 1.2em;
    }
}

code {
    color: #bdbdbd;
    text-align: center;
    display: block;
    font-size: 16px;
    margin: 0 30px 25px;

    span {
        color: #f0c674;
    }

    i {
        color: #b5bd68;
    }

    em {
        color: #b294bb;
        font-style: unset;
    }

    b {
        color: #81a2be;
        font-weight: 500;
    }
}


a {
    color: #8abeb7;
    font-family: monospace;
    font-size: 20px;
    text-decoration: underline;
    margin-top:10px;
    display:inline-block
}

@media screen and (max-width: 880px) {
    p {
        font-size: 14vw;
    }
}

   </style>
</head>

<body>

    <p><span>welcome to BlueZone</span></p>
    <code><em> server error</code>
    <code><span>soory server error please back and  try again reload page</span> </code>
<script>
    function type(n, t) {
    var str = document.getElementsByTagName("code")[n].innerHTML.toString();
    var i = 0;
    document.getElementsByTagName("code")[n].innerHTML = "";

    setTimeout(function() {
        var se = setInterval(function() {
            i++;
            document.getElementsByTagName("code")[n].innerHTML =
                str.slice(0, i) + "|";
            if (i == str.length) {
                clearInterval(se);
                document.getElementsByTagName("code")[n].innerHTML = str;
            }
        }, 10);
    }, t);
}

type(0, 0);
type(1, 600);
type(2, 1300);

</script>

</body>

</html>