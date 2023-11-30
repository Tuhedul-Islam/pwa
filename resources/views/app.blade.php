<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
{{--    <link rel="manifest" href="{{ asset('/manifest.json') }}">--}}
    <link rel="manifest" href="{{ url('manifest.json') }}">
</head>
<body>

    <h2>User Info</h2>
    <div id="users">
        {{-- @foreach($users as $val)
            <p>{{ $val->name }}</p>
        @endforeach--}}
    </div>


    ==================================<br>
    <a href="{{ url('/1') }}">1</a> <br>
    <a href="{{ url('/2') }}">2</a> <br>
    <a href="{{ url('/3') }}">3</a> <br>
    <a href="{{ url('/4') }}">4</a> <br>
    <a href="{{ url('/5') }}">5</a> <br>
    <a href="{{ url('/6') }}">6</a> <br>
    <a href="{{ url('/7') }}">7</a> <br>
    <a href="{{ url('/8') }}">8</a> <br>
    <a href="{{ url('/9') }}">9</a> <br>

    <p style="" id="user_data">{{ $users_data }}</p>

    <script>
        /*let user_data = document.getElementById('user_data').innerText;
        localStorage.setItem("users",JSON.stringify(JSON.parse(user_data)))*/
        /*console.log(JSON.parse(user_data));*/
        // console.log( JSON.parse(user_data));
        //const users = JSON.parse(user_data);

        /*var users = '';
        if (JSON.parse(user_data)){
            alert('adas')
            users = localStorage.setItem("users",JSON.stringify(JSON.parse(user_data)))
        }else {
            alert('adassssss')
            users = JSON.parse(localStorage.getItem("users"))
        }*/

        //alert(users);
        /*if (users.length === 0){

            console.log(JSON.parse(user_data));

            const usersDiv = document.getElementById("users");
            const ele = document.createElement("p")
            users.forEach((item)=>{
                const textnode = document.createTextNode(item.name);
                ele.appendChild(textnode)
                usersDiv.appendChild(ele)
            })
        }else {
            const usersDiv = document.getElementById("users");
            const ele = document.createElement("p")
            users.forEach((item)=>{
                const textnode = document.createTextNode(item.name);
                ele.appendChild(textnode)
                usersDiv.appendChild(ele)
            })
        }*/
    </script>

    <script>
        console.log('testss');
        const users = JSON.parse(localStorage.getItem("users"))

        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('/serviceworker.js', {
                scope: '.'
            }).then(function(registration) {

                // Registration was successful
                console.log('ServiceWorker registration successful with scope11: ', registration.scope);
                const usersDiv = document.getElementById("users");
                users.forEach((item)=>{
                    const ele = document.createElement("p")
                    const textnode = document.createTextNode(item.name);
                    ele.appendChild(textnode)
                    usersDiv.appendChild(ele)
                })

            }, function(err) {
                // registration failed :(
                console.log('ServiceWorker registration failed: 222', err);
            });
        }
    </script>


</body>
</html>
