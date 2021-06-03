let btn = document.getElementById('crearPost')
let div =document.getElementById('formPost')

btn.addEventListener("click", function(){
    div.innerHTML = `
    <form action='./controller/post.php' method='post'>
    <textarea name="post" id="post" cols="30" rows="5" class="form-control" maxlength="254" required placeholder="Escriba aquí su post..."></textarea>
    <button class='btn btn-outline-success mt-3' name='crearPost' type='submit'>Crear</button>
    </form>
    `
});