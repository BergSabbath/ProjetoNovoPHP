<h2>Formulario de Contato</h2>

<?=get('message') ?>


    <form action="/pages/forms/contato.php" method="POST" role="form">

        
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control" name="name" placeholder="Write your name">
        </div>
        
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Write your E-mail">
        </div>
        
        <div class="form-group">
            <label for="">Assunto</label>
            <input type="text" class="form-control" name="subject" placeholder="Subject">
        </div>
        
        <div class="form-group">
            <label for="">Mensagem</label> <br>
            <textarea name="message" cols="30" rows="10" class="form-control" placeholder="Write your message"></textarea> 
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    