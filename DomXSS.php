<!DOCTYPE html>
<html>
    <body>
        <form id="dom">
            Enter Your Name :
            <input type="text"id="name"><br>
            <button type="submit">submit</button>
</form>
<p id="out"></p>
<script>
    //addEventListener
       document.getElementById('dom').addEventListener('submit', function(e) {
            e.preventDefault();
            var name = document.getElementById('name').value;
            document.getElementById('out').innerText = 'Hello, ' + name + '!';
        });
    </script>
</body>
</html>