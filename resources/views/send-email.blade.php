<div>
    <h1>Add Details For Send Email</h1>
    <form method="post" action="send-email">
        @csrf
        <input type="text" name="to" placeholder="Enter Email Address">
        <br/>
        <br/>
        <input type="text" name="subject" placeholder="Enter Email Subject">
        <br/>
        <br/>
        <textarea type="text" name="message" placeholder="Enter Email Message"></textarea>
        <br/>
        <br/>
        <button>Send Email</button>
    </form>

</div>
