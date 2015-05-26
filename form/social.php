<form action="form/email.php" method="post" class="email-form">
    <div>
        <label for="name">Your Name: </label>
        <input type="text" name="name"/>
    </div>
    <br>
    <div>
        <label for="email">Email: </label>
        <input type="text" name="email"/>
    </div>
    <br>
    <div>
        <label for="message">Comment: </label>
        <input type="text" name="message"/>
    </div>
    <br>
    <div class="submitbutton">
        <input type="hidden" name="login" value="login" />
        <button type="submit">Submit</button>
    </div>
</form>

